<?php include('header.php'); ?>
<?php include('aboutUserSidebar.php'); ?>
<style>
 .addempbtn a {
  display: block;
  color: white;
  
  text-decoration: none;
}
.aboutFont{
	color:#6f42c1;
	font-weight: 700;
}
.aboutFontName{
	color:#6f42c1;
	font-weight: 800;
    font-size: 20px;
}

.ColorSecondary{
	background-color:#6f42c1;
	padding: .35rem 1.25rem!important;
	
}

.leaveSubmitBtn{
	margin-left: 355px;
	color:white;
    background-color: #6f42c1;
    
}

.card{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #c8ade9;
    border-radius: 2px 2px 0px 0px;
}

.card-header:first-child {
    border-radius: 2px 2px 0px 0px;
}
.employeeForm{
	border: 1px solid #858796;
    border-radius: 5px;
}
.empBtn{
    float:center;
    background: #1C304C;
    color: white;
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 3em 0.2em 3em;
    border: none !important;
    
    margin-bottom: 62px;
    margin-left: 284px;
    margin-top: 20px;
   
}
.addEmpBtn{
    float:center;
    background: #7db135;
    color: white;
    font-weight: 400;
    border-radius: 2px;
    padding: .2em 0.5em 0.2em 0.5em;
    border: none !important; 
	margin-top: 10px;
    margin-left: 15px;
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
  color: ColorSecondaryPre;
  text-align: center;
  padding: 8px 10px;
  text-decoration: none;
}
.tnemp a:hover{
  
}

.allEmpAttendence{
	color: white;
    background-color: #6f42c1;
    text-align: center;
}
.form-group{margin: 0rem 0!important;}
.qdxChip{
	margin-top: 10px;
    display: inline-block;
    margin-right: 10px;
    font-size: 13px;
    font-weight: 400;
    color: #333;
    border: 1px solid #ccc;
    border-radius: 14px;
    padding: 4px 10px;
}
.qdxJOV{
    color: #4c3f5e;
    font-size: 18px;
}
.qdxfontJOV{
	background-color: white;
}
.JOVp{
	
	color: #343434;
    font-size: 14px;
    margin-bottom: 5px;
	line-height:24px;	

}

.logoQdx{
	width: 60px;
    margin-left: 57px;
}


#style-7::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px #504a94;
	background-color: #F5F5F5;
	border-radius: 10px;
}

#style-7::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

#style-7::-webkit-scrollbar-thumb
{
	border-radius: 10px;
    background-color: #1C304C;
}
.scrollbar
{
	
	height: 500px;
	width: auto;
	background: #F5F5F5;
	overflow-y: scroll;
	
}

.qdxfontawesome{
	padding: 4px;
    border: 1px solid #1C304C;
    color: #1C304C;
    margin-right: 12px;
}
.qdxJOV1{
    font-size: 15px;
	font-weight:bold;
    color: #252525;
}
.col-lg-1{
    max-width: 4.33333%;
}
.card-header {
    padding: 0.25rem 1.25rem!important;
}
img{
    width: 80px;
    height: auto;
}
.col-lg-2 p, h6{
    text-align: center;
}
.col-lg-2{
    border: 1px solid #c2c2c2;
    margin-right: 30px;
    padding-left: 0px;
    padding-right: 0px;
}   
.card-body{
    padding-left:0px;
    padding-right: 0px;
}
.drive_main .row{
    margin-left: 0px;
    padding-left: 15px;
    padding-top: 15px;
}
.col-lg-2 p{
    margin-bottom:4px;
}
.buttons button{
    margin-left: 20px;
    margin-right: 20px;
    background-color: white;
    border: 1px solid #c2c2c2;
    padding: 4px 30px ;
}
thead th{
    font-size: 14px;
    font-weight: 600;
    color: #4c3f5e!important;
    padding: 10px 11px!important;
    text-align: center;
}
thead{
    background-color: # !important;
}
tbody  td{
    font-size: 13px;
    color: #343434;
    text-align: center;
    padding: 4px 6px;
} .buttons{
    margin-left: 0px;
    margin-right: 0px;
}
 </style>
       
        <!-- Content Wrapper -->
        <div id="content-wrapper bg-gradient-primary" class="container-fluid col-lg-10" style=" margin-bottom:50px; padding-left:10px;">
		
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="">

                    <!-- Page Heading -->
                    

                    <!-- Content Row -->
					  <!-- Area Chart -->
							
                    
					<div class=" shadow mb-4" style="margin-bottom:100px;background: white;">
                        <div class="card-header ColorSecondaryPre">
						<div class="row d-flex pl-1 ">

