
   <!-- Page Wrapper -->
    <div id="wrapper">
<style>
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #2e2869;
    border-radius: .35rem;
}
.sidebar .nav-item .nav-link{
    display: block;
    width: 100%;  
}
a.empCH:hover{
	background-color:#514b95;
}
.nav-link{
	padding:0.75rem 0 0.75rem 2.9rem!important;
}
.sidebar .nav-item{
	 border-bottom: 1px solid #2e2869;
}                
 .sidebarScroll {
			
  margin-top:50px;
  margin-bottom:50px;
  width: 226px!important;
  height: 405px;
  overflow-y: scroll;
  background-color:#3d3780;
  border-radius: 0 10px 10px 0;
}
.style-8::-webkit-scrollbar-track
{
	border: 1px solid #6f42c1;
	background-color: #6f42c1;
}

.style-8::-webkit-scrollbar
{
	width: 0px;
	background-color: #6f42c1;
}

.style-8::-webkit-scrollbar-thumb
{
	background-color: #6f42c1;	
}

 
 </style>
			
		<?php 
						error_reporting(0);
						
						//print_r($data= $this->session->userdata());
						// $data= $this->session->userdata();
						// echo "<pre>";
						// print_r($data['auth']['id']);
						// echo $data['auth']['id'];
						
						?>
        <!-- Sidebar -->
		<div class="card sidebarScroll accordion style-8 sidebar" id="accordionSidebar">
        <ul class="navbar-nav sidebar sidebar-dark" id="accordionSidebar">

          
			

            <!-- Divider -->
            
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/Separation/AddExitRequest');?>" >
                    
                    <span>Exit Request</span>
                </a>
                
            </li>
			<?php if(!empty($Exitrecord->ExitStatus == 'Accept')){ ?>
			
            <!-- Divider -->
            <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/Separation/ResignationLetter');?>" >
                    
                    <span>Resignation Letter</span>
                </a>
                
            </li>
			 <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/Separation/DeclarationForm');?>" >
                    
                    <span>Declaration Form</span>
                </a>
                
            </li>
			 <li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/Separation/SeparationOne');?>" >
                    
                    <span>Separation Form</span>
                </a>
                
            </li>
			
			
			
			
			<li class="nav-item">
                <a class="nav-link empCH collapsed" href="<?=base_url('index.php/adminzone/Separation/ExitFormEdit');?>" >
                    
                    <span>Separation Form Edit</span>
                </a>
                
            </li>
			
			
			
			
	
	<?php } ?>
            <!-- Divider -->
            
        </ul>
        </div>
        <!-- End of Sidebar -->