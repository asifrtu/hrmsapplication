


<?php include('header.php'); ?>
<link rel="stylesheet" href="<?= base_url("Assets/css/fullcalendar.css") ?>" />
<link rel="stylesheet" href="<?= base_url("Assets/css/fullcalendar.css.map") ?>" />
   <link href="<?= base_url("Assets/css/bootstrap-datetimepicker.min.css") ?>" rel="stylesheet" media="screen">
   <link href="<?= base_url("Assets/css/bootstrap-datetimepicker.css") ?>" rel="stylesheet" media="screen">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/af.js"></script>
  <script src="<?= base_url("Assets/js/fullcalendar.js") ?>"></script>
  <script src="<?= base_url("Assets/js/dateFormat.min.js") ?>"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>  
  
 
 <script>
  
  // Code goes here
$(document).ready(function() {

 
  var calendar = $('#calendar').fullCalendar({
    // put your options and callbacks here
   locale: 'en',  

   header: {
		left:'',
      right: 'prev,next',
      center: 'title'

    },
	buttonText: {
       
      month: "Month",
      week: "Week",
      day : "Day",
      listMonth: 'List'
    },
	// dayClick: function(start, end, jsEvent, view){
    // alert(end);
    // alert(end);
	 // $("#modal-view-event-add").modal("show");
	// },
	
    timezone: 'local',
    height: "auto",
	 weekNumbers: false,
    selectable: true,
    dragabble: true,
    defaultView: 'month',
	yearColumns:4,
    eventLimit: 3,
	range: true,
      multipleDates: true,
	minTime: '10:00:00',
	maxTime: '18:30:00',
    durationEditable: true,
    bootstrap: true,
	selectHelper: true,
    editable: true,
	
    // durationEditable: true,
	
	
    bootstrap: true,
	
     events: "<?=site_url('hrzone/CalenderHR/EventCalender');?>",
     // events: "<?=site_url('hrzone/CalenderHR/EventHolidayCalender');?>",
	 // dayClick: function(start, end, jsEvent, view, element){
          // element.popover({
              // animation:true,
              // delay: 300,
              // content: '<b>Inicio</b>:'+event.start+"<b>Fin</b>:"+event.end,
              // trigger: 'hover'
          // });
        // },
		
		
	
	
    select: function(start, end, allDay) {
    
	// $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'}, start);
	
	  // alert(end);
	  
	  // $('#elment').popover('show');
		
	  $("#add-event")[0].reset();
	   
         // $('#add-event').find('input[name=startDate]').val(
            // start.format('YYYY-MM-DD HH:mm:ss')
        // );
        // $('#add-event').find('input[name=endDate]').val(
            // end.format('YYYY-MM-DD HH:mm:ss')
        // );
        // show modal dialog
		$('#insertStartDate').val(start);
		$('#insertEndDate').val(end);
			$("#modal-view-event-add").modal("show");
			
        // $('#modal-view-event-add').popover();
		
		
		// $("body").on('click', '.eventSubmit', function(){





	  // $('#startDate').val(start);
	// $('#endDate').val(end);
	  // $("#modal-view-event-add").modal("show");
	  // $("#event-modal").modal('show');
	  // showModal(null, null, null);
	  // var title = prompt('Event Title:');
      // if (title) {
        // var event = {
          // title: title,
          // start: start.clone(),
          // end: end.clone(),
          // allDay: true,
          // editable: true,
          // eventDurationEditable: true,
          // eventStartEditable: true,
          // color: 'red',
        // };


        // calendar.fullCalendar('renderEvent', event, true);
		
		 // $('#calendar').fullCalendar('unselect');
		  // $('.modal').find('input').val('');
		  // $('.modal').modal('hide');
      // }
    },
	
	eventClick: function(event, jsEvent, view)	
{
	var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
	// alert(start);
	var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
	//alert(end);
	console.log(event);
	var title = event.title;
	// alert(title);
	var id = event.id;
	var Eventtitle = $('#titleUpdate').val(event.title);
	var Eventeloc = $('#updatetitleloc').val(event.url);
	var EventeColor = $('#updatetextColor').val(event.textColor);
	var EventeBackground = $('#updateeventBackground').val(event.backgroundColor);
	// var EventeUrl = $('#eventUrl').val();
	var Eventedesc = $('#updateedescEvent').val(event.description);
	var startDate = $('#eventId').val(event.id);
	var startDate = $('#updateStartDate').val(event.start);
	var endDate = $('#updateEndDate').val(event.end);
	
	$("#modal-view-event-Update").modal("show");
	
},
	
	
	// eventClick: function(event, jsEvent, view){
        // $('#mtitulo').html(event.title);
        // $('#autor').html(event.autor);
        // $('#inicioEdit').val(event.start);
        // $('#importanciaEdit').val(event.impor);
        // $('#descricaoEventoEdit').val(event.text);
        // $('#modalEvento').modal();
      // },
	// eventClick: function(event){
      // showModal(event.apId, event.patId, event.provisoryId);
    // },
  
  
  // function showModal(a, b, c) {
  // $('#calendarModal').modal('show');
// }
 
	
	
	
});



$('#eventSubmit').on('click',function(){
  // function updateUserRecord(){
	var Eventtitle = $('#titleEvent').val();
	var Eventeloc = $('#titleloc').val();
	var EventeColor = $('#textColor').val();
	var EventeBackground = $('#eventBackground').val();
	// var EventeUrl = $('#eventUrl').val();
	var Eventedesc = $('#edescEvent').val();
	var startDate = $('#insertStartDate').val();
	var endDate = $('#insertEndDate').val();
	
	
	var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/CalenderHR/addEvent');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {Eventtitle : Eventtitle, Eventeloc:Eventeloc, EventeColor:EventeColor, EventeBackground:EventeBackground, Eventedesc : Eventedesc, startDate:startDate, endDate:endDate},
			dataType: "JSON",
			success:function(data){
			$('#modal-view-event-add').modal("hide");
			alert("Event added Successfully");
			calendar.fullCalendar('renderEvent', event, true);
			}
			
		});
  
});



