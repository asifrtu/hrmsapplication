


<?php include('header.php'); ?>
<link rel="stylesheet" href="<?= base_url("Assets/css/fullcalendar.css") ?>" />
<link rel="stylesheet" href="<?= base_url("Assets/css/fullcalendar.css.map") ?>" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/af.js"></script>
  <script src="<?= base_url("Assets/js/fullcalendar.js") ?>"></script>
  <script src="<?= base_url("Assets/js/dateFormat.min.js") ?>"></script>
 <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>  
  
 
 <script>
  
  // Code goes here
$(document).ready(function() {

  
  var calendar = $('#calendar').fullCalendar({
    // put your options and callbacks here
   locale: 'en',  

   header: {
		left:'title',
      right: 'prev,next',
      center: 'month,agendaWeek,agendaDay,listMonth'

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
	
    // durationEditable: true,
	
	
    bootstrap: true,
	
     events: "<?=site_url('hrzone/CalenderHR/EventCalender');?>",
	 // dayClick: function(start, end, jsEvent, view, element){
          // element.popover({
              // animation:true,
              // delay: 300,
              // content: '<b>Inicio</b>:'+event.start+"<b>Fin</b>:"+event.end,
              // trigger: 'hover'
          // });
        // },
		
		
		
    select: function(start, end, allDay) {
      // alert(end);
	  
	  // $('#elment').popover('show');
		
	  $("#add-event")[0].reset();
	   $('#modal-view-event-add').find('input[name=startDate]').val(
            start.format('YYYY-MM-DD HH:mm:ss')
        );
        $('#modal-view-event-add').find('input[name=endDate]').val(
            end.format('YYYY-MM-DD HH:mm:ss')
        );
        
        // show modal dialog
			// $("#modal-view-event-add").modal("show");
        // $('#modal-view-event-add').popover();
		
		
		// $("body").on('click', '.eventSubmit', function(){
			$('#eventSubmit').on('click',function(){
  // function updateUserRecord(){
	var Eventtitle = $('#titleEvent').val();
	var Eventedesc = $('#edescEvent').val();
	var startDate = $('#startDate').val();
	var endDate = $('#endDate').val();
	
	
	var Yid = $(this).attr('data-yearID');
	var ajaxurl = "<?=site_url('hrzone/CalenderHR/addEvent');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {Eventtitle : Eventtitle, Eventedesc : Eventedesc, startDate:startDate, endDate:endDate},
			dataType: "JSON",
			success:function(data){
			$('#modal-view-event-add').modal("hide");
			alert("Data updated Successfully");
			// $('#calendar').fulslCalendar('renderEvent', eventData, true);
			}
			
		});
  
}); 
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
	
	
	
	// eventClick: function(event){
      // showModal(event.apId, event.patId, event.provisoryId);
    // },
  })
  
  // function showModal(a, b, c) {
  // $('#calendarModal').modal('show');
// }
  
   // $(".fc-left").append('<h5 style="text-align:left; margin:auto; color:#6f42c1; font-weight:500; font-size: 16px;">Click on <strong>"Date"</strong> Add New Event.</h5>');

// $("body").on('click', '.seoTeamData', function(){
	
	
// });

});
  
  </script>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.css" />
 
<?php include('calenderSidebar.php'); ?>
	
<style>

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

.fc-event, .fc-event-dot{
    background-color: #e7997b;
}
td.fc-today {
    border-style: double;
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
						<div class="ColorSecondaryPre" style="padding: 12px 5px 5px 12px;">
                            <h5 class=" md-4 ColorPrimary" style="font-size:17px;">Yearly Events</h5>
                        </div>
						
						<div class="card-body">
						<div class="d-flex sasifb flex-row-reverse " style="margin-bottom:10px;">
								
									
									
									<div class="mr-auto" >
									<h5 style="text-align:left; margin:auto; color:#6f42c1; font-weight:500; font-size: 16px;">Click on <strong>"Date"</strong> Add New Event.</h5>
									
									</div>
									</div>
						
						
								
						 <div id="calendar"></div>
							
							
						
						
                   

                    <!-- Content Row -->
                    </div>
                    </div>
        
								
        
      <div id="modal-view-event" class="modal modal-top fade calendar-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<h4 class="modal-title"><span class="event-icon"></span><span class="event-title"></span></h4>
					<div class="event-body"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

<div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
  <div class="card">
    <div class="card-body">
      <form id="add-event">
        <div class="modal-body">
        <h4>Add Event Detail</h4>        
          <div class="form-group">
            <label>Event name</label>
            <input type="text" class="form-control" id="titleEvent" name="title">
          </div>
         
              
          <div class="form-group">
            <label>Event Description</label>
            <textarea class="form-control" id="edescEvent" name="edesc"></textarea>
          </div>
            
			<div class="form-group">
            <label>Event Start</label>
        <input type='text' class="datetimepicker form-control" id="startDate" name="startDate">
             </div>
             
			 <div class="form-group">
            <label>Event End</label>
        <input type='text' class="datetimepicker form-control" id="endDate" name="endDate">
             </div>
                 
      </div>
        <div class="modal-footer">
        <button type="button" id="eventSubmit" class="btn btn-primary" >Save</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>        
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
