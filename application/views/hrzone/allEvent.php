


<?php include('header.php'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?= base_url("Assets/css/fullcalendar.css") ?>" />
<link rel="stylesheet" href="<?= base_url("Assets/css/fullcalendar.css.map") ?>" />
   <link href="<?= base_url("Assets/css/bootstrap-datetimepicker.min.css") ?>" rel="stylesheet" media="screen">
   <link href="<?= base_url("Assets/css/bootstrap-datetimepicker.css") ?>" rel="stylesheet" media="screen">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>  

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script><script src="<?= base_url("Assets/js/fullcalendar.js") ?>"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
 
 
 <script src="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.js"></script>
<link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">
 <script>
 
$(document).ready(function() {
var today = new Date();
	
var time = new Date().toLocaleTimeString('en-US', { hour: 'numeric', hour12: true, minute: 'numeric' });
var Etime = new Date(today.getTime() + 30*60000).toLocaleTimeString('en-US', { hour: 'numeric', hour12: true, minute: 'numeric' });



var calendar = $('#calendar').fullCalendar({
   locale: 'en',  
	
   header: {
		left:'',
      right: 'prevYear, prev,next, nextYear',
      center: 'title'

    },
	
	buttonText: {
      month: "Month",
      week: "Week",
      day : "Day",
      listMonth: 'List'
    },
	

   firstDay:1,
    // defaultDate: '2016-09-12',
	height: "auto",
	 weekNumbers: false,
    selectable: true,
    dragabble: false,
    defaultView: 'month',
	// yearColumns:4,
    eventLimit: 3,
	range: true,
    
    bootstrap: true,
	selectHelper: true,
    editable: true,
	timeFormat: 'h:mm A',
	
	eventRender: function(event, element) {
     $(element).tooltip({title: event.title},
	 
	 
	 
	 );
	 
 },
    bootstrap: true,
	eventSources:["<?=site_url('hrzone/CalenderHR/EventHolidayCalender');?>", "<?=site_url('hrzone/CalenderHR/EventBirthdayCalender');?>", "<?=site_url('hrzone/CalenderHR/EventBussinessAnniCalender');?>"],
	events: "<?=site_url('hrzone/CalenderHR/EventCalender');?>",
     
		select: function(start, end, allDay) {

		var CurrDay =  today.getDate();
		var CurrMonth= (today.getMonth()+1);
		var startDay = $.fullCalendar.formatDate(start,'D');
		var startMonth = $.fullCalendar.formatDate(start,'M');

		// if(CurrDay <= startDay && CurrMonth <= startMonth){
		starttime = $.fullCalendar.formatDate(start,'YYYY-MM-DD');
	  var dateTime = starttime+' '+time;
		endtime = $.fullCalendar.formatDate(end,'YYYY-MM-DD H:mm');

		$('#framework option:selected').each(function(){
		$(this).prop('selected', false);
		});
		$("#framework").selectpicker('refresh');
		$("#add-event")[0].reset();

		// $('#insertStart').html(start);
		$('.insertStartDate').val(time);
		$('.endStartDate').val(Etime);
		$('#insertEndDate').val(starttime);

		$("#modal-view-event-add").modal("show");


		// }else{
		// alert("Please select the valid date");
		// }
		},
	
	eventClick: function(event, jsEvent, view)	
{
	
	
	var id = event.id;
	
	var ajaxurl = "<?=site_url('hrzone/CalenderHR/ViewCalender');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {id:id},
			dataType: "JSON",
			success:function(response){
				data = response.data;
				user = response.Userdata;
				console.log(data.eventUrl);
				$('#titleUpdate').val(data.title);
				$('#updatetitleloc').val(data.UserEl);
				$('#updatetextColor').val(data.textColor);
				$('#updateeventBackground').val(data.eventBackground);
				$('#updateeventcreatedBy').val(data.createdBy);
				
				var item=data.eventUrl;
                        var val1=item.replace("[","");
                        var val2=val1.replace("]","");
						console.log(val2);
                        var values=val2;
                        $.each(values.split(","), function(i,e){
                            $("#frameworkUpdate option[value='" + e + "']").prop("selected", true).trigger('change');
                            $("#frameworkUpdate").selectpicker('refresh');
 
                        });
						
						
				$('#updateedescEvent').val(data.discription);
				$('#updateStartTime').val(data.startEventTime);
				$('#updateStartDate').val(data.startEvent);
				$('#updateEndTime').val(data.endEventTime);
				$('#updateEndDate').val(data.endEvent);
				$('#eventId').val(data.Id);
				$('#evId').html(data.Id);
				$("#modal-view-event-Update").modal("show");
			
			}
				
        });
	
	
},
	
	
	
});

var title_error = true;
var start_error = true;
var end_error   = true;
var desc_error  = true;

//Validation on Add event!!!!!!!!!!!

//Title validate
$("#titleEvent").keyup(function(){
			title_check();
		});
		
		function title_check(){
			var emp_val = $("#titleEvent").val();
			
			if(emp_val == ""){
				$("#titleEvent").css("border-color", "red");
				title_error = false;
				return false;
				
			}else{
				$("#titleEvent").css("border-color", "green");
				return true;
			}
		
		
		}
		
		
$("#editable-select").keyup(function(){
			start_check();
		});
		
		function start_check(){
			var emp_val = $("#editable-select").val();
			
			if(emp_val == ""){
				$("#editable-select").css("border-color", "red");
				start_error = false;
				return false;
				
			}else{
				$("#editable-select").css("border-color", "green");
				return true;
			}
		
		
		}
		
		
$("#editable-selectend").keyup(function(){
			end_check();
		});
		
		function end_check(){
			var emp_val = $("#editable-selectend").val();
			
			if(emp_val == ""){
				$("#editable-selectend").css("border-color", "red");
				end_error = false;
				return false;
				
			}else{
				$("#editable-selectend").css("border-color", "green");
				return true;
			}
		
		
		}
		
		
$("#edescEvent").keyup(function(){
			desc_check();
		});
		
		function desc_check(){
			var emp_val = $("#edescEvent").val();
			
			if(emp_val == ""){
				$("#edescEvent").css("border-color", "red");
				desc_error = false;
				return false;
				
			}else{
				$("#edescEvent").css("border-color", "green");
				return true;
			}
		
		
		}
		
		
		
	//Start time Validate

		
		

$('#eventSubmit').on('click',function(){
	 title_error = true;
	 start_error = true;
	 end_error  = true;
	 desc_error = true;
	 
	 title_check();
	 start_check();
	 end_check();
	 desc_check();
	 
	if((title_error == true && start_error == true && end_error == true && desc_error == true)){
	
	var Eventtitle = $('#titleEvent').val();
	var Eventeloc = $('#titleloc').val();
	var EventeColor = $('#textColor').val();
	var EventeBackground = $('#eventBackground').val();
	var createdBy = $('#inputcreatedBy').val();
	var Eventeframework = $('#framework').val();
	var Eventedesc = $('#edescEvent').val();
	var startDate = $('#editable-select').val();
	// alert(startDate);
	var endTime = $('#editable-selectend').val();
	var endDate = $('#insertEndDate').val();
	
	var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/CalenderHR/addEvent');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {Eventtitle : Eventtitle, Eventeloc:Eventeloc, EventeColor:EventeColor, EventeBackground:EventeBackground, createdBy:createdBy, Eventeframework:Eventeframework, Eventedesc : Eventedesc, startDate:startDate, endTime:endTime, endDate:endDate},
			dataType: "JSON",
			success:function(data){
			$('#framework option:selected').each(function(){
			$(this).prop('selected', false);
			});
			$("#framework").selectpicker('refresh');
			$("#add-event")[0].reset();
			$('#modal-view-event-add').modal("hide");
			$(this).removeData('#modal-view-event-add');
			alert(data.message);
			calendar.fullCalendar('refetchEvents');
			}
			
		});
	
	}else{
	
	
	return false;
	
	}
	
  
});



