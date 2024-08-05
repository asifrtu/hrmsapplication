<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {		
       parent::__construct();
       $this->load->model('User');
	   
    }
    
 public function index()
{ 
   $this->load->library('form_validation');
   $data = array();
   if( $_SERVER['REQUEST_METHOD'] == 'POST' )
   {

      $this->form_validation->set_rules('email', 'email', 'trim|required');
      $this->form_validation->set_rules('password', 'password', 'trim|required');

      if ($this->form_validation->run() != FALSE) {

            $result = $this->User->loginHr();
			//print_r($result);die;
            if(!empty($result)){

               if($result->password === $this->input->post('password'))
               {
                     $session = array();
                     $session['auth'] = array(
                           'id'      => $result->id,
                           'email'   => $result->email,
						    'name'   => $result->name,
                          
                        );
                     $this->session->set_userdata($session);
					 redirect('hrzone/dashboard/wall', 'refresh');
               }
               else {
                   $data['message'] = 'Username or Password is invalid';
               }
            }
            else {
               $data['message'] = 'Username or Password is invalid';
            }
      }
   }
    $this->load->view('hrzone/employer_login', $data);
}

public function loginapi($param1 = '',$param2 = ''){
	 //echo $param1;
	 //echo $param2;
    $email              = $this->input->post('email');
    $employee_id        = $this->input->post('employee_id');
	$password           = $this->input->post('password');
    //echo $employee_id;
    //echo $password;

//echo $query = $this->db->get_where('tbl_user', array('employee_id'=> $employee_id,'password'=> $password))->row()->name;

 $query = $this->db->get_where('tbl_user', ['email' => $email,'password' => $password])->row()->name;    
                    
	 // echo count($query);	
     // echo $query;
if(count($query) > 0){
   echo "1";
}else{
   echo "0";
}



}

	public function forgetPassword(){
		$this->load->library('form_validation');
		$data = array();
		if( $_SERVER['REQUEST_METHOD'] == 'POST' )
	   {
			$this->form_validation->set_rules('email', 'email', 'trim|required');
			if ($this->form_validation->run() != FALSE) {
					
					$temp_password = rand(999999999,9999999999);
					$email = $this->input->post('email');
					
					if($this->User->temp_passwordUpdate($temp_password, $email))
					{	
						//print_r($user);die;
						$data1['reset_link'] = base_url() . "index.php/hrzone/Login/resetPassword?temp_password=" . $temp_password . "&email=". $email;
						
						$data1['email'] = $email;
						$data1['message'] = "Reset Your Password";
						
						$this->load->library('email'); 

						$this->email->to($email);
						$this->email->from(EMAIL_INFO, COMPANY_DOMAIN);
						$this->email->set_mailtype("html");
						$this->email->subject("Reset Your Password.");
						$this->email->message($this->load->view('email/changePassword', ['data1' => $data1], TRUE));
						if($this->email->send()){
							$data['message']= "We just sent a New Password to the email you provided with a link to reset your password. \nPlease check your inbox and follow the instructions in the email.";
						}else{
							$data['message']= "Error Occur";
						}
						
					}else{
						$data['message']= "Username or Password is invalid";
					}
				
				
				
				
			}
		}
		$this->load->view('hrzone/forgetPassword', $data);
	}
	
	
	
	public function resetPassword(){
		
			$temp_password= $this->input->get('temp_password', TRUE);
			$email = $this->input->get('email', TRUE);
			
		$this->load->library('form_validation');
        $data = array();
		if( $_SERVER['REQUEST_METHOD'] == 'POST' )
		{
			$this->form_validation->set_rules('password','password','required|max_length[20]');
			$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
			
			if ($this->form_validation->run() != FALSE) {
				//print_r($_POST);die;
				
				$password = $this->input->post('password');
				$cpassword = $this->input->post('cpassword');
				if($this->User->ValidateTempPassword($email, $temp_password)){
					$this->User->resetPassword($email, $password); 	
					
					$this->session->set_flashdata('msg', 'Your Password is changed SuccessFully!');
					$this->session->set_flashdata('msg_class','alert-danger');
					
				}
				else
				{
					
					$this->session->set_flashdata('msg', 'Your New Password is invalid');
					$this->session->set_flashdata('msg_class','alert-danger');
				}
				redirect('hrzone/login', 'refresh');
			
			}
			else
			{
				$data['message']= "Your Password and Confirm password doesn't match!";
			}
			
		}
		
		$this->load->view('hrzone/hrPassword_Reset', $data);
	
	}










public function logout()
{
	$this->session->unset_userdata('auth');
    $this->session->sess_destroy();
    redirect('hrzone/login', 'refresh');
        
	}






}
