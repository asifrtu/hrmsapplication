<?php include('header.php'); ?>
<?php include('AppraisalSidebar.php'); ?>
        <!-- Content Wrapper -->
 

<style>
.btncrat::after {
    width: 1rem;
    text-align: center;
    float: right;
    vertical-align: 0;
    border: 0;
    font-weight: 900;
    content: '\25BC';
	padding-left:10px;
    font-family: 'Font Awesome 5 Free';
}
.addGoalsBtn{
	float:left;
	margin-bottom:5px;
	color:#1C304C!important;
	background: white!important;
	font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: 2px solid #1C304C!important;
}
.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: right;
  text-align:center;
  padding:2px 0;
	
}
.tnNotify {
  float: left;
  text-align:center;
  padding:2px 0;
  margin:0 2px;		
}
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.tnNotify a {
  
  color: white;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}
.tnAccept a {
	background-color:#504a94;
}
.tnDecline a {
	background-color:red;
}


.table td, .table th {
    
}

.empTL{
	padding:1rem .35rem!important;
}

.empTL1{
	padding: 0rem!important;
	text-align:center;
}

.empTL2{
	padding: 0rem!important;
	text-align:center;
}

.dropbtn {
  margin-bottom:5px;
	color:#1C304C!important;
	background: white!important;
	font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: 2px solid #1C304C!important;
  
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 122px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 5px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

.empWeekOff{
	background-color: lightgray;
}
.empLWP{
	background-color: #f9c3cd;
}

td{
    padding: .3rem 1rem!important;
}
.arrow-down {
  width: 0; 
  height: 0; 
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  
  border-top: 20px solid red;
}	

.bg-info {
    background-color: #ececec!important;
}
.p-2 {
    padding: .1rem!important;
}
.sasifb{
	margin-bottom:25px;
}


.form-check-label {
    color: black;
}
.calTH{
	text-align:center;
}

.empCL{
	text-align:center;
}


.table td, .table th {
padding: .7rem .3rem .6rem .3rem!important;
}
.AttSort{
	height: calc(1em + .75rem + 2px);
   
    padding: .200rem .5rem;
    font-size: 14px;
}
.AttSortMonth{
	height: calc(1em + .75rem + 2px);
   
    padding: .200rem .2rem;
    font-size: 14px;
}


.sasifb{
	margin-bottom: 10px;
    margin-top: 10px;
}
.AttFontStatus{
	font-size:14px;
	
}
.cmPayroll{
	font-size:14px;
	font-weight:500;
}



.W-OFF{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}

.H{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}

.MD{
	color:white;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}

.P{
	
	font-size:12px;
	text-align:center;
}

.CL{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}
.EL{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}
.LWP{
	color:#929396;
	background-color:#f9f9fd;
	font-size:12px;
	text-align:center;
}


.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.4rem + 2px);
	font-size: 0.9rem;
}

.addEmpSubmitBtn{
	margin: 0px 445px;
	margin-bottom:50px;
	color:white!important;
    
	float:center;
    background: #1C304C;
    
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 2em 0.2em 2em;
    border: none !important;
}







.star-rating {
  
  display:flex;
  flex-direction: row-reverse;
  font-size:1.5em;
  justify-content:space-around;
  padding:0 .2em;
  text-align:center;
  width:5em;
}

.star-rating input {
  display:none;
}

.star-rating label {
  color:#ccc;
  cursor:pointer;
}

.star-rating :checked ~ label {
  color:#f90;
}

.star-rating label:hover,
.star-rating label:hover ~ label {
  color:#fc0;
}



.star-ratingCC {
  
  display:flex;
  flex-direction: row-reverse;
  font-size:1.5em;
  justify-content:space-around;
  padding:0 .2em;
  text-align:center;
  width:5em;
}

.star-ratingCC input {
  display:none;
}

.star-ratingCC label {
  color:#ccc;
  cursor:pointer;
}

.star-ratingCC :checked ~ label {
  color:#f90;
}

.star-ratingCC label:hover,
.star-ratingCC label:hover ~ label {
  color:#fc0;
}


.appraisal:before {
    content: "• ";
    color: rgb(47, 63, 120);
    font-size: 20px;
}




.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: .1rem;
    border-bottom-left-radius: .1rem;
}

.page-item:last-child .page-link {
    border-top-right-radius: .1rem;
    border-bottom-right-radius: .1rem;
}

.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #2e2869;
    background-color: #fff;
    border: 1px solid #dddfeb;
}