$('#eventUpadate').on('click',function(){
  // function updateUserRecord(){
	var Eventtitle = $('#titleUpdate').val();
	var Eventeloc = $('#updatetitleloc').val();
	var EventeColor = $('#updatetextColor').val();
	var EventeBackground = $('#updateeventBackground').val();
	// var EventeUrl = $('#eventUrl').val();
	var Eventedesc = $('#updateedescEvent').val();
	var eventId = $('#eventId').val();
	var startDate = $('#updateStartDate').val();
	var endDate = $('#updateEndDate').val();
	
	
	var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/CalenderHR/updateEvent');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {Eventtitle : Eventtitle, Eventeloc:Eventeloc, EventeColor:EventeColor, EventeBackground:EventeBackground, Eventedesc : Eventedesc, eventId:eventId, startDate:startDate, endDate:endDate},
			dataType: "JSON",
			success:function(data){
			alert("Data updated Successfully");
			$('#modal-view-event-Update').modal("hide");
			// $('#calendar').fullCalendar('renderEvent', eventData, true);
			// $('#calendar').fulslCalendar('renderEvent', eventData, true);
			}
			
		});
  
}); 	

$('.eventDelete').on('click',function(){
  // function updateUserRecord(){
	
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
			// $('#calendar').fullCalendar('renderEvent', eventData, true);
			// $('#calendar').fulslCalendar('renderEvent', eventData, true);
			}
			
		});
  
}); 	


});
  
  </script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.css" />
 
<?php include('calenderSidebar.php'); ?>
	
<style>
.fc-row .fc-content-skeleton td, .fc-row .fc-helper-skeleton td {
    background: none;
    border-color: white;
    border-bottom: 0;
}	


.fc-state-active, .fc-toolbar .ui-state-active {
    background: black!important;
    border: none!important;
    color: white;
}


