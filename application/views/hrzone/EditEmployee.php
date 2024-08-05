<?php

// echo "<pre>";
// print_r($EmployeeDetails);die;


 include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
<style>
.addEmpSubmitBtn{
    margin: 10px 530px;
    color: white!important;
    float: center;
    background: #1C304C;
    font-weight: 400;
    border-radius: 3px!important;
    border-radius: 2px;
    padding: 0.2em 2em 0.2em 2em;
    border: none !important;
}
.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: left;
	
}
.tnemp a {
  display: block;
  color: #706e80;
  text-align: center;
 padding-left: 13px;
  text-decoration: none;
  font-weight: 600;
    font-size: 20px;

}
.dd a {
	text-decoration:none;
	color:white;
}
 
.empInput{
	border: 1px solid #858796;
    border-radius: 3px;
	overflow:hidden!important;
	
	padding: .2rem .75rem!important;
}
.useremp {
    background-color: #1C304C;
    color: white;
    border: 1px solid #1C304C;
    padding: 10px 11px;
    border-radius: 100%;
}

.form-group {
        margin: 0.1rem 0 0.7rem 0rem!important;
}

label {
    display: inline-block;
    margin-bottom: .25rem;
    color: #706e80;
}
.addempH{
	margin-left:10px;
}
.colorEmp{
	background-color:#1C304C;
}

.personalD{
	border-bottom:1px solid black;
}

.AUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.Aemp {
  float: left;
	
}
.Aemp a {
  display: block;
  color: white;
  text-align: center;
  
  text-decoration: none;
}


.Aemp a:hover{
  
}
.APUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.APemp {
  float: left;
	
}
.APemp a {
  display: block;
  color: grey;
  text-align: center;
  
  text-decoration: none;
}


.APemp a:hover{
  
}

.Aqdx{
	margin-top:20px;
}

.ColorSecondary{
	background-color:#1C304C;
	padding: .35rem 1.25rem!important;
	
}


	
.ColorSecondaryNotes {
    background-color: #;
    padding: 0.35rem 1.5rem!important;
    border: 1px solid #c4b4cc;

}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.4rem + 2px);
}
.empInput {
    border: 1px solid #9c50ff94!important;
    border-radius: 3px;
    overflow: hidden!important;
    padding: 0.2rem 0.75rem!important;
    font-size: 12px!important;
    color: #000!important;
}

label {
    display: inline-block;
    margin-bottom: 2px;
    color: #343434;
    font-size: 14px;
}


.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.4rem + 2px);
	font-size: 0.9rem;
}

input:focus::placeholder {
  color: transparent;
}

.salaryInput{
	background-color: #f2efef;
	border: 1px solid #e6e6e6!important;

}
::-webkit-datetime-edit-year-field:not([aria-valuenow]),
::-webkit-datetime-edit-month-field:not([aria-valuenow]),
::-webkit-datetime-edit-day-field:not([aria-valuenow]) {
    color: transparent;
}

input[type=date]::-webkit-inner-spin-button,
  input[type=date]::-webkit-outer-spin-button {
    -webkit-appearance: none;
  }

  input[type=date] {
    -moz-appearance: textfield;
  }
  
.col-lg-1{
    max-width: 4.33333%;
}

