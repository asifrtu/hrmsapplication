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

            $result = $this->User->login();
			//print_r($result);die;
            if(!empty($result)){

               if($result->password === $this->input->post('password'))
               {
                     $session = array();
                     $session['auth'] = array(
                           'id'      => $result->id,
                           'email'   => $result->email,
                           'name'    => $result->name,
                           'employee_id'    => $result->employee_id,
                           'role'   =>  $result->type
                        );
                     $this->session->set_userdata($session);
                     
					redirect('dashboard');
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
    $this->load->view('adminzone/login', $data);
}

public function logout()
{
	$this->session->unset_userdata($session);
    
    redirect('login');
        
	}



}