.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #2f296a;
    border-color: #2e2869;
}
</style>


 <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                 <?php if(!empty($this->session->flashdata('message'))) { ?>
			
			
			<?=$this->session->flashdata('message');?>
			
		<?php } ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4">
                        <div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Performance Evaluation</h5>
                        </div>
                        
                    <!-- Content Row -->
					<!-- Area Chart -->
						<div class="card shadow mb-4" style="border: 2px solid #504a94; margin:20px;">
						<div class="">	
						
								<?php echo form_open_multipart('adminzone/Appraisal/AppraisalRanking'); ?>
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead>
										<tr class="ColorSecondaryPre">
												
												<th class="m-0 font-weight-bold ColorPrimary" style="min-width: 120px!important;"><?php if(!empty($Title->title_1)){echo $Title->title_1;} ?></th>
												<th class="m-0 font-weight-bold ColorPrimary" style="min-width: 120px!important;"><?php if(!empty($Title->title_2)){echo $Title->title_2;} ?></th>
												
												
												
											</tr>
										</thead>
										<tbody>
											<tr>
											<?php 
											
											// print_r($AppraisalThree);
												// echo "ASIF<br>";
												$datar = explode(',', $AppraisalThree->OverallRating);
												
												// print_r($datar);
											?>
												
												<td><?php if(!empty($Title->title_3)){echo $Title->title_3;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsGeneral" name="GeneralQualityofwork" value="5" <?php if(!empty($AppraisalThree->GeneralQualityofwork)):?><?php if($AppraisalThree->GeneralQualityofwork == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsGeneral" class="star">&#9733;</label>
													<input type="radio" id="4-starsGeneral" name="GeneralQualityofwork" value="4" <?php if(!empty($AppraisalThree->GeneralQualityofwork)):?><?php if($AppraisalThree->GeneralQualityofwork == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsGeneral" class="star">&#9733;</label>
													<input type="radio" id="3-starsGeneral" name="GeneralQualityofwork" value="3" <?php if(!empty($AppraisalThree->GeneralQualityofwork)):?><?php if($AppraisalThree->GeneralQualityofwork == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsGeneral" class="star">&#9733;</label>
													<input type="radio" id="2-starsGeneral" name="GeneralQualityofwork" value="2" <?php if(!empty($AppraisalThree->GeneralQualityofwork)):?><?php if($AppraisalThree->GeneralQualityofwork == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsGeneral" class="star">&#9733;</label>
													<input type="radio" id="1-starsGeneral" name="GeneralQualityofwork" value="1" <?php if(!empty($AppraisalThree->GeneralQualityofwork)):?><?php if($AppraisalThree->GeneralQualityofwork == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsGeneral" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_4)){echo $Title->title_4;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-ratingCC">
													<input type="radio" id="5-starsDependability" name="Dependability" value="5" <?php if(!empty($AppraisalThree->Dependability)):?><?php if($AppraisalThree->Dependability == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsDependability" class="star">&#9733;</label>
													<input type="radio" id="4-starsDependability" name="Dependability" value="4" <?php if(!empty($AppraisalThree->Dependability)):?><?php if($AppraisalThree->Dependability == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsDependability" class="star">&#9733;</label>               
													<input type="radio" id="3-starsDependability" name="Dependability" value="3" <?php if(!empty($AppraisalThree->Dependability)):?><?php if($AppraisalThree->Dependability == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsDependability" class="star">&#9733;</label>               
													<input type="radio" id="2-starsDependability" name="Dependability" value="2" <?php if(!empty($AppraisalThree->Dependability)):?><?php if($AppraisalThree->Dependability == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsDependability" class="star">&#9733;</label>               
													<input type="radio" id="1-starDependability" name="Dependability" value="1"  <?php if(!empty($AppraisalThree->Dependability)):?><?php if($AppraisalThree->Dependability == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsDependability" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_5)){echo $Title->title_5;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsJob" name="JobKnowledge" value="5" <?php if(!empty($AppraisalThree->JobKnowledge)):?><?php if($AppraisalThree->JobKnowledge == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsJob" class="star">&#9733;</label>
													<input type="radio" id="4-starsJob" name="JobKnowledge" value="4" <?php if(!empty($AppraisalThree->JobKnowledge)):?><?php if($AppraisalThree->JobKnowledge == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsJob" class="star">&#9733;</label>
													<input type="radio" id="3-starsJob" name="JobKnowledge" value="3" <?php if(!empty($AppraisalThree->JobKnowledge)):?><?php if($AppraisalThree->JobKnowledge == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsJob" class="star">&#9733;</label>
													<input type="radio" id="2-starsJob" name="JobKnowledge" value="2" <?php if(!empty($AppraisalThree->JobKnowledge)):?><?php if($AppraisalThree->JobKnowledge == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsJob" class="star">&#9733;</label>
													<input type="radio" id="1-starsJob" name="JobKnowledge" value="1" <?php if(!empty($AppraisalThree->JobKnowledge)):?><?php if($AppraisalThree->JobKnowledge == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsJob" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_6)){echo $Title->title_6;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsCommunication" name="CommunicationSkills" value="5" <?php if(!empty($AppraisalThree->CommunicationSkills)):?><?php if($AppraisalThree->CommunicationSkills == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsCommunication" class="star">&#9733;</label>
													<input type="radio" id="4-starsCommunication" name="CommunicationSkills" value="4" <?php if(!empty($AppraisalThree->CommunicationSkills)):?><?php if($AppraisalThree->CommunicationSkills == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsCommunication" class="star">&#9733;</label>
													<input type="radio" id="3-starsCommunication" name="CommunicationSkills" value="3" <?php if(!empty($AppraisalThree->CommunicationSkills)):?><?php if($AppraisalThree->CommunicationSkills == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsCommunication" class="star">&#9733;</label>
													<input type="radio" id="2-starsCommunication" name="CommunicationSkills" value="2" <?php if(!empty($AppraisalThree->CommunicationSkills)):?><?php if($AppraisalThree->CommunicationSkills == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsCommunication" class="star">&#9733;</label>
													<input type="radio" id="1-starsCommunication" name="CommunicationSkills" value="1" <?php if(!empty($AppraisalThree->CommunicationSkills)):?><?php if($AppraisalThree->CommunicationSkills == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsCommunication" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_7)){echo $Title->title_7;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsPersonality" name="Personality" value="5" <?php if(!empty($AppraisalThree->Personality)):?><?php if($AppraisalThree->Personality == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsPersonality" class="star">&#9733;</label>
													<input type="radio" id="4-starsPersonality" name="Personality" value="4" <?php if(!empty($AppraisalThree->Personality)):?><?php if($AppraisalThree->Personality == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsPersonality" class="star">&#9733;</label>
													<input type="radio" id="3-starsPersonality" name="Personality" value="3" <?php if(!empty($AppraisalThree->Personality)):?><?php if($AppraisalThree->Personality == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsPersonality" class="star">&#9733;</label>
													<input type="radio" id="2-starsPersonality" name="Personality" value="2" <?php if(!empty($AppraisalThree->Personality)):?><?php if($AppraisalThree->Personality == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsPersonality" class="star">&#9733;</label>
													<input type="radio" id="1-starsPersonality" name="Personality" value="1" <?php if(!empty($AppraisalThree->Personality)):?><?php if($AppraisalThree->Personality == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsPersonality" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_8)){echo $Title->title_8;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsManagement" name="ManagementAbility" value="5" <?php if(!empty($AppraisalThree->ManagementAbility)):?><?php if($AppraisalThree->ManagementAbility == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsManagement" class="star">&#9733;</label>
													<input type="radio" id="4-starsManagement" name="ManagementAbility" value="4" <?php if(!empty($AppraisalThree->ManagementAbility)):?><?php if($AppraisalThree->ManagementAbility == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsManagement" class="star">&#9733;</label>
													<input type="radio" id="3-starsManagement" name="ManagementAbility" value="3" <?php if(!empty($AppraisalThree->ManagementAbility)):?><?php if($AppraisalThree->ManagementAbility == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsManagement" class="star">&#9733;</label>
													<input type="radio" id="2-starsManagement" name="ManagementAbility" value="2" <?php if(!empty($AppraisalThree->ManagementAbility)):?><?php if($AppraisalThree->ManagementAbility == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsManagement" class="star">&#9733;</label>
													<input type="radio" id="1-starsManagement" name="ManagementAbility" value="1" <?php if(!empty($AppraisalThree->ManagementAbility)):?><?php if($AppraisalThree->ManagementAbility == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsManagement" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_9)){echo $Title->title_9;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsContribution" name="ContributionToGroup" value="5" <?php if(!empty($AppraisalThree->ContributionToGroup)):?><?php if($AppraisalThree->ContributionToGroup == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsContribution" class="star">&#9733;</label>
													<input type="radio" id="4-starsContribution" name="ContributionToGroup" value="4" <?php if(!empty($AppraisalThree->ContributionToGroup)):?><?php if($AppraisalThree->ContributionToGroup == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsContribution" class="star">&#9733;</label>
													<input type="radio" id="3-starsContribution" name="ContributionToGroup" value="3" <?php if(!empty($AppraisalThree->ContributionToGroup)):?><?php if($AppraisalThree->ContributionToGroup == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsContribution" class="star">&#9733;</label>
													<input type="radio" id="2-starsContribution" name="ContributionToGroup" value="2" <?php if(!empty($AppraisalThree->ContributionToGroup)):?><?php if($AppraisalThree->ContributionToGroup == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsContribution" class="star">&#9733;</label>
													<input type="radio" id="1-starsContribution" name="ContributionToGroup" value="1" <?php if(!empty($AppraisalThree->ContributionToGroup)):?><?php if($AppraisalThree->ContributionToGroup == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsContribution" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_10)){echo $Title->title_10;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsProductivity" name="Productivity" value="5" <?php if(!empty($AppraisalThree->Productivity)):?><?php if($AppraisalThree->Productivity == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsProductivity" class="star">&#9733;</label>
													<input type="radio" id="4-starsProductivity" name="Productivity" value="4" <?php if(!empty($AppraisalThree->Productivity)):?><?php if($AppraisalThree->Productivity == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsProductivity" class="star">&#9733;</label>
													<input type="radio" id="3-starsProductivity" name="Productivity" value="3" <?php if(!empty($AppraisalThree->Productivity)):?><?php if($AppraisalThree->Productivity == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsProductivity" class="star">&#9733;</label>
													<input type="radio" id="2-starsProductivity" name="Productivity" value="2" <?php if(!empty($AppraisalThree->Productivity)):?><?php if($AppraisalThree->Productivity == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsProductivity" class="star">&#9733;</label>
													<input type="radio" id="1-starsProductivity" name="Productivity" value="1" <?php if(!empty($AppraisalThree->Productivity)):?><?php if($AppraisalThree->Productivity == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsProductivity" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_11)){echo $Title->title_11;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsAchievement" name="AchievementOfGoal" value="5" <?php if(!empty($AppraisalThree->AchievementOfGoal)):?><?php if($AppraisalThree->AchievementOfGoal == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsAchievement" class="star">&#9733;</label>
													<input type="radio" id="4-starsAchievement" name="AchievementOfGoal" value="4" <?php if(!empty($AppraisalThree->AchievementOfGoal)):?><?php if($AppraisalThree->AchievementOfGoal == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsAchievement" class="star">&#9733;</label>
													<input type="radio" id="3-starsAchievement" name="AchievementOfGoal" value="3" <?php if(!empty($AppraisalThree->AchievementOfGoal)):?><?php if($AppraisalThree->AchievementOfGoal == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsAchievement" class="star">&#9733;</label>
													<input type="radio" id="2-starsAchievement" name="AchievementOfGoal" value="2" <?php if(!empty($AppraisalThree->AchievementOfGoal)):?><?php if($AppraisalThree->AchievementOfGoal == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsAchievement" class="star">&#9733;</label>
													<input type="radio" id="1-starsAchievement" name="AchievementOfGoal" value="1" <?php if(!empty($AppraisalThree->AchievementOfGoal)):?><?php if($AppraisalThree->AchievementOfGoal == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsAchievement" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_12)){echo $Title->title_12;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsBehavior" name="BehaviorOfFloor" value="5" <?php if(!empty($AppraisalThree->BehaviorOfFloor)):?><?php if($AppraisalThree->BehaviorOfFloor == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsBehavior" class="star">&#9733;</label>
													<input type="radio" id="4-starsBehavior" name="BehaviorOfFloor" value="4" <?php if(!empty($AppraisalThree->BehaviorOfFloor)):?><?php if($AppraisalThree->BehaviorOfFloor == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsBehavior" class="star">&#9733;</label>
													<input type="radio" id="3-starsBehavior" name="BehaviorOfFloor" value="3" <?php if(!empty($AppraisalThree->BehaviorOfFloor)):?><?php if($AppraisalThree->BehaviorOfFloor == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsBehavior" class="star">&#9733;</label>
													<input type="radio" id="2-starsBehavior" name="BehaviorOfFloor" value="2" <?php if(!empty($AppraisalThree->BehaviorOfFloor)):?><?php if($AppraisalThree->BehaviorOfFloor == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsBehavior" class="star">&#9733;</label>
													<input type="radio" id="1-starsBehavior" name="BehaviorOfFloor" value="1" <?php if(!empty($AppraisalThree->BehaviorOfFloor)):?><?php if($AppraisalThree->BehaviorOfFloor == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsBehavior" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_13)){echo $Title->title_13;} ?></td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsPresentation" name="PresentationFeedback" value="5" <?php if(!empty($AppraisalThree->PresentationFeedback)):?><?php if($AppraisalThree->PresentationFeedback == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsPresentation" class="star">&#9733;</label>                                                                                                                                  
													<input type="radio" id="4-starsPresentation" name="PresentationFeedback" value="4" <?php if(!empty($AppraisalThree->PresentationFeedback)):?><?php if($AppraisalThree->PresentationFeedback == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsPresentation" class="star">&#9733;</label>                                                                                                                                  
													<input type="radio" id="3-starsPresentation" name="PresentationFeedback" value="3" <?php if(!empty($AppraisalThree->PresentationFeedback)):?><?php if($AppraisalThree->PresentationFeedback == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsPresentation" class="star">&#9733;</label>                                                                                                                                  
													<input type="radio" id="2-starsPresentation" name="PresentationFeedback" value="2" <?php if(!empty($AppraisalThree->PresentationFeedback)):?><?php if($AppraisalThree->PresentationFeedback == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsPresentation" class="star">&#9733;</label>                                                                                                                                  
													<input type="radio" id="1-starsPresentation" name="PresentationFeedback" value="1" <?php if(!empty($AppraisalThree->PresentationFeedback)):?><?php if($AppraisalThree->PresentationFeedback == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsPresentation" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											
											
											
										</tbody>
										
									</table>
								</div>
								
								
								
								
								</div>
								
								
							
								
								<div class="card-body" style="width:1000px;">
								
								
									
									
								<div class="table-responsive">
									<table class="table table-bordered" id="TimelistdataTable" width="100%">
										<thead>
											<tr class="ColorSecondaryPre">
												
												<th class="m-0 font-weight-bold ColorPrimary" style="min-width: 120px!important;"><?php if(!empty($Title->title_14)){echo $Title->title_14;} ?></th>
												<th class="m-0 font-weight-bold ColorPrimary" style="min-width: 330px!important;"><?php if(!empty($Title->title_15)){echo $Title->title_15;} ?></th>
												
												
												
											</tr>
											<tr style="background-color:#f3f3f7;">
												
												<th colspan="2" class="" style="color:black; min-width: 120px!important;">1. <?php if(!empty($Title->title_16)){echo $Title->title_16;} ?></th>
												
												
												
											</tr>
											
											
										</thead>
										<tbody>
											<tr >
											<td><?php if(!empty($Title->title_1)){echo $Title->title_17;} ?></td>
											<td style="330px!important"></td>
											</tr>
											
											<tr >
											<td><?php if(!empty($Title->title_18)){echo $Title->title_18;} ?></td>
											<td style="330px!important"></td>
											</tr>
											
											<tr >
											<td><?php if(!empty($Title->title_19)){echo $Title->title_19;} ?></td>
											<td style="330px!important"></td>
											</tr>
											
											<tr >
											<td><?php if(!empty($Title->title_20)){echo $Title->title_20;} ?></td>
											<td style="330px!important"></td>
											</tr>
											
											
											
											<tr>
												
												<td>Rating:</td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsCoreJobKnowledge" name="CoreJobKnowledge" value="5" <?php if(!empty($AppraisalThree->CoreJobKnowledge)):?><?php if($AppraisalThree->CoreJobKnowledge == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsCoreJobKnowledge" class="star">&#9733;</label>                                                                                                                      
													<input type="radio" id="4-starsCoreJobKnowledge" name="CoreJobKnowledge" value="4" <?php if(!empty($AppraisalThree->CoreJobKnowledge)):?><?php if($AppraisalThree->CoreJobKnowledge == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsCoreJobKnowledge" class="star">&#9733;</label>                                                                                                                      
													<input type="radio" id="3-starsCoreJobKnowledge" name="CoreJobKnowledge" value="3" <?php if(!empty($AppraisalThree->CoreJobKnowledge)):?><?php if($AppraisalThree->CoreJobKnowledge == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsCoreJobKnowledge" class="star">&#9733;</label>                                                                                                                      
													<input type="radio" id="2-starsCoreJobKnowledge" name="CoreJobKnowledge" value="2" <?php if(!empty($AppraisalThree->CoreJobKnowledge)):?><?php if($AppraisalThree->CoreJobKnowledge == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsCoreJobKnowledge" class="star">&#9733;</label>                                                                                                                      
													<input type="radio" id="1-starsCoreJobKnowledge" name="CoreJobKnowledge" value="1" <?php if(!empty($AppraisalThree->CoreJobKnowledge)):?><?php if($AppraisalThree->CoreJobKnowledge == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsCoreJobKnowledge" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											
										</tbody>
										
									
										<thead>
											
											<tr style="background-color:#f3f3f7;">
												
												<th colspan="2" class="" style="color:black; min-width: 120px!important;">2. <?php if(!empty($Title->title_21)){echo $Title->title_21;} ?></th>
												
												
												
											</tr>
											
											
										</thead>
										<tbody>
											<tr>
												
												<td><?php if(!empty($Title->title_21)){echo $Title->title_21;} ?></td>
												<td style="330px!important"></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_22)){echo $Title->title_22;} ?></td>
												<td style="330px!important"></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_23)){echo $Title->title_23;} ?></td>
												<td style="330px!important"></td>
												
												
												
											</tr>
											
											
											
											<tr>
												<td>Rating:</td>
												<td  style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsInterpersonal" name="CoreInterpersonalSkills" value="5" <?php if(!empty($AppraisalThree->CoreInterpersonalSkills)):?><?php if($AppraisalThree->CoreInterpersonalSkills == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsInterpersonal" class="star">&#9733;</label>                                                                                                                                           
													<input type="radio" id="4-starsInterpersonal" name="CoreInterpersonalSkills" value="4" <?php if(!empty($AppraisalThree->CoreInterpersonalSkills)):?><?php if($AppraisalThree->CoreInterpersonalSkills == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsInterpersonal" class="star">&#9733;</label>                                                                                                                                           
													<input type="radio" id="3-starsInterpersonal" name="CoreInterpersonalSkills" value="3" <?php if(!empty($AppraisalThree->CoreInterpersonalSkills)):?><?php if($AppraisalThree->CoreInterpersonalSkills == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsInterpersonal" class="star">&#9733;</label>                                                                                                                                           
													<input type="radio" id="2-starsInterpersonal" name="CoreInterpersonalSkills" value="2" <?php if(!empty($AppraisalThree->CoreInterpersonalSkills)):?><?php if($AppraisalThree->CoreInterpersonalSkills == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsInterpersonal" class="star">&#9733;</label>                                                                                                                                           
													<input type="radio" id="1-starsInterpersonal" name="CoreInterpersonalSkills" value="1" <?php if(!empty($AppraisalThree->CoreInterpersonalSkills)):?><?php if($AppraisalThree->CoreInterpersonalSkills == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsInterpersonal" class="star">&#9733;</label>
													</div>

												</td>
												
												
												
											</tr>
											
											
										</tbody>
										
										
										<thead>
											
											<tr style="background-color:#f3f3f7;">
												
												<th colspan="2" class="" style="color:black; min-width: 120px!important;">3. <?php if(!empty($Title->title_22)){echo $Title->title_22;} ?></th>
												
												
												
											</tr>
											
											
										</thead>
										<tbody>
											<tr>
												
												<td><?php if(!empty($Title->title_23)){echo $Title->title_23;} ?></td>
												<td style="330px!important"></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_24)){echo $Title->title_24;} ?></td>
												<td style="330px!important"></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_25)){echo $Title->title_25;} ?></td>
												<td style="330px!important"></td>
												
												
												
											</tr>
											
											
											<tr>
												
												<td>Rating:</td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsComm" name="CoreCommunicationSkills" value="5" <?php if(!empty($AppraisalThree->CoreCommunicationSkills)):?><?php if($AppraisalThree->CoreCommunicationSkills == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsComm" class="star">&#9733;</label>                                                                                                                                           
													<input type="radio" id="4-starsComm" name="CoreCommunicationSkills" value="4" <?php if(!empty($AppraisalThree->CoreCommunicationSkills)):?><?php if($AppraisalThree->CoreCommunicationSkills == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsComm" class="star">&#9733;</label>                                                                                                                                           
													<input type="radio" id="3-starsComm" name="CoreCommunicationSkills" value="3" <?php if(!empty($AppraisalThree->CoreCommunicationSkills)):?><?php if($AppraisalThree->CoreCommunicationSkills == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsComm" class="star">&#9733;</label>                                                                                                                                           
													<input type="radio" id="2-starsComm" name="CoreCommunicationSkills" value="2" <?php if(!empty($AppraisalThree->CoreCommunicationSkills)):?><?php if($AppraisalThree->CoreCommunicationSkills == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsComm" class="star">&#9733;</label>                                                                                                                                           
													<input type="radio" id="1-starsComm" name="CoreCommunicationSkills" value="1" <?php if(!empty($AppraisalThree->CoreCommunicationSkills)):?><?php if($AppraisalThree->CoreCommunicationSkills == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsComm" class="star">&#9733;</label>
													</div>

												</td>
												
												
											</tr>
											
											
										</tbody>
										<thead>
											
											<tr style="background-color:#f3f3f7;">
												
												<th colspan="2" class="" style="color:black; min-width: 120px!important;">4. <?php if(!empty($Title->title_26)){echo $Title->title_26;} ?></th>
												
												
												
											</tr>
											
										</thead>
										<tbody>
											<tr>
												
												<td><?php if(!empty($Title->title_27)){echo $Title->title_27;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_28)){echo $Title->title_28;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_29)){echo $Title->title_29;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											
											
											<tr>
												
												<td>Rating:</td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsCorePlanning" name="CorePlanning" value="5" <?php if(!empty($AppraisalThree->CorePlanning)):?><?php if($AppraisalThree->CorePlanning == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsCorePlanning" class="star">&#9733;</label>                                                                                                          
													<input type="radio" id="4-starsCorePlanning" name="CorePlanning" value="4" <?php if(!empty($AppraisalThree->CorePlanning)):?><?php if($AppraisalThree->CorePlanning == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsCorePlanning" class="star">&#9733;</label>                                                                                                          
													<input type="radio" id="3-starsCorePlanning" name="CorePlanning" value="3" <?php if(!empty($AppraisalThree->CorePlanning)):?><?php if($AppraisalThree->CorePlanning == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsCorePlanning" class="star">&#9733;</label>                                                                                                          
													<input type="radio" id="2-starsCorePlanning" name="CorePlanning" value="2" <?php if(!empty($AppraisalThree->CorePlanning)):?><?php if($AppraisalThree->CorePlanning == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsCorePlanning" class="star">&#9733;</label>                                                                                                          
													<input type="radio" id="1-starsCorePlanning" name="CorePlanning" value="1" <?php if(!empty($AppraisalThree->CorePlanning)):?><?php if($AppraisalThree->CorePlanning == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsCorePlanning" class="star">&#9733;</label>
													</div>

												</td>
												
												
											</tr>
											
											
										</tbody>
										<thead>
											
											<tr style="background-color:#f3f3f7;">
												
												<th colspan="2" class="" style="color:black; min-width: 120px!important;">5. <?php if(!empty($Title->title_30)){echo $Title->title_30;} ?></th>
												
												
												
											</tr>
											
											
										</thead>
										<tbody>
											<tr>
												
												<td><?php if(!empty($Title->title_31)){echo $Title->title_31;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_32)){echo $Title->title_32;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_33)){echo $Title->title_33;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											
											<tr>
												
												<td>Rating:</td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsAnalysis" name="CoreProblemAnalysis" value="5" <?php if(!empty($AppraisalThree->CoreProblemAnalysis)):?><?php if($AppraisalThree->CoreProblemAnalysis == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsAnalysis" class="star">&#9733;</label>                                                                                                                               
													<input type="radio" id="4-starsAnalysis" name="CoreProblemAnalysis" value="4" <?php if(!empty($AppraisalThree->CoreProblemAnalysis)):?><?php if($AppraisalThree->CoreProblemAnalysis == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsAnalysis" class="star">&#9733;</label>                                                                                                                               
													<input type="radio" id="3-starsAnalysis" name="CoreProblemAnalysis" value="3" <?php if(!empty($AppraisalThree->CoreProblemAnalysis)):?><?php if($AppraisalThree->CoreProblemAnalysis == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsAnalysis" class="star">&#9733;</label>                                                                                                                               
													<input type="radio" id="2-starsAnalysis" name="CoreProblemAnalysis" value="2" <?php if(!empty($AppraisalThree->CoreProblemAnalysis)):?><?php if($AppraisalThree->CoreProblemAnalysis == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsAnalysis" class="star">&#9733;</label>                                                                                                                               
													<input type="radio" id="1-starsAnalysis" name="CoreProblemAnalysis" value="1" <?php if(!empty($AppraisalThree->CoreProblemAnalysis)):?><?php if($AppraisalThree->CoreProblemAnalysis == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsAnalysis" class="star">&#9733;</label>
													</div>

												</td>
												
												
											</tr>
											
											
										</tbody>
										<thead>
											
											<tr style="background-color:#f3f3f7;">
												
												<th colspan="2" class="" style="color:black; min-width: 120px!important;">6. <?php if(!empty($Title->title_34)){echo $Title->title_34;} ?></th>
												
												
												
											</tr>
											
											
										</thead>
										<tbody>
											<tr>
												
												<td><?php if(!empty($Title->title_35)){echo $Title->title_35;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_36)){echo $Title->title_36;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											<tr>
												
												<td>Rating:</td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsDiversity" name="CoreCommitmenttoDiversity" value="5" <?php if(!empty($AppraisalThree->CoreCommitmenttoDiversity)):?><?php if($AppraisalThree->CoreCommitmenttoDiversity == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsDiversity" class="star">&#9733;</label>                                                                                                                                                 
													<input type="radio" id="4-starsDiversity" name="CoreCommitmenttoDiversity" value="4" <?php if(!empty($AppraisalThree->CoreCommitmenttoDiversity)):?><?php if($AppraisalThree->CoreCommitmenttoDiversity == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsDiversity" class="star">&#9733;</label>                                                                                                                                                 
													<input type="radio" id="3-starsDiversity" name="CoreCommitmenttoDiversity" value="3" <?php if(!empty($AppraisalThree->CoreCommitmenttoDiversity)):?><?php if($AppraisalThree->CoreCommitmenttoDiversity == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsDiversity" class="star">&#9733;</label>                                                                                                                                                 
													<input type="radio" id="2-starsDiversity" name="CoreCommitmenttoDiversity" value="2" <?php if(!empty($AppraisalThree->CoreCommitmenttoDiversity)):?><?php if($AppraisalThree->CoreCommitmenttoDiversity == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsDiversity" class="star">&#9733;</label>                                                                                                                                                 
													<input type="radio" id="1-starsDiversity" name="CoreCommitmenttoDiversity" value="1" <?php if(!empty($AppraisalThree->CoreCommitmenttoDiversity)):?><?php if($AppraisalThree->CoreCommitmenttoDiversity == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsDiversity" class="star">&#9733;</label>
													</div>

												</td>
												
												
											</tr>
											
											
										</tbody>
										<thead>
											
											<tr style="background-color:#f3f3f7;">
												
												<th colspan="2" class="" style="color:black; min-width: 120px!important;">7. <?php if(!empty($Title->title_83)){echo $Title->title_83;} ?></th>
												
												
												
											</tr>
											
											
										</thead>
										<tbody>
											<tr>
												
												<td><?php if(!empty($Title->title_37)){echo $Title->title_37;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_38)){echo $Title->title_38;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											<tr>
												
												<td><?php if(!empty($Title->title_39)){echo $Title->title_39;} ?></td>
												<td></td>
												
												
												
											</tr>
											
											
											<tr>
												
												<td>Rating:</td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsLeadership" name="CoreLeadership" value="5" <?php if(!empty($AppraisalThree->CoreLeadership)):?><?php if($AppraisalThree->CoreLeadership == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsLeadership" class="star">&#9733;</label>                                                                                                                
													<input type="radio" id="4-starsLeadership" name="CoreLeadership" value="4" <?php if(!empty($AppraisalThree->CoreLeadership)):?><?php if($AppraisalThree->CoreLeadership == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsLeadership" class="star">&#9733;</label>                                                                                                                
													<input type="radio" id="3-starsLeadership" name="CoreLeadership" value="3" <?php if(!empty($AppraisalThree->CoreLeadership)):?><?php if($AppraisalThree->CoreLeadership == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsLeadership" class="star">&#9733;</label>                                                                                                                
													<input type="radio" id="2-starsLeadership" name="CoreLeadership" value="2" <?php if(!empty($AppraisalThree->CoreLeadership)):?><?php if($AppraisalThree->CoreLeadership == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsLeadership" class="star">&#9733;</label>                                                                                                                
													<input type="radio" id="1-starsLeadership" name="CoreLeadership" value="1" <?php if(!empty($AppraisalThree->CoreLeadership)):?><?php if($AppraisalThree->CoreLeadership == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsLeadership" class="star">&#9733;</label>
													</div>

												</td>
												
												
											</tr>
											
											
										</tbody>
										<thead>
											
											<tr style="background-color:#f3f3f7;">
												
												<th colspan="2" class="" style="color:black; min-width: 120px!important;">8. <?php if(!empty($Title->title_40)){echo $Title->title_40;} ?></th>
												
												
												
											</tr>
											
											
										</thead>
										<tbody>
											<tr>
												<td><?php if(!empty($Title->title_41)){echo $Title->title_41;} ?></td>
												<td></td>
											</tr>
											
											<tr>
												<td><?php if(!empty($Title->title_42)){echo $Title->title_42;} ?></td>
												<td></td>
											</tr>
											
											<tr>
												<td><?php if(!empty($Title->title_43)){echo $Title->title_43;} ?></td>
												<td></td>
											</tr>
											
											<tr>
												<td><?php if(!empty($Title->title_44)){echo $Title->title_44;} ?></td>
												<td></td>
											</tr>
											
											<tr>
												<td><?php if(!empty($Title->title_45)){echo $Title->title_45;} ?></td>
												<td></td>
											</tr>
											
											<tr>
												<td><?php if(!empty($Title->title_46)){echo $Title->title_46;} ?></td>
												<td></td>
											</tr>
											
											<tr>
												<td><?php if(!empty($Title->title_47)){echo $Title->title_47;} ?></td>
												<td></td>
											</tr>
											
											<tr>
												<td><?php if(!empty($Title->title_48)){echo $Title->title_48;} ?></td>
												<td></td>
											</tr>
											
											<tr>
												<td><?php if(!empty($Title->title_49)){echo $Title->title_49;} ?></td>
												<td></td>
											</tr>
											
											
											
											<tr>
												
												<td>Rating:</td>
												<td style="padding: .0rem .3rem .0rem .3rem!important;">
													<div class="star-rating">
													<input type="radio" id="5-starsSupervision" name="CoreSupervision" value="5" <?php if(!empty($AppraisalThree->CoreSupervision)):?><?php if($AppraisalThree->CoreSupervision == 5) echo "checked";?> <?php endif; ?> />
													<label for="5-starsSupervision" class="star">&#9733;</label>                                                                                                                   
													<input type="radio" id="4-starsSupervision" name="CoreSupervision" value="4" <?php if(!empty($AppraisalThree->CoreSupervision)):?><?php if($AppraisalThree->CoreSupervision == 4) echo "checked";?> <?php endif; ?> />
													<label for="4-starsSupervision" class="star">&#9733;</label>                                                                                                                   
													<input type="radio" id="3-starsSupervision" name="CoreSupervision" value="3" <?php if(!empty($AppraisalThree->CoreSupervision)):?><?php if($AppraisalThree->CoreSupervision == 3) echo "checked";?> <?php endif; ?> />
													<label for="3-starsSupervision" class="star">&#9733;</label>                                                                                                                   
													<input type="radio" id="2-starsSupervision" name="CoreSupervision" value="2" <?php if(!empty($AppraisalThree->CoreSupervision)):?><?php if($AppraisalThree->CoreSupervision == 2) echo "checked";?> <?php endif; ?> />
													<label for="2-starsSupervision" class="star">&#9733;</label>                                                                                                                   
													<input type="radio" id="1-starsSupervision" name="CoreSupervision" value="1" <?php if(!empty($AppraisalThree->CoreSupervision)):?><?php if($AppraisalThree->CoreSupervision == 1) echo "checked";?> <?php endif; ?> />
													<label for="1-starsSupervision" class="star">&#9733;</label>
													</div>

												</td>
												
												
											</tr>
											
											
										</tbody>
										<thead>
											<tr class="ColorSecondaryPre">
												
												<th colspan="2" class="m-0 font-weight-bold ColorPrimary" style="text-align:center; min-width: 120px!important;"><?php if(!empty($Title->title_50)){echo $Title->title_50;} ?></th>
												
												
											</tr>
											
											
										</thead>
										<tbody>
											<tr>
												<td colspan="2">
												<div class="row" style="margin:0px!important;">
													<div class="col-lg-4">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="OverallRating[]" value="Outstanding"  <?php if(!empty(in_array("Outstanding", $datar))):?><?php if(in_array("Outstanding", $datar) == true) echo "checked";?> <?php endif; ?> ><?php if(!empty($Title->title_51)){echo $Title->title_51;} ?>
													</label>
													</div>
													</div>
													<div class="col-lg-4">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="OverallRating[]" value="Exceeds Expectations" <?php if(!empty(in_array("Exceeds Expectations", $datar))):?><?php if(in_array("Exceeds Expectations", $datar) == "Exceeds Expectations") echo "checked";?> <?php endif; ?> ><?php if(!empty($Title->title_52)){echo $Title->title_52;} ?>
													</label>
													</div>
													</div>
													<div class="col-lg-4">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="OverallRating[]" value="Meet Expectations" <?php if(!empty(in_array("Meet Expectations", $datar))):?><?php if(in_array("Meet Expectations", $datar) == "Meet Expectations") echo "checked";?> <?php endif; ?> ><?php if(!empty($Title->title_53)){echo $Title->title_53;} ?>
													</label>
													</div>
													</div>
													
													</div>
												
												
												</td>
											</tr>
											<tr>
												<td colspan="2">
												<div class="row" style="margin:0px!important;">
													<div class="col-lg-4">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="OverallRating[]" value="Approaches Expectations" <?php if(!empty(in_array("Approaches Expectations", $datar))):?><?php if(in_array("Approaches Expectations", $datar) == "Approaches Expectations") echo "checked";?> <?php endif; ?> ><?php if(!empty($Title->title_54)){echo $Title->title_54;} ?>
													</label>
													</div>
													</div>
													<div class="col-lg-4">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="OverallRating[]" value="Does Not Meet Expectations" <?php if(!empty(in_array("Does Not Meet Expectations", $datar))):?><?php if(in_array("Does Not Meet Expectations", $datar) == "Does Not Meet Expectations") echo "checked";?> <?php endif; ?>  ><?php if(!empty($Title->title_55)){echo $Title->title_55;} ?>
													</label>
													</div>
													</div>
													<div class="col-lg-4">
													<div class="form-check-inline">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input" name="OverallRating[]" value="Not Applicable" <?php if(!empty(in_array("Not Applicable", $datar))):?><?php if(in_array("Not Applicable", $datar) == "Not Applicable") echo "checked";?> <?php endif; ?>  ><?php if(!empty($Title->title_56)){echo $Title->title_56;} ?>
													</label>
													</div>
													</div>
													
												</div>
												
												
												</td>
											</tr>
											
											
											
											
										</tbody>
										
									</table>
								</div>
								
								
								
								
								</div>
								
								
							
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
										
							<button type="submit" class="btn btn-default addEmpSubmitBtn">Submit</button>
							
								
								
								
								</form>
								
								
								
								
							</div>
							
							
							
							<ul class="pagination justify-content-center" style="margin:20px 0">
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/adminzone/Appraisal/AppraisalFormTwo');?>">Previous</a></li>
							<li class="page-item " ><a class="page-link" href="<?=base_url('index.php/adminzone/Appraisal/AppraisalForm');?>">1</a></li>
							<li class="page-item "><a class="page-link" href="<?=base_url('index.php/adminzone/Appraisal/AppraisalFormTwo');?>">2</a></li>
							<li class="page-item active"><a class="page-link" href="<?=base_url('index.php/adminzone/Appraisal/AppraisalFormThree');?>">3</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/adminzone/Appraisal/AppraisalFormFour');?>">4</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/adminzone/Appraisal/AppraisalFormFive');?>">5</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/adminzone/Appraisal/AppraisalFormSix');?>">6</a></li>
							<li class="page-item"><a class="page-link" href="<?=base_url('index.php/adminzone/Appraisal/AppraisalFormFour');?>">Next</a></li>
							</ul>
							
							
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

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){

		// Initialize
		$('.ratingbar').rating({
	    	showCaption:false,
	    	showClear: false,
	    	size: 'sm'
	    });

		// Rating change
	    $('.ratingbar').on('rating:change', function(event, value, caption) {
	    	var id = this.id;
	    	var splitid = id.split('_');
	    	var postid = splitid[1];
	    	
		   	$.ajax({
		   		url: '<?= base_url() ?>index.php/posts/updateRating',
		   		type: 'post',
		   		data: {postid: postid, rating: value},
		   		success: function(response){
		   			$('#averagerating_'+postid).text(response);
		   		}
		   	});
		});
	});
								
</script>

<?php include('footer.php'); ?>