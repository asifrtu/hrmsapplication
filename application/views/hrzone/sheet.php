<?php include('header.php'); ?>
<!--<?php echo $this->session->userData('auth')['id'];?>--->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<style>
.monthc{

  height: 30px !important;
    border-radius: 0px !important;
    font-weight: 600;
    font-size: 14px !important;
}
.bbtn1{
  height: 30px !important;
    border-radius: 0px !important;
    font-weight: 600;
    font-size: 14px !important;
}

.btn-bar{
background: #E8E7F4;
    padding: 3px;
margin-left: 1px;
    margin-right: 1px;
    border: 1px solid #ccc;

}
.top-btn{
  background-color: #F0BA28;
    border: none;
    //border-radius: 2px;
    color: #FFF !important;
    //float: right;
    //width: 80px;
    height: 30px;
    font-size: 15px;

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
.ColorSecondary{
	background-color:#6f42c1;
	padding: .35rem 1.25rem!important;
	
}

input.bPayroll{
 color:#6f42c1;
}
.cmPayroll{
 color:#504a94;
}
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
.actionFontSize{
	font-size:15px!important;
}

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
.wtHider{height:500px !important;}

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
handsontable .bg_color {
  background-color: #eee;
  
}
.handsontable .green {
  background: #37BC6C;
  color: #FFF;
  font-weight: bold;
  text-align:center;

}

.handsontable .yellow {
  background: #F2F116;
  color: #000;
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

.handsontable .nevyblue {
  //background: #0a144a;
  color: #0a144a;
  text-align:center;
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

.handsontable .wood {
  //background: #0a144a;
  color: #254117;
  text-align:center;
  font-weight: bold;
  text-align:center;
}
.handsontable .brighto {
  //background: #0a144a;
  color: #FF5F1F;
  text-align:center;
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
.handsontable .g6 {
  //background: #926822;
  color: #926822;
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

.handsontable .purple {
  //background: #D7BDE2;
  color:#D7BDE2;
  font-weight: bold;
  text-align:center;
}
.handsontable .red {
  background: #E74C3C;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}

.handsontable .blank {
  background: #ffffff;
  color: #FFF;
  
}

.handsontable .clover {
  background: #3EA055;
  color: #FFF;
  font-weight: bold;
  text-align:center;
}
.handsontable .skyblue {
  background: #bbbcfa;
  //color: #FFF;
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
.handsontable .deepsb {
  //background: #bbbcfa;
  color: #00BFFF;
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
.handsontable .Marble {
  //background: #F88AD5;
  color: #566D7E;
  font-weight: bold;
  text-align:center;
}
.handsontable .Haze {
  //background: #F88AD5;
  color: #4E387E;
  font-weight: bold;
  text-align:center;
}
.handsontable .Bashful {
  //background: #F88AD5;
  color: #C25283;
  font-weight: bold;
  text-align:center;
}
.handsontable .Sonic {
  //background: #F88AD5;
  color: #757575;
  font-weight: bold;
  text-align:center;
}
.handsontable . {
  //background: #F88AD5;
  color: #8c0632;
  font-weight: bold;
  text-align:center;
}
.handsontable .Golden {
  //background: #F88AD5;
  color: #FFDF00;
  font-weight: bold;
  text-align:center;
}

.handsontable .Turquoise {
  //background: #F88AD5;
  color: #43C6DB;
  font-weight: bold;
  text-align:center;
}
.handsontable .dusty {
  //background: #F88AD5;
  color: #DD9F15;
  font-weight: bold;
  text-align:center;
}
.handsontable .Venom {
  //background: #F88AD5;
  color: #728C00;
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
.btn-group>.btn:first-child  {

     margin-left: 0;
    height: 30px !important;
    border-radius: 0px !important;
    font-weight: 600;
    font-size: 14px !important;
}
.btn-group, .btn-group-vertical {
    position: absolute;}
//.wtHolder{ overflow-y:auto;}
</style>

<script src="https://cdn.jsdelivr.net/npm/handsontable@11.1/dist/handsontable.full.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable@11.1/dist/handsontable.full.min.css" /> 
 


  <!-- The Modal -->
 <!-- <?php echo $this->session->userData('auth')['id'];?>-->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
     <!--<button type="button" class="close" data-bs-dismiss="modal" style="text-align: left;">&times;</button>--->
	
    <form  action="<?php echo base_url() ?>index.php/hrzone/dashboard/linkaccess_submit" method="POST" >
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
	 
      $sections = $this->db->query("select * from linkaccess where name = '". $row['id']."' ")->result_array();
		$count = count($sections);
if($count > 0){ ?>
       checked 
      <?php } ?> 
       
       type="checkbox" name="name[]"  value="<?php echo $row['id'];?>-<?php echo $i;?>">&nbsp;&nbsp;&nbsp;<?php echo $row['name'];?></label>
	  </div>
	  <div class="col-md-6">
	  <?php 
	   $type = $this->db->query("select * from linkaccess where name = '". $row['id']."' ")->row()->type;
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
                    
					<div class="card shadow mb-4" style="margin-bottom:10px;">
                    <div class="card-header ColorSecondaryPre" style="border-radius:0px !important;">
						<div class="row">
			 
						<div class="col-lg-3">
						<a href="#" style="color: white;font-size: 17px;margin-left: 8px;">External Links </a>


  <?php
$header = $this->db->get_where('tbl_user', ['id' => $this->session->userData('auth')['id']])->row()->type; 
if($header == 'User'){?>
<style>
.tnb {display: none;}
#notifyCount {display: none;}

</style>

  <?php } ?>

<?php if($this->session->userData('auth')['id'] == 15){ ?>
  <i class="fa fa-user-plus"  onclick="openmodal()" style=" right;display:none;font-size:20px; color: #FFF;padding-left:25px;margin-top:2px;z-index:9999999;"></i> 
<?php }  ?>
	

	 <?php
      $sections = $this->db->query("select * from linkaccess where name = '".$row['id']."' and type = '".$data['type']."' ")->result_array();
		$count = count($sections);
		//echo $count; 
    //echo $data['type'];
    
    ?>
   

  <?php
$wordquery = $this->db->get_where('linkaccess', ['name' => $this->session->userData('auth')['id']])->row()->type; 
    //echo $wordquery;
  if($wordquery == '2'){?>
  
   	<button style="background-color:#1C304C;border: none;border-radius: 2px;color:#FFF;float:right; right;display:none;" onclick="send()">Save Data</button>

  <?php } ?>	</div>



        
		<div class="col-lg-5">
		<form action="" method="POST"	enctype="multipart/form-data">			
      <div class="row">
	 
	  <div class="col-lg-2">
    <button style="width:100px;float:left;border: 1px solid #F0BA28;height:30px;background:#F0BA28 !important;color: #FFF;font-weight: 600; font-size: 14px !important;margin-left: -20px;" >Filter</button>

      </div>
	  <div class="col-lg-3">
      <select required type="text" name="year" class="form-control" id="year" style="height:30px !important;border-radius: 0px !important;font-weight: 600; font-size: 14px !important;">

										 <option value="2050" <?php if($year == '2050'){ echo "selected"; } ?> >2050</option>
                     <option value="2049" <?php if($year == '2049'){ echo "selected"; } ?> >2049</option>
                     <option value="2048" <?php if($year == '2048'){ echo "selected"; } ?> >2048</option>
                     <option value="2047" <?php if($year == '2047'){ echo "selected"; } ?> >2047</option>
                     <option value="2046" <?php if($year == '2046'){ echo "selected"; } ?> >2046</option>
                     <option value="2045" <?php if($year == '2045'){ echo "selected"; } ?> >2045</option>
                     <option value="2044" <?php if($year == '2044'){ echo "selected"; } ?> >2044</option>
                     <option value="2043" <?php if($year == '2043'){ echo "selected"; } ?> >2043</option>
                     <option value="2042" <?php if($year == '2042'){ echo "selected"; } ?> >2042</option>
                     <option value="2041" <?php if($year == '2041'){ echo "selected"; } ?> >2041</option>
                     <option value="2040" <?php if($year == '2040'){ echo "selected"; } ?> >2040</option>
                     <option value="2039" <?php if($year == '2039'){ echo "selected"; } ?> >2039</option>
                     <option value="2038" <?php if($year == '2038'){ echo "selected"; } ?> >2038</option>
                     <option value="2037" <?php if($year == '2037'){ echo "selected"; } ?> >2037</option>
                     <option value="2036" <?php if($year == '2036'){ echo "selected"; } ?> >2036</option>
                     <option value="2035" <?php if($year == '2035'){ echo "selected"; } ?> >2035</option>
                     <option value="2034" <?php if($year == '2034'){ echo "selected"; } ?> >2034</option>
                     <option value="2033" <?php if($year == '2033'){ echo "selected"; } ?> >2033</option>
                     <option value="2032" <?php if($year == '2032'){ echo "selected"; } ?> >2032</option>
                     <option value="2031" <?php if($year == '2031'){ echo "selected"; } ?> >2031</option>
                     <option value="2030" <?php if($year == '2030'){ echo "selected"; } ?> >2030</option>
                     <option value="2029" <?php if($year == '2029'){ echo "selected"; } ?> >2029</option>
                     <option value="2028" <?php if($year == '2028'){ echo "selected"; } ?> >2028</option>
                     <option value="2027" <?php if($year == '2027'){ echo "selected"; } ?> >2027</option>
                     <option value="2026" <?php if($year == '2026'){ echo "selected"; } ?> >2026</option>
                     <option value="2025" <?php if($year == '2025'){ echo "selected"; } ?> >2025</option>
                     <option value="2024" <?php if($year == '2024'){ echo "selected"; } ?> >2024</option>
                     <option value="2023" <?php if($year == '2023'){ echo "selected"; } ?> >2023</option>
										 <option value="2022" <?php if($year == '2022'){ echo "selected"; } ?> >2022</option>
										 <option value="2021" <?php if($year == '2021'){ echo "selected"; } ?> >2021</option>
                     <option value="2020" <?php if($year == '2020'){ echo "selected"; } ?> >2020</option>
										 <option value="2019" <?php if($year == '2019'){ echo "selected"; } ?> >2019</option>
										 <option value="2018" <?php if($year == '2018'){ echo "selected"; } ?> >2018</option>
										 <option value="2017" <?php if($year == '2017'){ echo "selected"; } ?> >2017</option>
                     <option value="2016" <?php if($year == '2016'){ echo "selected"; } ?> >2016</option>
										 <option value="2015" <?php if($year == '2015'){ echo "selected"; } ?> >2015</option>
										 <option value="2014" <?php if($year == '2014'){ echo "selected"; } ?> >2014</option>
										 <option value="2013" <?php if($year == '2013'){ echo "selected"; } ?> >2013</option>
                     <option value="2012" <?php if($year == '2012'){ echo "selected"; } ?> >2012</option>
										 <option value="2011" <?php if($year == '2011'){ echo "selected"; } ?> >2011</option>
										 
		                                </select>
                         </div>

                  <div class="col-lg-4" style="margin-left: -19px;">
	
		
 <select required  id="multiple-checkboxes" name="month[]"  class="form-control monthc" multiple="multiple">
      <option value="01" <?php  if (in_array("01", $month)){ echo "selected"; }?> >January </option>
      <option value="02" <?php  if (in_array("02", $month)){ echo "selected"; }?> >February</option>
      <option value="03" <?php  if (in_array("03", $month)){ echo "selected"; }?> >March</option>
	  <option value="04" <?php  if (in_array("04", $month)){ echo "selected"; }?> >April</option>
      <option value="05" <?php  if (in_array("05", $month)){ echo "selected"; }?> >May</option>
	  <option value="06" <?php  if (in_array("06", $month)){ echo "selected"; }?> >June</option>
      <option value="07" <?php  if (in_array("07", $month)){ echo "selected"; }?> >July</option>
      <option value="08" <?php  if (in_array("08", $month)){ echo "selected"; }?> >August</option>
      <option value="09" <?php  if (in_array("09", $month)){ echo "selected"; }?> >September</option>
	  <option value="10" <?php  if (in_array("10", $month)){ echo "selected"; }?> >October</option>
      <option value="11" <?php  if (in_array("11", $month)){ echo "selected"; }?> >November</option>
	  <option value="12" <?php  if (in_array("12", $month)){ echo "selected"; }?> >December</option>
      
    </select>
	 
	 </div>
	 
<!--<?php
$wordqueryll = $this->db->get_where('linkaccess', ['name' => $this->session->userData('auth')['id']])->row()->name; 
    //echo $wordqueryll; ?>
	<input type="text" name="upload_id" value="<?php echo $wordqueryll; ?>">
   <?php ?>-->

</div>

      </form>
</div>
	    
	  <div class="col-lg-4">
	 <div class="" style="position:relative;">
			        <input class="form-control searchbar" id="tableSearch" type="text"  placeholder="Search..." style="float:left;width:100%;height: 30px !important;border-radius: 0px !important;">
					<button type="submit" class="form-control mb-4 searchbar"  style="width: 30px;text-align: inherit; position:absolute; top:0; right:0;height: 30px !important;border-radius: 0px !important;"><i class="fa fa-search"></i></button>
	
	  </div>
			</div>		
						</div>
						
                    </div>
						
                           
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="shadow ">
							
							<div class="card-body" style=" overflow-x:auto;">
							<div class="row btn-bar">
							  <div class="col-lg-8"></div>

 
  <div class="col-lg-4">   

<!--<button class="top-btn" style="width:100px;float:left;margin-left: 79px;background:#F0BA28 !important;font-weight: 600; font-size: 14px !important;" >Filter</button>----->

  <?php
$header = $this->db->get_where('tbl_user', ['id' => $this->session->userData('auth')['id']])->row()->type; 
if($header == 'User'){?>
<style>
.tnb {display: none;}
#notifyCount {display: none;}

</style>

  <?php } ?>

<?php if($this->session->userData('auth')['id'] == 15){ ?>
 <button onclick="openmodal()" style="color: #FFF;width: 110px;height: 30px;border: none;margin-left: 10px;float:right;background:#F0BA28; width:100px;font-weight: 600; font-size: 14px !important;font-family: Arial, Helvetica, sans-serif;"><i class="fa fa-user-plus"></i> &nbsp; Share </button> 
<?php }  ?>
	

	 <?php
      $sections = $this->db->query("select * from linkaccess where name = '".$row['id']."' and type = '".$data['type']."' ")->result_array();
		$count = count($sections);
		//echo $count; 
    //echo $data['type'];
    
    ?>
   

  <?php
$wordquery = $this->db->get_where('linkaccess', ['name' => $this->session->userData('auth')['id']])->row()->type; 
    //echo $wordquery;
  if($wordquery == '2'){?>
  
   	<button class="top-btn" style="width:100px;float:right; background:#F0BA28 !important;font-weight: 600; font-size: 14px !important;" onclick="send()">Save Data</button>

  <?php } ?>     


  </div>
</div>
							<div  id="myTable" class="table table-bordered table-striped">
								
<div id="example"></div>
<button style="background-color:blue;color:#FFF;BORDER-RADIUS:3PX;display:none;" onclick="send()">Save Data</button>
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

if($month != ''){
	$sql = "SELECT * FROM `upload_docsheet` WHERE `Date2` != '' and ( ";
	foreach($month as $m){

		$sql .= " `Date2` like '".$year."-".$m."%' or ";
	}

	$sql .= "  `Date2` like '00-00-0000' ) ";
//echo $sql;
$sections = $this->db->query($sql)->result_array();

}else{
 $sections = $this->db->get_where('upload_docsheet')->result_array();
}



			foreach ($sections as $row){ ?>
<?php echo "['". $row['Date']."', '". $row['Post_URL']."', '". $row['Name']."', '". $row['Status']."', '". $row['Submission']."', '". $row['Errors']."', '". $row['Reuse']."', '".  $row['Email_ID']."', '". $row['User_Name']."', '". $row['Password']."', '". $row['upload_id']."']," ;?>
<?php } ?>
  ],
 
  columns: [
    
    { type: 'date',
      dateFormat: 'DD-MMM-YYYY',
      correctFormat: true },
    { type: 'text' },
    { type: 'text' },
	  { type: 'text'},
	  { type: 'text' },
	  { type: 'text' },
	  { type: 'text' },
	  { type: 'text' },
	   { type: 'text' },
	   { type: 'text' },
      { type: 'text' }
     
  ],
  colHeaders: ['Date', 'Post_URL', 'Name', 'Status', 'Submission', 'Errors', 'Reuse', 'Email_ID', 'User_Name', 'Password', 'upload_id'],

  rowHeaders: true,
  dropdownMenu: true,
  filters: true,
  height: 'auto',
   minSpareRows: 1,
    colWidths: [110, 600, 100, 100, 150, 220, 100, 200, 200, 200, 50],
	
	hiddenColumns: {
    // specify columns hidden by default
    columns: [10]
     },
  licenseKey: 'non-commercial-and-evaluation',
  cell: [
    {
      row: 1,
      col: 1,
      comment: {
        value: 'Some comment',
      },
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

si = 0;
hot.setCellMeta(1, 9, 'className', 'setw'); 
<?php 


if($month != ''){
	$sql = "SELECT * FROM `upload_docsheet` WHERE `Date2` != '' and ( ";
	foreach($month as $m){

		$sql .= " `Date2` like '".$year."-".$m."%' or ";
	}

	$sql .= "  `Date2` like '00-00-0000' ) ";
//echo $sql;
$sections = $this->db->query($sql)->result_array();

}else{
 $sections = $this->db->get_where('upload_docsheet')->result_array();
}



			foreach ($sections as $row){ 
	  if($row['Date'] != ''  and $row['upload_id'] != $this->session->userData('auth')['id']){ ?>
			hot.setCellMeta(si, 0, 'className', 'left bg_color'); 

			<?php }else{ ?>
hot.setCellMeta(si, 0, 'className', 'left'); 

      <?php }
	 if($row['Name'] != ''  and $row['upload_id'] != $this->session->userData('auth')['id']){ ?>
			hot.setCellMeta(si, 2, 'className', ' center bg_color'); 

			<?php }else{ ?>
hot.setCellMeta(si, 2, 'className', 'center'); 

      <?php }

       if($row['Post_URL'] != ''  and $row['upload_id'] != $this->session->userData('auth')['id']){ ?>
			hot.setCellMeta(si, 1, 'className', 'width bg_color'); 

			<?php }else{ ?>
hot.setCellMeta(si, 1, 'className', 'width '); 

      <?php }
	  
	  if($row['Status'] != ''  and $row['upload_id'] != $this->session->userData('auth')['id']){ ?>
			hot.setCellMeta(si, 3, 'className', 'center bg_color'); 

			<?php }else{ ?>
hot.setCellMeta(si, 3, 'className', 'center'); 

      <?php }
	  
	  if($row['Submission'] != ''  and $row['upload_id'] != $this->session->userData('auth')['id']){ ?>
			hot.setCellMeta(si, 4, 'className', 'center'); 

			<?php }else{ ?>
hot.setCellMeta(si, 4, 'className', 'center '); 

      <?php }
	  if($row['Errors'] != ''  and $row['upload_id'] != $this->session->userData('auth')['id']){ ?>
			hot.setCellMeta(si, 5, 'className', 'left bg_color'); 

			<?php }else{ ?>
hot.setCellMeta(si, 5, 'className', 'left '); 

      <?php }

	 if($row['Reuse'] != ''  and $row['upload_id'] != $this->session->userData('auth')['id']){ ?>
			hot.setCellMeta(si, 6, 'className', 'center'); 

			<?php }else{ ?>
hot.setCellMeta(si, 6, 'className', 'center '); 

      <?php }

	   if($row['Email_ID'] != ''  and $row['upload_id'] != $this->session->userData('auth')['id']){ ?>
			hot.setCellMeta(si, 7, 'className', 'center bg_color'); 

			<?php }else{ ?>
hot.setCellMeta(si, 7, 'className', 'center '); 

      <?php }

	 	 if($row['User_Name'] != ''  and $row['upload_id'] != $this->session->userData('auth')['id']){ ?>
			hot.setCellMeta(si, 8, 'className', 'center bg_color'); 

			<?php }else{ ?>
hot.setCellMeta(si, 8, 'className', 'center '); 

      <?php }

	 if($row['Password'] != ''  and $row['upload_id'] != $this->session->userData('auth')['id']){ ?>
			hot.setCellMeta(si, 9, 'className', 'center bg_color'); 

			<?php }else{ ?>
hot.setCellMeta(si, 9, 'className', 'center'); 

      <?php }
	  
      
      if($row['Name'] == 'Durga'){ ?>
			hot.setCellMeta(si, 2, 'className', 'Golden'); 
			<?php }
			 if($row['Name'] == 'durga'){ ?>
			hot.setCellMeta(si, 2, 'className', 'Golden'); 
			<?php }
			if($row['Name'] == 'Neha'){ ?>
			hot.setCellMeta(si, 2, 'className', 'army');
         <?php }
		 if($row['Name'] == 'neha'){ ?>
			hot.setCellMeta(si, 2, 'className', 'army');
         <?php }
          if($row['Name'] == 'jaspreet'){ ?>
			hot.setCellMeta(si, 2, 'className', 'Venom'); 
      <?php }
	   if($row['Name'] == 'Tarun'){ ?>
			hot.setCellMeta(si, 2, 'className', 'purple'); 
      <?php }
		 if($row['Name'] == 'Varun'){ ?>
			hot.setCellMeta(si, 2, 'className', 'OrangeGold');
      <?php }
	  		 if($row['Name'] == 'varun'){ ?>
			hot.setCellMeta(si, 2, 'className', 'OrangeGold');
      <?php }
	  if($row['Name'] == 'Shivam'){ ?>
			hot.setCellMeta(si, 2, 'className', 'Bashful');
      <?php }
	   if($row['Name'] == 'shivam'){ ?>
			hot.setCellMeta(si, 2, 'className', 'Bashful');
      <?php }
	  if($row['Name'] == 'Priya'){ ?>
			hot.setCellMeta(si, 2, 'className', 'deepsb'); 
      <?php }
	  	  if($row['Name'] == 'priya'){ ?>
			hot.setCellMeta(si, 2, 'className', 'deepsb'); 
      <?php }
	  if($row['Name'] == 'Monika'){ ?>
			hot.setCellMeta(si, 2, 'className', 'blue'); 
      <?php }

	   if($row['Name'] == 'Tanishka'){ ?>
			hot.setCellMeta(si, 2, 'className', 'mehroon'); 
      <?php }
	  if($row['Name'] == 'tanishka'){ ?>
			hot.setCellMeta(si, 2, 'className', 'mehroon'); 
      <?php }
	   if($row['Name'] == 'Nishant'){ ?>
			hot.setCellMeta(si, 2, 'className', 'Vermilion'); 
      <?php }
	   if($row['Name'] == 'nishant '){ ?>
			hot.setCellMeta(si, 2, 'className', 'Vermilion'); 
      <?php }
	   if($row['Name'] == 'Himanshu'){ ?>
			hot.setCellMeta(si, 2, 'className', 'Sonic'); 
      <?php }
	   if($row['Name'] == 'himanshu'){ ?>
			hot.setCellMeta(si, 2, 'className', 'Sonic'); 
      <?php }
	   if($row['Name'] == 'Manish'){ ?>
			hot.setCellMeta(si, 2, 'className', 'wood'); 
      <?php }
	   if($row['Name'] == 'manish'){ ?>
			hot.setCellMeta(si, 2, 'className', 'wood'); 
      <?php }

	  
      if($row['Submission'] == 'Article'){ ?>
			hot.setCellMeta(si, 4, 'className', 'blue'); 
        
			<?php }
		if($row['Submission'] == 'article'){ ?>
			hot.setCellMeta(si, 4, 'className', 'blue');
         <?php }
	    if($row['Submission'] == 'Forum'){ ?>
			hot.setCellMeta(si, 4, 'className', 'mehroon'); 
			<?php }
      if($row['Submission'] == 'forum'){ ?>
			hot.setCellMeta(si, 4, 'className', 'mehroon'); 
	 <?php }
			if($row['Submission'] == 'Classified'){ ?>
			hot.setCellMeta(si, 4, 'className', 'nevyblue');
      <?php }
	  if($row['Submission'] == 'classified'){ ?>
			hot.setCellMeta(si, 4, 'className', 'nevyblue');
      <?php }
      if($row['Submission'] == 'classified '){ ?>
			hot.setCellMeta(si, 4, 'className', 'nevyblue');
      <?php }
      if($row['Submission'] == 'Guest Post'){ ?>
			hot.setCellMeta(si, 4, 'className', 'Vermilion');
      <?php }
       if($row['Submission'] == 'Guest Post '){ ?>
			hot.setCellMeta(si, 4, 'className', 'Vermilion');
      <?php }
      if($row['Submission'] == 'guest post'){ ?>
			hot.setCellMeta(si, 4, 'className', 'Vermilion');
      <?php }
      if($row['Submission'] == 'guest post '){ ?>
			hot.setCellMeta(si, 4, 'className', 'Vermilion');
      <?php }
       if($row['Submission'] == 'Wiki'){ ?>
			hot.setCellMeta(si, 4, 'className', 'Haze');
      <?php }
	  if($row['Submission'] == 'WIKI'){ ?>
			hot.setCellMeta(si, 4, 'className', 'Haze');
      <?php }
      if($row['Submission'] == 'wiki'){ ?>
			hot.setCellMeta(si, 4, 'className', 'Haze');
      <?php }
      if($row['Submission'] == 'podcast'){ ?>
			hot.setCellMeta(si, 4, 'className', 'Marble');
      <?php }
      if($row['Submission'] == 'Q/A'){ ?>
			hot.setCellMeta(si, 4, 'className', 'Sonic');
      <?php }
      if($row['Submission'] == 'info'){ ?>
			hot.setCellMeta(si, 4, 'className', 'wood');
      <?php }
      if($row['Submission'] == 'Press Release'){ ?>
			hot.setCellMeta(si, 4, 'className', 'brighto'); 
      <?php }
      if($row['Submission'] == 'press release'){ ?>
			hot.setCellMeta(si, 4, 'className', 'brighto');
      <?php }
      if($row['Submission'] == 'blog commenting '){ ?>
			hot.setCellMeta(si, 4, 'className', 'Venom'); 
      <?php }
			if($row['Submission'] == 'blog commenting'){ ?>
			hot.setCellMeta(si, 4, 'className', 'Venom'); 
      <?php }
			if($row['Submission'] == 'Blog Commenting'){ ?>
			hot.setCellMeta(si, 4, 'className', 'Venom'); 
      <?php }
      if($row['Submission'] == 'Business Listing'){ ?>
			hot.setCellMeta(si, 4, 'className', 'dblue'); 
       <?php }
      if($row['Submission'] == 'Business listing'){ ?>
			hot.setCellMeta(si, 4, 'className', 'dblue'); 
       <?php }
      if($row['Submission'] == 'business listing'){ ?>
			hot.setCellMeta(si, 4, 'className', 'Turquoise'); 
      <?php }
      if($row['Submission'] == 'shortpost'){ ?>
			hot.setCellMeta(si, 4, 'className', 'g6'); 
      <?php }
      if($row['Submission'] == 'Bookmarking'){ ?>
			hot.setCellMeta(si, 4, 'className', 'purple'); 
      <?php }
      if($row['Submission'] == 'Bookmarking '){ ?>
			hot.setCellMeta(si, 4, 'className', 'purple'); 
      <?php }
      if($row['Submission'] == 'bookmarking'){ ?>
			hot.setCellMeta(si, 4, 'className', 'purple'); 
      <?php }
      if($row['Submission'] == 'bookmarking '){ ?>
			hot.setCellMeta(si, 4, 'className', 'purple'); 
      <?php }
			if($row['Submission'] == 'Profile Creation'){ ?>
			hot.setCellMeta(si, 4, 'className', 'pink'); 
			<?php }
      if($row['Status'] == 'live'){ ?>
			hot.setCellMeta(si, 3, 'className', 'green'); 
			<?php }
	   if($row['Status'] == 'Live'){ ?>
			hot.setCellMeta(si, 3, 'className', 'green'); 
			<?php }		
      if($row['Status'] == 'Pending'){ ?>
			hot.setCellMeta(si, 3, 'className', 'yellow'); 
			<?php }
	  if($row['Status'] == 'pending'){ ?>
			hot.setCellMeta(si, 3, 'className', 'yellow'); 
			<?php }
      if($row['Status'] == 'pending '){ ?>
			hot.setCellMeta(si, 3, 'className', 'yellow'); 
			<?php }
	  if($row['Status'] == 'Deleted'){ ?>
			hot.setCellMeta(si, 3, 'className', 'red'); 
			 <?php }
	  if($row['Status'] == 'deleted'){ ?>
			hot.setCellMeta(si, 3, 'className', 'red'); 
			 <?php }
      if($row['Errors'] == '404 Error'){ ?>
			hot.setCellMeta(si, 5, 'className', 'skyblue'); 
      <?php }
	  if($row['Errors'] == '404 error'){ ?>
			hot.setCellMeta(si, 5, 'className', 'skyblue'); 
      <?php }
      if($row['Errors'] == 'Comment'){ ?>
			hot.setCellMeta(si, 5, 'className', 'creame'); 
      <?php }

      if($row['Reuse'] == 'yes'){ ?>
			hot.setCellMeta(si, 6, 'className', 'clover');
	   <?php }

      if($row['Reuse'] == 'Yes'){ ?>
			hot.setCellMeta(si, 6, 'className', 'clover');
			<?php } ?>
			
			
			si++;
<?php } ?>

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
	
	var dataa = hot.getData();
	
	document.getElementById('test').value = JSON.stringify(dataa);
}

function filter(){

  var selected = [];
    for (var option of document.getElementById('multiple-checkboxes').options)
    {
        if (option.selected) {
            selected.push(option.value);
        }
    }
   //alert(selected);


year = document.getElementById('year').value;
month = selected;
window.location.href = "<?php echo base_url() ?>index.php/hrzone/dashboard/sheet/"+year+"/"+month;

}
function send(){

	var dataa = hot.getData();
	
	
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    //alert(xhttp.responseText);
	location.reload();
    }
};
xhttp.open("POST", "<?php echo base_url() ?>excel/upload_excelapi.php?id=<?php echo $this->session->userData('auth')['id'];?>");

xhttp.send(JSON.stringify(dataa));
xhttp.setRequestHeader("Accept", "application/json");
xhttp.setRequestHeader("Content-Type", "application/json");

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
window.location.href = "<?php echo base_url() ?>index.php/hrzone/dashboard/sheet/"+val;

}
</script>
<?php include('footer.php'); ?>