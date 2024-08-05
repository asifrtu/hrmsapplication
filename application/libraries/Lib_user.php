<?php
/*
Lib_user is library containing all the functions related to user accounts
*/
class Lib_user{
	
	private $user_id 			= 0;
	private $email				= '';
	private $name 				= '';
	private $userRole			= null;
	private $ci 				= NULL;
	private $current_path 	= '';
	private $permissions 	= array();
	public $data				= array();
	
	public function __construct()
   {
	    $this->ci =  get_instance();

	      if($this->ci->session->userdata('auth') )
	    {
				$auth = $this->ci->session->userdata('auth');

                $this->user_id 		= $auth['id'];
                $this->email 			= $auth['email'];
                $this->name 			= $auth['name'];
                $this->userRole 		= $auth['role'];
		}
		
		//getting current path
		$this->setCurrentPath();
		$this->ci->load->helper('url');
		$this->validateUserPermissions();
	}
	
	
	/*
	@checking user session
	@redirect to login page no user session found
	*/
	public function validateUserPermissions(){
		
		$routes = $this->ci->router->routes;
		$allowed_path = $routes['allowed_paths'];
	
		if(!$this->user_id && !in_array( $this->current_path , $allowed_path ) ){ 
	
		$redirect_url = current_url().'?'.http_build_query($_GET);
		$this->ci->session->set_userdata('redirect_url',$redirect_url);
		
		$this->ci->session->set_flashdata('login_msg', 'Please login First');
			
		redirect('adminzone/login');
	}
	

	}
	/**
	 Name : loadPrivileges
	 Function : Load all the section privileges for current logged in user.
	*/
	
	/*
	@clear lib_user library instances.@
	*/
	public function clear(){
		$this->user_id 	= 0;
		$this->email 	= '';
	}
	/*
	@get current path of controller.@
	*/
	public function getCurrentPath(){
		return $this->current_path;
	}
	/*
	@get current logged in user id.@
	*/
	public function isLoggedIn(){
		return $this->user_id;
	}
	
	public function getName(){
	 return $this->name;
	}

	
	private function setCurrentPath(){
		$uri_segment = $this->ci->uri->segments;
		
		if( count($uri_segment) ==1 && $uri_segment[1] == 'payments' ){
			$uri_segment[] = 'index';
		}
		
		$uri_segment = array_reverse($uri_segment);

		foreach($uri_segment as $key => $segment){
			if($segment != $this->ci->router->fetch_class() ){
				unset($uri_segment[$key]);
			}else{
				break;
			}
		}
		$uri_segment = array_reverse($uri_segment);

		$uri_segment = implode('/',$uri_segment);

		$this->current_path = $uri_segment;
		
		if($this->ci->router->fetch_method() != 'index'){
			$this->current_path .= '/'.$this->ci->router->fetch_method();
		}
		if(empty($this->current_path )){
			$this->current_path = 'main';
		}
	}
	
	
}
