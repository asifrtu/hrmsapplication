<?php include('header.php'); ?>
<?php $param2;?>
<?php if($param3 != ''){
	$employee_id = $param3;
}
?>
<?php $employee_id;?><?php $param3;?>

<!--<?php echo $this->session->userData('auth')['id'];?>--->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<style>
.open-button {
  background-color: #555;
  color: white;
  //padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  //position:fixed;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  //padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:30px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}





.ColorSecondaryPre {
   background-color: #494391 !important;
}
.card-header{
border-radius: none !important;
}
.caret {display:none !important;}
.btn-default {
    color: #333;
    background-color: #f3eaff;
    border-color: #c9a0ff;
    border-radius: 3px !important;
    font-size: 12px !important;
    padding: 4px 6px;
}
.btn-bar{
background: #E8E7F4;
    padding: 3px;
margin-left: 1px;
    margin-right: 1px;
    border: 1px solid #ccc;

}
.top-btn{
    border: none;
    border-radius: 2px;
    background: #00d3c3!important; color: #fff!important;
    float: right;
    width: 80px;
    height: 30px;
    font-size: 15px;

}

.ColorSecondary{
	background-color:#6f42c1;
	padding: .35rem 1.25rem!important;
  padding-top: 4px !important;
	
}

input.bPayroll{
 color:#6f42c1;
}
.actionFontSize .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
};
.Qdxupload-btn-wrapper {
  position: relative;
  
  display: inline-block;
}

.btnQd {
  border: 2px solid #504a94;
  color: white;
  background-color: #504a94;
  padding: 4px 10px;
  border-radius: 0px;
  font-size: 20px;
  font-weight: bold;
}
.btnQdUpload {
  border: 2px solid white;
  color: gray;
  background-color: white;
  padding: 3px 9px;
  border-radius: 0px;
  font-size: 20px;
  font-weight: bold;
}

.Qdxupload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}


.empFile{
	border-bottom: 2px solid white;
    padding: 10px;
    background-color: white;
	color:grey;

}

 .empFile a {
 
  color: grey;
  
  text-decoration: none;
}
.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: left;
  padding:2px 0;
	
}
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.fC a {
  text-decoration: none;
  color: #706e80;
}
.actionFontSize .cmPayroll{
	background: #00d3c3!important; color: #fff!important;
};

.btnQdUpload {
    border: none;
    color: white;
    background-color: #faa931;
    font-size: 12px;
    border-radius: 3px;
}
.actionFile a{
	text-decoration:none;
	color:#504a94;
}
.col-lg-1{
    max-width: 4.33333%;
    paddings:0px!important;
}
th {
    background: #;
    position: sticky;
    top: 0;
    color: #4c3f5e!important;
    font-size: 14px;
    font-weight: 500;
    text-align: center;
}
tbody td {
    font-size:12px;
    color:#343434;
}

.ColorPrimary {
    FONT-SIZE: 15PX;
}
.card-header {
    padding: 0.3rem 1.25rem!important ;}
.form-control {
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-clip: padding-box;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    background-color: #f3eaff!important;
    padding: 0 0 0 10px !important;
    border-radius: 3px !important;
    height: calc(23px + 1px)!important;
    border: 1px solid #c9a0ff!important;
    font-size: 11px!important;
}
.topnav input[type=text] {
    float: right;
  padding: 3px;
  margin-top: 8px;
  margin-right: 16px;
    font-size: small !important;
    background-color: #f3eaff!important;
    border: 3px!important;
  
}
.wtHider{height:700px !important;}

.handsontable .center {
  text-align:center !important;
}

.handsontable .left {
  text-align:left !important;
}
.handsontable .width {
  overflow-x: auto;
  display: block;
}
.handsontable .bg_color {
  background: #eee;
  font-weight: 900;
  text-align: center;
  
}

handsontable .bold_text {
  font-weight: 700;
  text-align: center;
  
}


.handsontable .green {
  background: #37BC6C;
  color: #FFF;
  font-weight: bold;
  text-align:center;

}

.handsontable .yellow {
  background: #494391;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .nevyblue {
  //background: #0a144a;
  color: #0a144a;
  text-align:center;
  font-weight: bold;
  text-align:center;
}

