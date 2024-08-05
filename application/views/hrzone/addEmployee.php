<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
<style>
.addEmpSubmitBtn{
    color: white!important;
    float: center;
    background: #1C304C;
    font-weight: 400;
    border-radius: 5px!important;
    padding: 0.2em 2em 0.2em 2em;
    border: none !important;
    border-radius: 3px!important;
}
.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}

.card{
	border:none;
}
.tnemp {
  float: left;
	
}
.tnemp a {
  display: block;
  color: #4c3f5e;
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

.Aemp i{
    color:#1C304C;
}
 
.empInput{
	border: 1px solid #9c50ff94!important;
    border-radius: 3px;
	overflow:hidden!important;
	
	padding: .2rem .75rem!important;
    font-size: 12px!important;
    color: #000!important;
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
    margin-bottom: 2px;
    color: #343434;
    font-size: 14px;
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
	margin-left:13px;
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
  color:#4c3f5e!important;
	
}
.APemp a {
  display: block;
  color: #4c3f5e!important;
  text-align: center;
  margin-left:9px;
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

.ColorSecondaryNotes{
  background-color: #00d3c3;
  padding: 0.35rem 1.2rem!important;
    border: 1px solid #c4b4cc;
    color: #343434;
    font-style: italic;
     font-weight: 800;
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

input[type="date"]
{
    display:block;
  
    /* Solution 1 */
     -webkit-appearance: textfield;
    -moz-appearance: textfield;
    min-height: 1.2em; 
  
    /* Solution 2 */
    /* min-width: 96%; */
}  

.ColorPrimary {
    color: white;
    font-size: 16px;
    margin-bottom: 6px;
    margin-left: 18px;
}
.card-header {
    border-radius: 2px 2px 0px 0px !important;
}

.fa-user{
    color:#1C304C;
}
 </style>
        
		<?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="conatiner-fluid col-lg-10" style="margin-bottom:50px;padding-left:25px;">

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
						<div class="ColorSecondaryPre card-header" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary">New Employee</h5>
                        </div>		
                        
								
						<div class=" " style="margin-bottom: 20px;">
											<ul class="APUemp ColorSecondaryNotes">
											<li class="APemp"><a href="#"><span><small style="font-weight:700;">Please Fill the Personal Details in below section.</small></span></a></li>
											</ul>

											
										</div>
									
						<?php echo form_open_multipart('hrzone/Employee/AddEmployeeQDX'); ?>
							
								<div class="card-body">
										<div class="row" >
										<div class="col-lg-12 " >
											<ul class="tnUemp ">
											<li class="tnemp "><a href="#"><i class="fa fa-user " aria-hidden="true"></i>&nbsp;&nbsp;Personal Details</a></li>
											
											</ul>

											</div>
										</div>
										
										
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" class="empInput form-control" name="name" style="border: 1px solid #858796;" id="email" placeholder="Full Name">
										</div>
										<span id="user_Name_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Email ID" class="empInput form-control" name="email" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_Email_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Employee ID" class="empInput form-control" name="employee_id" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_EmployeeID_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Phone" class="empInput form-control" name="phone" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_Phone_error"></span>
										</div>
										
										
										
										</div>
										</div>
										<div class="col-lg-12">
										<div class="row" >
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Alternate Phone" class="empInput form-control" name="alternatePhone" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_AlternatePhone_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
											<select class="empInput form-control" name="maritalStatus" style="border: 1px solid #858796;" id="sel1">
											<option value="">Marital Status</option>
											<option>Married</option>
											<option>Unmarried</option>
											</select>
										</div>
										<span id="user_MaritalStatus_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Father's Name" class="empInput form-control" name="fatherName" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Spouse Name" class="empInput form-control" name="spouseName" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" placeholder="Local Address" class="empInput form-control" name="localAddress" style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_Local_error"></span>
										</div>
										<div class="col-lg-6">
										<div class="form-group">
										<input type="text" placeholder="Permanent Address" class="empInput form-control" name="permanentAddress" style="border: 1px solid #858796;" id="email">
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
										<input type="date" class="empInput form-control" name="dob"  style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_DOB_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label>Joining Date</label>
										<input type="date" placeholder="Joining Date" class="empInput form-control" name="joiningDate"  style="border: 1px solid #858796;" id="email">
										</div>
										<span id="user_Joining_error"></span>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<label for="email">Position</label>
										<select class="form-control empInput" placeholder="position" name="position" style="border: 1px solid #858796;" id="sel1">
										
											<option value="">Select</option>
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
										<label for="email">Personal Email ID</label>
										<input type="email" placeholder="Personal Email ID" class="empInput form-control" name="personalEmail" style="border: 1px solid #858796;" id="email">
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
										<select class="form-control empInput" placeholder="position" name="parentLevel" style="border: 1px solid #858796;" id="sel1">
										
											
									
								
				
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
										<input type="file" placeholder="Profile Image" class="empInput form-control" name="EmpProfileImage[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										</div>
										</div>
										
										
										
										
									
										</div>
										
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#">Education Qu<span><small>|&nbsp;&nbsp; (Please Fill the Education Qualification Details.)</small></span></a></li>
											<li class="Aemp" style="float:right;"><a id="add-rowEducation" href="javascript:void(0)"><span><small>Add</small></span>+</a></li>
											</ul>

											
										</div>
										
										
										
										
										<div class="card-body">
										<div class="col-lg-12" >
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="10th Exam Passed" class="empInput form-control" name="examPassed[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<select class="empInput form-control" name="examYear[]" style="border: 1px solid #858796;" id="sel1">
																					
											<option value="">Select Year</option>
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
										
										</div>
										</div>
										
										<div class="col-lg-12" >
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="12th Exam Passed" class="empInput form-control" name="examPassed[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
											<select class="empInput form-control" name="examYear[]" style="border: 1px solid #858796;" id="sel1">
																					
											<option value="">Select Year</option>
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
										
										</div>
										</div>
										
										<div class="col-lg-12" id="addOtherEducation">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Graduation Exam Passed" class="empInput form-control" name="examPassed[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
											<select class="empInput form-control" name="examYear[]" style="border: 1px solid #858796;" id="sel1">
																					
											<option value="">Select Year</option>
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
										
										</div>
										</div>
										
										
										
										</div>
										
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#">Course&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Course Details.)</small></span></a></li>
											<li class="Aemp" style="float:right;" id="add-rowCourse"><a id="add-rowCourse" href="javascript:void(0)"><span><small>Add</small></span>+</a></li>
											</ul>

											
										</div>
										
										
										
										
										<div class="card-body">
										<div class="col-lg-12" id="addfullrowCourse">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Course" class="empInput form-control" name="coursePassed[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
											<select class="empInput form-control" name="courseYear[]" style="border: 1px solid #858796;" id="sel1">
																					
											<option value="">Select Year</option>
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
										<input type="text" placeholder="Name of Institute" class="empInput form-control" name="courseBoard[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-2">
										<div class="form-group">
										<input type="text" placeholder="% Marks and Division" class="empInput form-control" name="courseMarks[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										</div>
										</div>
										
										
										
										
									
										
										</div>
										
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#">Bank Account&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Bank Account Details.)</small></span></a></li>
											<li class="Aemp" style="float:right;" id="add-rowBank"><a id="add-rowBank" href="javascript:void(0)"><span><small>Add</small></span>+</a></li>
											</ul>

											
										</div>
										
										
										
										
										<div class="card-body">
										<div class="col-lg-12" id="addOtherBankDetails" >
										<div class="row" >
										<div class="col-lg-3">
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
										
										
										</div>
										</div>
										
										
										
										
										</div>
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#">Work Experience&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Work Experience Details.)</small></span></a></li>
											<li class="Aemp" style="float:right;" id="add-rowExperience"><a id="add-rowCourse" href="javascript:void(0)"><span><small>Add</small></span>+</a></li>
											</ul>

											
										</div>
										
										
										
										
										<div class="card-body">
										<div class="col-lg-12" id="addOtherExperience">
										<div class="row" >
										<div class="col-lg-3">
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
										</div>
										</div>
										
										
										
										
										</div>
										
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#">Attachments&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please write the file name and select the related file in below section.)</small></span></a></li>
											</ul>

											
										</div>
										
										
										
										
										<div class="card-body">
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text"  placeholder="Aadhar Card" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;" id="email" >
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" id="email" multiple/>
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Pan Card" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" id="email" multiple/>
										</div>
										</div>
										
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Residential Proof" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" id="email" multiple/>
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Last-3-month Salary Slip" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" id="email" multiple/>
										</div>
										</div>
										
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Joining Letter" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" id="email" multiple/>
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Reliving Letter" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" id="email" multiple/>
										</div>
										</div>
										
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="10th Marksheet" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" id="email" multiple/>
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="12th Marksheet" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" id="email" multiple/>
										</div>
										</div>
										
										
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Graduation Marksheet" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" id="email" multiple/>
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<input type="text" placeholder="Other Course Certificate" class="empInput form-control" name="fileName[]" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										<div class="col-lg-3">
										<div class="form-group">
										<input type="file" class="empInput form-control" name="filePath[]" style="border: 1px solid #858796;" id="email" multiple/>
										</div>
										</div>
										
										
										
										</div>
										</div>
										</div>
										
										
										<div class="card-header Aqdx col-lg-12 ColorSecondary">
											<ul class="AUemp">
											<li class="Aemp"><a href="#">Salary&nbsp;&nbsp;|&nbsp;&nbsp; Office Use Only<span><small></small></span></a></li>
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
										<input type="text" class="empInput salaryInput form-control" name="monthlySalary" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Gross Salary</label>
										<input type="text" class="empInput salaryInput form-control" name="grossSalary" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Basic</label>
										<input type="text" class="empInput salaryInput form-control" name="basicSalary" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Mobile Expenses</label>
										<input type="text" class="empInput salaryInput form-control" name="mobileExpenses" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										</div>
										</div>
										<div class="col-lg-12">
										<div class="row" >
										
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>HRA</label>
										<input type="text" class="empInput salaryInput form-control" name="HRA" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Dearness Allowance</label>
										<input type="text" class="empInput salaryInput form-control" name="dearnessAllowance" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Conveyance</label>
										<input type="text" class="empInput salaryInput form-control" name="Conveyance" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Medical Allowance</label>
										<input type="text" class="empInput salaryInput form-control" name="Medical" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										</div>
										</div>
										
										
										
										<div class="col-lg-12">
										<div class="row" >
										
										
										
										
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Special Allowance</label>
										<input type="text" class="empInput salaryInput form-control" name="specialAllowance" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Performance Incentives</label>
										<input type="text" class="empInput salaryInput form-control" name="performanceIncentives" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Arrears/Other Ern</label>
										<input type="text" class="empInput salaryInput form-control" name="otherOrArrears" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Bonus(If Applicable)</label>
										<input type="text" class="empInput salaryInput form-control" name="Bonus" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										</div>
										</div>
										
										<div class="col-lg-12">
										<div class="row" >
										
										
										
										
										
										
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Pan Card</label>
										<input type="text" class="empInput salaryInput form-control" name="pancard" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Aadhar Card</label>
										<input type="text" class="empInput salaryInput form-control" name="aadharcard" style="border: 1px solid #858796;" id="email">
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
										<input type="text" class="empInput salaryInput form-control" name="eProvidentFund" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>ESI</label>
										<input type="text" class="empInput salaryInput form-control" name="ESI" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Professional Tax</label>
										<input type="text" class="empInput salaryInput form-control" name="professionalTax" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>I.Tax</label>
										<input type="text" class="empInput salaryInput form-control" name="ITax" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										
										
										
										
										
										
										
										</div>
										</div>
										
										
										<div class="col-lg-12">
										<div class="row" >
										
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Loan</label>
										<input type="text" class="empInput salaryInput form-control" name="Loan" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Advance</label>
										<input type="text" class="empInput salaryInput form-control" name="Advance" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										<div class="col-lg-3">
										<div class="form-group">
										<label>Misc. Deduction</label>
										<input type="text" class="empInput salaryInput form-control" name="miscDeduction" style="border: 1px solid #858796;" id="email">
										</div>
										</div>
										
										
										
										</div>
										</div>
										
										
										
																
										
										
										
										
										
									
									
										<div style="display: flex;justify-content: center;"><button type="submit" class="btn btn-default addEmpSubmitBtn">Create</button></div>
							
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
																					
											<option value="">Select Year</option>
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
																					
											<option value="">Select Year</option>
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
										<input type="text" placeholder="Name of Institute" class="empInput form-control" name="courseBoard[]" style="border: 1px solid #858796;" id="email">
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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
	
		
		
		
		
		
		
		
		
		
	
		
	});
	
	
	
	
	$(document).ready(function(){

    $("#startdate").datepicker({
        todayBtn:  1,
        autoclose: true,
    }).on('changeDate', function (selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#enddate').datepicker('setStartDate', minDate);
    });

    $("#enddate").datepicker()
        .on('changeDate', function (selected) {
            var maxDate = new Date(selected.date.valueOf());
            $('#startdate').datepicker('setEndDate', maxDate);
        });

});
	
	
	
</script>
link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>        
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>                
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>`
<?php include('footer.php'); ?>