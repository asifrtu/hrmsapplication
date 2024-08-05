
<?php include('header.php'); ?>

<link rel="stylesheet" href="<?= base_url("Assets/css/fullcalendar.css") ?>" />
<link rel="stylesheet" href="<?= base_url("Assets/css/fullcalendar.css.map") ?>" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
  
  <script src="<?= base_url("Assets/js/fullcalendar.js") ?>"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.js"></script>
     
<script src="https://unpkg.com/js-year-calendar@latest/locales/js-year-calendar.fr.js"></script>
 <script>
  
  // Code goes here
$(document).ready(function() {

  // page is now ready, initialize the calendar...

  var calendar = $('#calendar').fullCalendar({
    // put your options and callbacks here
	
   // firstDay: 1,
    locale: 'en',  
    timeZone: 'UTC',
		firstDay:7,
	defaultDate: '2021-11-01',
    // editable: true,
    selectable: true,
    // selectHelper: true,
    displayEventTime: false, // don't show the time column in list view
    // buttonIcons: true, // show the prev/next text
    weekNumbers: false,
    // navLinks: true, // can click day/week names to navigate views
    // editable: true,
    eventLimit: true,
	timeFormat: '',
		
	
	header: {
	  left:'',
      right: 'prev,next',
      center: 'title'

    },
	
	
	
    // timezone: 'local',
    height: "auto",
    selectable: true,
    dragabble: true,
    defaultView: 'year',
	yearColumns:4,
    range: true,
      multipleDates: true,
	// minTime: '10:00:00',
	// maxTime: '18:00:00',
	
    // durationEditable: true,
    bootstrap: true,
	eventSources:["<?=site_url('hrzone/CalenderHR/EventHolidayYearlyCalender');?>", "<?=site_url('hrzone/CalenderHR/EventBirthdayYearlyCalender');?>", "<?=site_url('hrzone/CalenderHR/EventBussinessAnniYearlyCalender');?>"],
	
	events: "<?=site_url('hrzone/CalenderHR/EventYearlyCalender');?>",
   eventRender: function(event, element) {
     $(element).tooltip({title: event.description + event.title});
 },
	 
  

})

});
  
  </script>
 
<?php include('calenderSidebar.php'); ?>
	
<style>
.fc-day-grid-event {
    margin: 0px 10px 0;
    padding: 0 5px;
}
.fc-day-grid-event {
    margin-top: 0px;
}


.fc-event {
    position: relative;
    display: block;
    font-size: .85em;
    line-height: .3;
    border-radius: 100px;
    border: 1px solid #a7a1a2;
    font-weight: normal;
}


.fc-state-active, .fc-toolbar .ui-state-active {
    background: #1c304c!important;
    border: 1px solid white!important;
    color: white;
}

.fc-year-monthly-name a {
    color: black;
   
    font-weight: 600;
    text-decoration: none;
    font-size: 16px;
}
.fc th {
    
    font-size: 12px;
    padding: 4px 0!important;
}
.fc th, .fc td {
    border-style: solid;
    border-width: 1px;
    padding: 0;
    vertical-align: top;
    font-size: 12px;
}
.fc-button a{
	text-decoration:none;
	color:white;
}

.fc-today {
   
    background: #2e2869!important;
    color: white;
	border:3px solid #2e2869!important;
}
.fc-year-view .fc-body .fc-row {
    min-height: 2em!important;
}

.fc-ltr .fc-year-view .fc-day-top .fc-day-number {
    float: none!important;
}

.fc-year-view .fc-week-number, .fc-year-view .fc-day-number {
    padding: 2px 0px;
}
.col-sm-3 {
    flex: 0 0 22%;
    max-width: 22%;
}



.fc-head{
	background: #00d3c3;
	color: white;
}
.fc-body{
	background: white;
	color: #2c2b2b;
}


.fc-year-week-days {
    margin-top: 0;
    
    font-size: 14px;
    background: #00d3c3;
    color: #fff;
}
.fc-year-monthly-name{
	border:none!important;
}

.fc table {
    width: 100%;
    box-sizing: border-box;
    table-layout: fixed;
    border-collapse: collapse;
    border-spacing: 0;
    font-size: 14px;
}
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
  padding: 8px 11px;
  text-decoration: none;
  font-weight: 700;
    font-size: larger;

}
.dd a {
	text-decoration:none;
	color:white;
}
.form-group {
    margin: 0.5rem 0rem!important;
}


.empInput{
	border: 1px solid #858796;
    border-radius: 3px;
}
.useremp {
    background-color: #1C304C;
    color: white;
    border: 1px solid #1C304C;
    padding: 4px;
    border-radius: 100%;
}

label {
    display: inline-block;
    margin-bottom: .5rem;
    color: #706e80;
   
}
.addempH{
	margin-left:10px;
}
.colorEmp{
	background-color:#1C304C;
}

.form-control {
    display: block;
    width: 100%;
	font-size: 0.9rem!important;
    height: calc(1.5em + .4rem + 2px);
}