.ColorPrimary {
    color: white;
    margin-left: 10px;
    font-size: 15px;
}
.img-thumbnail {
    padding: 0rem!important;
    background-color: #fff;
    border-radius: 50%;
    max-width: 100%;
    height: 23px;
    border: 1px solid #d1adff;
    width: 23px;
}
.fas{ color:#1C304C;

}
 </style>
        
			<?php

			

			if(!empty($this->session->flashdata('message'))) { ?>
                    
                    
                    <?=$this->session->flashdata('message');?>
                    
                <?php } ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style=" margin-bottom:50px;padding-left:10px;">


        <div  class="mb-2 breadcrumb">
    <div class="row d-flex pl-1 pt-1 pb-1">

    <div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" ><i class="fa fa-home" aria-hidden="true"></i></a></div>
    <div class="col-lg-11">&nbsp; &nbsp; &nbsp;<i style="font-size: 10px; color:white;" class="fas fa-chevron-right"></i> &nbsp; <span class="breadcrumb_text">Employee DataBase  &nbsp;</span>&nbsp;<i style="font-size: 10px; color:white;" class="fas fa-chevron-right"></i>&nbsp;&nbsp;&nbsp;<span class="breadcrumb_text">Edit Data</span></div>
    </div>

    </div>
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary">Edit Employee</h5>
                        </div>		
                        
								
									
									
						<?php echo form_open_multipart('hrzone/Employee/EditEmployeeQdx/'.$UserInfo->id); ?>
							
								<div class="card-body">
										<div class="row" >
											<div class="col-lg-12 " >
											<ul class="tnUemp ">
											<li class="tnemp "><a href="#"><i style="color:#1C304C;" class="fa fa-user " aria-hidden="true"></i>&nbsp;&nbsp;Personal Details</a></li>
											</ul>
											</div>
										</div>
										
										<div class="col-lg-12 " style="margin-bottom: 20px;">
											<ul class="APUemp ColorSecondaryNotes">
											<li class="APemp"><a href="#"><span><small>Please Fill the Personal Details in below section.</small></span></a></li>
											</ul>

										</div>
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" class="empInput form-control" name="name" value="<?php if(isset($UserInfo->name)) echo $UserInfo->name;?>" style="border: 1px solid #858796;" id="email" placeholder="Full Name">
										</div>
										<span id="user_Name_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Email ID" class="empInput form-control" name="email" value="<?php if(isset($UserInfo->email)) echo $UserInfo->email;?>" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_Email_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Employee ID" class="empInput form-control" name="employee_id" value="<?php if(isset($UserInfo->employee_id)) echo $UserInfo->employee_id;?>" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_EmployeeID_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Phone" class="empInput form-control" name="phone" value="<?php if(isset($EmployeeDetails->phone)) echo $EmployeeDetails->phone;?>" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_Phone_error"></span>
										</div>
										
										
										
										</div>
										</div>
										<div class="col-lg-12">
										<div class="row" >
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Alternate Phone" class="empInput form-control" name="alternatePhone" value="<?php if(isset($EmployeeDetails->alternatePhone)) echo $EmployeeDetails->alternatePhone;?>" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_AlternatePhone_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
											<select class="empInput form-control" name="maritalStatus" value="<?php if(isset($EmployeeDetails->maritalStatus)) echo $EmployeeDetails->maritalStatus;?>" style="border: 1px solid #858796;" id="sel1">
											<option><?php if(isset($EmployeeDetails->maritalStatus)) echo $EmployeeDetails->maritalStatus;?></option>
											<option>Married</option>
											<option>Unmarried</option>
											</select>
										</div>
										<span id="user_MaritalStatus_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Father's Name" value="<?php if(isset($EmployeeDetails->fatherName)) echo $EmployeeDetails->fatherName;?>" class="empInput form-control" name="fatherName" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Spouse Name" class="empInput form-control" name="spouseName" value="<?php if(isset($EmployeeDetails->spouseName)) echo $EmployeeDetails->spouseName;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" placeholder="Local Address" class="empInput form-control" name="localAddress" value="<?php if(isset($EmployeeDetails->localAddress)) echo $EmployeeDetails->localAddress;?>" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_Local_error"></span>
										</div>
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" placeholder="Permanent Address" class="empInput form-control" name="permanentAddress" value="<?php if(isset($EmployeeDetails->permanentAddress)) echo $EmployeeDetails->permanentAddress;?>" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_Permanent_error"></span>
										</div>
										
										</div>
										</div>
										
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<label>DOB</label>
										<input type="date" class="empInput form-control" name="dob"  value="<?php if(isset($EmployeeDetails->dob)) echo $EmployeeDetails->dob;?>" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_DOB_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>Joining Date</label>
										<input type="date" placeholder="Joining Date" class="empInput form-control" name="DateOfJoining"  value="<?php if(isset($UserInfo->EmployeejoiningDate)) echo $UserInfo->EmployeejoiningDate;?>" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_Joining_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Position</label>
										<select class="form-control" placeholder="position" name="position" value="<?php if(isset($EmployeeDetails->position)) echo $EmployeeDetails->position;?>" style="border: 1px solid #858796;" id="sel1">
										
											<option><?php if(isset($EmployeeDetails->position)) echo $EmployeeDetails->position;?></option>
											<?php 
											// echo "<pre>";
											// print_r($teamDeisn);die;
											
											foreach($teamDeisn as $data){
											echo '<option value="'.$data->Designation.'">'.$data->Designation.'</option>';
											 }?>
											</select>
										
										
										
										
										</div>
										<span id="user_Position_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Personal Email Id</label>
										<input type="text" placeholder="Email ID" class="empInput form-control" name="personalEmail" value="<?php if(isset($UserInfo->personalEmail)) echo $UserInfo->personalEmail;?>" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_Email_error"></span>
										</div>
										
										</div>
										</div>
										
										
										<div class="col-lg-12">
										<div class="row" >
										
										<div class="col-lg-6">
										<div class="form-group">
										<label for="email">Level Reporting</label>
										<select class="form-control" placeholder="position" name="parentLevel" style="border: 1px solid #9c50ff94!important;" id="sel1">
										
										<option value="0">Deepak Singh | Founder & CEO</option>	
										<option value="<?php if(!empty($UserInfo->parent_id)) echo $UserInfo->parent_id; ?>"><?php if(!empty($UserInfo->parent_id)) echo $parentInfo->name." | ".$Parentdesign->position;?></option>	
									
								
				
				<?php
				// $tasks[] = array("id" => 7, "parent_id" => 6, "title" => 'sub task of 6');
    $branch = array();

    function buildTree(array $elements, array $branch, $parentId=0) {
        // group elements by parents if it does not comes on the parameters
        if (empty($branch)) {
            $branch = array();

            foreach ($elements as $element) {
				
                $branch[$element["parent_id"]][$element["id"]] = $element;
            }
        }

        // echo the childs referenced by the parentId parameter
        if (isset($branch[$parentId])) {
           

            foreach ($branch[$parentId] as $keyBranch => $itemBranch) {
				echo '<option class="'.$itemBranch["name"].'" value="'.$itemBranch["id"].'"> <a href="javascript:void(0)" data-UserId="'.$itemBranch["id"].'" class="empView">
						<span class="title teamTitle">'.$itemBranch['name'].'|</span><span>'.$itemBranch['Employee_Position'].'</span>
						
					</a>';
				buildTree($elements, $branch, $itemBranch["id"]); // iterate with the actual Id to check if this record have childs
				echo '</option>';
            }
           
        }
    }

   
 echo buildTree($elements, array());
				
				?>
				
					
					
				
										</select>
										</div>
										<span id="user_Position_error"></span>
										</div>
										<div class="col-lg-6">
										<div class="form-group">
										<label>Profile Image</label>
										<input type="file" placeholder="Profile Image" value="<?php if(isset($EmployeeProfileImage->EmpProfileImage)) echo $EmployeeProfileImage->EmpProfileImage;?>" class="empInput form-control" name="EmpProfileImage[]" style="border: 1px solid #858796;" id="email">
										<?php if(!empty($EmployeeProfileImage->EmpProfileImage)){ ?>
							
										<img width="20px" src="<?php echo base_url();?>upload/UserProfileImage/<?php  echo $EmployeeProfileImage->EmpProfileImage; ?>" class="img-thumbnail" alt="Cinque Terre">
											<?php } ?>
										</div>
										</div>
										
										
										</div>
										</div>
										
										
										
										
									
										</div>
										
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#"><i style="color:#1C304C;" class=" fas fa-graduation-cap"></i>&nbsp;&nbsp;Education Qualification&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Education Qualification Details.)</small></span></a></li>
											<li class="Aemp" style="float:right;"><a id="add-rowEducation" href="javascript:void(0)"><span><small>Add</small></span>+</a></li>
											</ul>

											
										</div>
										
										
										
										
										<div class="card-body">
										<div class="col-lg-12" id="addOtherEducation">
										<?php if(!empty($EmployeeEducationDetails)):  ?>
									
											<?php	
											
											foreach($EmployeeEducationDetails as $emp): ?>
										<div class="row" >
										
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="10th Exam Passed" class="empInput form-control" name="examPassed[]" value="<?php if(isset($emp->examPassed)) echo $emp->examPassed;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<select class="empInput form-control" name="examYear[]" value="<?php if(isset($emp->examYear)) echo $emp->examYear;?>" style="border: 1px solid #858796;" id="sel1">
																					
											<option><?php if(isset($emp->examYear)) echo $emp->examYear;?></option>
											<option></option>
											<option>2025</option>
											<option>2024</option>
											<option>2023</option>
											<option>2022</option>
											<option>2021</option>
											<option>2020</option>
											<option>2019</option>
											<option>2018</option>
											<option>2017</option>
											<option>2016</option>
											<option>2015</option>
											<option>2014</option>
											<option>2013</option>
											<option>2012</option>
											<option>2011</option>
											<option>2010</option>
											<option>2009</option>
											<option>2008</option>
											<option>2007</option>
											<option>2006</option>
											<option>2005</option>
											<option>2004</option>
											<option>2003</option>
											<option>2002</option>
											<option>2001</option>
											<option>2000</option>
											<option>1999</option>
											<option>1998</option>
											<option>1997</option>
											<option>1996</option>
											<option>1995</option>
											<option>1994</option>
											<option>1993</option>
											<option>1992</option>
											<option>1991</option>
											<option>1990</option>
											<option>1989</option>
											<option>1988</option>
											<option>1987</option>
											<option>1986</option>
											<option>1985</option>
											<option>1984</option>
											<option>1983</option>
											<option>1982</option>
											<option>1981</option>
											<option>1980</option>
											<option>1979</option>
											<option>1978</option>
											<option>1977</option>
											<option>1976</option>
											<option>1975</option>
											<option>1974</option>
											<option>1973</option>
											<option>1972</option>
											<option>1971</option>
											<option>1970</option>
											<option>1969</option>
											<option>1968</option>
											<option>1967</option>
											<option>1966</option>
											<option>1965</option>
											<option>1964</option>
											<option>1963</option>
											<option>1962</option>
											<option>1961</option>
											<option>1960</option>
											<option>1959</option>
											<option>1958</option>
											<option>1957</option>
											<option>1956</option>
											<option>1955</option>
											<option>1954</option>
											<option>1953</option>
											<option>1952</option>
											<option>1951</option>
											<option>1950</option>
											<option>1949</option>
											<option>1948</option>
											<option>1947</option>
											<option>1946</option>
											<option>1945</option>
											<option>1944</option>
											<option>1943</option>
											<option>1942</option>
											<option>1941</option>
											<option>1940</option>
											<option>1939</option>
											<option>1938</option>
											<option>1937</option>
											<option>1936</option>
											<option>1935</option>
											<option>1934</option>
											<option>1933</option>
											<option>1932</option>
											<option>1931</option>
											<option>1930</option>
											<option>1929</option>
											<option>1928</option>
											<option>1927</option>
											<option>1926</option>
											<option>1925</option>
											<option>1924</option>
											<option>1923</option>
											<option>1922</option>
											<option>1921</option>
											<option>1920</option>
											<option>1919</option>
											<option>1918</option>
											<option>1917</option>
											<option>1916</option>
											<option>1915</option>
											<option>1914</option>
											<option>1913</option>
											<option>1912</option>
											<option>1911</option>
											<option>1910</option>
											<option>1909</option>
											<option>1908</option>
											<option>1907</option>
											<option>1906</option>
											<option>1905</option>
										</select>
										
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Board/University" class="empInput form-control" name="examBoard[]" value="<?php if(isset($emp->examBoard)) echo $emp->examBoard;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="% Marks and Division" class="empInput form-control" name="marks[]" value="<?php if(isset($emp->marks)) echo $emp->marks;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										</div>
										<?php endforeach;  ?>
										<?php endif; ?>
										</div>
										
										
										
										
										
										</div>
										
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#"><i  style="color:#1C304C;" class=" fas fa-chalkboard-teacher"></i></i>&nbsp;&nbsp;Course&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Course Details.)</small></span></a></li>
											<li class="Aemp" style="float:right;" id="add-rowCourse"><a id="add-rowCourse" href="javascript:void(0)"><span><small>Add</small></span>+</a></li>
											</ul>

											
										</div>
										
										
										
										
										<div class="card-body">
										<div class="col-lg-12" id="addfullrowCourse">
										
										<?php if(!empty($EmployeeCourseDetails)):  ?>
									
											<?php	
											
											
											foreach($EmployeeCourseDetails as $emp): ?>
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Course" class="empInput form-control" name="coursePassed[]" value="<?php if(isset($emp->coursePassed)) echo $emp->coursePassed;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<select class="empInput form-control" name="courseYear[]" value="<?php if(isset($emp->courseYear)) echo $emp->courseYear;?>" style="border: 1px solid #858796;" id="sel1">
																					
											<option><?php if(isset($emp->courseYear)) echo $emp->courseYear;?></option>
											<option></option>
											<option>2025</option>
											<option>2024</option>
											<option>2023</option>
											<option>2022</option>
											<option>2021</option>
											<option>2020</option>
											<option>2019</option>
											<option>2018</option>
											<option>2017</option>
											<option>2016</option>
											<option>2015</option>
											<option>2014</option>
											<option>2013</option>
											<option>2012</option>
											<option>2011</option>
											<option>2010</option>
											<option>2009</option>
											<option>2008</option>
											<option>2007</option>
											<option>2006</option>
											<option>2005</option>
											<option>2004</option>
											<option>2003</option>
											<option>2002</option>
											<option>2001</option>
											<option>2000</option>
											<option>1999</option>
											<option>1998</option>
											<option>1997</option>
											<option>1996</option>
											<option>1995</option>
											<option>1994</option>
											<option>1993</option>
											<option>1992</option>
											<option>1991</option>
											<option>1990</option>
											<option>1989</option>
											<option>1988</option>
											<option>1987</option>
											<option>1986</option>
											<option>1985</option>
											<option>1984</option>
											<option>1983</option>
											<option>1982</option>
											<option>1981</option>
											<option>1980</option>
											<option>1979</option>
											<option>1978</option>
											<option>1977</option>
											<option>1976</option>
											<option>1975</option>
											<option>1974</option>
											<option>1973</option>
											<option>1972</option>
											<option>1971</option>
											<option>1970</option>
											<option>1969</option>
											<option>1968</option>
											<option>1967</option>
											<option>1966</option>
											<option>1965</option>
											<option>1964</option>
											<option>1963</option>
											<option>1962</option>
											<option>1961</option>
											<option>1960</option>
											<option>1959</option>
											<option>1958</option>
											<option>1957</option>
											<option>1956</option>
											<option>1955</option>
											<option>1954</option>
											<option>1953</option>
											<option>1952</option>
											<option>1951</option>
											<option>1950</option>
											<option>1949</option>
											<option>1948</option>
											<option>1947</option>
											<option>1946</option>
											<option>1945</option>
											<option>1944</option>
											<option>1943</option>
											<option>1942</option>
											<option>1941</option>
											<option>1940</option>
											<option>1939</option>
											<option>1938</option>
											<option>1937</option>
											<option>1936</option>
											<option>1935</option>
											<option>1934</option>
											<option>1933</option>
											<option>1932</option>
											<option>1931</option>
											<option>1930</option>
											<option>1929</option>
											<option>1928</option>
											<option>1927</option>
											<option>1926</option>
											<option>1925</option>
											<option>1924</option>
											<option>1923</option>
											<option>1922</option>
											<option>1921</option>
											<option>1920</option>
											<option>1919</option>
											<option>1918</option>
											<option>1917</option>
											<option>1916</option>
											<option>1915</option>
											<option>1914</option>
											<option>1913</option>
											<option>1912</option>
											<option>1911</option>
											<option>1910</option>
											<option>1909</option>
											<option>1908</option>
											<option>1907</option>
											<option>1906</option>
											<option>1905</option>
										</select>
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Name of Institute" class="empInput form-control" name="courseBoard[]" value="<?php if(isset($emp->courseBoard)) echo $emp->courseBoard;?>" style="border: 1px solid #858796;" id="email">
										
										
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="% Marks and Division" class="empInput form-control" name="courseMarks[]" value="<?php if(isset($emp->courseMarks)) echo $emp->courseMarks;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										</div>
										
										<?php endforeach;  ?>
										<?php endif; ?>
										</div>
										
										
										
										
									
										
										</div>
										
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#"><i class=" fas fa-landmark"></i>&nbsp;&nbsp;Bank Account&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Bank Account Details.)</small></span></a></li>
											<li class="Aemp" style="float:right;" id="add-rowBank"><a id="add-rowBank" href="javascript:void(0)"><span><small>Add</small></span>+</a></li>
											</ul>

											
										</div>
										
										
										
										
										<div class="card-body">
										<div class="col-lg-12" id="addOtherBankDetails" >
										<?php if(!empty($EmployeeBankInfo)):  ?>
									
											<?php	
											
											
											foreach($EmployeeBankInfo as $emp):
											?>
											
											
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Bank Name" class="empInput form-control" name="bankName[]" value="<?php if(isset($emp->bankName)) echo $emp->bankName;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Account No" class="empInput form-control" name="bankAccount[]" value="<?php if(isset($emp->bankAccount)) echo $emp->bankAccount;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Branch" class="empInput form-control" name="bankBranch[]" value="<?php if(isset($emp->bankBranch)) echo $emp->bankBranch;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="IFSC Code" class="empInput form-control" name="bankIFSCCode[]" value="<?php if(isset($emp->bankIFSCCode)) echo $emp->bankIFSCCode;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										</div>
										
										<?php endforeach;  ?>
										<?php endif; ?>
										</div>
										
										
										
										
										</div>
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#"><i class=" fas fa-briefcase"></i>&nbsp;&nbsp;Work Experience&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Work Experience Details.)</small></span></a></li>
											<li class="Aemp" style="float:right;" id="add-rowExperience"><a id="add-rowCourse" href="javascript:void(0)"><span><small>Add</small></span>+</a></li>
											</ul>
										</div>
										
										
										
										
										<div class="card-body">
										<div class="col-lg-12" id="addOtherExperience">
										<?php if(!empty($EmployeePreExp)):  ?>
									
											<?php	
											
											
											foreach($EmployeePreExp as $emp): ?>
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Post/ Designation" class="empInput form-control" name="experienceDesignation[]" value="<?php if(isset($emp->experienceDesignation)) echo $emp->experienceDesignation;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="Organization" class="empInput form-control" name="experienceOrganisation[]" value="<?php if(isset($emp->experienceOrganisation)) echo $emp->experienceOrganisation;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="Duration(From To)" class="empInput form-control" name="experienceDuration[]" value="<?php if(isset($emp->experienceDuration)) echo $emp->experienceDuration;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="Experience" class="empInput form-control" name="experienceTotal[]" value="<?php if(isset($emp->experienceTotal)) echo $emp->experienceTotal;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="Salary" class="empInput form-control" name="previousSalary[]" value="<?php if(isset($emp->previousSalary)) echo $emp->previousSalary;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										</div>
										
										<?php endforeach;  ?>
										<?php endif; ?>
										</div>
										
										
										
										
										</div>
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#"><i class=" fas fa-money-check"></i>&nbsp;&nbsp;Salary&nbsp;&nbsp;|&nbsp;&nbsp; Office Use Only<span><small></small></span></a></li>
											</ul>

											
										</div>
										
										
										
										<div class="card-body" style="">
										
										<div class="col-lg-12 " style="margin-bottom: 20px;">
											<ul class="APUemp ColorSecondaryNotes">
											<li class="APemp"><span><small>Earning Details</small></span></li>
											</ul>

											
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<label>Salary/Month</label>
										<input type="text" class="empInput salaryInput form-control" name="monthlySalary" value="<?php if(isset($EmployeeSalaryInfo->monthlySalary)) echo $EmployeeSalaryInfo->monthlySalary;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Gross Salary</label>
										<input type="text" class="empInput salaryInput form-control" name="grossSalary" value="<?php if(isset($EmployeeSalaryInfo->grossSalary)) echo $EmployeeSalaryInfo->grossSalary;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Basic</label>
										<input type="text" class="empInput salaryInput form-control" name="basicSalary" value="<?php if(isset($EmployeeSalaryInfo->basicSalary)) echo $EmployeeSalaryInfo->basicSalary;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>HRA</label>
										<input type="text" class="empInput salaryInput form-control" name="HRA" value="<?php if(isset($EmployeeSalaryInfo->HRA)) echo $EmployeeSalaryInfo->HRA;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										</div>
										</div>
										<div class="col-lg-12">
										<div class="row" >
										
										
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Dearness Allowance</label>
										<input type="text" class="empInput salaryInput form-control" name="dearnessAllowance" value="<?php if(isset($EmployeeSalaryInfo->dearnessAllowance)) echo $EmployeeSalaryInfo->dearnessAllowance;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Conveyance</label>
										<input type="text" class="empInput salaryInput form-control" name="Conveyance" value="<?php if(isset($EmployeeSalaryInfo->Conveyance)) echo $EmployeeSalaryInfo->Conveyance;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Medical Allowance</label>
										<input type="text" class="empInput salaryInput form-control" name="Medical" value="<?php if(isset($EmployeeSalaryInfo->Medical)) echo $EmployeeSalaryInfo->Medical;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Special Allowance</label>
										<input type="text" class="empInput salaryInput form-control" name="specialAllowance" value="<?php if(isset($EmployeeSalaryInfo->specialAllowance)) echo $EmployeeSalaryInfo->specialAllowance;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
                                        
										
										
										</div>
										</div>
										
										
										<div class="col-lg-12">
										<div class="row" >
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Mobile Expenses</label>
										<input type="text" class="empInput salaryInput form-control" name="mobileExpenses" value="<?php if(isset($EmployeeSalaryInfo->mobileExpenses)) echo $EmployeeSalaryInfo->mobileExpenses;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>

										<div class="col-lg-3">
										<div class="form-group">
										<label>Performance Incentives</label>
										<input type="text" class="empInput salaryInput form-control" name="performanceIncentives" value="<?php if(isset($EmployeeSalaryInfo->performanceIncentives)) echo $EmployeeSalaryInfo->performanceIncentives;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Arrears/Other Ern</label>
										<input type="text" class="empInput salaryInput form-control" name="otherOrArrears" value="<?php if(isset($EmployeeSalaryInfo->otherOrArrears)) echo $EmployeeSalaryInfo->otherOrArrears;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Bonus(If Applicable)</label>
										<input type="text" class="empInput salaryInput form-control" name="Bonus" value="<?php if(isset($EmployeeSalaryInfo->Bonus)) echo $EmployeeSalaryInfo->Bonus;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Pan Card</label>
										<input type="text" class="empInput salaryInput form-control" name="pancard" value="<?php if(isset($EmployeeSalaryInfo->pancard)) echo $EmployeeSalaryInfo->pancard;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Aadhar Card</label>
										<input type="text" class="empInput salaryInput form-control" name="aadharcard" value="<?php if(isset($EmployeeSalaryInfo->aadharcard)) echo $EmployeeSalaryInfo->aadharcard;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										
										</div>
										</div>
										</div>
										<div class="card-body">
										<div class="col-lg-12 " style="margin-bottom: 20px;">
											<ul class="APUemp ColorSecondaryNotes">
											<li class="APemp"><span><small>Deduction Details</small></span></li>
											</ul>

											
										</div>
										<div class="col-lg-12">
										<div class="row" >
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>E.Provident Fund</label>
										<input type="text" class="empInput salaryInput form-control" name="eProvidentFund" value="<?php if(isset($EmployeeSalaryInfo->eProvidentFund)) echo $EmployeeSalaryInfo->eProvidentFund;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>ESI</label>
										<input type="text" class="empInput salaryInput form-control" name="ESI" value="<?php if(isset($EmployeeSalaryInfo->ESI)) echo $EmployeeSalaryInfo->ESI;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Professional Tax</label>
										<input type="text" class="empInput salaryInput form-control" name="professionalTax" value="<?php if(isset($EmployeeSalaryInfo->professionalTax)) echo $EmployeeSalaryInfo->professionalTax;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>I.Tax</label>
										<input type="text" class="empInput salaryInput form-control" name="ITax" value="<?php if(isset($EmployeeSalaryInfo->ITax)) echo $EmployeeSalaryInfo->ITax;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										
										
										
										
										
										
										
										</div>
										</div>
										
										
										<div class="col-lg-12">
										<div class="row" >
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Loan</label>
										<input type="text" class="empInput salaryInput form-control" name="Loan" value="<?php if(isset($EmployeeSalaryInfo->Loan)) echo $EmployeeSalaryInfo->Loan;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Advance</label>
										<input type="text" class="empInput salaryInput form-control" name="Advance" value="<?php if(isset($EmployeeSalaryInfo->Advance)) echo $EmployeeSalaryInfo->Advance;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Misc. Deduction</label>
										<input type="text" class="empInput salaryInput form-control" name="miscDeduction" value="<?php if(isset($EmployeeSalaryInfo->miscDeduction)) echo $EmployeeSalaryInfo->miscDeduction;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										
										</div>
										</div>
										
										
										</div>
										
							
							
							
										
										
										<div class="card-header Aqdx colorEmp col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#"><i class="fas fa-city"></i>&nbsp;&nbsp;For Office Use&nbsp;&nbsp;&nbsp;&nbsp; <span><small></small></span></a></li>
											</ul>

											
										</div>
									<div class="card-body">	
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="date" placeholder="Leave Date" class="empInput form-control" name="employeeleaveDate" value="<?php if(isset($UserInfo->employeeExitDate)) echo $UserInfo->employeeExitDate;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<select class="empInput form-control" name="employeeStatus" value="<?php if(isset($UserInfo->employeeStatus)) echo $UserInfo->employeeStatus;?>" style="border: 1px solid #858796;">
											<option><?php if(isset($UserInfo->employeeStatus)) echo $UserInfo->employeeStatus;?></option>
											<option>working status</option>
											<option>Active</option>
											<option>InActive</option>
											</select>
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Got Reliving Letter" class="empInput form-control" name="gotRelievingLetter" value="<?php if(isset($EmployeeDetails->gotRelievingLetter)) echo $EmployeeDetails->gotRelievingLetter;?>" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
											<select class="empInput form-control" name="noticeServedStatus" value="<?php if(isset($EmployeeDetails->noticeServedStatus)) echo $EmployeeDetails->noticeServedStatus;?>" style="border: 1px solid #858796;" id="sel1">
											<option><?php if(isset($EmployeeDetails->noticeServedStatus)) echo $EmployeeDetails->noticeServedStatus;?></option>
											<option>Working</option>
											<option>Left without any update</option>
											<option>Left - Served notice</option>
											<option>ATL (Ask to Leave)</option>
											</select>
										</div>
										</div>
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										
										
										
										
										</div>
										</div>
										
										
										
							<button type="submit" class="btn btn-default addEmpSubmitBtn">Submit</button>
									</div>
						</form>
							
						
						
                   

                    <!-- Content Row -->
                    </div>
        
								
        
      
 
							
						
							
								
								
							
							
							
							
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>


