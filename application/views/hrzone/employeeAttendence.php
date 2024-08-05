<?php include('header.php'); ?>
<?php include('calenderSidebar.php'); ?>
<style>
.addEmpSubmitBtn {
    margin: 10px 530px;
    color: white !important;
    float: center;
    background: #1C304C;
    font-weight: 400;
    border-radius: 3px !important;
    padding: 0.2em 2em 0.2em 2em;
    border: none !important;
}

.LeaveSymbol {
    position: relative;
    display: block;
    padding-left: .6rem;
}

.dayNmDay {
    text-align: left !important;
    color: white;
    background-color: #1C304C;

}

.dayNmDate {
    text-align: left !important;
    background: #00d3c3!important; 
    color: #fff!important;

}



.calMemo {
    text-align: left !important;
    color: #fff;
    background: #1C304C;
}

.allEmpAttendence {
    color: #fff !important;
    background-color: #1C304C!important;
    font-size: 13px;
    border: 1px solid #dbdbdb !important;
    text-align: center;

}

.allEmpLeaves {
    color: #fff !important;
    background-color: #1C304C !important;
    font-size: 13px;
    border: 1px solid #dbdbdb !important;
    text-align: center;
}

.table thead th {
    padding: 10px 11px !important;
}

.HolidayCal {

    text-align: center;
    font-size: 14px;
}

.HolidayUser {

    font-size: 12px;
    color: #343434;

}

.HolidayCal {
    font-size: 12px;
    color: #343434;
}

.EmpDetail {
    background: #00d3c3!important;
    color: #fff!important;
    text-align: center;
    font-size: 14px;
}

.EmployeeDetail {
    background: #00d3c3!important; 
    color: #fff!important;
    text-align: center;
    font-size: 14px;
}

.bg-info {
    background-color: #ececec !important;
}

.p-2 {
    padding: .1rem !important;
}

.sasifb {
    margin-bottom: 3px;
    margin-top: 7px;
}


.form-check-label {
    color: black;
}

.calTH {
    text-align: center;
}

.table td,
.table th {
    padding: .3rem !important;
}

.Attndropdownopt{
    font-size: 12px;
    font-weight: 400;
    color: #1C304C!important;
    padding: 5px!important;
}
.CalStatus {
    font-size: 14px;
    text-align: center;

}
.actionFontSize{
	font-size:15px!important;
    color: #00d3c3!important;
}
.calenderDay {
    color: white;
    background-color: #1C304C;
}

.calenderwkDate {
    background: #00d3c3!important; 
    color: #fff!important;
}

.N-A {
    color: white;
    background-color: #d1d0d0;
    font-size: 12px;
    text-align: center;
}



.W-OFF {
    color: white;
    background-color: #ff4f4f;
    font-size: 12px;
    text-align: center;
}

.H {
    color: white;
    background-color: #1155cc;
    font-size: 12px;
    text-align: center;
}

.MD {
    color: white;
    background-color: #ff9900;
    font-size: 12px;
    text-align: center;
}

.C-OFF {
    color: white;
    background-color: #5d8383;
    font-size: 12px;
    text-align: center;
}



.P {
    color: white;
    background-color: #7ecf93;
    font-size: 12px;
    text-align: center;
}

.CL {
    color: white;
    background-color: #10adad;
    font-size: 12px;
    text-align: center;
}

.EL {
    color: white;
    background-color: #cf87cf;
    font-size: 12px;
    text-align: center;
}

.LWP {
    color: white;
    background-color: #c16958;
    font-size: 12px;
    text-align: center;
}






.tnUemp {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;

}

.tnemp {
    float: right;
    text-align: center;
    padding: 2px 0;

}

.tnemp a {

    color: #706e80;
    text-align: center;
    padding: 8px 11px;
    text-decoration: none;

}

.zui-wrapper {
    position: relative;
}

.zui-scroller {
    margin-left: 165px;
    overflow-x: scroll;
    overflow-y: visible;

    width: auto;
}

.zui-table .zui-sticky-col {

    left: 0;
    position: absolute;
    top: auto;
    width: 119px;
}

.zui-table .zui-sticky-col2 {

    left: 0px;
    position: absolute;
    top: auto;

}

.Zui-sticky {
    background-color: #ececec;
}

.table-bordered thead td,
.table-bordered thead th {
    border-bottom-width: 0px !important;
}

