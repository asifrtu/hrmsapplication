<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ItemController extends CI_Controller {
  
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
  
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index()
    {
        $this->load->view('adminzone/teamTest');
    }
   
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function getItem()
    {
          $data = [];
          $parent_key = '0';
          $row = $this->db->query('SELECT id, name from item');
            
          if($row->num_rows() > 0)
          {
              $data = $this->membersTree($parent_key);
          }else{
              $data=["id"=>"0","name"=>"No Members presnt in list","text"=>"No Members is presnt in list","nodes"=>[]];
          }
   
          echo json_encode(array_values($data));
    }
   
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function membersTree($parent_key)
    {
        $row1 = [];
        $row = $this->db->query('SELECT id, name from item WHERE parent_id="'.$parent_key.'"')->result_array();
    
        foreach($row as $key => $value)
        {
           $id = $value['id'];
           $row1[$key]['id'] = $value['id'];
           $row1[$key]['name'] = $value['name'];
           $row1[$key]['text'] = $value['name'];
           $row1[$key]['nodes'] = array_values($this->membersTree($value['id']));
        }
  
        return $row1;
    }
      
}