$('#eventUpadate').on('click',function(){
 
	var Eventtitle = $('#titleUpdate').val();
	var Eventeloc = $('#frameworkUpdate').val();
	var EventeColor = $('#updatetextColor').val();
	var EventeBackground = $('#updateeventBackground').val();
	var EventecreatedBy = $('#updateeventcreatedBy').val();
	
	var Eventedesc = $('#updateedescEvent').val();
	var eventId = $('#eventId').val();
	var startTime = $('#updateStartTime').val();
	var startDate = $('#updateStartDate').val();
	var endTime = $('#updateEndTime').val();
	var endDate = $('#updateEndDate').val();
	
	
	var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/CalenderHR/updateEvent');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {Eventtitle : Eventtitle, Eventeloc:Eventeloc, EventeColor:EventeColor, EventeBackground:EventeBackground, EventecreatedBy:EventecreatedBy, Eventedesc : Eventedesc, eventId:eventId, startDate:startDate, startTime:startTime, endTime:endTime, endDate:endDate},
			dataType: "JSON",
			success:function(data){
			$("#add-event")[0].reset();
			$('#modal-view-event-Update').modal("hide");
			alert("Data updated Successfully");
			calendar.fullCalendar('refetchEvents');
			}
			
		});
  
}); 	

$('.eventDelete').on('click',function(){
  
	 if(confirm("Are you sure you want to remove it?"))
                {
	
	var eventId = $('#eventId').val();
	
	
	
	var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/CalenderHR/deleteEvent');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {eventId:eventId},
			dataType: "JSON",
			success:function(data){
			alert("Data deleted Successfully");
			$('#modal-view-event-Update').modal("hide");
			calendar.fullCalendar('refetchEvents');
			}
			
		});
		
		
  }
  
}); 	


});
  
  </script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.css" />
 
