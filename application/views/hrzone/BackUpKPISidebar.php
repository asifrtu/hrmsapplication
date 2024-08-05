
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
  background-color:#1C304C;
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


.sa[data-toggle=collapse]::after {
    width: 3rem!important;
   
} 
 </style>
        <!-- Sidebar -->
		<div class="card sidebarScroll accordion style-8 sidebar" id="accordionSidebar">
        <ul class="navbar-nav sidebar sidebar-dark" id="accordionSidebar">

           
			
			
			<li class="nav-item">
                <a class="nav-link sa collapsed" href="#" 
				data-toggle="collapse" data-target="#teamGoals"
                    aria-expanded="true" aria-controls="teamGoals">
                    
                    <span>Create KPI</span>
                </a>
                <div id="teamGoals" class="collapse" aria-labelledby="headingFeedback"
                    data-parent="#accordionSidebar" >
                    
                        
                
                <a class="nav-link collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/hrzone/CompanyGoals/AddSeoAnalystKPI');?>" >
                    
                    <span>SEO</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/hrzone/CompanyGoals/AddKPIContentWriterTeam');?>" >
                    
                    <span>Content Writer</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/hrzone/CompanyGoals/AddWebDeveloperKPI');?>" >
                    
                    <span>Web Developer</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/hrzone/CompanyGoals/AddGraphicDesignerKPI');?>" >
                    
                    <span>Web Designer</span>
                </a>
                    
                </div>
            </li><!-- Divider -->
            
			
			<li class="nav-item">
                <a class="nav-link sa collapsed" href="#" 
				data-toggle="collapse" data-target="#teamGoalsView"
                    aria-expanded="true" aria-controls="teamGoals">
                    
                    <span>View/Edit KPI</span>
                </a>
                <div id="teamGoalsView" class="collapse" aria-labelledby="headingFeedback"
                    data-parent="#accordionSidebar" >
                    
                        
                
                <a class="nav-link collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/hrzone/CompanyGoals/SeoTeam');?>" >
                    
                    <span>SEO</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/hrzone/CompanyGoals/ContentWriterTeam');?>" >
                    
                    <span>Content Writer</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/hrzone/CompanyGoals/DeveloperTeam');?>" >
                    
                    <span>Web Developer</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; border-top: 1px solid #2e2869;" href="<?=base_url('index.php/hrzone/CompanyGoals/DesignerTeam');?>" >
                    
                    <span>Web Designer</span>
                </a>
                    
                </div>
            </li><!-- Divider -->
            
			
			
			
          
            
            

        </ul>
        </div>
        <!-- End of Sidebar -->