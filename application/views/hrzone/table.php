<?php include('header.php'); ?>
<?php include('commonSidebar.php'); ?>

<style>
.tnUemp {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}
.tnemp {
  float: left;
  padding:2px 0;
	
}
.tnemp a {
  
  color: #706e80;
  text-align: center;
  padding: 8px 11px;
  text-decoration: none;
  
}

.Qdxupload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btnQd {
  border: 2px solid #6610f2;
  color: white;
  background-color: #6610f2;
  
}

.Qdxupload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.actionFontSize{
	font-size:15px!important;
}
table.table tr th:last-child {
		width: 100px;
	}
</style>

 <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="d-flex flex-column" style="margin-top:50px; margin-bottom:50px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
					
  
<style>
  body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 6px 10px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 5px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 10px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}
</style>

  <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
                        <th>Name</th>
                        <th>Email</th>
						<th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
						<td>89 Chiaroscuro Rd, Portland, USA</td>
                        <td>(171) 555-2222</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
                        <td>Dominique Perrier</td>
                        <td>dominiqueperrier@mail.com</td>
						<td>Obere Str. 57, Berlin, Germany</td>
                        <td>(313) 555-5735</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
                        <td>Maria Anders</td>
                        <td>mariaanders@mail.com</td>
						<td>25, rue Lauriston, Paris, France</td>
                        <td>(503) 555-9931</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
                        <td>Fran Wilson</td>
                        <td>franwilson@mail.com</td>
						<td>C/ Araquil, 67, Madrid, Spain</td>
                        <td>(204) 619-5731</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>					
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
                        <td>Martin Blank</td>
                        <td>martinblank@mail.com</td>
						<td>Via Monte Bianco 34, Turin, Italy</td>
                        <td>(480) 631-2097</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr> 
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<?php include('footer.php'); ?>