<?php include('calenderSidebar.php'); ?>
	
<style>
.dropdown .dropdown-menu {
    font-size: .75rem;
}
.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 0.5rem;
    clear: both;
    font-weight: 400;
    color: #3a3b45;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}
.btn-group-sm>.btn, .btn-sm {
    padding: 0.25rem 0.3rem;
    font-size: .7rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}


.btn-block {
    display: block;
    width: 100%;
}


.btn {
	font-size:0.7rem;
}
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 170px;
}
.multiselect-selected-text{
	font-size:12px;
}
.fc-row .fc-content-skeleton td, .fc-row .fc-helper-skeleton td {
    background: none;
    border-color: white;
    border-bottom: 0;
}	


.fc-state-active, .fc-toolbar .ui-state-active {
    background: #00d3c3!important;
    border: 1px solid white!important;
    color: white;
}


.fc-button a{
	text-decoration:none;
	color:white;
}
.fc-basic-view .fc-body .fc-row {
    
    height: 90px;
}
.fc-time-grid .fc-slats td {
    height: 2.5em;
    border-bottom: 0;
}
.col-sm-3 {
    flex: 0 0 22%;
    max-width: 22%;
}

.fc-day-grid-event {
    margin: 2px 5px 0;
    padding: 0 8px;
}


.fc-today {
    
    background: #00d3c3!important;
}
.fc-head{
	background: #00d3c3;
	color: white;
}
.fc-body{
	background: #266174;
	color: white;
}


.fc-year-view .fc-body .fc-row {
    min-height: 1em;
}