<div class="col-lg-1"><a href="<?php echo base_url() ?>index.php/hrzone/dashboard/wall" style="color: white;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i></a></div>
<div class="col-lg-10"> <i style="font-size: 10px;color: white;" class="fas fa-chevron-right"></i><span class="breadcrumb_text" style="font-size: 15px;color: #fff;font-weight: 600;"> &nbsp;Share Drive</span></div>
</div>
                        </div>
                        <div class="card-body">
                            <div class="drive_main">
                            <div style="padding: 10px 15px;background: beige;">
                                <h4 style="font-size:15px; margin-bottom:0px;">Recent Files</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div>
                                        <div style="display:flex; justify-content:center;background: #e2e2e2;">
                                        <img src="<?= base_url("Assets/img/dummy.png") ?>" alt="">
                                        </div>
                                        <div><h6>File Name</h6> 
                                        <p> Edited by  </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div>
                                        <div style="display:flex; justify-content:center;background: #e2e2e2;">
                                        <img src="<?= base_url("Assets/img/dummy.png") ?>" alt="">
                                        </div>
                                        <div><h6>File Name</h6> 
                                        <p> Edited by  </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div>
                                        <div style="display:flex; justify-content:center;background: #e2e2e2;">
                                        <img src="<?= base_url("Assets/img/dummy.png") ?>" alt="">
                                        </div>
                                        <div><h6>File Name</h6> 
                                        <p> Edited by  </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div>
                                        <div style="display:flex; justify-content:center;background: #e2e2e2;">
                                        <img src="<?= base_url("Assets/img/dummy.png") ?>" alt="">
                                        </div>
                                        <div><h6>File Name</h6> 
                                        <p> Edited by  </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div>
                                        <div style="display:flex; justify-content:center;background: #e2e2e2;">
                                        <img src="<?= base_url("Assets/img/dummy.png") ?>" alt="">
                                        </div>
                                        <div><h6>File Name</h6> 
                                        <p> Edited by  </p>
                                        </div>
                                    </div>
                                </div>
                          
                            </div>

                            </div>


                            <div>
                                <div style="padding: 10px 15px;background: beige;">
                                    <h4 style="font-size:15px; margin-bottom:0px;">My Folders</h4>
                                </div>
                                <div class="row buttons"> 
                                    <button>share</button>
                                    <button>share</button>
                                    <button>share</button>
                                    <button>share</button>
                                    <button>share</button>
                                    <button>share</button>
                                </div>

                                <div>
                                    <table class="table-bordered">
                                        <thead>
                                            <tr>
                                            <th style="width: 10px;"> <input type="checkbox"> </th>
                                            <th style="width: 175px;" >Name</th>
                                            <th style="width: 140px;" >Owner</th>
                                            <th style="width: 140px;" >Last Edited</th>
                                            <th style="width: 100px;" >Size</th>
                                            <th style="width: 100px;">File Type</th>
                                            <th style="width: 100px;">Members</th>
                                            <th style="width: 10px;">icon</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> <input type="checkbox"></td>
                                                <td>Adobe illustrator</td>
                                                <td> me  </td>
                                                <td> 27-04-2021 5:54 pm <br> <span></span>  </td>
                                                <td> 1.5 GB  </td>
                                                <td> padding-left  </td>
                                                <td>   </td>
                                                <td> <i class="fa fa-ellipsis-v" aria-hidden="true"></i>  </td>


                                            </tr>

                                        </tbody>
                                    </table>
                                </div>


      
                         </div>
                    </div>		
                </div></div></div>				
  	               
    <!-- AttachmentsModal End -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<?php include('footer.php'); ?>