var row =0;
var rowcourse =0;
var rowBank =0;
var rowExp =0;
    $(document).ready(function(){
        $("#add-rowEducation").click(function(){
            row++
            var markup = `<div class="row" id="row_Education_${row}">
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Other Exam" class="empInput form-control" name="examPassed[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<select class="empInput form-control" name="examYear[]" style="border: 1px solid #858796;" id="sel1">
																					
											<option>Select Year</option>
											<option>2025</option>
											<option>2024</option>
											<option>2023</option>
											<option>2022</option>
											<option>2021</option>
											<option>2020</option>
											<option>2019</option>
											<option>2018</option>
											<option>2017</option>
											<option>2016</option>
											<option>2015</option>
											<option>2014</option>
											<option>2013</option>
											<option>2012</option>
											<option>2011</option>
											<option>2010</option>
											<option>2009</option>
											<option>2008</option>
											<option>2007</option>
											<option>2006</option>
											<option>2005</option>
											<option>2004</option>
											<option>2003</option>
											<option>2002</option>
											<option>2001</option>
											<option>2000</option>
											<option>1999</option>
											<option>1998</option>
											<option>1997</option>
											<option>1996</option>
											<option>1995</option>
											<option>1994</option>
											<option>1993</option>
											<option>1992</option>
											<option>1991</option>
											<option>1990</option>
											<option>1989</option>
											<option>1988</option>
											<option>1987</option>
											<option>1986</option>
											<option>1985</option>
											<option>1984</option>
											<option>1983</option>
											<option>1982</option>
											<option>1981</option>
											<option>1980</option>
											<option>1979</option>
											<option>1978</option>
											<option>1977</option>
											<option>1976</option>
											<option>1975</option>
											<option>1974</option>
											<option>1973</option>
											<option>1972</option>
											<option>1971</option>
											<option>1970</option>
											<option>1969</option>
											<option>1968</option>
											<option>1967</option>
											<option>1966</option>
											<option>1965</option>
											<option>1964</option>
											<option>1963</option>
											<option>1962</option>
											<option>1961</option>
											<option>1960</option>
											<option>1959</option>
											<option>1958</option>
											<option>1957</option>
											<option>1956</option>
											<option>1955</option>
											<option>1954</option>
											<option>1953</option>
											<option>1952</option>
											<option>1951</option>
											<option>1950</option>
											<option>1949</option>
											<option>1948</option>
											<option>1947</option>
											<option>1946</option>
											<option>1945</option>
											<option>1944</option>
											<option>1943</option>
											<option>1942</option>
											<option>1941</option>
											<option>1940</option>
											<option>1939</option>
											<option>1938</option>
											<option>1937</option>
											<option>1936</option>
											<option>1935</option>
											<option>1934</option>
											<option>1933</option>
											<option>1932</option>
											<option>1931</option>
											<option>1930</option>
											<option>1929</option>
											<option>1928</option>
											<option>1927</option>
											<option>1926</option>
											<option>1925</option>
											<option>1924</option>
											<option>1923</option>
											<option>1922</option>
											<option>1921</option>
											<option>1920</option>
											<option>1919</option>
											<option>1918</option>
											<option>1917</option>
											<option>1916</option>
											<option>1915</option>
											<option>1914</option>
											<option>1913</option>
											<option>1912</option>
											<option>1911</option>
											<option>1910</option>
											<option>1909</option>
											<option>1908</option>
											<option>1907</option>
											<option>1906</option>
											<option>1905</option>
										</select>
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Board/University" class="empInput form-control" name="examBoard[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="% Marks and Division" class="empInput form-control" name="marks[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-1">
										<button type="button" data-row="${row}" class="EducationDeleteRow"><i class="fas fa-times-circle"></i></button>
										</div>
										</div>`;
            $("#addOtherEducation").append(markup);

        });				
	
	$("body").on('.EducationDeleteRow', 'click', function(){
		alert("dekh k bhaii");
		$(this).remove();
		console.log(this);
	});
	
	
	
	$("#add-rowCourse").click(function(){
            rowcourse++
            var markup = `<div class="row" id="row_Course_${rowcourse}">
										<div class="col-lg-3" >
										<div class="form-group">
										<input type="text" placeholder="Course" class="empInput form-control" name="coursePassed[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
											<select class="empInput form-control" name="courseYear[]" style="border: 1px solid #858796;" id="sel1">
																						
												<option>Select Year</option>
												<option>2025</option>
												<option>2024</option>
												<option>2023</option>
												<option>2022</option>
												<option>2021</option>
												<option>2020</option>
												<option>2019</option>
												<option>2018</option>
												<option>2017</option>
												<option>2016</option>
												<option>2015</option>
												<option>2014</option>
												<option>2013</option>
												<option>2012</option>
												<option>2011</option>
												<option>2010</option>
												<option>2009</option>
												<option>2008</option>
												<option>2007</option>
												<option>2006</option>
												<option>2005</option>
												<option>2004</option>
												<option>2003</option>
												<option>2002</option>
												<option>2001</option>
												<option>2000</option>
												<option>1999</option>
												<option>1998</option>
												<option>1997</option>
												<option>1996</option>
												<option>1995</option>
												<option>1994</option>
												<option>1993</option>
												<option>1992</option>
												<option>1991</option>
												<option>1990</option>
												<option>1989</option>
												<option>1988</option>
												<option>1987</option>
												<option>1986</option>
												<option>1985</option>
												<option>1984</option>
												<option>1983</option>
												<option>1982</option>
												<option>1981</option>
												<option>1980</option>
												<option>1979</option>
												<option>1978</option>
												<option>1977</option>
												<option>1976</option>
												<option>1975</option>
												<option>1974</option>
												<option>1973</option>
												<option>1972</option>
												<option>1971</option>
												<option>1970</option>
												<option>1969</option>
												<option>1968</option>
												<option>1967</option>
												<option>1966</option>
												<option>1965</option>
												<option>1964</option>
												<option>1963</option>
												<option>1962</option>
												<option>1961</option>
												<option>1960</option>
												<option>1959</option>
												<option>1958</option>
												<option>1957</option>
												<option>1956</option>
												<option>1955</option>
												<option>1954</option>
												<option>1953</option>
												<option>1952</option>
												<option>1951</option>
												<option>1950</option>
												<option>1949</option>
												<option>1948</option>
												<option>1947</option>
												<option>1946</option>
												<option>1945</option>
												<option>1944</option>
												<option>1943</option>
												<option>1942</option>
												<option>1941</option>
												<option>1940</option>
												<option>1939</option>
												<option>1938</option>
												<option>1937</option>
												<option>1936</option>
												<option>1935</option>
												<option>1934</option>
												<option>1933</option>
												<option>1932</option>
												<option>1931</option>
												<option>1930</option>
												<option>1929</option>
												<option>1928</option>
												<option>1927</option>
												<option>1926</option>
												<option>1925</option>
												<option>1924</option>
												<option>1923</option>
												<option>1922</option>
												<option>1921</option>
												<option>1920</option>
												<option>1919</option>
												<option>1918</option>
												<option>1917</option>
												<option>1916</option>
												<option>1915</option>
												<option>1914</option>
												<option>1913</option>
												<option>1912</option>
												<option>1911</option>
												<option>1910</option>
												<option>1909</option>
												<option>1908</option>
												<option>1907</option>
												<option>1906</option>
												<option>1905</option>
											</select>
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Board/University" class="empInput form-control" name="courseBoard[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="% Marks and Division" class="empInput form-control" name="courseMarks[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-1">
										<button type="button" data-Course="${rowcourse}" class="CourseDeleteRow"><i class="fas fa-times-circle"></i></button>
										</div>
										</div>`;
            $("#addfullrowCourse").append(markup);
        });
		
		
		
		$("#add-rowBank").click(function(){
            rowBank++
            var markup = `<div class="row" id="row_Bank_${rowBank}">
										<div class="col-lg-3" >
										<div class="form-group">
										<input type="text" placeholder="Bank Name" class="empInput form-control" name="bankName[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Account No" class="empInput form-control" name="bankAccount[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Branch" class="empInput form-control" name="bankBranch[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="IFSC Code" class="empInput form-control" name="bankIFSCCode[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-1">
										<button type="button" data-row="${rowBank}" class="BankDeleteRow"><i class="fas fa-times-circle"></i></button>
										</div>
										
										</div>`;
            $("#addOtherBankDetails").append(markup);
        });
		
		
		
		
		$("#add-rowExperience").click(function(){
            rowExp++
            var markup = `<div class="row" id="row_Experience_${rowExp}">
										<div class="col-lg-3" >
										<div class="form-group">
										<input type="text" placeholder="Post/ Designation" class="empInput form-control" name="experienceDesignation[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="Organization" class="empInput form-control" name="experienceOrganisation[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="Duration(From To)" class="empInput form-control" name="experienceDuration[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="Experience" class="empInput form-control" name="experienceTotal[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="Salary" class="empInput form-control" name="previousSalary[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-1">
										<button type="button" data-row="${rowExp}" class="ExperienceDeleteRow"><i class="fas fa-times-circle"></i></button>
										</div>
										</div>`;
            $("#addOtherExperience").append(markup);
        });
		
		
		
		
		

			
	
	
	});						
		
	function EducationDeleteRow(arg){
		
		alert(arg);
		$("#row_Education_"+ arg).remove();
		
		console.log($("#row_Education_"+ arg));
	}
    </script>               

                    <!-- Content Row -->
                    </div>

							

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
	<script type="text/javascript">


	
	 
	
	$(document).ready(function(){
		

		$("body").on('click', '.EducationDeleteRow', function(){
		var id = $(this).attr('data-row');
		$("#row_Education_"+ id).remove();
		console.log(this);
	});
	
		$("body").on('click', '.CourseDeleteRow', function(){
		var id = $(this).attr('data-Course');
		$("#row_Course_"+ id).remove();
		console.log(this);
	});
	
		$("body").on('click', '.BankDeleteRow', function(){
		var id = $(this).attr('data-row');
		$("#row_Bank_"+ id).remove();
		console.log(this);
	});
	
		$("body").on('click', '.ExperienceDeleteRow', function(){
		var id = $(this).attr('data-row');
		$("#row_Experience_"+ id).remove();
		console.log(this);
	});
	
		
		
		
		
		
		
		
		
		
		
		
		$("#EducationDeleteRow").click(function(){
			$(this).att
		});
		
		$('.remove').click(function() { $(this).parent('div').remove(); });
		
		
		var user_state_error = true;
		var user_district_error = true;
		var user_block_error = true;
		var user_city_error = true;
		var user_mohalla_error = true;
		var first_name_error = true;
		var user_gender_error = true;
		var birthdate_error = true;
		var user_work_error = true;
		var user_login_error = true;
		var user_email_error = true;
		var user_pass_error = true;
		var user_mobile_error = true;
		$("#user_state").click(function(){
			state_check();
		});
		function state_check(){
			var state = $("#user_state");
			if(state.val() === "") {
				$("#user_state_error").show();
				$("#user_state_error").html("** State must not be empty!");
				$("#user_state_error").focus();
				$("#user_state_error").css({"color":"white", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_state_error = false;
				return false;
			}else{
				$('#user_state_error').hide();
			}
		}
		
		$("#user_district").click(function(){
			district_check();
		});
		function district_check(){
			var district = $("#user_district");
			if(district.val() === "") {
				$("#user_district_error").show();
				$("#user_district_error").html("** District must not be empty!");
				$("#user_district_error").focus();
				$("#user_district_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_district_error = false;
				return false;
			}else{
				$("#user_district_error").hide();
			}
		}
		
		$("#user_block").click(function(){
			block_check();
		});
		function block_check(){
			var block = $("#user_block");
			if(block.val() === "") {
				$("#user_block_error").show();
				$("#user_block_error").html("** Block must not be empty!");
				$("#user_block_error").focus();
				$("#user_block_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_block_error = false;
				return false;
			}else{
				$("#user_block_error").hide();
			}
		}
		
		$("#user_city").click(function(){
			city_check();
		});
		function city_check(){
			var city = $("#user_city");
			if(city.val() === "") {
				$("#user_city_error").show();
				$("#user_city_error").html("** City must not be empty!");
				$("#user_city_error").focus();
				$("#user_city_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_city_error = false;
				return false;
			}else{
				$("#user_city_error").hide();
			}
		}
		
		$("#user_mohalla").click(function(){
			mohalla_check();
		});
		function mohalla_check(){
			var mohalla = $("#user_mohalla");
			if(mohalla.val() === "") {
				$("#user_mohalla_error").show();
				$("#user_mohalla_error").html("** Mohalla must not be empty!");
				$("#user_mohalla_error").focus();
				$("#user_mohalla_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_mohalla_error = false;
				return false;
			}else{
				$("#user_mohalla_error").hide();
			}
		}
		
		$("#first_name").keyup(function(){
			name_check();
		});
		function name_check(){
			var name = $("#first_name");
			if(name.val() === "") {
				$("#first_name_error").show();
				$("#first_name_error").html("** Name must not be empty!");
				$("#first_name_error").focus();
				$("#first_name_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				first_name_error = false;
				return false;
			}else{
				$("#first_name_error").hide();
			}
		}
		function gender_check(){
			var gender = $("#user_gender");
			if(gender.val() === "") {
				$("#user_gender_error").show();
				$("#user_gender_error").html("** Gender must not be empty!");
				$("#user_gender_error").focus();
				$("#user_gender_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_gender_error = false;
				return false;
			}else{
				$("#user_gender_error").hide();
			}
		}
		
		$("#birthdate").keyup(function(){
			dobUser_check();
		});
		function dobUser_check(){
			var dobUser = $("#birthdate");
			var now =new Date(); 
			var currentY= now.getFullYear();
			var dobget = dobUser.val();
			 var dob= new Date(dobget); 
			var prevY= dob.getFullYear(); 
			var ageY =currentY - prevY;
			
			if(dobUser.val() === "") {
				$("#birthdate_error").show();
				$("#birthdate_error").html("** Date of Birth must not be empty!");
				$("#birthdate_error").focus();
				$("#birthdate_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				birthdate_error = false;
				return false;
			}else if(ageY <= 18){
				$("#birthdate_error").show();
				$("#birthdate_error").html("** Date of Birth must not Less Than Or Equal to 18!");
				$("#birthdate_error").focus();
				$("#birthdate_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				birthdate_error = false;
				return false;
			}else{
				$("#birthdate_error").hide();
			}
		}
		
		$("#user_work").keyup(function(){
			Userwork_check();
		});
		function Userwork_check(){
			var Userwork = $("#user_work");
			if(Userwork.val() === "") {
				$("#user_work_error").show();
				$("#user_work_error").html("** Date of Birth must not be empty!");
				$("#user_work_error").focus();
				$("#user_work_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_work_error = false;
				return false;
			}else{
				true;
			}
		}
		
		$("#user_login").keyup(function(){
			Userlogin_check();
		});
		function Userlogin_check(){
			var Userlogin = $("#user_login");
			if(Userlogin.val() === "") {
				$("#user_login_error").show();
				$("#user_login_error").html("** UserName must not be empty!");
				$("#user_login_error").focus();
				$("#user_login_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_login_error = false;
				return false;
			}else{
				true;
			}
		}
		
		$("#user_email").keyup(function(){
			Useremail_check();
		});
		function Useremail_check(){
			var Useremail = $("#user_email");
			if(Useremail.val() === "") {
				$("#user_email_error").show();
				$("#user_email_error").html("** Email must not be empty!");
				$("#user_email_error").focus();
				$("#user_email_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_email_error = false;
				return false;
			}else{
				true;
			}
		}
		
		$("#user_pass").keyup(function(){
			Userpass_check();
		});
		function Userpass_check(){
			var Userpass = $("#user_pass");
			if(Userpass.val() === "") {
				$("#user_pass_error").show();
				$("#user_pass_error").html("** Password must not be empty!");
				$("#user_pass_error").focus();
				$("#user_pass_error").css({"color":"#ffffff", "background-color":"#FFCBA4", "border-radius":"5%", "padding":"5px", "font-size":"15px"});
				user_pass_error = false;
				
				return false;
			}else{
				true;
			}
		}
		
		$("#user_mobile").keyup(function(){
			Usermobile_check();
		});
		function Usermobile_check(){
			var Usermobile = $("#user_mobile");
			var mobile = Usermobile.val();
			if(Usermobile.val() === "") {
				$("#user_mobile_error").show();
				$("#user_mobile_error").html("** Mobile Number must not be empty!");
				$("#user_mobile_error").focus();
				$("#user_mobile_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_mobile_error = false;
				return false;
			}else if(isNaN(mobile)){
				$("#user_mobile_error").show();
				$("#user_mobile_error").html("** Mobile Number must be Intiger Value Only!");
				$("#user_mobile_error").focus();
				$("#user_mobile_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_mobile_error = false;
				return false;
			}else if(mobile.length != 10){
				$("#user_mobile_error").show();
				$("#user_mobile_error").html("** Mobile Number must be 10 Digit!");
				$("#user_mobile_error").focus();
				$("#user_mobile_error").css({"color":"#ffffff", "background-color":"#F08080", "border-radius":"5%", "padding":"2px", "font-size":"13px"});
				user_mobile_error = false;
				return false;
			}else{
				$("#user_mobile_error").hide();
			}
		}
		
		
		
		$("#submitButton").click(function(){
			user_state_error = true;
			user_district_error = true;
			user_block_error = true;
			user_city_error = true;
			user_mohalla_error = true;
			first_name_error = true;
			user_gender_error = true;
			birthdate_error = true;
			user_work_error = true;
			user_login_error = true;
			user_email_error = true;
			user_pass_error = true;
			user_mobile_error = true;
			
			state_check();
			district_check();
			block_check();
			city_check();
			mohalla_check();
			name_check();
			gender_check();
			dobUser_check();
			Userwork_check();
			Userlogin_check();
			Useremail_check();
			Userpass_check();
			Usermobile_check();
			
			if(
			(user_state_error == true) && 
			(user_district_error == true) &&
			(user_city_error == true) &&
			(user_mohalla_error == true) &&
			(first_name_error == true) &&
			(user_gender_error == true) &&
			(birthdate_error == true) &&
			(user_work_error == true) &&
			(user_login_error == true) &&
			(user_email_error == true) &&
			(user_pass_error == true) &&
			(user_mobile_error == true) &&
			(user_block_error == true)
			
			){
				return true;
			}else{
				return false;
		    }
			
		});
		
	});
	
	
	
	
	
	
</script>

<?php include('footer.php'); ?>