.handsontable .blue {
  //background: #6e70e6;
  color: #6e70e6;
  font-weight: bold;
  text-align:center;
}
.handsontable .setw {width:400px;
}
.handsontable .g1 {
  background: #67C93C;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g2 {
  background: #7DFB4D;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g3 {
  background: #B1FD4F;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g4 {
  background: #A4CA3F;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g5 {
  background: #99992E;
 color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g6 {
  background: #926822;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g7 {
  background: #8E3B16;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g10 {
  background: #8C1B12;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g9 {
  background: #EA3323;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g8 {
  background: #E94827;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g11 {
  background: #bb1608;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .g12 {
  background: #bb1608;
  color: #bb1608;
  font-weight: bold;
  text-align:center;
}
.handsontable .purple {
  //background: #D7BDE2;
  color:#D7BDE2;
  font-weight: bold;
  text-align:center;
}
.handsontable .OrangeGold {
  //background: #0a144a;
  color: #D4A017;
  text-align:center;
  font-weight: bold;
  text-align:center;
}
.handsontable .Bashful {
  //background: #F88AD5;
  color: #C25283;
  font-weight: bold;
  text-align:center;
}
.handsontable .deepsb {
  //background: #bbbcfa;
  color: #00BFFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .red {
  background: #E74C3C;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}

.handsontable .lgreen {
  background: #71d15c;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .skyblue {
  background: #494391;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .dblue{
  //background: #bbbcfa;
  color: #D35400 ;
  font-weight: bold;
  text-align:center;
}
.handsontable .purple{
  //background: #bbbcfa;
  color: #A569BD;
  font-weight: bold;
  text-align:center;
}
.handsontable .Golden {
  //background: #F88AD5;
  color: #FFDF00;
  font-weight: bold;
  text-align:center;
}
.handsontable .army {
  //background: #0a144a;
  color: #827B60;
  text-align:center;
  font-weight: bold;
  text-align:center;
}

.handsontable .lred {
  //background: #bbbcfa;
  color: #E74C3C;
  font-weight: bold;
  text-align:center;
}

.handsontable .creame {
  background: #F9E79F;
  //color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .mehroon {
  //background: #F88AD5;
  color: #8c0632;
  font-weight: bold;
  text-align:center;
}
.handsontable .Vermilion {
  //background: #0a144a;
  color: #7E191B;
  text-align:center;
  font-weight: bold;
  text-align:center;
}
.handsontable .Sonic {
  //background: #F88AD5;
  color: #757575;
  font-weight: bold;
  text-align:center;
}
.handsontable .wood {
  //background: #0a144a;
  color: #254117;
  text-align:center;
  font-weight: bold;
  text-align:center;
}

.handsontable .dusty {
  //background: #F88AD5;
  color: #DD9F15;
  font-weight: bold;
  text-align:center;
}

.handsontable .pink {
  //background: #F88AD5;
  color: #F216E8;
  font-weight: bold;
  text-align:center;
}

.btn {
  padding:;
  font: 1.4em sans-serif;
}
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999999; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 37%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.searchbar{
	float: right;
  font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-clip: padding-box;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    background-color: #f3eaff!important;
    padding: 0 0 0 10px !important;
    border-radius: 3px;
    height: calc(23px + 1px)!important;
    border: 1px solid #c9a0ff;
    font-size: 11px!important;
}
.modal-backdrop.show {
    opacity: .1 !important;
}
.btn-group, .btn-group-vertical {
    position: absolute;}
.wtHolder{ overflow-y:auto;}
</style>

<script src="https://cdn.jsdelivr.net/npm/handsontable@11.1/dist/handsontable.full.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable@11.1/dist/handsontable.full.min.css" /> 
 


  <!-- The Modal -->
 <!-- <?php echo $this->session->userData('auth')['id'];?>-->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
       
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
     <!--<button type="button" class="close" data-bs-dismiss="modal" style="text-align: left;">&times;</button>--->
	
    <form  action="<?php echo base_url() ?>index.php/hrzone/dashboard/rankinglink_submit" method="POST" >
	<?php   $i=0;
    $free = $this->db->query("SELECT * FROM `tbl_user` WHERE `employeeStatus`= 'Active'  and `name` !=''  ")->result_array();
			foreach ($free as $row){ 
			?>
    <div class="checkbox">
	<div class="row">
	<div class="col-md-6">
      <label  style="color: #000;">
	  <input
      <?php 
	 
      $sections = $this->db->query("select * from ranking_linkaccess where name = '". $row['id']."' ")->result_array();
		$count = count($sections);
if($count > 0){ ?>
       checked 
      <?php } ?> 
       
       type="checkbox" name="name[]"  value="<?php echo $row['id'];?>-<?php echo $i;?>">&nbsp;&nbsp;&nbsp;<?php echo $row['name'];?></label>
	  </div>
	  <div class="col-md-4">
	  <?php 
	   $type = $this->db->query("select * from ranking_linkaccess where name = '". $row['id']."' ")->row()->type;
	?>
	  <select  name="type[]" class="form-control"  id="type">
	
      <option value="1" <?php if($type == '1'){ ?> selected <?php } ?> >Viewer </option>
      <option value="2" <?php if($type == '2'){ ?> selected <?php } ?> >Editor</option>
	</select>
	</div>
	</div>
    </div>
    <?php $i++; } ?>
	<br>
    <button type="submit" class="btn2 btn-primary" style="margin-left:0px !important;">Submit</button><br><br>
  </form>
  
  </div>

</div>
   <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>    
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-12" style="margin-top:30px;">
       
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow">
                    <div class="card-header ColorSecondaryPre">
						<div class="row">
			 
						<div class="col-lg-4" style="padding-left: 40px;">

				        <?php if($this->session->userData('auth')['id'] == 14){ ?>
						<button class="top-btn" style="color: #FFF !important;"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall"> << Hr Wall</a></button>
						<?php } ?>
						
                         <?php if($this->session->userData('auth')['id'] == 15){ ?>
						<button class="top-btn" style="color: #FFF !important;"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall"> << Hr Wall</a></button>
						<?php } ?>

						<?php if($this->session->userData('auth')['id'] == 33){ ?>
						<button class="top-btn" style="color: #FFF !important;"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall"> << Hr Wall</a></button>
						<?php } ?>

                         <?php if($this->session->userData('auth')['id'] == 139){ ?>
						<button class="top-btn" style="color: #FFF !important;"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall"> << Hr Wall</a></button>
						<?php } ?>
						<a href="#" style="color: white;font-size: 17px;"> &nbsp;&nbsp;<?php echo $param1; ?> Ranking Sheet </a>



  <!--<?php
$header = $this->db->get_where('tbl_user', ['id' => $this->session->userData('auth')['id']])->row()->type; 
if($header == 'User'){?>
<style>
.tnb {display: none;}
#notifyCount {display: none;}

</style>

  <?php } ?>


<?php if($this->session->userData('auth')['id'] == 15){ ?>
  <i class="fa fa-user-plus"  onclick="openmodal()" style="font-size:20px; color: #FFF;padding-left:25px;margin-top:2px;z-index:9999999;"></i> 
<?php }  ?>--->
	

	</div>
	   <div class="col-lg-2">
	 <div class="" style="position:relative;">
			        <input class="form-control searchbar" id="tableSearch" type="text"  placeholder="Search..." style="float:left;width:100%;height: 30px !important;border-radius: 0px !important;">
					<button type="submit" class="form-control mb-4 searchbar"  style="width: 30px;text-align: inherit; position:absolute; top:0; right:0;height: 30px !important;border-radius: 0px !important;"><i class="fa fa-search"></i></button>
	
	  </div>
			</div>
      <div class="col-lg-2"></div>


			 <div class="col-lg-4" style="padding-right: 40px;">
		<form action="" method="POST"	enctype="multipart/form-data">			
      <div class="row">
	   <div class="col-lg-3"> 
          <select  class="form-control" style="width:100px;margin-right:7px;height:30px !important;border-radius: 0px !important;width: 100px;font-weight: 600; font-size: 14px !important;" id="key_word" name="key_word" onchange="change()" style="margin-right:10px;">
<?php 
    $words = $this->db->get_where('keyword')->result_array();
			foreach ($words as $keyrow){ 
			?>
			<option value="<?php echo $keyrow['key_word'];?>" <?php if($param2 == ($keyrow['key_word'])){ ?> selected <?php } ?>  ><?php echo $keyrow['key_word'];?></option>
			<?php } ?> 
			</select>
      </div>

	 <div class="col-lg-3">
<select  class="form-control" style="width:100px;margin-right:7px;height:30px !important;border-radius: 0px !important;width: 100px;font-weight: 600; font-size: 14px !important;" id="id" name="name" onchange="change()" style="margin-right:10px;">
<option value="152" ><?php echo $freerow['name'];?></option>
<?php 
    $free = $this->db->query("SELECT * FROM `tbl_user` WHERE `employeeStatus`= 'Active' and  `type`= 'User'  and `name` !=''  ")->result_array();
			foreach ($free as $freerow){ 
			?>
			<option value="<?php echo $freerow['id'];?>" <?php if(strtolower($param3) == strtolower($freerow['id'])){ ?> selected <?php } ?>  ><?php echo $freerow['name'];?></option>
			<?php } ?> </select>

   </div>
	  <div class="col-lg-3">

      <select required type="text" class="form-control"  style="height:30px !important;border-radius: 0px !important;font-weight: 600; font-size: 14px !important;" id="year" name="year" onchange="change()">
                     <option value="2050" <?php if($param1 == '2050'){ echo "selected"; } ?> >2050</option>
                     <option value="2049" <?php if($param1 == '2049'){ echo "selected"; } ?> >2049</option>
                     <option value="2048" <?php if($param1 == '2048'){ echo "selected"; } ?> >2048</option>
                     <option value="2047" <?php if($param1 == '2047'){ echo "selected"; } ?> >2047</option>
                     <option value="2046" <?php if($param1 == '2046'){ echo "selected"; } ?> >2046</option>
                     <option value="2045" <?php if($param1 == '2045'){ echo "selected"; } ?> >2045</option>
                     <option value="2044" <?php if($param1 == '2044'){ echo "selected"; } ?> >2044</option>
                     <option value="2043" <?php if($param1 == '2043'){ echo "selected"; } ?> >2043</option>
                     <option value="2042" <?php if($param1 == '2042'){ echo "selected"; } ?> >2042</option>
                     <option value="2041" <?php if($param1 == '2041'){ echo "selected"; } ?> >2041</option>
                     <option value="2040" <?php if($param1 == '2040'){ echo "selected"; } ?> >2040</option>
                     <option value="2039" <?php if($param1 == '2039'){ echo "selected"; } ?> >2039</option>
                     <option value="2038" <?php if($param1 == '2038'){ echo "selected"; } ?> >2038</option>
                     <option value="2037" <?php if($param1 == '2037'){ echo "selected"; } ?> >2037</option>
                     <option value="2036" <?php if($param1 == '2036'){ echo "selected"; } ?> >2036</option>
                     <option value="2035" <?php if($param1 == '2035'){ echo "selected"; } ?> >2035</option>
                     <option value="2034" <?php if($param1 == '2034'){ echo "selected"; } ?> >2034</option>
                     <option value="2033" <?php if($param1 == '2033'){ echo "selected"; } ?> >2033</option>
                     <option value="2032" <?php if($param1 == '2032'){ echo "selected"; } ?> >2032</option>
                     <option value="2031" <?php if($param1 == '2031'){ echo "selected"; } ?> >2031</option>
                     <option value="2030" <?php if($param1 == '2030'){ echo "selected"; } ?> >2030</option>
                     <option value="2029" <?php if($param1 == '2029'){ echo "selected"; } ?> >2029</option>
                     <option value="2028" <?php if($param1 == '2028'){ echo "selected"; } ?> >2028</option>
                     <option value="2027" <?php if($param1 == '2027'){ echo "selected"; } ?> >2027</option>
                     <option value="2026" <?php if($param1 == '2026'){ echo "selected"; } ?> >2026</option>
                     <option value="2025" <?php if($param1 == '2025'){ echo "selected"; } ?> >2025</option>
                     <option value="2024" <?php if($param1 == '2024'){ echo "selected"; } ?> >2024</option>
                     <option value="2023" <?php if($param1 == '2023'){ echo "selected"; } ?> >2023</option>
										 <option value="2022" <?php if($param1 == '2022'){ echo "selected"; } ?> >2022</option>
										 <option value="2021" <?php if($param1 == '2021'){ echo "selected"; } ?> >2021</option>
                     <option value="2020" <?php if($param1 == '2020'){ echo "selected"; } ?> >2020</option>
										 <option value="2019" <?php if($param1 == '2019'){ echo "selected"; } ?> >2019</option>
										 <option value="2018" <?php if($param1 == '2018'){ echo "selected"; } ?> >2018</option>
										 <option value="2017" <?php if($param1 == '2017'){ echo "selected"; } ?> >2017</option>
                     <option value="2016" <?php if($param1 == '2016'){ echo "selected"; } ?> >2016</option>
										 <option value="2015" <?php if($param1 == '2015'){ echo "selected"; } ?> >2015</option>
										 <option value="2014" <?php if($param1 == '2014'){ echo "selected"; } ?> >2014</option>
										 <option value="2013" <?php if($param1 == '2013'){ echo "selected"; } ?> >2013</option>
                     <option value="2012" <?php if($param1 == '2012'){ echo "selected"; } ?> >2012</option>
										 <option value="2011" <?php if($param1 == '2011'){ echo "selected"; } ?> >2011</option>
										 
		                                </select>
                         </div>

   <div class="col-lg-2">
 <?php
      $sections = $this->db->query("select * from ranking_linkaccess where name = '".$row['id']."' and type = '".$data['type']."' ")->result_array();
		$count = count($sections);
		//echo $count; 
    //echo $data['type'];
    
    ?>
   

  <?php
$wordquery = $this->db->get_where('ranking_linkaccess', ['name' => $this->session->userData('auth')['id']])->row()->type; 
    //echo $wordquery;
  if($wordquery == '2'){?>
  
   	<button class="top-btn" style="width:100px;float:left;background:#F0BA28 !important;font-weight: 600; font-size: 14px !important;margin-left: -25px;" onclick="send()">Save</button>
  <?php } ?>	




 </div>


<!--<?php
$wordqueryll = $this->db->get_where('ranking_linkaccess', ['name' => $this->session->userData('auth')['id']])->row()->name; 
    //echo $wordqueryll; ?>
	<input type="text" name="upload_id" value="<?php echo $wordqueryll; ?>">
   <?php ?>-->

</div>

      </form>
</div>
	   </div>
            				
                    </div>
						
                           
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="shadow ">
				<input type="hidden" name="test" id="test">			
							<div class="card-body " style=" overflow-x:auto;">
              
              <div class="row btn-bar">
               <div class="col-lg-4" style="display:none;">
			   <div style="position:relative">
			        <input class="form-control mb-4 searchbar" id="tableSearch" type="text"  placeholder="Search..." style="float:left;width:100%;">
					<button type="submit" class="form-control mb-4 searchbar"  style="width: 30px;text-align: inherit; position:absolute; top:0; right:0;"><i class="fa fa-search"></i></button>
	            
	  </div></div>
					<div class="col-lg-6"></div>

  <div class="col-lg-6 container">

<button class="open-button top-btn" style="width:100px;float:right;background:#F0BA28 !important;margin-left: 10px;font-weight: 600; font-size: 14px !important;" onclick="openForm()"><i class="fa fa-plus"></i> Keyword</button>

<div class="form-popup" id="myForm">
  <form action="<?php echo base_url() ?>index.php/hrzone/dashboard/keyword" method="POST" class="form-container">
    
    <label for="key_word"><b>Add new keyword</b></label>
    <input type="text" placeholder="Keyword" name="key_word" required>

<button type="submit" class="btn">Submit</button>
    <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
     <?php
$header = $this->db->get_where('tbl_user', ['id' => $this->session->userData('auth')['id']])->row()->type; 
if($header == 'User'){?>
<style>
.tnb {display: none;}
#notifyCount {display: none;}

</style>






  <?php } ?>

<?php
$header = $this->db->get_where('tbl_user', ['id' => $this->session->userData('auth')['id']])->row()->type; 
if($header == 'User'){?>
<style>
.tnb {display: none;}
#notifyCount {display: none;}

</style>

  <?php } ?>


<?php if($this->session->userData('auth')['id'] == 14){ ?>
   <button onclick="openmodal()" style="color: #FFF;width: 110px;height: 30px;border: none;margin-left: 10px;float:right;background:#F0BA28; width:100px;font-weight: 600; font-size: 14px !important;font-family: Arial, Helvetica, sans-serif;"><i class="fa fa-user-plus"></i> &nbsp; Share </button>  
<?php }  ?>
<?php if($this->session->userData('auth')['id'] == 15){ ?>
  <button onclick="openmodal()" style="color: #FFF;width: 110px;height: 30px;border: none;margin-left: 10px;float:right;background:#F0BA28; width:100px;font-weight: 600; font-size: 14px !important;font-family: Arial, Helvetica, sans-serif;"><i class="fa fa-user-plus"></i> &nbsp; Share </button> 
<?php }  ?>




<button class="top-btn" style="width:100px;float:right;background:#F0BA28 !important;font-weight: 600; font-size: 14px !important;" onclick="send2()"><i class="fa fa-edit"></i> Date</button>
     <!-----  <?php
$wordquery = $this->db->get_where('ranking_linkaccess', ['name' => $this->session->userData('auth')['id']])->row()->type; 
    //echo $wordquery;
  if($wordquery == '2'){?>
<button class="top-btn" style="width:100px;float:right;background:#F0BA28 !important;font-weight: 600; font-size: 14px !important;" onclick="send2()"><i class="fa fa-edit"></i> Header</button>
     
     <?php } ?>--->

      </div>
              </div>
							<div  id="myTable" class="table table-bordered table-striped">
								
<div id="example"></div>

<script src="https://cdn.jsdelivr.net/npm/handsontable@latest/dist/handsontable.full.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable@latest/dist/handsontable.full.min.css">


<script>
let msg;

const container = document.getElementById('example');

const hot = new Handsontable(container, {
	
   


   data: [

 <?php 
 //print_r($month);
 //echo 'sss';
//print_r($month);
//$i = 0;
/*if($month != ''){
	$sql = "SELECT * FROM `ranking_sheet` WHERE `Revised_Date` != '' and ( ";
	foreach($month as $m){

		$sql .= " `Revised_Date` like '".$year."-".$m."%' or ";
	}

	$sql .= "  `Revised_Date` like '00-00-0000' ) ";
//echo $sql;
$sections = $this->db->query($sql)->result_array();

}else{
 $sections = $this->db->get_where('ranking_sheet')->result_array();
} */
echo "['','',";
 $sections = $this->db->query("SELECT * FROM `ranking_header` WHERE `year_id` = '".$param1."' and `employee_id` = '".$employee_id."' ")->result_array();

			foreach ($sections as $row){ ?>
<?php echo "'". $row['date']."'," ;?>
<?php echo "'". $row['date']."'," ;?>


<?php } 
echo "],";

?>



  <?php 
 //print_r($month);
 //echo 'sss';
//print_r($month);
//$i = 0;
/*if($month != ''){
	$sql = "SELECT * FROM `ranking_sheet` WHERE `Revised_Date` != '' and ( ";
	foreach($month as $m){

		$sql .= " `Revised_Date` like '".$year."-".$m."%' or ";
	}

	$sql .= "  `Revised_Date` like '00-00-0000' ) ";
//echo $sql;
$sections = $this->db->query($sql)->result_array();

}else{
 $sections = $this->db->get_where('ranking_sheet')->result_array();
} */


 $sections = $this->db->query("SELECT * FROM `ranking_sheet` WHERE `year_id` = '".$param1."' and  `key_word` = '".$param2."' and  `employee_id` = '".$employee_id."' ")->result_array();

			foreach ($sections as $row){ ?>
<?php echo "['". $row['Keyword']."', '". $row['Name']."', '". $row['A1']."', '". $row['A2']."', '". $row['A3']."', '". $row['A4']."', '". $row['B1']."', '".$row['B2']."', '". $row['B3']."', '". $row['B4']."', '".$row['C1']."', '". $row['C2']."', '". $row['C3']."', '". $row['C4']."', '". $row['D1']."', '".$row['D2']."', '". $row['D3']."', '". $row['D4']."', '". $row['E1']."', '". $row['E2']."', '".$row['E3']."', '". $row['E4']."', '". $row['F1']."', '". $row['F2']."', '". $row['F3']."', '".$row['F4']."','". $row['G1']."', '". $row['G2']."', '". $row['G3']."', '". $row['G4']."','". $row['H1']."', '". $row['H2']."', '". $row['H3']."', '". $row['H4']."','". $row['I1']."', '". $row['I2']."', '". $row['I3']."', '". $row['I4']."','". $row['J1']."', '". $row['J2']."', '". $row['J3']."', '". $row['J4']."','". $row['K1']."', '". $row['K2']."', '". $row['K3']."', '". $row['K4']."','". $row['L1']."', '". $row['L2']."', '". $row['L3']."', '". $row['L4']."', '". $row['C']."', '".$row['D']."', '". $row['E']."','". $row['upload_id']."']," ;?>


<?php } ?>
  ],
 
  columns: [
    
    
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
	{ type: 'text'},
    { type: 'text'},
	{ type: 'text'},
	{ type: 'text'}
     
  ],
   //colHeaders: ['Keyword', 'upload_id', 'Name', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', '',''],

  rowHeaders: true,
  dropdownMenu: true,
  filters: true,
  height: 'auto',
  minSpareRows: 1, 
  //fixedRowsBottom: 5,
  fixedColumnsStart: 1,
  fixedColumnsStart:2	,
      colWidths: [300, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120,120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120],
	
	hiddenColumns: {
    // specify columns hidden by default
    //columns: [1]
     },
	 nestedHeaders: [

['Keyword <?php echo $param2;?>', 'Name','Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position','Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', 'Page', 'Position', '', '', ''],
],
mergeCells: [
  { row: 0, col: 2, rowspan: 1, colspan: 2 },
  { row: 0, col: 4, rowspan: 1, colspan: 2 },
  { row: 0, col: 6, rowspan: 1, colspan: 2 },
  { row: 0, col: 8, rowspan: 1, colspan: 2 },
  { row: 0, col: 10, rowspan: 1, colspan: 2 },
  { row: 0, col: 12, rowspan: 1, colspan: 2 },
  { row: 0, col: 14, rowspan: 1, colspan: 2 },
  { row: 0, col: 16, rowspan: 1, colspan: 2 },
  { row: 0, col: 18, rowspan: 1, colspan: 2 },
  { row: 0, col: 20, rowspan: 1, colspan: 2 },
  { row: 0, col: 22, rowspan: 1, colspan: 2 },
  { row: 0, col: 24, rowspan: 1, colspan: 2 },
  { row: 0, col: 26, rowspan: 1, colspan: 2 },
  { row: 0, col: 28, rowspan: 1, colspan: 2 },
  { row: 0, col: 30, rowspan: 1, colspan: 2 },
  { row: 0, col: 32, rowspan: 1, colspan: 2 },
  { row: 0, col: 34, rowspan: 1, colspan: 2 },
  { row: 0, col: 36, rowspan: 1, colspan: 2 },
  { row: 0, col: 38, rowspan: 1, colspan: 2 },
  { row: 0, col: 40, rowspan: 1, colspan: 2 },
  { row: 0, col: 42, rowspan: 1, colspan: 2 },
  { row: 0, col: 44, rowspan: 1, colspan: 2 },
  { row: 0, col: 46, rowspan: 1, colspan: 2 },
  { row: 0, col: 48, rowspan: 1, colspan: 2 },
  
],

  licenseKey: 'non-commercial-and-evaluation',
  cell: [
	  {
	  row: 0,
      col: 2,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 3,
	 type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 4,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 5,
	 type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 6,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 7,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 8,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 9,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 10,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },{
      row: 0,
      col: 11,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 12,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 13,
	  type: 'date',
      dateFormat: 'DD-MM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 14,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 15,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 16,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 17,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 18,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 19,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 20,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 21,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 22,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 23,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 24,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
	  row: 0,
      col: 25,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 26,
	 type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 27,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 28,
	 type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 29,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 30,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 31,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 32,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 33,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },{
      row: 0,
      col: 34,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 35,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 36,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 37,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 38,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 39,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 40,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 41,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 42,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 43,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 44,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 45,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 46,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 47,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 48,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
	{
      row: 0,
      col: 49,
	  type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true,
    },
    {
      row: 2,
      col: 2,
      comment: {
        value: 'More comments',
      },
    }
  ],
  afterCopy(data, coords) {
    const { startRow: row, startCol: column} = coords[0];
    const { comment } = this.getCellMeta(row, column);

    if (comment) {
      console.log(comment);

      msg = comment;
    }
  },
  afterPaste: function(data, coords) {
    const { startRow: row, startCol: column} = coords[0];
    
    console.log(msg)

    if (msg) {
      this.getPlugin('Comments').setCommentAtCell(row, column, msg.value)
    }
  },
});

si = 1;
hot.setCellMeta(1, 52, 'className', 'setw'); 
<?php 
 $sections = $this->db->query("SELECT * FROM `ranking_sheet` WHERE `year_id` = '".$param1."' and  `key_word` = '".$param2."' and  `employee_id` = '".$employee_id."'  ")->result_array();
 
			foreach ($sections as $row){ 
//----------Color code----------------//
   
       if($row['A1'] == '1'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g1');
    hot.setCellMeta(si, 3, 'className', 'g1');
			<?php }
      if($row['A1'] == '2'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g2');
    hot.setCellMeta(si, 3, 'className', 'g2');
			<?php }
       if($row['A1'] == '3'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g3');
    hot.setCellMeta(si, 3, 'className', 'g3');
			<?php }
      if($row['A1'] == '4'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g4');
    hot.setCellMeta(si, 3, 'className', 'g4');
			<?php }
      if($row['A1'] == '5'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g5');
    hot.setCellMeta(si, 3, 'className', 'g5');
			<?php }
      if($row['A1'] == '6'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g6');
    hot.setCellMeta(si, 3, 'className', 'g6');
			<?php }
      if($row['A1'] == '7'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g7');
    hot.setCellMeta(si, 3, 'className', 'g7');
			<?php }
      if($row['A1'] == '8'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g8');
    hot.setCellMeta(si, 3, 'className', 'g8');
			<?php }
      if($row['A1'] == '9'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g9');
    hot.setCellMeta(si, 3, 'className', 'g9');
			<?php }
      if($row['A1'] == '10'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g10');
    hot.setCellMeta(si, 3, 'className', 'g10');
			<?php }
			 if($row['A1'] == 'not found'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g11');
    hot.setCellMeta(si, 3, 'className', 'g12');
			<?php }
       if($row['A1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g11');
    hot.setCellMeta(si, 3, 'className', 'g12');
			<?php }
       if($row['A1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 2, 'className', 'g11');
    hot.setCellMeta(si, 3, 'className', 'g12');
			<?php }
          if($row['A3'] == '1'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g1');
    hot.setCellMeta(si, 5, 'className', 'g1');
			<?php }
      if($row['A3'] == '2'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g2');
    hot.setCellMeta(si, 5, 'className', 'g2');
			<?php }
       if($row['A3'] == '3'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g3');
    hot.setCellMeta(si, 5, 'className', 'g3');
			<?php }
      if($row['A3'] == '4'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g4');
    hot.setCellMeta(si, 5, 'className', 'g4');
			<?php }
      if($row['A3'] == '5'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g5');
    hot.setCellMeta(si, 5, 'className', 'g5');
			<?php }
      if($row['A3'] == '6'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g6');
    hot.setCellMeta(si, 5, 'className', 'g6');
			<?php }
      if($row['A3'] == '7'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g7');
    hot.setCellMeta(si, 5, 'className', 'g7');
			<?php }
      if($row['A3'] == '8'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g8');
    hot.setCellMeta(si, 5, 'className', 'g8');
			<?php }
      if($row['A3'] == '9'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g9');
    hot.setCellMeta(si, 5, 'className', 'g9');
			<?php }
      if($row['A3'] == '10'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g10');
    hot.setCellMeta(si, 5, 'className', 'g10');
			<?php }
			if($row['A3'] == 'not found'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g11');
    hot.setCellMeta(si, 5, 'className', 'g12');
			<?php }
      if($row['A3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g11');
    hot.setCellMeta(si, 5, 'className', 'g12');
			<?php }
      if($row['A3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 4, 'className', 'g11');
    hot.setCellMeta(si, 5, 'className', 'g12');
			<?php }

          if($row['B1'] == '1'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g1');
    hot.setCellMeta(si, 7, 'className', 'g1');
			<?php }
      if($row['B1'] == '2'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g2');
    hot.setCellMeta(si, 7, 'className', 'g2');
			<?php }
       if($row['B1'] == '3'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g3');
    hot.setCellMeta(si, 7, 'className', 'g3');
			<?php }
      if($row['B1'] == '4'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g4');
    hot.setCellMeta(si, 7, 'className', 'g4');
			<?php }
      if($row['B1'] == '5'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g5');
    hot.setCellMeta(si, 7, 'className', 'g5');
			<?php }
      if($row['B1'] == '6'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g6');
    hot.setCellMeta(si, 7, 'className', 'g6');
			<?php }
      if($row['B1'] == '7'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g7');
    hot.setCellMeta(si, 7, 'className', 'g7');
			<?php }
      if($row['B1'] == '8'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g8');
    hot.setCellMeta(si, 7, 'className', 'g8');
			<?php }
      if($row['B1'] == '9'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g9');
    hot.setCellMeta(si, 7, 'className', 'g9');
			<?php }
      if($row['B1'] == '10'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g10');
    hot.setCellMeta(si, 7, 'className', 'g10');
			<?php }
			if($row['B1'] == 'not found'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g11');
    hot.setCellMeta(si, 7, 'className', 'g12');
			<?php }
      if($row['B1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g11');
    hot.setCellMeta(si, 7, 'className', 'g12');
			<?php }
      if($row['B1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 6, 'className', 'g11');
    hot.setCellMeta(si, 7, 'className', 'g12');
			<?php }
          if($row['B3'] == '1'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g1');
    hot.setCellMeta(si, 9, 'className', 'g1');
			<?php }
      if($row['B3'] == '2'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g2');
    hot.setCellMeta(si, 9, 'className', 'g2');
			<?php }
       if($row['B3'] == '3'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g3');
    hot.setCellMeta(si, 9, 'className', 'g3');
			<?php }
      if($row['B3'] == '4'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g4');
    hot.setCellMeta(si, 9, 'className', 'g4');
			<?php }
      if($row['B3'] == '5'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g5');
    hot.setCellMeta(si, 9, 'className', 'g5');
			<?php }
      if($row['B3'] == '6'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g6');
    hot.setCellMeta(si, 9, 'className', 'g6');
			<?php }
      if($row['B3'] == '7'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g7');
    hot.setCellMeta(si, 9, 'className', 'g7');
			<?php }
      if($row['B3'] == '8'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g8');
    hot.setCellMeta(si, 9, 'className', 'g8');
			<?php }
      if($row['B3'] == '9'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g9');
    hot.setCellMeta(si, 9, 'className', 'g9');
			<?php }
      if($row['B3'] == '10'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g10');
    hot.setCellMeta(si, 9, 'className', 'g10');
			<?php }
			if($row['B3'] == 'not found'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g11');
    hot.setCellMeta(si, 9, 'className', 'g12');
			<?php }
      if($row['B3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g11');
    hot.setCellMeta(si, 9, 'className', 'g12');
			<?php }
      if($row['B3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 8, 'className', 'g11');
    hot.setCellMeta(si, 9, 'className', 'g12');
			<?php }
          if($row['C1'] == '1'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g1');
    hot.setCellMeta(si, 11, 'className', 'g1');
			<?php }
      if($row['C1'] == '2'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g2');
    hot.setCellMeta(si, 11, 'className', 'g2');
			<?php }
       if($row['C1'] == '3'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g3');
    hot.setCellMeta(si, 11, 'className', 'g3');
			<?php }
       if($row['C1'] == '4'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g4');
    hot.setCellMeta(si, 11, 'className', 'g4');
			<?php }
      if($row['C1'] == '5'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g5');
    hot.setCellMeta(si, 11, 'className', 'g5');
			<?php }
      if($row['C1'] == '6'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g6');
    hot.setCellMeta(si, 11, 'className', 'g6');
			<?php }
      if($row['C1'] == '7'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g7');
    hot.setCellMeta(si, 11, 'className', 'g7');
			<?php }
      if($row['C1'] == '8'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g8');
    hot.setCellMeta(si, 11, 'className', 'g8');
			<?php }
      if($row['C1'] == '9'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g9');
    hot.setCellMeta(si, 11, 'className', 'g9');
			<?php }
      if($row['C1'] == '10'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g10');
    hot.setCellMeta(si, 11, 'className', 'g10');
			<?php }
			if($row['C1'] == 'not found'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g11');
    hot.setCellMeta(si, 11, 'className', 'g12');
			<?php }
      	if($row['C1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g11');
    hot.setCellMeta(si, 11, 'className', 'g12');
			<?php }
      	if($row['C1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 10, 'className', 'g11');
    hot.setCellMeta(si, 11, 'className', 'g12');
			<?php }
          if($row['C3'] == '1'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g1');
    hot.setCellMeta(si, 13, 'className', 'g1');
			<?php }
      if($row['C3'] == '2'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g2');
    hot.setCellMeta(si, 13, 'className', 'g2');
			<?php }
       if($row['C3'] == '3'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g3');
    hot.setCellMeta(si, 13, 'className', 'g3');
			<?php }
      if($row['C3'] == '4'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g4');
    hot.setCellMeta(si, 13, 'className', 'g4');
			<?php }
      if($row['C3'] == '5'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g5');
    hot.setCellMeta(si, 13, 'className', 'g5');
			<?php }
      if($row['C3'] == '6'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g6');
    hot.setCellMeta(si, 13, 'className', 'g6');
			<?php }
      if($row['C3'] == '7'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g7');
    hot.setCellMeta(si, 13, 'className', 'g7');
			<?php }
      if($row['C3'] == '8'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g8');
    hot.setCellMeta(si, 13, 'className', 'g8');
			<?php }
      if($row['C3'] == '9'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g9');
    hot.setCellMeta(si, 13, 'className', 'g9');
			<?php }
      if($row['C3'] == '10'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g10');
    hot.setCellMeta(si, 13, 'className', 'g10');
			<?php }
			if($row['C3'] == 'not found'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g11');
    hot.setCellMeta(si, 13, 'className', 'g12');
			<?php }
      if($row['C3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g11');
    hot.setCellMeta(si, 13, 'className', 'g12');
			<?php }
      if($row['C3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 12, 'className', 'g11');
    hot.setCellMeta(si, 13, 'className', 'g12');
			<?php }
          if($row['C3'] == '1'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g1');
    hot.setCellMeta(si, 15, 'className', 'g1');
			<?php }
      if($row['D1'] == '2'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g2');
    hot.setCellMeta(si, 15, 'className', 'g2');
			<?php }
       if($row['D1'] == '3'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g3');
    hot.setCellMeta(si, 15, 'className', 'g3');
			<?php }
      if($row['D1'] == '4'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g4');
    hot.setCellMeta(si, 15, 'className', 'g4');
			<?php }
      if($row['D1'] == '5'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g5');
    hot.setCellMeta(si, 15, 'className', 'g5');
			<?php }
      if($row['D1'] == '6'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g6');
    hot.setCellMeta(si, 15, 'className', 'g6');
			<?php }
      if($row['D1'] == '7'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g7');
    hot.setCellMeta(si, 15, 'className', 'g7');
			<?php }
      if($row['D1'] == '8'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g8');
    hot.setCellMeta(si, 15, 'className', 'g8');
			<?php }
      if($row['D1'] == '9'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g9');
    hot.setCellMeta(si, 15, 'className', 'g9');
			<?php }
      if($row['D1'] == 'not found'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g11');
    hot.setCellMeta(si, 15, 'className', 'g12');
			<?php }
      if($row['D1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g11');
    hot.setCellMeta(si, 15, 'className', 'g12');
			<?php }
      if($row['D1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 14, 'className', 'g11');
    hot.setCellMeta(si, 15, 'className', 'g12');
			<?php }
	 
	     if($row['D3'] == '1'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g1');
    hot.setCellMeta(si, 17, 'className', 'g1');
			<?php }
      if($row['D3'] == '2'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g2');
    hot.setCellMeta(si, 17, 'className', 'g2');
			<?php }
       if($row['D3'] == '3'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g3');
    hot.setCellMeta(si, 17, 'className', 'g3');
			<?php }
      if($row['D3'] == '4'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g4');
    hot.setCellMeta(si, 17, 'className', 'g4');
			<?php }
      if($row['D3'] == '5'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g5');
    hot.setCellMeta(si, 17, 'className', 'g5');
			<?php }
      if($row['D3'] == '6'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g6');
    hot.setCellMeta(si, 17, 'className', 'g6');
			<?php }
      if($row['D3'] == '7'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g7');
    hot.setCellMeta(si, 17, 'className', 'g7');
			<?php }
      if($row['D3'] == '8'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g8');
    hot.setCellMeta(si, 17, 'className', 'g8');
			<?php }
      if($row['D3'] == '9'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g9');
    hot.setCellMeta(si, 17, 'className', 'g9');
			<?php }
      if($row['D3'] == '10'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g10');
    hot.setCellMeta(si, 17, 'className', 'g10');
			<?php }
			if($row['D3'] == 'not found'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g11');
    hot.setCellMeta(si, 17, 'className', 'g12');
			<?php }
      if($row['D3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g11');
    hot.setCellMeta(si, 17, 'className', 'g12');
			<?php }
      if($row['D3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 16, 'className', 'g11');
    hot.setCellMeta(si, 17, 'className', 'g12');
			<?php }
          if($row['E1'] == '1'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g1');
    hot.setCellMeta(si, 19, 'className', 'g1');
			<?php }
      if($row['E1'] == '2'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g2');
    hot.setCellMeta(si, 19, 'className', 'g2');
			<?php }
       if($row['E1'] == '3'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g3');
    hot.setCellMeta(si, 19, 'className', 'g3');
			<?php }
      if($row['E1'] == '4'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g4');
    hot.setCellMeta(si, 19, 'className', 'g4');
			<?php }
      if($row['E1'] == '5'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g5');
    hot.setCellMeta(si, 19, 'className', 'g5');
			<?php }
      if($row['E1'] == '6'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g6');
    hot.setCellMeta(si, 19, 'className', 'g6');
			<?php }
      if($row['E1'] == '7'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g7');
    hot.setCellMeta(si, 19, 'className', 'g7');
			<?php }
      if($row['E1'] == '8'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g8');
    hot.setCellMeta(si, 19, 'className', 'g8');
			<?php }
      if($row['E1'] == '9'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g9');
    hot.setCellMeta(si, 19, 'className', 'g9');
			<?php }
      if($row['E1'] == '10'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g10');
    hot.setCellMeta(si, 19, 'className', 'g10');
			<?php }
			if($row['E1'] == 'not found'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g11');
    hot.setCellMeta(si, 19, 'className', 'g12');
			<?php }
      	if($row['E1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g11');
    hot.setCellMeta(si, 19, 'className', 'g12');
			<?php }
      	if($row['E1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 18, 'className', 'g11');
    hot.setCellMeta(si, 19, 'className', 'g12');
			<?php }
            if($row['E3'] == '1'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g1');
    hot.setCellMeta(si, 21, 'className', 'g1');
			<?php }
      if($row['E3'] == '2'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g2');
    hot.setCellMeta(si, 21, 'className', 'g2');
			<?php }
       if($row['E3'] == '3'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g3');
    hot.setCellMeta(si, 21, 'className', 'g3');
			<?php }
      if($row['E3'] == '4'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g4');
    hot.setCellMeta(si, 21, 'className', 'g4');
			<?php }
      if($row['E3'] == '5'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g5');
    hot.setCellMeta(si, 21, 'className', 'g5');
			<?php }
      if($row['E3'] == '6'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g6');
    hot.setCellMeta(si, 21, 'className', 'g6');
			<?php }
      if($row['E3'] == '7'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g7');
    hot.setCellMeta(si, 21, 'className', 'g7');
			<?php }
      if($row['E3'] == '8'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g8');
    hot.setCellMeta(si, 21, 'className', 'g8');
			<?php }
      if($row['E3'] == '9'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g9');
    hot.setCellMeta(si, 21, 'className', 'g9');
			<?php }
      if($row['E3'] == '10'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g10');
    hot.setCellMeta(si, 21, 'className', 'g10');
			<?php }
			 if($row['E3'] == 'not found'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g11');
    hot.setCellMeta(si, 21, 'className', 'g12');
			<?php }
      if($row['E3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g11');
    hot.setCellMeta(si, 21, 'className', 'g12');
			<?php }
      if($row['E3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 20, 'className', 'g11');
    hot.setCellMeta(si, 21, 'className', 'g12');
			<?php }
		    if($row['F1'] == '1'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g1');
    hot.setCellMeta(si, 23, 'className', 'g1');
			<?php }
      if($row['F1'] == '2'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g2');
    hot.setCellMeta(si, 23, 'className', 'g2');
			<?php }
       if($row['F1'] == '3'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g3');
    hot.setCellMeta(si, 23, 'className', 'g3');
			<?php }
      if($row['F1'] == '4'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g4');
    hot.setCellMeta(si, 23, 'className', 'g4');
			<?php }
      if($row['F1'] == '5'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g5');
    hot.setCellMeta(si, 23, 'className', 'g5');
			<?php }
      if($row['F1'] == '6'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g6');
    hot.setCellMeta(si, 23, 'className', 'g6');
			<?php }
      if($row['F1'] == '7'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g7');
    hot.setCellMeta(si, 23, 'className', 'g7');
			<?php }
      if($row['F1'] == '8'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g8');
    hot.setCellMeta(si, 23, 'className', 'g8');
			<?php }
      if($row['F1'] == '9'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g9');
    hot.setCellMeta(si, 23, 'className', 'g9');
			<?php }
      if($row['F1'] == '10'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g10');
    hot.setCellMeta(si, 23, 'className', 'g10');
			<?php }
			 if($row['F1'] == 'not found'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g11');
    hot.setCellMeta(si, 23, 'className', 'g12');
			<?php }
       if($row['F1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g11');
    hot.setCellMeta(si, 23, 'className', 'g12');
			<?php }
       if($row['F1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 22, 'className', 'g11');
    hot.setCellMeta(si, 23, 'className', 'g12');
			<?php }
		    if($row['F3'] == '1'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g1');
    hot.setCellMeta(si, 25, 'className', 'g1');
			<?php }
      if($row['F3'] == '2'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g2');
    hot.setCellMeta(si, 25, 'className', 'g2');
			<?php }
       if($row['F3'] == '3'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g3');
    hot.setCellMeta(si, 25, 'className', 'g3');
			<?php }
      if($row['F3'] == '4'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g4');
    hot.setCellMeta(si, 25, 'className', 'g4');
			<?php }
      if($row['F3'] == '5'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g5');
    hot.setCellMeta(si, 25, 'className', 'g5');
			<?php }
      if($row['F3'] == '6'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g6');
    hot.setCellMeta(si, 25, 'className', 'g6');
			<?php }
      if($row['F3'] == '7'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g7');
    hot.setCellMeta(si, 25, 'className', 'g7');
			<?php }
      if($row['F3'] == '8'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g8');
    hot.setCellMeta(si, 25, 'className', 'g8');
			<?php }
      if($row['F3'] == '9'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g9');
    hot.setCellMeta(si, 25, 'className', 'g9');
			<?php }
      if($row['F3'] == '10'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g10');
    hot.setCellMeta(si, 25, 'className', 'g10');
			<?php }
			if($row['F3'] == 'not found'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g11');
    hot.setCellMeta(si, 25, 'className', 'g12');
			<?php }
      if($row['F3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g11');
    hot.setCellMeta(si, 25, 'className', 'g12');
			<?php }
      if($row['F3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 24, 'className', 'g11');
    hot.setCellMeta(si, 25, 'className', 'g12');
			<?php }
		    if($row['G1'] == '1'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g1');
    hot.setCellMeta(si, 27, 'className', 'g1');
			<?php }
      if($row['G1'] == '2'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g2');
    hot.setCellMeta(si, 27, 'className', 'g2');
			<?php }
       if($row['G1'] == '3'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g3');
    hot.setCellMeta(si, 27, 'className', 'g3');
			<?php }
      if($row['G1'] == '4'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g4');
    hot.setCellMeta(si, 27, 'className', 'g4');
			<?php }
      if($row['G1'] == '5'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g5');
    hot.setCellMeta(si, 27, 'className', 'g5');
			<?php }
      if($row['G1'] == '6'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g6');
    hot.setCellMeta(si, 27, 'className', 'g6');
			<?php }
      if($row['G1'] == '7'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g7');
    hot.setCellMeta(si, 27, 'className', 'g7');
			<?php }
      if($row['G1'] == '8'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g8');
    hot.setCellMeta(si, 27, 'className', 'g8');
			<?php }
      if($row['G1'] == '9'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g9');
    hot.setCellMeta(si, 27, 'className', 'g9');
			<?php }
      if($row['G1'] == '10'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g10');
    hot.setCellMeta(si, 27, 'className', 'g10');
			<?php }
			 if($row['G1'] == 'not found'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g11');
    hot.setCellMeta(si, 27, 'className', 'g12');
			<?php }
      if($row['G1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g11');
    hot.setCellMeta(si, 27, 'className', 'g12');
			<?php }
      if($row['G1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 26, 'className', 'g11');
    hot.setCellMeta(si, 27, 'className', 'g12');
			<?php }
		    if($row['G3'] == '1'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g1');
    hot.setCellMeta(si, 29, 'className', 'g1');
			<?php }
      if($row['G3'] == '2'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g2');
    hot.setCellMeta(si, 29, 'className', 'g2');
			<?php }
       if($row['G3'] == '3'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g3');
    hot.setCellMeta(si, 29, 'className', 'g3');
			<?php }
      if($row['G3'] == '4'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g4');
    hot.setCellMeta(si, 29, 'className', 'g4');
			<?php }
      if($row['G3'] == '5'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g5');
    hot.setCellMeta(si, 29, 'className', 'g5');
			<?php }
      if($row['G3'] == '6'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g6');
    hot.setCellMeta(si, 29, 'className', 'g6');
			<?php }
      if($row['G3'] == '7'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g7');
    hot.setCellMeta(si, 29, 'className', 'g7');
			<?php }
      if($row['G3'] == '8'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g8');
    hot.setCellMeta(si, 29, 'className', 'g8');
			<?php }
      if($row['G3'] == '9'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g9');
    hot.setCellMeta(si, 29, 'className', 'g9');
			<?php }
      if($row['G3'] == '10'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g10');
    hot.setCellMeta(si, 29, 'className', 'g10');
			<?php }
			if($row['G3'] == 'not found'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g11');
    hot.setCellMeta(si, 29, 'className', 'g12');
			<?php }
      	if($row['G3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g11');
    hot.setCellMeta(si, 29, 'className', 'g12');
			<?php }
      	if($row['G3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 28, 'className', 'g11');
    hot.setCellMeta(si, 29, 'className', 'g12');
			<?php }
		    if($row['H1'] == '1'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g1');
    hot.setCellMeta(si, 31, 'className', 'g1');
			<?php }
      if($row['H1'] == '2'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g2');
    hot.setCellMeta(si, 31, 'className', 'g2');
			<?php }
       if($row['H1'] == '3'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g3');
    hot.setCellMeta(si, 31, 'className', 'g3');
			<?php }
      if($row['H1'] == '4'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g4');
    hot.setCellMeta(si, 31, 'className', 'g4');
			<?php }
      if($row['H1'] == '5'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g5');
    hot.setCellMeta(si, 31, 'className', 'g5');
			<?php }
      if($row['H1'] == '6'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g6');
    hot.setCellMeta(si, 31, 'className', 'g6');
			<?php }
      if($row['H1'] == '7'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g7');
    hot.setCellMeta(si, 31, 'className', 'g7');
			<?php }
      if($row['H1'] == '8'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g8');
    hot.setCellMeta(si, 31, 'className', 'g8');
			<?php }
      if($row['H1'] == '9'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g9');
    hot.setCellMeta(si, 31, 'className', 'g9');
			<?php }
      if($row['H1'] == '10'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g10');
    hot.setCellMeta(si, 31, 'className', 'g10');
			<?php }
			if($row['H1'] == 'not found'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g11');
    hot.setCellMeta(si, 31, 'className', 'g12');
			<?php }
      	if($row['H1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g11');
    hot.setCellMeta(si, 31, 'className', 'g12');
			<?php }
      	if($row['H1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 30, 'className', 'g11');
    hot.setCellMeta(si, 31, 'className', 'g12');
			<?php }
		    if($row['H3'] == '1'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g1');
    hot.setCellMeta(si, 33, 'className', 'g1');
			<?php }
      if($row['H3'] == '2'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g2');
    hot.setCellMeta(si, 33, 'className', 'g2');
			<?php }
       if($row['H3'] == '3'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g3');
    hot.setCellMeta(si, 33, 'className', 'g3');
			<?php }
      if($row['H3'] == '4'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g4');
    hot.setCellMeta(si, 33, 'className', 'g4');
			<?php }
      if($row['H3'] == '5'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g5');
    hot.setCellMeta(si, 33, 'className', 'g5');
			<?php }
      if($row['H3'] == '6'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g6');
    hot.setCellMeta(si, 33, 'className', 'g6');
			<?php }
      if($row['H3'] == '7'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g7');
    hot.setCellMeta(si, 33, 'className', 'g7');
			<?php }
      if($row['H3'] == '8'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g8');
    hot.setCellMeta(si, 33, 'className', 'g8');
			<?php }
      if($row['H3'] == '9'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g9');
    hot.setCellMeta(si, 33, 'className', 'g9');
			<?php }
      if($row['H3'] == '10'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g10');
    hot.setCellMeta(si, 33, 'className', 'g10');
			<?php }
			if($row['H3'] == 'not found'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g11');
    hot.setCellMeta(si, 33, 'className', 'g12');
			<?php }
      	if($row['H3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g11');
    hot.setCellMeta(si, 33, 'className', 'g12');
			<?php }
      	if($row['H3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 32, 'className', 'g11');
    hot.setCellMeta(si, 33, 'className', 'g12');
			<?php }
		    if($row['I3'] == '1'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g1');
    hot.setCellMeta(si, 35, 'className', 'g1');
			<?php }
      if($row['I1'] == '2'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g2');
    hot.setCellMeta(si, 35, 'className', 'g2');
			<?php }
       if($row['I1'] == '3'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g3');
    hot.setCellMeta(si, 35, 'className', 'g3');
			<?php }
      if($row['I1'] == '4'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g4');
    hot.setCellMeta(si, 35, 'className', 'g4');
			<?php }
      if($row['I1'] == '5'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g5');
    hot.setCellMeta(si, 35, 'className', 'g5');
			<?php }
      if($row['I1'] == '6'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g6');
    hot.setCellMeta(si, 35, 'className', 'g6');
			<?php }
      if($row['I1'] == '7'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g7');
    hot.setCellMeta(si, 35, 'className', 'g7');
			<?php }
      if($row['I1'] == '8'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g8');
    hot.setCellMeta(si, 35, 'className', 'g8');
			<?php }
      if($row['I1'] == '9'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g9');
    hot.setCellMeta(si, 35, 'className', 'g9');
			<?php }
      if($row['I1'] == '10'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g10');
    hot.setCellMeta(si, 35, 'className', 'g10');
			<?php }
			if($row['I1'] == 'not found'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g11');
    hot.setCellMeta(si, 35, 'className', 'g12');
			<?php }
      if($row['I1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g11');
    hot.setCellMeta(si, 35, 'className', 'g12');
			<?php }
      if($row['I1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 34, 'className', 'g11');
    hot.setCellMeta(si, 35, 'className', 'g12');
			<?php }
		    if($row['I3'] == '1'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g1');
    hot.setCellMeta(si, 37, 'className', 'g1');
			<?php }
      if($row['I3'] == '2'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g2');
    hot.setCellMeta(si, 37, 'className', 'g2');
			<?php }
       if($row['I3'] == '3'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g3');
    hot.setCellMeta(si, 37, 'className', 'g3');
			<?php }
      if($row['I3'] == '4'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g4');
    hot.setCellMeta(si, 37, 'className', 'g4');
			<?php }
      if($row['I3'] == '5'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g5');
    hot.setCellMeta(si, 37, 'className', 'g5');
			<?php }
      if($row['I3'] == '6'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g6');
    hot.setCellMeta(si, 37, 'className', 'g6');
			<?php }
      if($row['I3'] == '7'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g7');
    hot.setCellMeta(si, 37, 'className', 'g7');
			<?php }
      if($row['I3'] == '8'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g8');
    hot.setCellMeta(si, 37, 'className', 'g8');
			<?php }
      if($row['I3'] == '9'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g9');
    hot.setCellMeta(si, 37, 'className', 'g9');
			<?php }
      if($row['I3'] == '10'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g10');
    hot.setCellMeta(si, 37, 'className', 'g10');
			<?php }
			 if($row['I3'] == 'not found'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g11');
    hot.setCellMeta(si, 37, 'className', 'g12');
			<?php }
      if($row['I3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g11');
    hot.setCellMeta(si, 37, 'className', 'g12');
			<?php }
      if($row['I3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 36, 'className', 'g11');
    hot.setCellMeta(si, 37, 'className', 'g12');
			<?php }
		    if($row['J1'] == '1'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g1');
    hot.setCellMeta(si, 39, 'className', 'g1');
			<?php }
      if($row['J1'] == '2'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g2');
    hot.setCellMeta(si, 39, 'className', 'g2');
			<?php }
       if($row['J1'] == '3'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g3');
    hot.setCellMeta(si, 39, 'className', 'g3');
			<?php }
      if($row['J1'] == '4'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g4');
    hot.setCellMeta(si, 39, 'className', 'g4');
			<?php }
      if($row['J1'] == '5'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g5');
    hot.setCellMeta(si, 39, 'className', 'g5');
			<?php }
      if($row['J1'] == '6'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g6');
    hot.setCellMeta(si, 39, 'className', 'g6');
			<?php }
      if($row['J1'] == '7'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g7');
    hot.setCellMeta(si, 39, 'className', 'g7');
			<?php }
      if($row['J1'] == '8'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g8');
    hot.setCellMeta(si, 39, 'className', 'g8');
			<?php }
      if($row['J1'] == '9'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g9');
    hot.setCellMeta(si, 39, 'className', 'g9');
			<?php }
      if($row['J1'] == '10'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g10');
    hot.setCellMeta(si, 39, 'className', 'g10');
			<?php }
			 if($row['J1'] == 'not found'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g11');
    hot.setCellMeta(si, 39, 'className', 'g12');
			<?php }
      if($row['J1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g11');
    hot.setCellMeta(si, 39, 'className', 'g12');
			<?php }
      if($row['J1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 38, 'className', 'g11');
    hot.setCellMeta(si, 39, 'className', 'g12');
			<?php }
		    if($row['J3'] == '1'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g1');
    hot.setCellMeta(si, 41, 'className', 'g1');
			<?php }
      if($row['J3'] == '2'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g2');
    hot.setCellMeta(si, 41, 'className', 'g2');
			<?php }
       if($row['J3'] == '3'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g3');
    hot.setCellMeta(si, 41, 'className', 'g3');
			<?php }
      if($row['J3'] == '4'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g4');
    hot.setCellMeta(si, 41, 'className', 'g4');
			<?php }
      if($row['J3'] == '5'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g5');
    hot.setCellMeta(si, 41, 'className', 'g5');
			<?php }
      if($row['J3'] == '6'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g6');
    hot.setCellMeta(si, 41, 'className', 'g6');
			<?php }
      if($row['J3'] == '7'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g7');
    hot.setCellMeta(si, 41, 'className', 'g7');
			<?php }
      if($row['J3'] == '8'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g8');
    hot.setCellMeta(si, 41, 'className', 'g8');
			<?php }
      if($row['J3'] == '9'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g9');
    hot.setCellMeta(si, 41, 'className', 'g9');
			<?php }
      if($row['J3'] == '10'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g10');
    hot.setCellMeta(si, 41, 'className', 'g10');
			<?php }
			 if($row['J3'] == 'not found'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g11');
    hot.setCellMeta(si, 41, 'className', 'g12');
			<?php }
       if($row['J3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g11');
    hot.setCellMeta(si, 41, 'className', 'g12');
			<?php }
       if($row['J3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 40, 'className', 'g11');
    hot.setCellMeta(si, 41, 'className', 'g12');
			<?php }
		    if($row['K1'] == '1'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g1');
    hot.setCellMeta(si, 43, 'className', 'g1');
			<?php }
      if($row['K1'] == '2'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g2');
    hot.setCellMeta(si, 43, 'className', 'g2');
			<?php }
       if($row['K1'] == '3'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g3');
    hot.setCellMeta(si, 43, 'className', 'g3');
			<?php }
      if($row['K1'] == '4'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g4');
    hot.setCellMeta(si, 43, 'className', 'g4');
			<?php }
      if($row['K1'] == '5'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g5');
    hot.setCellMeta(si, 43, 'className', 'g5');
			<?php }
      if($row['K1'] == '6'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g6');
    hot.setCellMeta(si, 43, 'className', 'g6');
			<?php }
      if($row['K1'] == '7'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g7');
    hot.setCellMeta(si, 43, 'className', 'g7');
			<?php }
      if($row['K1'] == '8'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g8');
    hot.setCellMeta(si, 43, 'className', 'g8');
			<?php }
      if($row['K1'] == '9'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g9');
    hot.setCellMeta(si, 43, 'className', 'g9');
			<?php }
      if($row['K1'] == '10'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g10');
    hot.setCellMeta(si, 43, 'className', 'g10');
			<?php }
			if($row['K1'] == 'not found'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g11');
    hot.setCellMeta(si, 43, 'className', 'g12');
			<?php }
      if($row['K1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g11');
    hot.setCellMeta(si, 43, 'className', 'g12');
			<?php }
      if($row['K1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 42, 'className', 'g11');
    hot.setCellMeta(si, 43, 'className', 'g12');
			<?php }
		    if($row['K3'] == '1'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g1');
    hot.setCellMeta(si, 45, 'className', 'g1');
			<?php }
      if($row['K3'] == '2'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g2');
    hot.setCellMeta(si, 45, 'className', 'g2');
			<?php }
       if($row['K3'] == '3'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g3');
    hot.setCellMeta(si, 45, 'className', 'g3');
			<?php }
      if($row['K3'] == '4'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g4');
    hot.setCellMeta(si, 45, 'className', 'g4');
			<?php }
      if($row['K3'] == '5'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g5');
    hot.setCellMeta(si, 45, 'className', 'g5');
			<?php }
      if($row['K3'] == '6'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g6');
    hot.setCellMeta(si, 45, 'className', 'g6');
			<?php }
      if($row['K3'] == '7'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g7');
    hot.setCellMeta(si, 45, 'className', 'g7');
			<?php }
      if($row['K3'] == '8'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g8');
    hot.setCellMeta(si, 45, 'className', 'g8');
			<?php }
      if($row['K3'] == '9'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g9');
    hot.setCellMeta(si, 45, 'className', 'g9');
			<?php }
      if($row['K3'] == '10'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g10');
    hot.setCellMeta(si, 45, 'className', 'g10');
			<?php }
			if($row['K3'] == 'not found'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g11');
    hot.setCellMeta(si, 45, 'className', 'g12');
			<?php }
      	if($row['K3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g11');
    hot.setCellMeta(si, 45, 'className', 'g12');
			<?php }
      	if($row['K3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 44, 'className', 'g11');
    hot.setCellMeta(si, 45, 'className', 'g12');
			<?php }
		    if($row['L1'] == '1'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g1');
    hot.setCellMeta(si, 47, 'className', 'g1');
			<?php }
      if($row['L1'] == '2'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g2');
    hot.setCellMeta(si, 47, 'className', 'g2');
			<?php }
       if($row['L1'] == '3'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g3');
    hot.setCellMeta(si, 47, 'className', 'g3');
			<?php }
      if($row['L1'] == '4'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g4');
    hot.setCellMeta(si, 47, 'className', 'g4');
			<?php }
      if($row['L1'] == '5'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g5');
    hot.setCellMeta(si, 47, 'className', 'g5');
			<?php }
      if($row['L1'] == '6'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g6');
    hot.setCellMeta(si, 47, 'className', 'g6');
			<?php }
      if($row['L1'] == '7'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g7');
    hot.setCellMeta(si, 47, 'className', 'g7');
			<?php }
      if($row['L1'] == '8'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g8');
    hot.setCellMeta(si, 47, 'className', 'g8');
			<?php }
      if($row['L1'] == '9'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g9');
    hot.setCellMeta(si, 47, 'className', 'g9');
			<?php }
      if($row['L1'] == '10'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g10');
    hot.setCellMeta(si, 47, 'className', 'g10');
			<?php }
			 if($row['L1'] == 'not found'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g11');
    hot.setCellMeta(si, 47, 'className', 'g12');
			<?php }
       if($row['L1'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g11');
    hot.setCellMeta(si, 47, 'className', 'g12');
			<?php }
       if($row['L1'] == 'Not found'){ ?>
		hot.setCellMeta(si, 46, 'className', 'g11');
    hot.setCellMeta(si, 47, 'className', 'g12');
			<?php }
		    if($row['L3'] == '1'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g1');
    hot.setCellMeta(si, 49, 'className', 'g1');
			<?php }
      if($row['L3'] == '2'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g2');
    hot.setCellMeta(si, 49, 'className', 'g2');
			<?php }
       if($row['L3'] == '3'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g3');
    hot.setCellMeta(si, 49, 'className', 'g3');
			<?php }
      if($row['L3'] == '4'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g4');
    hot.setCellMeta(si, 49, 'className', 'g4');
			<?php }
      if($row['L3'] == '5'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g5');
    hot.setCellMeta(si, 49, 'className', 'g5');
			<?php }
      if($row['L3'] == '6'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g6');
    hot.setCellMeta(si, 49, 'className', 'g6');
			<?php }
      if($row['L3'] == '7'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g7');
    hot.setCellMeta(si, 49, 'className', 'g7');
			<?php }
      if($row['L3'] == '8'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g8');
    hot.setCellMeta(si, 49, 'className', 'g8');
			<?php }
      if($row['L3'] == '9'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g9');
    hot.setCellMeta(si, 49, 'className', 'g9');
			<?php }
      if($row['L3'] == '10'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g10');
    hot.setCellMeta(si, 49, 'className', 'g10');
			<?php }														

       if($row['L3'] == 'not found'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g11');
    hot.setCellMeta(si, 49, 'className', 'g12');
			<?php }	
       if($row['L3'] == 'Not Found'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g11');
    hot.setCellMeta(si, 49, 'className', 'g12');
			<?php }	
       if($row['L3'] == 'Not found'){ ?>
		hot.setCellMeta(si, 48, 'className', 'g11');
    hot.setCellMeta(si, 49, 'className', 'g12');
			<?php }	




        { ?>
			hot.setCellMeta(0, 0, 'className', 'bg_color');
			 <?php }
			 { ?>
			hot.setCellMeta(0, 1, 'className', 'bg_color');
			 <?php }
		{ ?>
			hot.setCellMeta(0, 2, 'className', 'yellow');
			 <?php }
        { ?>
			hot.setCellMeta(0, 3, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 4, 'className', 'skyblue');
			 <?php }
 { ?>
			hot.setCellMeta(0, 5, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 6, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 7, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 8, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 9, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 10, 'className', 'yellow');
			 <?php }
			 { ?>
			hot.setCellMeta(0, 11, 'className', 'yellow');
			 <?php }
		{ ?>
			hot.setCellMeta(0, 12, 'className', 'skyblue');
			 <?php }
        { ?>
			hot.setCellMeta(0, 13, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 14, 'className', 'yellow');
			 <?php }
 { ?>
			hot.setCellMeta(0, 15, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 16, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 17, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 18, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 19, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 20, 'className', 'skyblue');
			 <?php }
            { ?>
			hot.setCellMeta(0, 21, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 22, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 23, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 24, 'className', 'skyblue');
			 <?php }
			 { ?>
			hot.setCellMeta(0, 25, 'className', 'skyblue');
			 <?php }
             { ?>
			hot.setCellMeta(0, 26, 'className', 'yellow');
			 <?php }
			 { ?>
			hot.setCellMeta(0, 27, 'className', 'yellow');
			 <?php }
		{ ?>
			hot.setCellMeta(0, 28, 'className', 'skyblue');
			 <?php }
        { ?>
			hot.setCellMeta(0, 29, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 30, 'className', 'yellow');
			 <?php }
 { ?>
			hot.setCellMeta(0, 31, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 32, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 33, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 34, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 35, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 36, 'className', 'skyblue');
			 <?php }
            { ?>
			hot.setCellMeta(0, 37, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 38, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 39, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 40, 'className', 'skyblue');
			 <?php }
			 { ?>
			hot.setCellMeta(0, 41, 'className', 'skyblue');
			 <?php }
              { ?>
			hot.setCellMeta(0, 42, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 43, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 44, 'className', 'skyblue');
			 <?php }
			 { ?>
			hot.setCellMeta(0, 45, 'className', 'skyblue');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 46, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 47, 'className', 'yellow');
			 <?php }
			  { ?>
			hot.setCellMeta(0, 48, 'className', 'skyblue');
			 <?php }
			 { ?>
			hot.setCellMeta(0, 49, 'className', 'skyblue');
			 <?php }
       if($row['Name'] == 'Durga'){ ?>
			hot.setCellMeta(si, 1, 'className', 'Golden'); 
			<?php }
			 if($row['Name'] == 'durga'){ ?>
			hot.setCellMeta(si, 1, 'className', 'Golden'); 
			<?php }
			if($row['Name'] == 'Neha'){ ?>
			hot.setCellMeta(si, 1, 'className', 'army');
         <?php }
		 if($row['Name'] == 'neha'){ ?>
			hot.setCellMeta(si, 1, 'className', 'army');
         <?php }
          if($row['Name'] == 'jaspreet'){ ?>
			hot.setCellMeta(si, 1, 'className', 'Venom'); 
      <?php }
	   if($row['Name'] == 'Tarun'){ ?>
			hot.setCellMeta(si, 1, 'className', 'purple'); 
      <?php }
		 if($row['Name'] == 'Varun'){ ?>
			hot.setCellMeta(si, 1, 'className', 'OrangeGold');
      <?php }
	  		 if($row['Name'] == 'varun'){ ?>
			hot.setCellMeta(si, 1, 'className', 'OrangeGold');
      <?php }
	  if($row['Name'] == 'Shivam'){ ?>
			hot.setCellMeta(si, 1, 'className', 'Bashful');
      <?php }
	   if($row['Name'] == 'shivam'){ ?>
			hot.setCellMeta(si, 1, 'className', 'Bashful');
      <?php }
	  if($row['Name'] == 'Priya'){ ?>
			hot.setCellMeta(si, 1, 'className', 'deepsb'); 
      <?php }
	  	  if($row['Name'] == 'priya'){ ?>
			hot.setCellMeta(si, 1, 'className', 'deepsb'); 
      <?php }
	  if($row['Name'] == 'Monika'){ ?>
			hot.setCellMeta(si, 1, 'className', 'blue'); 
      <?php }

	   if($row['Name'] == 'Tanishka'){ ?>
			hot.setCellMeta(si, 1, 'className', 'mehroon'); 
      <?php }
	  if($row['Name'] == 'tanishka'){ ?>
			hot.setCellMeta(si, 1, 'className', 'mehroon'); 
      <?php }
	   if($row['Name'] == 'Nishant'){ ?>
			hot.setCellMeta(si, 1, 'className', 'Vermilion'); 
      <?php }
	   if($row['Name'] == 'nishant '){ ?>
			hot.setCellMeta(si, 1, 'className', 'Vermilion'); 
      <?php }
	   if($row['Name'] == 'Himanshu'){ ?>
			hot.setCellMeta(si, 1, 'className', 'Sonic'); 
      <?php }
	   if($row['Name'] == 'himanshu'){ ?>
			hot.setCellMeta(si, 1, 'className', 'Sonic'); 
      <?php }
	   if($row['Name'] == 'Manish'){ ?>
			hot.setCellMeta(si, 1, 'className', 'wood'); 
      <?php }
	   if($row['Name'] == 'manish'){ ?>
			hot.setCellMeta(si, 1, 'className', 'wood'); 
       
		   <?php } ?>
			
			
			si++;
<?php } ?>
//--------------color code end---------------//
              hot.render();

getButton.addEventListener('click', event => {
  const selected = hot.getSelected() || [];
  const dataa2 = [];

  for (let i = 0; i < selected.length; i += 1) {
    const item = selected[i];

    dataa2.push(hot.getData(...item));
  }

  output.innerText = JSON.stringify(dataa2, null, 2);
  document.getElementById("selform").submit();
 
});





function ddd(){
	alert("<?php echo base_url() ?>excel/ranking_excelapi.php?year=<?php echo $param1;?>&key_word=<?php echo $param2;?>&employee_id=<?php echo $param3;?>");
	var dataa = hot.getData();
	
	document.getElementById('test').value = JSON.stringify(dataa);
}

/*function filter(){

  
year = document.getElementById('year').value;
key_word = document.getElementById('key_word').value;

//month = selected;
window.location.href = "<?php echo base_url() ?>index.php/hrzone/dashboard/ranking_sheet/"+year+"/"+key_word;

}*/
function send(){

	var dataa = hot.getData();
	
	
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    //alert(xhttp.responseText);
	location.reload();
    }
};
xhttp.open("POST", "<?php echo base_url() ?>excel/ranking_excelapi.php?year=<?php echo $param1;?>&key_word=<?php echo $param2;?>&employee_id=<?php echo $param3;?>");

xhttp.send(JSON.stringify(dataa));
xhttp.setRequestHeader("Accept", "application/json");
xhttp.setRequestHeader("Content-Type", "application/json");

}


function send2(){

	var dataa = hot.getData();
	document.getElementById('test').value = JSON.stringify(dataa);
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

    //  document.getElementById('test').value = JSON.stringify(dataa);
    //alert(xhttp.responseText);
	location.reload();
    }
};
xhttp.open("POST", "<?php echo base_url() ?>excel/ranking_header.php?year=<?php echo $param1;?>&employee_id=<?php echo $param3;?>");

xhttp.send(JSON.stringify(dataa));
xhttp.setRequestHeader("Accept", "application/json");
xhttp.setRequestHeader("Content-Type", "application/json");

}


</script>

<script>
//alert();
function change(){
//alert(1);	
year = document.getElementById('year').value;
//alert(2);
key_word = document.getElementById('key_word').value;
//alert(3);
id = document.getElementById('id').value;
//alert(4);


window.location.href = "<?php echo base_url() ?>index.php/hrzone/dashboard/ranking_sheet/"+year+"/"+key_word+"/"+id;

}

</script>
<script>
$(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>


								</div>
							</div>
						</div>
							<!-- Content Row -->
                    </div>

							

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
        </div>
        <!-- End of Content Wrapper -->

    <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
<script>
function openmodal(){
  //alert('sdsdsd');
  document.getElementById("myModal").style.display = "block";
}

$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script> 
<script>
    $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });
    });
    
	</script>
  
	<script>
function changemonth(val){
window.location.href = "<?php echo base_url() ?>index.php/hrzone/dashboard/ranking_sheet/"+val;

}
</script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


<?php include('footer.php'); ?>