input:focus::placeholder {
  color: transparent;
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


.ColorSecondaryNotes{
	background-color:#ececec;
	padding: .35rem 1.25rem!important;
}

.headerAsif{
	padding: 15px 31px 6px 31px;
}

label {
    margin-bottom: .2rem!important;
	font-weight: 600;
}


.calendar table.month td {
   
    border: 1px solid #e1e6eb;
}

.calendar table.month th.day-header {
    font-size: 14px;
    background: #00d3c3;
    color: #fff;
}
.calendar table.month tr td, .calendar table.month tr th {
    padding: 2px;
}


.calendar table.month td.day .day-content {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    padding: 4px 5px;
}

.calendar .calendar-header {
    width: 100%;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    display: none;
}

.day-header{
	border: 1px solid #a4a4a5!important;
	padding:5px 2px!important;
}
.calendar table.month th.month-title {
    font-size: 16px;
    padding-bottom: 5px;
    padding-top: 20px;
}



.fc-year-month-separator {
    width: 5px;
}
.h2, h2 {
    font-size: 1.2rem;
}

@media (max-width: 576px){
    .fc-basic-view .fc-body .fc-row {
    height: 56px;
}
}
 </style>
 
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:30px; margin-bottom:50px; width:1085px!important;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
<?php

			

			if(!empty($this->session->flashdata('message'))) { ?>
                    
                    
                    <?=$this->session->flashdata('message');?>
                    
                <?php } ?>
                    <!-- Page Heading -->
                    
					<div class="card shadow mb-4" style="margin-bottom:100px;">
                        
                    <!-- Content Row -->
					  <!-- Area Chart -->
						<div class="d-flex justify-content-between mb-3" style="background-color: #1c304c;">
						<div class="p-2" style="color:white;">Yearly Events</div>
						<div class="p-2 ">
						<div class="fc-button-group"><button type="button" class="fc-agendaDay-button fc-button fc-state-default" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/Day');?>'">Day</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/WeekInfo');?>'">Week</button><button type="button" class="fc-month-button fc-button fc-state-default" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/');?>'">Month</button><button type="button" class="fc-year-button fc-button fc-state-default  fc-state-active fc-state-hover" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/Events');?>'">year</button></div>
						
						</div>
						<div class="p-2 "></div>
						</div>
						
						<div class="card-body">
						
						
						
								
						 <div id="calendar"></div>


						
						
                   

                    <!-- Content Row -->
                    </div>
                    </div>
        
								
        
     						

<div id="modal-view-event-Update" class="modal modal-top fade calendar-modal">
 
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        
		
        <!-- Modal body -->
        <div class="modal-body">
		<div class="d-flex justify-content-between">
		<div class="">Update Event</div>

		<div class="">
		<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>
          <form method="post" id="Update-event">
       
			<div class="row" >
			
			</div>
			<div class="row" >
			<div class="col-lg-6">
			<div class="form-group">
			<label>Title</label>
			<input type="text" class="empInput form-control" id="titleUpdate" name="title" style="border-bottom: 1px solid #858796;">
			</div>
			<span id="user_Name_error"></span>
			</div>
			<div class="col-lg-6" >
			<div class="form-group">
			
				</div>
			
			</div>

			</div>
			
			
			<div class="row" >
			<div class="col-lg-6">
			<div class="form-group">
			<label>Start</label>
			<input type="text" class=" empInput form-control" name="startEventTime" id="updateStartTime" style="font-size: 0.799rem!important; padding: 0.2rem 0.001rem!important; border-bottom: 1px solid #858796;" >
			<input type="hidden" class=" empInput form-control" name="StartDate" id="updateStartDate" style="font-size: 0.799rem!important; padding: 0.2rem 0.001rem!important; border-bottom: 1px solid #858796;" >
            </div>
			
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label>End</label>
			<input type="text" class=" empInput form-control" name="endEventTime" id="updateEndTime" style="font-size: 0.799rem!important; padding: 0.2rem 0.001rem!important; border-bottom: 1px solid #858796;" >
			<input type="hidden" class=" empInput form-control" name="EndDate" id="updateEndDate" style="font-size: 0.799rem!important; padding: 0.2rem 0.001rem!important; border-bottom: 1px solid #858796;" >
			</div>
			<span id="user_Email_error"></span>
			</div>

			</div>
			
			
			<div class="row" >
			<div class="col-lg-6">
			<div class="form-group">
			<label>Color</label>
				<select class="empInput form-control" name="textColor" id="updatetextColor" style="border-bottom: 1px solid #858796;">
				<option value="#FFFFFF">White</option>
				<option value="#FF0000">Red</option>
				<option value="#800000">Maroon</option>
				<option value="#FFFF00">Yellow</option>
				<option value="#808000">Olive</option>
				<option value="#00FF00">Lime</option>
				<option value="#008000">Green</option>
				</select>
			</div>
			
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label>Background Color</label>
			<select class="empInput form-control" name="eventBackground" id="updateeventBackground" style="border-bottom: 1px solid #858796;">
				<option value="#FFFFFF">White</option>
				<option value="#FF0000">Red</option>
				<option value="#800000">Maroon</option>
				<option value="#FFFF00">Yellow</option>
				<option value="#808000">Olive</option>
				<option value="#00FF00">Lime</option>
				<option value="#008000">Green</option>
				</select>
			
			
			</div>
			
			</div>

			</div>
			
			
			<div class="row" >
			<div class="col-lg-12">
			<div class="form-group">
			<label>Description</label>
			<input type="text" class="empInput form-control" name="name" id="updateedescEvent" name="edesc" style="border-bottom: 1px solid #858796;" >
			</div>
			<span id="user_Name_error"></span>
			</div>
			</div>
			
			
		   
		   
                 
	  
		<div class="d-flex">
		<div class="mr-auto"><button type="button" id="eventId" class="btn eventDelete" >Delete</button></div>
		<div class="">
        <button type="button" class="btn" style="color:red;" data-bs-dismiss="modal">Close</button>        
		
		</div>
		<div class="">
        <button type="button" id="eventUpadate" class="btn" >Update</button>
		
		</div>
		</div>
      </div>
       
      </form>
   
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

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>