.fc-year-week-days {
    margin-top: 0;
    
    font-size: 14px;
    background: #ffac2f;
    color: black;
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
    background: #ffac2f;
    color: black;
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
 </style>
 <style>
.datetimepicker {
   
    background: white;
}
.modal-content {
	width: 80%;
    border-radius: 0.01rem;
    
}
.empInput{
	border: 1px solid #858796;
    border-radius: 3px;
	overflow:hidden!important;
	
	padding: .2rem .75rem!important;
}

.form-group {
        margin: 0.1rem 0 0.7rem 0rem!important;
}

label {
    display: inline-block;
    margin-bottom: 0.25rem;
    color: #706e80;
    FONT-SIZE: 10PX;
}
.form-control {
border: 1px solid white;
    display: block;
    width: 100%;
    height: calc(1.5em + 0.4rem + 2px);
	font-size: 0.9rem;
}

input:focus::placeholder {
  color: transparent;
}
.fc-center>h2{
	margin-top: 10px;
	color: #1C304C;
}
.fc-right>button{
	margin-top: 10px;
	color: #00d3c3;
	background-color: #00d3c3;
}
.fc-right>div{
	margin-top: 10px;
	color: #00d3c3;
	background-color: #00d3c3;
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
						
						<div class="d-flex justify-content-between" style="background-color: #1c304c;">
						<div class="p-2" style="color:white;">Monthly Events</div>
						<div class="p-2 ">
						<div class="fc-button-group"><button type="button" class="fc-agendaDay-button fc-button fc-state-default" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/Day');?>'">Day</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/WeekInfo');?>'">Week</button><button type="button" class="fc-month-button fc-button fc-state-default fc-state-active" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/');?>'">Month</button><button type="button" class="fc-year-button fc-button fc-state-default fc-state-hover" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/Events');?>'">year</button></div>
						
						</div>
						<div class="p-2 "></div>
						</div>
						
						
						<div class="d-flex sasifb flex-row-reverse " style="background: #f6f7f7;">
						
						<div class="" style="padding: 5px 0 7px 22px;">
							
						</div>
						
						<div class="mr-auto" style="padding: 5px 0 7px 22px;">
						<h5 style="text-align:left; margin:auto; color:#1c304c; font-weight:500; font-size: 16px;">Click on <strong>"Date"</strong> Add New Event.</h5>

						</div>
						
						

						</div>
						<div class="">
						
						
						
								
						 <div id="calendar"></div>
							
							
						
						
                   

                    <!-- Content Row -->
                    </div>
                    </div>
        
		
		
		
		
		
		


		
        
     

<div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
 
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        
		
        <!-- Modal body -->
        <div class="modal-body">
		<div class="d-flex justify-content-between">
		<div class="">Add Event</div>

		<div class="">
		<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
		</div>
		</div>
          <form method="post" id="add-event">
       
			<div class="row" >
			<div class="col-lg-6">
			<div class="form-group">
			<label>Title</label>
			<input type="text" class="empInput form-control" id="titleEvent" name="title" style="border-bottom: 1px solid #858796;" required>
			</div>
			<span id="user_Name_error"></span>
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label>Share</label>
			 <select id="framework"  data-live-search="true" data-selected-text-format="count" data-actions-box="true" name="framework[]" multiple class="selectpicker" >
     
			<?php 
			// echo "<pre>";
			// print_r($UserInfo);die;

			foreach($UserInfo as $data){
			echo '<option value="'.$data->id.'">'.$data->name.'</option>';
			}?>
     </select>
			
			</div>
			<span id="user_Email_error"></span>
			</div>

			</div>
			
			
			<div class="row" >
			<div class="col-lg-6">
			<div class="form-group">
			<label>Start <span ></span></label>
			<select id="editable-select" name="StartDate" class="insertStartDate empInput form-control" style="border-bottom: 1px solid #858796;">
			<option>10:00 AM</option>
			<option>10:30 AM</option>
			<option>11:00 AM</option>
			<option>11:30 AM</option>
			<option>12:00 PM</option>
			<option>12:30 PM</option>
			<option>01:00 PM</option>
			<option>01:30 PM</option>
			<option>02:00 PM</option>
			<option>02:30 PM</option>
			<option>03:00 PM</option>
			<option>03:30 PM</option>
			<option>04:30 PM</option>
			<option>05:00 PM</option>
			<option>05:30 PM</option>
			<option>06:00 PM</option>
			<option>06:30 PM</option>
			</select>
			
			</div>
			
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label>End</label>
			<select id="editable-selectend" name="endStartDate" class="endStartDate empInput form-control" min="" style="border-bottom: 1px solid #858796;">
			<option>10:00 AM</option>
			<option>10:30 AM</option>
			<option>11:00 AM</option>
			<option>11:30 AM</option>
			<option>12:00 PM</option>
			<option>12:30 PM</option>
			<option>01:00 PM</option>
			<option>01:30 PM</option>
			<option>02:00 PM</option>
			<option>02:30 PM</option>
			<option>03:00 PM</option>
			<option>03:30 PM</option>
			<option>04:30 PM</option>
			<option>05:00 PM</option>
			<option>05:30 PM</option>
			<option>06:00 PM</option>
			<option>06:30 PM</option>
			</select>
			<input type="hidden" class="form_datetime empInput form-control" value="" name="EndDate" id="insertEndDate" style="padding: 0.2rem 0.001rem!important; border-bottom: 1px solid #858796;" >
			</div>
			<span id="user_Email_error"></span>
			</div>

			</div>
			
			
			<div class="row" >
			<div class="col-lg-4">
			<div class="form-group">
			<label>Color</label>
				<select class="empInput form-control" name="textColor" id="textColor" style="border-bottom: 1px solid #858796;">
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
			
			
			<div class="col-lg-4">
			<div class="form-group">
			<label>Background Color</label>
			<select class="empInput form-control" name="eventBackground" id="eventBackground" style="border-bottom: 1px solid #858796;">
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
			
			
			<div class="col-lg-4">
			<div class="form-group">
			<label>Created By</label>
			<select class="empInput form-control" name="createdBy" id="inputcreatedBy" style="border-bottom: 1px solid #858796;">
				<option >Admin</option>
				<option >Manager</option>
				<option >Team Leader</option>
			</select>
			
			
			</div>
			
			</div>
			
			
			
			
			
			
			</div>
			
			
			<div class="row" >
			<div class="col-lg-12">
			<div class="form-group">
			<label>Description</label>
			<input type="text" class="empInput form-control" name="name" id="edescEvent" name="edesc" style="border-bottom: 1px solid #858796;" >
			</div>
			<span id="user_Name_error"></span>
			</div>
			</div>
			
			
		   
		   
                 
	  
		<div class="d-flex">
		<div class="mr-auto"></div>
		<div class="">
        <button type="button" class="btn" style="color:red;" data-bs-dismiss="modal">Close</button>        
		
		</div>
		<div class="">
        <button type="button" id="eventSubmit" class="btn" >Save</button>
		
		</div>
		</div>
      </div>
       
      </form>
   
  </div>
  
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
			<?php
			
	?>
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
				<label>Share</label>
				<select id="frameworkUpdate" data-live-search="true" data-selected-text-format="count" name="frameworkUpdate[]" multiple class="selectpicker" >
				<?php 
			

			foreach($UserInfo as $data){
			echo '<option value="'.$data->id.'">'.$data->name.'</option>';
			}?>
				
				</select>
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
			<div class="col-lg-4">
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
			<div class="col-lg-4">
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
			
			
			<div class="col-lg-4">
			<div class="form-group">
			<label>Created By</label>
			<select class="empInput form-control" name="createdBy" id="updateeventcreatedBy" style="border-bottom: 1px solid #858796;">
				<option >Admin</option>
				<option >Manager</option>
				<option >Team Leader</option>
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
	
	
<script>
$(document).ready(function(){
 
 $('#frameworkUpdate').selectpicker();
 $('#editable-select').editableSelect();
 $('#editable-selectend').editableSelect();
 
});










</script>

<?php include('footer.php'); ?>