.AttFontStatus {
    font-size: 12px;
    text-align: center;
}

.AttFont {
    font-size: 12px;

}


.asifscroll::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 1px #504a94;
    background-color: #e0e0e0;
}

.asifscroll::-webkit-scrollbar {
    width: 10px;
    height: 10px;
    background-color: #F5F5F5;
}

.asifscroll::-webkit-scrollbar-thumb {
    background: #1C304C8a;
}


.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.4rem + 2px);
    font-size: 0.9rem;
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
    color: #fff;
    font-size:18px;
    text-align: center;

    text-decoration: none;
}


.APemp a:hover {color:#00d3c3;}

.Aqdx {
    margin-top: 20px;
}

.ColorSecondary {
    background-color: #504a94;
    padding: .35rem 1.25rem !important;

}

.ColorSecondaryNotes {
    background: #00d3c3!important; color: #fff!important;
    padding: 0.35rem 1.2rem !important;
    border: 1px solid #c4b4cc;
    font-style: italic;
    font-weight: 800;
}

.leave_edit {
    display: inline-block;
    margin-bottom: 0.1rem;
    color: #343434;
    font-size: 14px;
}

.fa,
.fas {
    font-weight: 600;
    font-size: 12px;
}

.LeaveSymbol {
    position: relative;
    margin-right: 2px;
    text-align: center;
    padding-left: 0rem;
}

.Marking_color {
    text-align: center;
    color: white;
    padding: 5px 3px;
    width: 94px;
    font-size: 12px;
}

.form-check-label {
    color: #393535 !important;
    font-size: 10px;
}

.col-lg-1 {
    max-width: 4.33333%;
    padding-right: 0px !important;
}

.form-control {
    border-radius: 0px !important;
    overflow: hidden !important;
    padding: 1rem 0.75rem;
    font-size: 12px !important;
    color: #000 !important;
}

.ColorPrimary {
    color: white;
    margin-left: 20px;
    padding-top: 10px;
}

.ColorPrimaryomodal {
    color: white;
    margin-left: 20px;
}

.card-body {
    padding-top: 0px !important;
}

.dayNmDate {
    text-align: center;
}

.AttSort {
    height: calc(1em + 0.7rem + 2px);
    padding: 0.2rem 0.5rem;
    font-size: 12px;
}

.close {
    float: right;
    font-size: 14px;
    line-height: 1;
    color: #f3f3f3;
    text-shadow: 0 1px 0 #fff;
    opacity: 1 !important;
    margin-top: -20px;
    margin-right: 10px;
    /* margin-bottom: 6px; */
    border: 1px solid white !important;
    border-radius: 50%;
    padding: 1px 4px !important;
}

.modal-content {
    border: none !important;
    background-color: transparent !important;
}

.modal-body {
    background-color: white;
}

.label_leave_edit {
    margin-left: 70px;
    font-size: 14px;
    color: #343434;
}

.empInput {
    /* border: 1px solid #9c50ff94!important; */
    overflow: hidden !important;
    /* padding: 0.2rem 0.75rem!important; */
    font-size: 10px !important;
    color: #000 !important;
}

.AttSortMonth {
    height: calc(1em + 0.75rem + 2px);
}

.card-header {
    padding: 0.3rem 1.25rem !important;
}


@media (min-width: 992px) {
    .col-lg-4 {
        flex: 4 0 33.33333%;
        max-width: 36.33333%;
    }
}
@media (max-width: 792px) {
    
    .colorMarkingMobile{
        text-align: center;
    color: white;
    padding: 2px 2px;
    font-size: 8px;
    width: 47px!important;
    }
    .form-check-label {
        display: none;
    }
}
</style>
<!-- Content Wrapper -->
<div id="content-wrapper bg-gradient-primary" class="conatiner-fluid col-lg-10"
    style="margin-top:30px; margin-bottom:10px;">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="	">
            <!-- Page Heading -->
            <div class="card mb-4" style="margin-bottom:100px;">
            <div class="card-header ColorSecondaryPre">
                        <div class="d-flex">
                        <div><a href="<?=site_url('hrzone/dashboard/wall');?>" style="color: #fff;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
                        <div class="mr-auto"> &nbsp;&nbsp;<i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text " style="font-size: 15px;color: #00d3c3;font-weight: 600;">&nbsp; Attendance</span></div>
			

                            <div class="p-2 select-info" style="margin-left:5px;">
                                <select class="empInput breadcrumbMobile AttSort form-control" name="month_Id" id="month_Id">
                                    <option value="">Select Month</option>

                                    <?php 
		                            $curMonth = date("n");
		                             // echo $curMonth = date("m", strtotime($cur));
		                            // echo "<pre>";
		                            // print_r($teamDesignation);die;


		                              foreach ( $GoalMonth as $Month )
	                                {
	                                $selected_text='';
	                                if($Month->month_Id == $curMonth)
	                                $selected_text='selected';
	                                echo "<option month='".$Month->month."' value='".$Month->month_Id."'  $selected_text > ".$Month->month."</option>";
                                    
	                                }
                                
		 
		 
		                             ?>

                                </select>
                            </div>
                            <div class="p-2 select-info">
                                <select class="empInput breadcrumbMobile AttSort form-control" name="Year_Id" id="Year_Id" id="sel1">
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
			                        echo "<option year='".$year->year."' value='".$year->year."'  $selected_text > ".$year->year."</option>";
                                    
			                        }
			                         ?>

                                </select>
                            </div>

                        
                    </div>
                </div>
                <div class="" style="padding-bottom: 10px;">
                    <!-- Content Row -->
                    <!-- Area Chart -->
                    <div class="row" style=" margin-top:10px; margin-bottom:10px; margin-left:1px; ">
                        <div class="LeaveSymbol">
                            <div class="Marking_color colorMarkingMobile" style=" background:#06adad;border: 1px solid #049595;">CL</div>
                            <label class="form-check-label " style="color:black;">
                                Casual Leave
                            </label>
                        </div>
                        <div class="LeaveSymbol">
                            <div class="Marking_color colorMarkingMobile" style="background:#cf87cd;border: 1px solid #b56fb3;">EL</div>
                            <label class="form-check-label " style="color:black;">
                                Earned Leave
                            </label>
                        </div>
                        <div class="LeaveSymbol">
                            <div class="Marking_color colorMarkingMobile" style="background:#ff9926;border: 1px solid #e3861e;">MD</div>
                            <label class="form-check-label " style="color:black;">
                                Mid Day
                            </label>
                        </div>

                        <div class="LeaveSymbol">
                            <div class="Marking_color colorMarkingMobile" style="background:#0c55c8;border: 1px solid #0648b0;">H</div>
                            <label class="form-check-label " style="color:black;">
                                Holiday
                            </label>
                        </div>
                        <div class="LeaveSymbol displayNoneContent">
                            <div class="Marking_color colorMarkingMobile" style="background:#5d8383;border: 1px solid #4a6f6f;">C-OFF</div>
                            <label class="form-check-label " style="color:black;">
                                Compensatory Off
                            </label>
                        </div>
                        <div class="LeaveSymbol">
                            <div class="Marking_color colorMarkingMobile" style="background:#7ecf93;border: 1px solid #7ecf93;">P</div>
                            <label class="form-check-label " style="color:black;">
                                Present
                            </label>
                        </div>

                        <div class="LeaveSymbol">
                            <div class="Marking_color colorMarkingMobile" style="background:#ff0812;border: 1px solid #d0030b;">A</div>
                            <label class="form-check-label " style="color:black;">
                                Absent
                            </label>
                        </div>

                        <div class="LeaveSymbol displayNoneContent">
                            <div class="Marking_color colorMarkingMobile" style="background:#bbb8b8;border: 1px solid #aaa8a8;">N/A</div>
                            <label class="form-check-label " style="color:black;">
                                Non-Applicable
                            </label>
                        </div>

                        <div class="LeaveSymbol">
                            <div class="Marking_color colorMarkingMobile" style="background:#ff4f4f;border: 1px solid #ff4f4f;">W-OFF</div>
                            <label class="form-check-label " style="color:black;">
                                Week Off
                            </label>
                        </div>


                        <div class="LeaveSymbol">
                            <div class="Marking_color colorMarkingMobile" style="background:#c2695a;border: 1px solid #b35f51;">LWP</div>
                            <label class="form-check-label " style="color:black;">
                                Leave Without Pay
                            </label>
                        </div>
                    </div>
                    <div class="zui-wrapper ">
                        <div class="table-responsive asifscroll zui-scroller" id="renderHtmlAttendence">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ColorSecondaryPre">
                            <h6 class="m-0  ColorPrimaryomodal" style="padding: 10px 20px;">Gazetted Holidays List</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="margin-top: 15px;">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6" style="padding-right: 0rem; padding-left: 0rem;">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="cleldataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="allEmpLeaves">Annual Leaves</th>
                                                <th colspan="2" class="allEmpAttendence displayNoneContent" style="min-width: 151px;">
                                                    Active Payroll Status</th>
                                                <th colspan="2" class="allEmpAttendence" style="min-width: 50px;">Actual
                                                    Leave</th>
                                                <th class="allEmpAttendence">Action</th>

                                            </tr>
                                            <tr>
                                                <td class="EmployeeDetail" style="min-width: 152px!important;">Employee
                                                    Name</th>
                                                <td class="EmpDetail displayNoneContent">CL</td>
                                                <td class="EmpDetail displayNoneContent">EL</td>
                                                <td class="EmpDetail">CL</td>
                                                <td class="EmpDetail">EL</td>
                                                <td class="EmpDetail" style="min-width: 80px;"></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-1" style="max-width: 8.33333%;">
                            </div>
                            <div class="col-lg-5" style="padding-right: 0rem; padding-left: 0rem;">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="HolidayTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th colspan="3" class="allEmpAttendence">Gazetted Holidays List</th>
                                            </tr>
                                            <tr>
                                                <th class="EmpDetail HolidayCal">Day</th>
                                                <th class="EmpDetail HolidayCal">Holiday</th>
                                                <th class="EmpDetail HolidayCal">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>

                    </div>
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
<div class="modal " id="updateModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" style="margin: 220px 0px 0 47px;width: 89%!important; ">
            <div class="card-header" style="padding:7px!important; background-color: #1C304C;">
                <div class="">
                    <h6 class="ColorPrimaryomodal" style="text-align: center;margin-bottom: 0px;">Leave Edit</h6>
                    <button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
                </div>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" action="#">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="leave_edit">CL</label>
                                <input type="text" name="CL" id="emp_cl" class="empInput form-control"
                                    style="border: 1px solid #858796;">
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="leave_edit"> CL Staus</label>
                                <input type="text" name="CL_Status" id="emp_CLStatus" class="empInput form-control"
                                    style="border: 1px solid #858796;">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="leave_edit">EL</label>
                                <input type="text" name="EL" id="emp_el" class="empInput form-control"
                                    style="border: 1px solid #858796;">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="leave_edit">EL Staus</label>
                                <input type="text" name="EL_Status" id="emp_ELStatus" class="empInput form-control"
                                    style="border: 1px solid #858796;">
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 d-flex" style="justify-content:center;margin-top: -8px;">
                        <button type="button" class="addEmpSubmitBtn LeaveSubmit" id="btnUploadPage">Submit</button>
                    </div>
                    <input type="hidden" name="" id="EmpId">
                </form>
            </div>
        </div>
        <!-- Content Row -->
    </div>
