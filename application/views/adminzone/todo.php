<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?></title>
<style>
.main-box{
	border: 1px solid #ccc;
    margin: 10px 0;
    background: #fff;
    color: #333;
}
.main-box p{
	margin: 0;
}
.link-btn{
    width: 180px;
    background: #ff8a00;
    color: #fff;
    border: none;
    padding: 5px;
    border-radius: 2px;
    box-shadow: 0px 2px 2px #999;
	margin-bottom: 10px;
}
.head-div{
	background: #f7f7f7;
	padding: 10px;
	display: flex;
    justify-content: space-between;
	border-bottom: 1px solid #ccc;
}
.control{
	width: 100%;
    font-size: 15px;
    padding: 5px;
    border-radius: 3px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
}
.links{
	display: flex;
	justify-content: space-between;
	padding-left: 20px;
	padding-right: 20px;
}
.links p{
	margin: 0;
}
.links a{
	display: inline-block;
}
.hero>:nth-child(1) .link-btn {
	background: #f7941d!important;
}
.hero>:nth-child(2) .link-btn {
	background: #192490!important;
}
.hero>:nth-child(3) .link-btn {
	background: #1f4dbf!important;
}
.hero>:nth-child(4) .link-btn {
	background: #d69802!important;
}
.hero>:nth-child(5) .link-btn {
	background: #5d76c7!important;
}
.hero>:nth-child(6) .link-btn {
	background: #e74488!important;
}
.hero>:nth-child(7) .link-btn {
	background: #3f7355!important;
}
.fa-edit{
	font-size: 1rem;
	margin-left: 10px;
	color: #fff;
	cursor: pointer;
}
.d-flex{
	align-items: center;
}
.edit-btn{
    width: 70px;
    border: none;
    padding: 5px;
    font-size: 14px;
    border-radius: 2px;
    color: #000;
    font-weight: 600;
}
.del-btn{
    width: 70px;
    border: none;
    padding: 5px;
    font-size: 14px;
    border-radius: 2px;
    color: red;
    font-weight: 600;
}
.hhh{
	text-align: center;
}
.edit-div{
	display: none;
}
.fa-plus-circle{
	color: #333;
}
.plus-btn{
	padding: 0;
}
.sec-input{
	border: 1px solid #ccc;
    border-radius: 3px;
}
.addsection_btn{
	border: none;
	background: transparent;
}
.fa-close{
	color: red;
    margin-left: 10px;
    font-size: 18px;
}
.edit-div{
	margin-bottom: 20px;
}
.hhh a{
	font-size: 14px;
}
.modal-title,.col-form-label{
	color: #000;
}
.options {
    display: flex;
    float: left;
    padding: 0px!important;
    margin-top: 34px;
    margin-bottom: 20px;
    padding-top: 110px!important;
}
</style>
</head>
<body>
<div class=" container-fluid options" >
    
<div class="col-lg-2">
  <div class="main_slider">
        
    <div class="links">
        <a>All Links List</a>
    </div>

   </div>
</div>

<div class="col-lg-10 main_col">
  <div class="main_slider">      
    <div class="links">
        <p>Database List</p>
		<div>
		<button type="button" class="addsection_btn text-white" data-bs-toggle="modal" data-bs-target="#SectionModal">Add Section</button>
		<?php
	       $sect = $this->db->query("select * from linkaccess where name = '". $UserInfo->id."' ")->result_array();
		$count = count($sect);
		if($count > 0){ ?>
       
	    <i class="fa fa-edit" id="edit" onclick="myFunction();"></i>
	   
      <?php } ?>
		
		</div>
    </div>
  </div>
    <div class="hero">
    	<?php
			if($content['bool']==true){
				foreach($content['d'] as $section){
					
					?>
					<div class="main-box">
	   <div class="head-div">
	       <p style="font-weight:600;"><?php echo $section['section_name']; ?></p>
		   <div class="d-flex"> 
		      <!--<a href=<?php echo site_url('adminzone/todo/add/'.$section['id']); ?>><i class="fa fa-plus-circle" aria-hidden="true"></i></a>-->
              <button type="button" id=<?php echo $section['id']; ?> class="btn plus-btn" data-bs-toggle="modal" data-bs-target="#addNewModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></button><br/>
			  <?php
	       $sect = $this->db->query("select * from linkaccess where name = '". $UserInfo->id."' ")->result_array();
		   $count = count($sect);
		   if($count > 0){ ?>
       
	       	<i class="fa fa-close" id=<?php echo $section['id']; ?> data-bs-toggle="modal" data-bs-target="#DelSectionModal"></i>

	   
           <?php } ?>

		   </div>
	   </div>
	   <div class="row p-3 addbtn" id=<?php echo $section['id']; ?>>
	   <?php
	   $id = $section['id'];
	    $sections = $this->db->query("select * from linklist where section_id = '$id' ")->result_array();
		
				foreach($sections as $task){
					
					?>

					<div class="col-lg-3 hhh">
	                <a href=<?php echo $task['task_status']; ?> target="_blank"><button class="link-btn"><?php echo $task['task_title']; ?></button></a>
					<div class="edit-div" id="edit-div">
					    <button class="edit-btn" data-id="<?php echo $task['id'];?>" data-name="<?php echo $task['task_title'];?>" data-url="<?php echo $task['task_status'];?>" id=<?php echo $task['id']; ?>>Edit</button>
						<button class="del-btn" id=<?php echo $task['id']; ?> data-bs-toggle="modal" data-bs-target="#DeleteModal">Delete</button>
					</div>
	                </div>
			
					<?php
				     
			}
			?>
	   </div>
	</div>
			<?php
				}
			}else{
				?>

						<p class="alert alert-warning">No Data Found!</p>

				<?php
			}
			?>   
	
				
	
 </div>
