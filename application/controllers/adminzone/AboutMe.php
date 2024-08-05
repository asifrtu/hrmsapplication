<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutMe extends CI_Controller {
    
 public function index()
{		
	$this->load->view("adminzone/AboutMe", 'refresh');
}
 
 


}