</div>
<div class="modal " id="AddLeaveModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" style="margin: 220px 0px 0 47px;width: 89%!important; ">
            <div class="card-header" style="padding:7px!important; background-color: #1C304C;">
                <div class="">
                    <h6 class="ColorPrimaryomodal" style="text-align: center;margin-bottom: 0px;">Leave Edit</h6>
                    <button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
                </div>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="#">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="">
                                <label class="label_leave_edit">Previous CL: </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="">
                                <label id="emp_Precl"></label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="">
                                <label class="label_leave_edit">Previous EL: </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="">
                                <label id="emp_Preel"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="">
                                <label class="label_leave_edit">Next CL: </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="">
                                <input type="number" name="CL" min="0" max="" id="Add_cl" class="empInput form-control"
                                    style="border: 1px solid #858796;">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="">
                                <label class="label_leave_edit">Next EL: </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="">
                                <input type="number" name="EL" min="0" max="" id="Add_el" class="empInput form-control"
                                    style="border: 1px solid #858796;">
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex" style="justify-content:center;">
                        <button type="button" class="addEmpSubmitBtn LeaveAddSubmit" id="btnUploadPage">Submit</button>
                    </div>
                    <input type="hidden" name="" id="AddCLEmpId">
                    <input type="hidden" name="" id="AddClDateId">
                </form>
            </div>
        </div>
        <!-- Content Row -->
    </div>
