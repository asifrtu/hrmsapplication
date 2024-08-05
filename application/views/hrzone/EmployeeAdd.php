<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>
<style>
.addEmpSubmitBtn{
	margin: 0px 445px;
	color:white!important;
    
	float:center;
    background: #1C304C;
    
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
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
	background-color:#504a94;
	padding: .35rem 1.25rem!important;
	
}

.ColorSecondaryNotes{
	background-color:#E0E0E0;
	padding: .35rem 1.25rem!important;
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
 </style>
        
		<?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:16px; margin-bottom:50px; width:1050px!important;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary">New Employee</h5>
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
										
										
										<div class="col-lg-12 " style="margin-bottom: 20px;">
											<ul class="APUemp ColorSecondaryNotes">
											<li class="APemp"><a href="#"><span><small>Please Fill the Personal Details in below section.</small></span></a></li>
											</ul>

											
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
											<option>Marital Status</option>
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
										<select class="form-control" placeholder="position" name="position" style="border: 1px solid #858796;" id="sel1">
										
											<option>select</option>
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
										<div class="col-lg-2">
										<div class="form-group">
										<label for="email">Position</label>
										
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
            echo'<select class="form-control" placeholder="position" name="position" style="border: 1px solid #858796;" id="sel1">';
            echo'<option>select</option>';

            foreach ($branch[$parentId] as $keyBranch => $itemBranch) {
				echo '<option class="'.$itemBranch["name"].'">'.$itemBranch['name'];
						
				buildTree($elements, $branch, $itemBranch["id"]); // iterate with the actual Id to check if this record have childs
				echo '</option>';
            }
            echo '</select>';
        }
    }

   
 echo buildTree($elements, array());
				
				?>
										
										
											
											
										
										</div>
										<span id="user_Position_error"></span>
										</div>
										
										
										<div class="col-lg-1">
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
											<li class="Aemp"><a href="#"><i class=" fas fa-graduation-cap"></i>&nbsp;&nbsp;Education Qualification&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Education Qualification Details.)</small></span></a></li>
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
																					
											<option value="2018">Select Year</option>
											<option value="2018">2025</option>
											<option value="2018">2024</option>
											<option value="2018">2023</option>
											<option value="2018">2022</option>
											<option value="2018">2021</option>
											<option value="2018">2020</option>
											<option value="2018">2019</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2011">2011</option>
											<option value="2010">2010</option>
											<option value="2009">2009</option>
											<option value="2008">2008</option>
											<option value="2007">2007</option>
											<option value="2006">2006</option>
											<option value="2005">2005</option>
											<option value="2004">2004</option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
											<option value="1980">1980</option>
											<option value="1979">1979</option>
											<option value="1978">1978</option>
											<option value="1977">1977</option>
											<option value="1976">1976</option>
											<option value="1975">1975</option>
											<option value="1974">1974</option>
											<option value="1973">1973</option>
											<option value="1972">1972</option>
											<option value="1971">1971</option>
											<option value="1970">1970</option>
											<option value="1969">1969</option>
											<option value="1968">1968</option>
											<option value="1967">1967</option>
											<option value="1966">1966</option>
											<option value="1965">1965</option>
											<option value="1964">1964</option>
											<option value="1963">1963</option>
											<option value="1962">1962</option>
											<option value="1961">1961</option>
											<option value="1960">1960</option>
											<option value="1959">1959</option>
											<option value="1958">1958</option>
											<option value="1957">1957</option>
											<option value="1956">1956</option>
											<option value="1955">1955</option>
											<option value="1954">1954</option>
											<option value="1953">1953</option>
											<option value="1952">1952</option>
											<option value="1951">1951</option>
											<option value="1950">1950</option>
											<option value="1949">1949</option>
											<option value="1948">1948</option>
											<option value="1947">1947</option>
											<option value="1946">1946</option>
											<option value="1945">1945</option>
											<option value="1944">1944</option>
											<option value="1943">1943</option>
											<option value="1942">1942</option>
											<option value="1941">1941</option>
											<option value="1940">1940</option>
											<option value="1939">1939</option>
											<option value="1938">1938</option>
											<option value="1937">1937</option>
											<option value="1936">1936</option>
											<option value="1935">1935</option>
											<option value="1934">1934</option>
											<option value="1933">1933</option>
											<option value="1932">1932</option>
											<option value="1931">1931</option>
											<option value="1930">1930</option>
											<option value="1929">1929</option>
											<option value="1928">1928</option>
											<option value="1927">1927</option>
											<option value="1926">1926</option>
											<option value="1925">1925</option>
											<option value="1924">1924</option>
											<option value="1923">1923</option>
											<option value="1922">1922</option>
											<option value="1921">1921</option>
											<option value="1920">1920</option>
											<option value="1919">1919</option>
											<option value="1918">1918</option>
											<option value="1917">1917</option>
											<option value="1916">1916</option>
											<option value="1915">1915</option>
											<option value="1914">1914</option>
											<option value="1913">1913</option>
											<option value="1912">1912</option>
											<option value="1911">1911</option>
											<option value="1910">1910</option>
											<option value="1909">1909</option>
											<option value="1908">1908</option>
											<option value="1907">1907</option>
											<option value="1906">1906</option>
											<option value="1905">1905</option>
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
																					
											<option value="2018">Select Year</option>
											<option value="2018">2025</option>
											<option value="2018">2024</option>
											<option value="2018">2023</option>
											<option value="2018">2022</option>
											<option value="2018">2021</option>
											<option value="2018">2020</option>
											<option value="2018">2019</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2011">2011</option>
											<option value="2010">2010</option>
											<option value="2009">2009</option>
											<option value="2008">2008</option>
											<option value="2007">2007</option>
											<option value="2006">2006</option>
											<option value="2005">2005</option>
											<option value="2004">2004</option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
											<option value="1980">1980</option>
											<option value="1979">1979</option>
											<option value="1978">1978</option>
											<option value="1977">1977</option>
											<option value="1976">1976</option>
											<option value="1975">1975</option>
											<option value="1974">1974</option>
											<option value="1973">1973</option>
											<option value="1972">1972</option>
											<option value="1971">1971</option>
											<option value="1970">1970</option>
											<option value="1969">1969</option>
											<option value="1968">1968</option>
											<option value="1967">1967</option>
											<option value="1966">1966</option>
											<option value="1965">1965</option>
											<option value="1964">1964</option>
											<option value="1963">1963</option>
											<option value="1962">1962</option>
											<option value="1961">1961</option>
											<option value="1960">1960</option>
											<option value="1959">1959</option>
											<option value="1958">1958</option>
											<option value="1957">1957</option>
											<option value="1956">1956</option>
											<option value="1955">1955</option>
											<option value="1954">1954</option>
											<option value="1953">1953</option>
											<option value="1952">1952</option>
											<option value="1951">1951</option>
											<option value="1950">1950</option>
											<option value="1949">1949</option>
											<option value="1948">1948</option>
											<option value="1947">1947</option>
											<option value="1946">1946</option>
											<option value="1945">1945</option>
											<option value="1944">1944</option>
											<option value="1943">1943</option>
											<option value="1942">1942</option>
											<option value="1941">1941</option>
											<option value="1940">1940</option>
											<option value="1939">1939</option>
											<option value="1938">1938</option>
											<option value="1937">1937</option>
											<option value="1936">1936</option>
											<option value="1935">1935</option>
											<option value="1934">1934</option>
											<option value="1933">1933</option>
											<option value="1932">1932</option>
											<option value="1931">1931</option>
											<option value="1930">1930</option>
											<option value="1929">1929</option>
											<option value="1928">1928</option>
											<option value="1927">1927</option>
											<option value="1926">1926</option>
											<option value="1925">1925</option>
											<option value="1924">1924</option>
											<option value="1923">1923</option>
											<option value="1922">1922</option>
											<option value="1921">1921</option>
											<option value="1920">1920</option>
											<option value="1919">1919</option>
											<option value="1918">1918</option>
											<option value="1917">1917</option>
											<option value="1916">1916</option>
											<option value="1915">1915</option>
											<option value="1914">1914</option>
											<option value="1913">1913</option>
											<option value="1912">1912</option>
											<option value="1911">1911</option>
											<option value="1910">1910</option>
											<option value="1909">1909</option>
											<option value="1908">1908</option>
											<option value="1907">1907</option>
											<option value="1906">1906</option>
											<option value="1905">1905</option>
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
																					
											<option value="2018">Select Year</option>
											<option value="2018">2025</option>
											<option value="2018">2024</option>
											<option value="2018">2023</option>
											<option value="2018">2022</option>
											<option value="2018">2021</option>
											<option value="2018">2020</option>
											<option value="2018">2019</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2011">2011</option>
											<option value="2010">2010</option>
											<option value="2009">2009</option>
											<option value="2008">2008</option>
											<option value="2007">2007</option>
											<option value="2006">2006</option>
											<option value="2005">2005</option>
											<option value="2004">2004</option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
											<option value="1980">1980</option>
											<option value="1979">1979</option>
											<option value="1978">1978</option>
											<option value="1977">1977</option>
											<option value="1976">1976</option>
											<option value="1975">1975</option>
											<option value="1974">1974</option>
											<option value="1973">1973</option>
											<option value="1972">1972</option>
											<option value="1971">1971</option>
											<option value="1970">1970</option>
											<option value="1969">1969</option>
											<option value="1968">1968</option>
											<option value="1967">1967</option>
											<option value="1966">1966</option>
											<option value="1965">1965</option>
											<option value="1964">1964</option>
											<option value="1963">1963</option>
											<option value="1962">1962</option>
											<option value="1961">1961</option>
											<option value="1960">1960</option>
											<option value="1959">1959</option>
											<option value="1958">1958</option>
											<option value="1957">1957</option>
											<option value="1956">1956</option>
											<option value="1955">1955</option>
											<option value="1954">1954</option>
											<option value="1953">1953</option>
											<option value="1952">1952</option>
											<option value="1951">1951</option>
											<option value="1950">1950</option>
											<option value="1949">1949</option>
											<option value="1948">1948</option>
											<option value="1947">1947</option>
											<option value="1946">1946</option>
											<option value="1945">1945</option>
											<option value="1944">1944</option>
											<option value="1943">1943</option>
											<option value="1942">1942</option>
											<option value="1941">1941</option>
											<option value="1940">1940</option>
											<option value="1939">1939</option>
											<option value="1938">1938</option>
											<option value="1937">1937</option>
											<option value="1936">1936</option>
											<option value="1935">1935</option>
											<option value="1934">1934</option>
											<option value="1933">1933</option>
											<option value="1932">1932</option>
											<option value="1931">1931</option>
											<option value="1930">1930</option>
											<option value="1929">1929</option>
											<option value="1928">1928</option>
											<option value="1927">1927</option>
											<option value="1926">1926</option>
											<option value="1925">1925</option>
											<option value="1924">1924</option>
											<option value="1923">1923</option>
											<option value="1922">1922</option>
											<option value="1921">1921</option>
											<option value="1920">1920</option>
											<option value="1919">1919</option>
											<option value="1918">1918</option>
											<option value="1917">1917</option>
											<option value="1916">1916</option>
											<option value="1915">1915</option>
											<option value="1914">1914</option>
											<option value="1913">1913</option>
											<option value="1912">1912</option>
											<option value="1911">1911</option>
											<option value="1910">1910</option>
											<option value="1909">1909</option>
											<option value="1908">1908</option>
											<option value="1907">1907</option>
											<option value="1906">1906</option>
											<option value="1905">1905</option>
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
											<li class="Aemp"><a href="#"><i class=" fas fa-chalkboard-teacher"></i></i>&nbsp;&nbsp;Course&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Course Details.)</small></span></a></li>
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
																					
											<option value="2018">Select Year</option>
											<option value="2018">2025</option>
											<option value="2018">2024</option>
											<option value="2018">2023</option>
											<option value="2018">2022</option>
											<option value="2018">2021</option>
											<option value="2018">2020</option>
											<option value="2018">2019</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2011">2011</option>
											<option value="2010">2010</option>
											<option value="2009">2009</option>
											<option value="2008">2008</option>
											<option value="2007">2007</option>
											<option value="2006">2006</option>
											<option value="2005">2005</option>
											<option value="2004">2004</option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
											<option value="1980">1980</option>
											<option value="1979">1979</option>
											<option value="1978">1978</option>
											<option value="1977">1977</option>
											<option value="1976">1976</option>
											<option value="1975">1975</option>
											<option value="1974">1974</option>
											<option value="1973">1973</option>
											<option value="1972">1972</option>
											<option value="1971">1971</option>
											<option value="1970">1970</option>
											<option value="1969">1969</option>
											<option value="1968">1968</option>
											<option value="1967">1967</option>
											<option value="1966">1966</option>
											<option value="1965">1965</option>
											<option value="1964">1964</option>
											<option value="1963">1963</option>
											<option value="1962">1962</option>
											<option value="1961">1961</option>
											<option value="1960">1960</option>
											<option value="1959">1959</option>
											<option value="1958">1958</option>
											<option value="1957">1957</option>
											<option value="1956">1956</option>
											<option value="1955">1955</option>
											<option value="1954">1954</option>
											<option value="1953">1953</option>
											<option value="1952">1952</option>
											<option value="1951">1951</option>
											<option value="1950">1950</option>
											<option value="1949">1949</option>
											<option value="1948">1948</option>
											<option value="1947">1947</option>
											<option value="1946">1946</option>
											<option value="1945">1945</option>
											<option value="1944">1944</option>
											<option value="1943">1943</option>
											<option value="1942">1942</option>
											<option value="1941">1941</option>
											<option value="1940">1940</option>
											<option value="1939">1939</option>
											<option value="1938">1938</option>
											<option value="1937">1937</option>
											<option value="1936">1936</option>
											<option value="1935">1935</option>
											<option value="1934">1934</option>
											<option value="1933">1933</option>
											<option value="1932">1932</option>
											<option value="1931">1931</option>
											<option value="1930">1930</option>
											<option value="1929">1929</option>
											<option value="1928">1928</option>
											<option value="1927">1927</option>
											<option value="1926">1926</option>
											<option value="1925">1925</option>
											<option value="1924">1924</option>
											<option value="1923">1923</option>
											<option value="1922">1922</option>
											<option value="1921">1921</option>
											<option value="1920">1920</option>
											<option value="1919">1919</option>
											<option value="1918">1918</option>
											<option value="1917">1917</option>
											<option value="1916">1916</option>
											<option value="1915">1915</option>
											<option value="1914">1914</option>
											<option value="1913">1913</option>
											<option value="1912">1912</option>
											<option value="1911">1911</option>
											<option value="1910">1910</option>
											<option value="1909">1909</option>
											<option value="1908">1908</option>
											<option value="1907">1907</option>
											<option value="1906">1906</option>
											<option value="1905">1905</option>
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
											<li class="Aemp"><a href="#"><i class=" fas fa-landmark"></i>&nbsp;&nbsp;Bank Account&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Bank Account Details.)</small></span></a></li>
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
											<li class="Aemp"><a href="#"><i class=" fas fa-briefcase"></i>&nbsp;&nbsp;Work Experience&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please Fill the Work Experience Details.)</small></span></a></li>
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
											<li class="Aemp"><a href="#"><i class=" fa fa-paperclip"></i>&nbsp;&nbsp;Attachments&nbsp;&nbsp;<span><small>|&nbsp;&nbsp; (Please write the file name and select the related file in below section.)</small></span></a></li>
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
										
										
										
																
										
										
										
										
										
									
									
							<button type="submit" class="btn btn-default addEmpSubmitBtn">Create</button>
							
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
																					
											<option value="2018">Select Year</option>
											<option value="2018">2025</option>
											<option value="2018">2024</option>
											<option value="2018">2023</option>
											<option value="2018">2022</option>
											<option value="2018">2021</option>
											<option value="2018">2020</option>
											<option value="2018">2019</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2011">2011</option>
											<option value="2010">2010</option>
											<option value="2009">2009</option>
											<option value="2008">2008</option>
											<option value="2007">2007</option>
											<option value="2006">2006</option>
											<option value="2005">2005</option>
											<option value="2004">2004</option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
											<option value="1980">1980</option>
											<option value="1979">1979</option>
											<option value="1978">1978</option>
											<option value="1977">1977</option>
											<option value="1976">1976</option>
											<option value="1975">1975</option>
											<option value="1974">1974</option>
											<option value="1973">1973</option>
											<option value="1972">1972</option>
											<option value="1971">1971</option>
											<option value="1970">1970</option>
											<option value="1969">1969</option>
											<option value="1968">1968</option>
											<option value="1967">1967</option>
											<option value="1966">1966</option>
											<option value="1965">1965</option>
											<option value="1964">1964</option>
											<option value="1963">1963</option>
											<option value="1962">1962</option>
											<option value="1961">1961</option>
											<option value="1960">1960</option>
											<option value="1959">1959</option>
											<option value="1958">1958</option>
											<option value="1957">1957</option>
											<option value="1956">1956</option>
											<option value="1955">1955</option>
											<option value="1954">1954</option>
											<option value="1953">1953</option>
											<option value="1952">1952</option>
											<option value="1951">1951</option>
											<option value="1950">1950</option>
											<option value="1949">1949</option>
											<option value="1948">1948</option>
											<option value="1947">1947</option>
											<option value="1946">1946</option>
											<option value="1945">1945</option>
											<option value="1944">1944</option>
											<option value="1943">1943</option>
											<option value="1942">1942</option>
											<option value="1941">1941</option>
											<option value="1940">1940</option>
											<option value="1939">1939</option>
											<option value="1938">1938</option>
											<option value="1937">1937</option>
											<option value="1936">1936</option>
											<option value="1935">1935</option>
											<option value="1934">1934</option>
											<option value="1933">1933</option>
											<option value="1932">1932</option>
											<option value="1931">1931</option>
											<option value="1930">1930</option>
											<option value="1929">1929</option>
											<option value="1928">1928</option>
											<option value="1927">1927</option>
											<option value="1926">1926</option>
											<option value="1925">1925</option>
											<option value="1924">1924</option>
											<option value="1923">1923</option>
											<option value="1922">1922</option>
											<option value="1921">1921</option>
											<option value="1920">1920</option>
											<option value="1919">1919</option>
											<option value="1918">1918</option>
											<option value="1917">1917</option>
											<option value="1916">1916</option>
											<option value="1915">1915</option>
											<option value="1914">1914</option>
											<option value="1913">1913</option>
											<option value="1912">1912</option>
											<option value="1911">1911</option>
											<option value="1910">1910</option>
											<option value="1909">1909</option>
											<option value="1908">1908</option>
											<option value="1907">1907</option>
											<option value="1906">1906</option>
											<option value="1905">1905</option>
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
																					
											<option value="2018">Select Year</option>
											<option value="2018">2025</option>
											<option value="2018">2024</option>
											<option value="2018">2023</option>
											<option value="2018">2022</option>
											<option value="2018">2021</option>
											<option value="2018">2020</option>
											<option value="2018">2019</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2011">2011</option>
											<option value="2010">2010</option>
											<option value="2009">2009</option>
											<option value="2008">2008</option>
											<option value="2007">2007</option>
											<option value="2006">2006</option>
											<option value="2005">2005</option>
											<option value="2004">2004</option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
											<option value="1980">1980</option>
											<option value="1979">1979</option>
											<option value="1978">1978</option>
											<option value="1977">1977</option>
											<option value="1976">1976</option>
											<option value="1975">1975</option>
											<option value="1974">1974</option>
											<option value="1973">1973</option>
											<option value="1972">1972</option>
											<option value="1971">1971</option>
											<option value="1970">1970</option>
											<option value="1969">1969</option>
											<option value="1968">1968</option>
											<option value="1967">1967</option>
											<option value="1966">1966</option>
											<option value="1965">1965</option>
											<option value="1964">1964</option>
											<option value="1963">1963</option>
											<option value="1962">1962</option>
											<option value="1961">1961</option>
											<option value="1960">1960</option>
											<option value="1959">1959</option>
											<option value="1958">1958</option>
											<option value="1957">1957</option>
											<option value="1956">1956</option>
											<option value="1955">1955</option>
											<option value="1954">1954</option>
											<option value="1953">1953</option>
											<option value="1952">1952</option>
											<option value="1951">1951</option>
											<option value="1950">1950</option>
											<option value="1949">1949</option>
											<option value="1948">1948</option>
											<option value="1947">1947</option>
											<option value="1946">1946</option>
											<option value="1945">1945</option>
											<option value="1944">1944</option>
											<option value="1943">1943</option>
											<option value="1942">1942</option>
											<option value="1941">1941</option>
											<option value="1940">1940</option>
											<option value="1939">1939</option>
											<option value="1938">1938</option>
											<option value="1937">1937</option>
											<option value="1936">1936</option>
											<option value="1935">1935</option>
											<option value="1934">1934</option>
											<option value="1933">1933</option>
											<option value="1932">1932</option>
											<option value="1931">1931</option>
											<option value="1930">1930</option>
											<option value="1929">1929</option>
											<option value="1928">1928</option>
											<option value="1927">1927</option>
											<option value="1926">1926</option>
											<option value="1925">1925</option>
											<option value="1924">1924</option>
											<option value="1923">1923</option>
											<option value="1922">1922</option>
											<option value="1921">1921</option>
											<option value="1920">1920</option>
											<option value="1919">1919</option>
											<option value="1918">1918</option>
											<option value="1917">1917</option>
											<option value="1916">1916</option>
											<option value="1915">1915</option>
											<option value="1914">1914</option>
											<option value="1913">1913</option>
											<option value="1912">1912</option>
											<option value="1911">1911</option>
											<option value="1910">1910</option>
											<option value="1909">1909</option>
											<option value="1908">1908</option>
											<option value="1907">1907</option>
											<option value="1906">1906</option>
											<option value="1905">1905</option>
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