.fc-button a{
	text-decoration:none;
	color:white;
}
.fc-basic-view .fc-body .fc-row {
    
    height: 121px;
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
    
    background: #2e2869!important;
}
.fc-head{
	background: #ffac2f;
	color: white;
}
.fc-body{
	background: #1C304C;
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
</style>
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px; width:1085px!important;">

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
						
						<div class="d-flex justify-content-between" style="background-color: #504a94;">
						<div class="p-2" style="color:white;">Yearly Events</div>
						<div class="p-2 ">
						<div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-state-active" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/');?>'">Month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/WeekInfo');?>'">Week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/Day');?>'">Day</button><button type="button" class="fc-year-button fc-button fc-state-default fc-state-hover" onclick="javascript:location.href='<?=base_url('index.php/hrzone/CalenderHR/Events');?>'">year</button></div>
						
						</div>
						<div class="p-2 "></div>
						</div>
						
						
						<div class="d-flex sasifb flex-row-reverse " style="background: #f6f7f7;">
						
						<div class="" style="padding: 5px 10 7px 22px;">
							<div class="search-container" style="padding-right:10px; padding-top:5px;">
								<form action="#">
									<input id="myInput" type="text" placeholder="Search..">
									<button type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>	
						</div>
						
						<div class="mr-auto" style="padding: 5px 0 7px 22px;">
						<h5 style="text-align:left; margin:auto; color:#6f42c1; font-weight:500; font-size: 16px;">Click on <strong>"Date"</strong> Add New Event.</h5>

						</div>
						
						

						</div>
						<div class="card-body">
						
						
						
								
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
			<input type="text" class="empInput form-control" id="titleEvent" name="title" style="border-bottom: 1px solid #858796;">
			</div>
			<span id="user_Name_error"></span>
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label>Location</label>
			<input type="text" class="empInput form-control"id="titleloc" name="titleloc" style="border-bottom: 1px solid #858796;">
			</div>
			<span id="user_Email_error"></span>
			</div>

			</div>
			
			
			<div class="row" >
			<div class="col-lg-6">
			<div class="form-group">
			<label>Start</label>
			<input type="text" class="form_datetime empInput form-control" value="" name="StartDate" id="insertStartDate" style="border-bottom: 1px solid #858796;" >
            </div>
			
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label>End</label>
			<input type="text" class="form_datetime empInput form-control" value="" name="EndDate" id="insertEndDate" style="border-bottom: 1px solid #858796;" >
			</div>
			<span id="user_Email_error"></span>
			</div>

			</div>
			
			
			<div class="row" >
			<div class="col-lg-6">
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
			<div class="col-lg-6">
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
			<div class="col-lg-6">
			<div class="form-group">
			<label>Title</label>
			<input type="text" class="empInput form-control" id="titleUpdate" name="title" style="border-bottom: 1px solid #858796;">
			</div>
			<span id="user_Name_error"></span>
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label>Location</label>
			<input type="text" class="empInput form-control"id="updatetitleloc" name="titleloc" style="border-bottom: 1px solid #858796;">
			</div>
			<span id="user_Email_error"></span>
			</div>

			</div>
			
			
			<div class="row" >
			<div class="col-lg-6">
			<div class="form-group">
			<label>Start</label>
			<input type="text" class="empInput form-control" name="StartDate" id="updateStartDate" style="border-bottom: 1px solid #858796;" >
            </div>
			
			</div>
			<div class="col-lg-6">
			<div class="form-group">
			<label>End</label>
			<input type="text" class="empInput form-control" name="EndDate" id="updateEndDate" style="border-bottom: 1px solid #858796;" >
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
	
	
<script type="text/javascript" src="<?= base_url("Assets/js/bootstrap-datetimepicker.js") ?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?= base_url("Assets/js/bootstrap-datetimepicker.min.js") ?>" charset="UTF-8"></script>
<script type="text/javascript">

 $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});


    
</script>

<?php include('footer.php'); ?>
