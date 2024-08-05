<?php 

if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Class : Register Page (RegisterController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : ASIF
 * @since : 3 December 2020
 */
class register extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
		
    }
	
	
	public function SignUp(){
		$this->load->library('form_validation');
		$data = array();
		if( $_SERVER['REQUEST_METHOD'] == 'POST' )
	   {
			$this->form_validation->set_rules('email', 'email', 'trim|required');
			if ($this->form_validation->run() != FALSE) {
					
					$temp_password = rand(999999999,9999999999);
					$email = $this->input->post('email');
					
					if($this->User->add_hr($temp_password, $email))
					{
						$data1['reset_link'] = base_url() . "index.php/hrzone/register/changePassword?temp_password=" . $temp_password . "&email=". $email;
						
						$data1['email'] = $email;
						$data1['temp_password'] = $temp_password;
						$data1['message'] = "Your New Password";
						
						$this->load->library('email'); 

						$this->email->to($email);
						$this->email->from(EMAIL_INFO, COMPANY_DOMAIN);
						$this->email->set_mailtype("html");
						$this->email->subject("Reset Your Password.");
						$this->email->message($this->load->view('email/resetPassword', ['data1' => $data1], TRUE));
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
		$this->load->view('hrzone/register', $data);
	}
	
	
	
	public function changePassword(){
		
			$varify_password= $this->input->get('temp_password', TRUE);
			$email = $this->input->get('email', TRUE);
			
		$this->load->library('form_validation');
        $data = array();
		if( $_SERVER['REQUEST_METHOD'] == 'POST' )
		{
			$this->form_validation->set_rules('password','password','required|max_length[20]');
			$this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
			
			if ($this->form_validation->run() != FALSE) {
				//print_r($_POST);die;
				
				$temp_password = $this->input->post('temp_password');
				$password = $this->input->post('password');
				$cpassword = $this->input->post('cpassword');
				if($varify_password== $temp_password){
					$this->User->changePassword($email, $password); 	
					$data['message']= "Your Password is changed SuccessFully!";
				}
				else
				{
					$data['message']= "Your New Password is invalid";
				}
				
			
			}
			else
			{
				$data['message']= "Your Password and Confirm password doesn't match!";
			}
			
		}
		
		$this->load->view('hrzone/changePassword', $data);
	
	}
	
	
}

?>