</div>
<div class="modal " id="holidayModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" style="margin: 220px 0px 0 47px;width: 89%!important; ">
            <div class="card-header" style="padding:7px!important; background-color: #1C304C;">
                <div class="">
                    <h6 class="ColorPrimaryomodal" style="text-align: center;margin-bottom: 0px;">Holiday Calendar Edit
                    </h6>
                    <button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
                </div>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Calender Date</label>
                                <input type="text" name="calender_date" id="Edit_calender_date"
                                    class="empInput form-control" style="border: 1px solid #858796;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Holiday Name</label>
                                <input type="text" name="holiday_list" id="Edit_holiday_list"
                                    class="empInput form-control" style="border: 1px solid #858796;">
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex" style="justify-content:center;">
                        <button type="button" class="empBtn LeaveSubmit" id="btnUploadPage">Submit</button>
                    </div>
                    <input type="hidden" name="" id="EmpId">

                </form>
            </div>
        </div>
        <!-- Content Row -->
    </div>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<div class="modal " id="AttendanceModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" style="margin: 220px 0px 0 47px;width: 89%!important;">
            <div class="card-header" style="padding:7px!important; background-color: #1C304C;">
                <div class="">
                    <h6 class="ColorPrimarymodal" style=" color:white; text-align: center;margin-bottom: 0px;">
                        Attendance Edit</h6>
                    <button style="/* margin-left:197px; */" type="button" class="close" data-bs-dismiss="modal">×</button>
                </div>
            </div>
            <div class="col-lg-12 " style="padding-right: 0rem; padding-left: 0rem;">
                <ul class="APUemp ColorSecondaryNotes">
                    <li class="APemp"><a href="#"><span><small style="font-weight:700;">Please select the status in
                                    below section.</small></span></a></li>
                </ul>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="#">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group" style="margin:0.1rem!important">
                                <label>Attendance Status</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group" style="margin:0.1rem!important">
                                <select class="empInput form-control" id="Edit_Status" name="Status"
                                    style="border: 1px solid #858796;" id="sel1">
                                    <option class="Attndropdownopt">P</option>
                                    <option class="Attndropdownopt">MD</option>
                                    <option class="Attndropdownopt">LWP</option>
                                    <option class="Attndropdownopt">CL</option>
                                    <option class="Attndropdownopt">EL</option>
                                    <option class="Attndropdownopt">H</option>
                                    <option class="Attndropdownopt">C-OFF</option>
                                    <option class="Attndropdownopt">W-OFF</option>
                                    <option class="Attndropdownopt">N/A</option>
                                    <option class="Attndropdownopt"></option>
                                </select>
                            </div>
                        </div>
                        <div class=" d-flex" style="justify-content:center;">
                            <button type="button" class="addEmpSubmitBtn AttendanceSubmit"
                                id="btnUploadPage">Submit</button>
                        </div>
                    </div>
                    <input type="hidden" name="" id="EmpId">
                </form>
            </div>
        </div>
        <!-- Content Row -->
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("body").on('dblclick', '.edit_Attn', function() {
        var id = $(this).attr('data-Attn');
        var ajaxurl = "<?=site_url('hrzone/Attendance/UserAttendanceView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(data) {
                $('#EmpId').val(data.AttnId);
                $('#Edit_Status').val(data.Status);
                $("#AttendanceModal").modal('show');
            }
        });
    });
    $("body").on('click', '.clel_Edit', function() {
        var id = $(this).attr('data-CLEL');
        var ajaxurl = "<?=site_url('hrzone/Attendance/UserCLELView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(data) {
                $("#updateModal").modal('show');
                $('#emp_cl').val(data.UserCl);
                $('#emp_el').val(data.UserEl);
                $('#emp_CLStatus').val(data.CL_Status);
                $('#emp_ELStatus').val(data.EL_Status);
                $('#EmpId').val(data.User_ID);
            }
        });
    });
    $("body").on('click', '.clel_Add', function() {
        var id = $(this).attr('data-Add');
        var ajaxurl = "<?=site_url('hrzone/Attendance/UserCLELView');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(data) {
                $("#AddLeaveModal").modal('show');
                $('#emp_Precl').html(data.UserCl);
                $('#emp_Preel').html(data.UserEl);
                $('#AddClDateId').val(data.LeaveDate);

                $('#AddCLEmpId').val(data.Emp_Id);
            }
        });
    });
    $("body").on('click', '.Hcal_Edit', function() {
        var id = $(this).attr('data-HCAl');
        var ajaxurl = "<?=site_url('hrzone/Attendance/ViewHcal');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(data) {


                $('#EmpId').val(data.h_id);
                $('#Edit_calender_date').val(data.calender_date);
                $('#Edit_holiday_list').val(data.holiday_list);
                $("#holidayModal").modal('show');
            }
        });
    });
    var d = new Date();
    var curYear = d.getFullYear();
    var currMonth = d.getMonth() + 1;
    MonthlyUserAttendance(curYear, currMonth);
    $("body").on('click', '.AttendanceSubmit', function() {
        // function updateUserRecord(){
        var employee_Status = $('#Edit_Status').val();
        var User_Id = $('#EmpId').val();

        // var Yid = $(this).attr('data-yearID');
        var ajaxurl = "<?=site_url('hrzone/Attendance/SingleAttendanceEdit');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {
                employee_Status: employee_Status,
                User_Id: User_Id
            },
            dataType: "JSON",
            success: function(data) {
                $('#AttendanceModal').modal("hide");
                MonthlyUserAttendance(curYear, currMonth);
                alert("Data updated Successfully");
            }
        });
    });
    $("#month_Id, #Year_Id").change(function() {

        var MonthID = $("#month_Id option:selected").val();
        var YearID = $("#Year_Id").val();
        MonthlyUserAttendance(YearID, MonthID);
    });
    $("body").on('click', '.LeaveSubmit', function() {
        var holidayDate = $('#Edit_calender_date').val();
        var holiday_list = $('#Edit_holiday_list').val();
        var holidayId = $('#EmpId').val();
        // var Yid = $(this).attr('data-yearID');
        var ajaxurl = "<?=site_url('hrzone/Attendance/EditHolidayCal');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {
                holiday_list: holiday_list,
                holidayDate: holidayDate,
                holidayId: holidayId
            },
            dataType: "JSON",
            success: function(data) {
                $('#holidayModal').modal("hide");
                MonthlyUserTimeList(curYear, currMonth);
                alert("Data updated Successfully");
            }
        });
    });
    $("body").on('click', '.LeaveSubmit', function() {
        // function updateUserRecord(){
        var employee_cl = $('#emp_cl').val();
        var employee_el = $('#emp_el').val();
        var employee_clStatus = $('#emp_CLStatus').val();
        var employee_elStatus = $('#emp_ELStatus').val();
        var User_Id = $('#EmpId').val();
        // var Yid = $(this).attr('data-yearID');
        var ajaxurl = "<?=site_url('hrzone/Attendance/UserCLELEdit');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {
                employee_cl: employee_cl,
                employee_el: employee_el,
                employee_clStatus: employee_clStatus,
                employee_elStatus: employee_elStatus,
                User_Id: User_Id
            },
            dataType: "JSON",
            success: function(data) {
                $('#AttendanceModal').modal("hide");
                MonthlyUserAttendance(curYear, currMonth);
                alert("Data updated Successfully");
            }
        });
    });
    $("body").on('click', '.LeaveAddSubmit', function() {
        // function updateUserRecord(){
        var employee_cl = $('#Add_cl').val();
        var employee_el = $('#Add_el').val();
        var ClDate = $('#AddClDateId').val();
        var CLEmpId = $('#AddCLEmpId').val();
         // var Yid = $(this).attr('data-yearID');
        var ajaxurl = "<?=site_url('hrzone/Attendance/UserCLELAdd');?>";
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {
                employee_cl: employee_cl,
                employee_el: employee_el,
                ClDate: ClDate,
                CLEmpId: CLEmpId
            },
            dataType: "JSON",
            success: function(data) {
                $('#AddLeaveModal').modal("hide");
                MonthlyUserAttendance(curYear, currMonth);
                alert("Data updated Successfully");
            }
        });
    });
});
function MonthlyUserAttendance(YearID, MonthID) {
    var ajaxurl = "<?=site_url('hrzone/Attendance/AllUserAttendance');?>";
    $.ajax({
        type: "get",
        url: ajaxurl,
        data: {
            YearID: YearID,
            MonthID: MonthID
        },
        dataType: "JSON"
    }).done(function(response) {
        if (response) {
            console.log(response.data);
            $("#renderHtmlAttendence").html(`
					<table class="zui-table table table-bordered" id="AttendencedataTable" width="100%" cellspacing="0">
										<thead>

										<tr>
										
										<th class="AttFont dayNmDay zui-sticky-col2" style="min-width: 165px!important; padding: 0.25rem!important;">Day Of Month</th>
										${response.calenderDay.map(function(calenderDayData){
										return`<td class="AttFont calenderDay calTH ${calenderDayData.UsercalenderDay}" style="min-width: 75pximportant; ">${calenderDayData.UsercalenderDay}</td>`
										}).join('')}
										</tr>
										<tr>
										
										<th class="AttFont zui-sticky-col2 dayNmDate" style="min-width: 165px!important; padding: 0.25rem!important;">Date of Month</th>

										${response.calenderDay.map(function(calenderDayData){
										return`<td class="AttFont calenderwkDate calTH ${calenderDayData.Usercalender}" style="min-width: 75pximportant; ">${calenderDayData.Usercalender}</td>`
										}).join('')}
										</tr>
										</thead>
										<tbody>
										${response.data.map(function(data, index){
										return(`
										<tr>
										
										<td class="AttFont zui-sticky-col2 calMemo" style="min-width: 165px!important; text-align:center; padding: 0.25rem!important;">${data.userName}</td>
										${data.attendance.map(function(attendanceData){
										return`<td class="AttFontStatus edit_Attn ${(attendanceData.Status == "" && (new Date(attendanceData.AttendenceDate) - new Date(data.employeeExitDate)) > 0)? 'N-A': (attendanceData.Status == "" && (new Date(attendanceData.AttendenceDate) - new Date(data.EmployeejoiningDate)) < 0)? 'N-A': attendanceData.Status.replace(/\//g, '-')}" data-Attn="${attendanceData.id}" style="min-width: 75px!important; ">${(attendanceData.Status == "" && (new Date(attendanceData.AttendenceDate) - new Date(data.employeeExitDate)) > 0)? 'N/A': (attendanceData.Status == "" && (new Date(attendanceData.AttendenceDate) - new Date(data.EmployeejoiningDate)) < 0)? 'N/A' : attendanceData.Status}</td>`
										}).join('')}
										</tr>
										`)
										}).join('')}
										</tbody>
										</table>
										`);
            $("#cleldataTable tbody").html(`${response.data.map(function(data, index){
					return(`<tr>
					<td class="HolidayUser">${data.userName}</td>
					<td class="HolidayCal displayNoneContent">Active</td>
					<td class="HolidayCal displayNoneContent">Active</td>
					${data.UserCLEL.map(function(UserCLELData){
						return`<td class="HolidayCal CalStatus  ${UserCLELData.CL}" style="min-width: 25px!important; ">${UserCLELData.CL}</td>`
					})}
					${data.UserCLEL.map(function(UserCLELData){
						return`<td class="HolidayCal CalStatus  ${UserCLELData.EL}" style="min-width: 25px!important; ">${UserCLELData.EL} </td>`
					})}
					${data.UserCLEL.map(function(UserCLELData){
						return`
						<td class="HolidayCal">
						<div class=" d-flex " style="justify-content:center;">
						<ul class="tnUemp">
						<li class="tnemp"><a href="javascript:void(0)" data-CLEL="${UserCLELData.leave_Id}" class="clel_Edit"><i  style="color:green;"class="actionFontSize fas fa-edit"></i></a></li>
						<li class="tnemp"><a href="javascript:void(0)" data-Add="${UserCLELData.leave_Id}" class="clel_Add"><i style="color:purple;" class="fa fa-plus" aria-hidden="true"></i></a></li>
						</ul>
						</div>
					</td>
						`})}
					</tr>`)
				})}`);
            $("#HolidayTable tbody").html(`${response.CalHoliday.map(function(HCal, index){
					return(`<tr>
						<td class="HolidayCal" style="min-width:100px;">${HCal.HName}</td>
						<td class="HolidayCal">${HCal.holiday_list}</td>
						<td class="HolidayCal">
						<div class=" d-flex" style="justify-content:center;">
						<ul class="tnUemp">
						<li class="tnemp"><a href="javascript:void(0)" data-HCAl="${HCal.h_id}" class="Hcal_Edit"><i style="color:green;" class="actionFontSize fas fa-edit"></i></a></li>
						</ul>
						</div>
						</td>
					</tr>`)
				})}`);
        } else {
            $("#AttendencedataTable tbody").html("<div>No data Found.....</div>");
        }
    });
}
</script>
<?php include('footer.php'); ?>