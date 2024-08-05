<?php include('header.php'); ?>


<link rel="stylesheet" type="text/css" href="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.css" />
 
<?php include('calenderSidebar.php'); ?>
	
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
 </style>
 
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:30px; margin-bottom:30px; width:1085px!important;">

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
								
									
									<div class=" " >
									
									<select class="empInput form-control" name="Year_Id" id="Year_Id" style="border: 1px solid #858796;" id="sel1">
											<option value="">Select Year</option>
											
											<?php 
											// echo "<pre>";
											// print_r($teamDesignation);die;
											$curnYear = date("Y");
											
											 foreach ( $GoalYear as $year )
											{
											$selected_text='';
											if($year->year == $curnYear)
											$selected_text='selected';
											echo "<option year='".$year->year."' value='".$year->Year_Id."'  $selected_text > ".$year->year."</option>";

											}
											 
											 
											 ?>
											
											</select>
									</div>
									<div class="mr-auto" >
									<h5 style="text-align:left; margin:auto; color:#6f42c1; font-weight:500; font-size: 16px;">Click on <strong>"Date"</strong> Add New Event.</h5>
									
									</div>
									</div>
						
						
								
						<div data-provide="calendar"></div>


						
						
                   

                    <!-- Content Row -->
                    </div>
                    </div>
        
								
        
      
 
	
<div class="modal modal-fade" id="event-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">
          Event
        </h4>
      </div>
      <div class="modal-body">
        <input name="event-index" type="hidden">
        <form class="form-horizontal">

          <div class="form-group">
            <label for="min-date" class="col-sm-4 control-label">reason</label>
            <div class="col-sm-7">
              <input name="event-reason" class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="min-date" class="col-sm-4 control-label">Dates</label>
            <div class="col-sm-7">
              <div class="input-group input-daterange" data-provide="datepicker">
                <input name="event-start-date" class="form-control" value="2012-04-05" type="text">
                <span class="input-group-addon">to</span>
                <input name="event-end-date" class="form-control" value="2012-04-19" type="text">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="save-event">
          Save
        </button>
      </div>
    </div>
  </div>
</div>
						
						
							
								
								
							
								

<script>
  function editEvent(event) {
  $('#event-modal input[name="event-index"]').val(event ? event.id : '');
  $('#event-modal input[name="event-name"]').val(event ? event.name : '');
  $('#event-modal input[name="event-location"]').val(event ? event.location : '');
  $('#event-modal input[name="event-start-date"]').datepicker('update', event ? event.startDate : '');
  $('#event-modal input[name="event-end-date"]').datepicker('update', event ? event.endDate : '');
  $('#event-modal').modal();
}

function deleteEvent(event) {
  var dataSource = $('#calendar').data('calendar').getDataSource();
  for (var i in dataSource) {
    if (dataSource[i].id == event.id) {
      dataSource.splice(i, 1);
      break;
    }
  }

  $('#calendar').data('calendar').setDataSource(dataSource);
}

function saveEvent() {
  var event = {
    id: $('#event-modal input[name="event-index"]').val(),
    name: $('#event-modal input[name="event-name"]').val(),
    location: $('#event-modal input[name="event-location"]').val(),
    startDate: $('#event-modal input[name="event-start-date"]').datepicker('getDate'),
    endDate: $('#event-modal input[name="event-end-date"]').datepicker('getDate')
  }

  var dataSource = $('#calendar').data('calendar').getDataSource();
  if (event.id) {
    for (var i in dataSource) {
      if (dataSource[i].id == event.id) {
        dataSource[i].name = event.name;
        dataSource[i].location = event.location;
        dataSource[i].startDate = event.startDate;
        dataSource[i].endDate = event.endDate;
      }
    }
  } else {
    var newId = 0;
    for (var i in dataSource) {
      if (dataSource[i].id > newId) {
        newId = dataSource[i].id;
      }
    }

    newId++;
    event.id = newId;

    dataSource.push(event);
  }

  $('#calendar').data('calendar').setDataSource(dataSource);
  $('#event-modal').modal('hide');
}
$(function() {
  var currentYear = new Date().getFullYear();
  $('#calendar').calendar({
    enableContextMenu: true,
    enableRangeSelection: true,
    contextMenuItems: [{
      text: 'Update',
      click: editEvent
    }, {
      text: 'Delete',
      click: deleteEvent
    }],
    selectRange: function(e) {
      editEvent({
        startDate: e.startDate,
        endDate: e.endDate
      });
    },
    mouseOnDay: function(e) {
      if (e.events.length > 0) {
        var content = '';

        for (var i in e.events) {
          content += '<div class="event-tooltip-content">' + '<div class="event-name" style="color:' + e.events[i].color + '">' + e.events[i].name + '</div>' + '<div class="event-location">' + e.events[i].location + '</div>' + '</div>';
        }

        $(e.element).popover({
          trigger: 'manual',
          container: 'body',
          html: true,
          content: content
        });

        $(e.element).popover('show');
      }
    },
    mouseOutDay: function(e) {
      if (e.events.length > 0) {
        $(e.element).popover('hide');
      }
    },
    dayContextMenu: function(e) {
      $(e.element).popover('hide');
    },
    dataSource: [{
      id: 0,
      name: 'Google I/O',
      location: 'San Francisco, CA',
      startDate: new Date(currentYear, 4, 28),
      endDate: new Date(currentYear, 4, 29)
    }, {
      id: 1,
      name: 'Microsoft Convergence',
      location: 'New Orleans, LA',
      startDate: new Date(currentYear, 2, 16),
      endDate: new Date(currentYear, 2, 19)
    }, {
      id: 2,
      name: 'Microsoft Build Developer Conference',
      location: 'San Francisco, CA',
      startDate: new Date(currentYear, 3, 29),
      endDate: new Date(currentYear, 4, 1)
    }, {
      id: 3,
      name: 'Apple Special Event',
      location: 'San Francisco, CA',
      startDate: new Date(currentYear, 8, 1),
      endDate: new Date(currentYear, 8, 1)
    }, {
      id: 4,
      name: 'Apple Keynote',
      location: 'San Francisco, CA',
      startDate: new Date(currentYear, 8, 9),
      endDate: new Date(currentYear, 8, 9)
    }, {
      id: 5,
      name: 'Chrome Developer Summit',
      location: 'Mountain View, CA',
      startDate: new Date(currentYear, 10, 17),
      endDate: new Date(currentYear, 10, 18)
    }, {
      id: 6,
      name: 'F8 2015',
      location: 'San Francisco, CA',
      startDate: new Date(currentYear, 2, 25),
      endDate: new Date(currentYear, 2, 26)
    }, {
      id: 7,
      name: 'Yahoo Mobile Developer Conference',
      location: 'New York',
      startDate: new Date(currentYear, 7, 25),
      endDate: new Date(currentYear, 7, 26)
    }, {
      id: 8,
      name: 'Android Developer Conference',
      location: 'Santa Clara, CA',
      startDate: new Date(currentYear, 11, 1),
      endDate: new Date(currentYear, 11, 4)
    }, {
      id: 9,
      name: 'LA Tech Summit',
      location: 'Los Angeles, CA',
      startDate: new Date(currentYear, 10, 17),
      endDate: new Date(currentYear, 10, 17)
    }]
  });

  $('#save-event').click(function() {
    saveEvent();
  });
});


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
<script src="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.js"></script>
       <script src="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.umd.min.js"></script>
<script src="https://unpkg.com/js-year-calendar@latest/locales/js-year-calendar.fr.js"></script>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>