</div>
</div>

<script>
 function myFunction() {
      var x = document.getElementById("edit");
	  var y = document.getElementsByClassName("edit-div");
	  for(var i=0; i<y.length; i++) { 
      if(y[i].style.display === 'block'){
		  y[i].style.display = "none";
	  }
	  else{
		  y[i].style.display = "block";
	  }
     }
      
    }
</script>

<!-- Add New Package Modal -->
	<form action="<?php echo site_url('adminzone/todo/linkadd');?>" method="post">
		<div class="modal fade" id="addNewModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add New Url</h5>
		        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

				<div class="form-group row">
				    <div class="col-sm-12">
				      <input type="text" name="task_title" class="form-control" placeholder="Link Name" required>
				    </div>
				</div>
				<div class="form-group row">
				    <div class="col-sm-12">
				      <input type="text" name="task_status" class="form-control" placeholder="Url" required>	
				    </div>
				</div>
                 <input type="hidden" class="form-control sectionid" name="section_id" value="">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-success btn-sm">Save</button>
		      </div>
		    </div>
		  </div>
		</div>
	</form>

<!-- Add New Section Modal -->
	<form action="<?php echo site_url('adminzone/todo/sectionadd');?>" method="post">
		<div class="modal fade" id="SectionModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add New Section</h5>
		        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

				<div class="form-group row">
				    <div class="col-sm-12">
					<label>Add Section Name</label>
					<input type="text" class="form-control sec-input" name="sec_name" required/>	
				    </div>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-success btn-sm">Save</button>
		      </div>
		    </div>
		  </div>
		</div>
	</form>

	 <!-- Update Package Modal-->
    <form action="<?php echo site_url('adminzone/todo/update');?>" method="post">
        <div class="modal fade" id="UpdateModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update List</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
 
                <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name_edit" class="form-control" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Url</label>
                    <div class="col-sm-12">
                       <input type="text" name="url_edit" class="form-control" placeholder="Url" required>
                    </div>
                </div>
 
              </div>
              <div class="modal-footer">
                <input type="hidden" name="edit_id" required>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-sm">Update</button>
              </div>
            </div>
          </div>
        </div>
    </form>

	<!-- Delete Package Modal -->
    <form action="<?php echo site_url('adminzone/todo/deleteid');?>" method="post">
        <div class="modal fade" id="DeleteModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Url</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
 
                <h4>Are you sure to delete this url?</h4>
                <input type="hidden" class="form-control deleteid" name="delete_id" value="">
              </div>
              <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-success btn-sm">Yes</button>
              </div>
            </div>
          </div>
        </div>
    </form>

		<!-- Delete Package Modal -->
    <form action="<?php echo site_url('adminzone/todo/deletesectionid');?>" method="post">
        <div class="modal fade" id="DelSectionModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Section</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
 
                <h4>Are you sure to delete this section?</h4>
                <input type="hidden" class="form-control del_id" name="del_id" value="">
              </div>
              <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-success btn-sm">Yes</button>
              </div>
            </div>
          </div>
        </div>
    </form>

<script>
$('#addNewModal').on('show.bs.modal', function(e) {
  var id = $(this).find('.sectionid').val(e.relatedTarget.id);
});
$('#DeleteModal').on('show.bs.modal', function(e) {
  var id1 = $(this).find('.deleteid').val(e.relatedTarget.id);
});
$('#DelSectionModal').on('show.bs.modal', function(e) {
  var id2 = $(this).find('.del_id').val(e.relatedTarget.id);
});
$('.edit-btn').on('click',function(){
	//alert("hi");
	//var qtyElemnt = $(this).parents('.addbtn').find('a').attr('href');
	//alert(qtyElemnt);
    //var qty = qtyElemnt.val();
    //alert(qty);
                var package_id = $(this).data('id');
                var package_name = $(this).data('name');
				var package_url = $(this).data('url');
                //$(".strings").val('');
                $('#UpdateModal').modal('show');
                $('[name="edit_id"]').val(package_id);
                $('[name="name_edit"]').val(package_name);
				$('[name="url_edit"]').val(package_url);
});
</script>

</body>
</html>
