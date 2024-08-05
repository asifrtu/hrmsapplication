<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DocFile extends CI_Controller {
	private $UserId;
	
	
	
	public function __construct(){
    parent::__construct();
    $this->load->model("EmployeeModel", 'EmpObj');
    $this->load->model("HrModel", "HrObj");
	$this->load->model("AttendanceModel");
	$this->load->model("CommentModel");
	$this->load->library('Lib_user');
	$data= $this->session->userdata();
	
	
	$this->UserId = $data['auth']['id'];
  } 


public function EmployeeDoc(){
		
		$data['empDoc'] = $this->EmpObj->empListRecord();
		// echo "<pre>";
		// print_r($empDoc);
		// die;
		$this->load->view('hrzone/allEmployeeDoc', $data);
	}
    public function singleEmployeeDoc(){
		
		$data['empSingleDoc'] = $this->EmpObj->empDocList($this->UserId);
		
		
		$this->load->view('adminzone/files', $data);
	}
    
	
    
	public function singleEmpDownload(){
		 // $Doctr =$this->uri->segment(4);
		// $DocName =trim($Doctr, '%20');
		// echo "<br>";
		// $U_id =$this->uri->segment(5);           
		 // echo $data;
		// echo "<pre>";
		// print_r($data); 
		//print_r($array); 
		
		
		 // die;
        $this->load->helper('download');
		//print_r($_GET);die;
		
		
        $fileinfo = $this->EmpObj->download($this->UserId);
		
		// echo "<pre>";
		// print_r($fileinfo);die;
        $file = 'upload/UserDocument/'.$fileinfo->filePath;
        force_download($file, NULL);
	}
	
	public function singleEmpDelete(){
       
         $result = $this->EmpObj->deleteDocuments($this->input->get('id'));
		if($result) {
			// print_r($result);die;
         echo json_encode(array('status'=>1, 'message'=>'The success'));
		}else{
			echo json_encode(array('status'=>0, 'message'=>'Something went wrong'));
		}
		
	}
	
	
	public function singleEmpView($id){
			
			$file = $this->EmpObj->download($id);
			// print_r($file);die;
			$filetmpPath = $file->filePath;
			$fileCheck = explode(".", $filetmpPath);
			 // echo $fileCheck[1];die;
			if($fileCheck[1] == 'jpg'){
				$tofile = 'upload/UserDocument/'.$file->filePath;
				// print_r($tofile);die;
				
				header('Content-Type: image/jpg');
				readfile($tofile);
			}else if($fileCheck[1] === 'png'){
				$tofile = site_url('upload/UserDocument/'.$file->filePath);
				header('Content-Type: image/png');
				readfile($tofile);
			}else if($fileCheck[1] === 'pdf'){
			
			$tofile = 'upload/UserDocument/'.$file->filePath;
			// print_r($tofile); die;
			header('Content-Type: application/pdf');
			readfile($tofile);
			}else{
				echo "Something Error Occur";
			}
        
	}
	
	
	public function singleFileUpload(){
		
		// print_r($_FILES);die;
		// $last_user_id = $frmUserId;
		// $U_id =$this->uri->segment(4);
		$filesCount = count($_FILES['filePath']['name']);
                for($i = 0; $i < $filesCount; $i++){
                    $_FILES['file']['name']     = $_FILES['filePath']['name'][$i];
                    $_FILES['file']['type']     = $_FILES['filePath']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['filePath']['tmp_name'][$i];
                    $_FILES['file']['error']     = $_FILES['filePath']['error'][$i];
                    $_FILES['file']['size']     = $_FILES['filePath']['size'][$i];
                    
                    // File upload configuration
                    $uploadPath = 'upload/UserDocument/';
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|txt|text|doc|docx|pdf';
                    //$config['max_size']    = '100';
                    //$config['max_width'] = '1024';
                    //$config['max_height'] = '768';
                    
                    // Load and initialize upload library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    
                    // Upload file to server
                    if($this->upload->do_upload('file')){
                        // Uploaded file data
                        $fileData = $this->upload->data();
						
                        //$uploadData[$i]['filePath'] = $fileData['file_name'];
                        $data8= array(
						
						'UserId'       => $this->UserId,	
						'fileName' => $this->input->post('fileName')[$i],
						'filePath' => $fileData['file_name']
						);
						
						
						$result= $this->EmpObj->insert_data8($this->UserId, $data8);
						if($result){
							echo json_encode(array('status'=>1, 'message'=>'The success'));
						}else{
							echo json_encode(array('status'=>0, 'message'=>'Something went wrong'));
						}
                    }
                } 
			
				
	}
	


}
