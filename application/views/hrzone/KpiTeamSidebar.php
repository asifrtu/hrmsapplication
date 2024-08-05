
   <!-- Page Wrapper -->
    <div id="wrapper">
<style>
.Add_emp_button a {
  display: block;
  color: white;
  
  text-decoration: none;
}
.Add_emp_button{
    background: #7db135;
    color: white;
    font-weight: 400;
    border: none !important;
    margin-top: 15px;
    margin-left: 31px;
    margin-right: 49px;
    border-radius: 2px;
    margin-bottom: 15px;
    font-size: 13px;
    padding: 0.5em 0.5em 0.5em 0.5em;
}

.Add_emp_button:hover{
    box-shadow: 3px 3px 3px #3f6b00 inset;
    outline: 1px solid #6b6b6b!important;
    border-radius: 0px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border:none;
    
}
.sidebar .nav-item .nav-link {
    display: block;
    font-size: 14px;
    font-weight: 500;
    color: #e6d3ff;
    border-bottom: 1px solid #e6d3ff47;
    cursor: pointer;
    padding-bottom: 14px!important;
    padding-top: 14px!important;
}
a.SBhover:hover{
	background-color:#1C304C;
}
.nav-link {
	padding:0.75rem 0 0.75rem 2.0rem!important;
}              
 .sidebarScroll {
			
   margin-top:30px;
    margin-bottom: 50px;
    height: 405px;
    overflow-y: scroll;
    background-color: #1C304C!important;
    border-radius: 0 2px 2px 0;
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

.accordion{
    border-radius:0px 2px 0px 2px;
}
@media (min-width: 768px){
.sidebar .nav-item .nav-link {
    display: block;
    width: 100%;
    text-align: left;
    width: auto;
}
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
                <div id="teamGoals" class="sidebarSubmenu collapse" aria-labelledby="headingFeedback"
                    data-parent="#accordionSidebar" >
                    
                        
                
                <a class="nav-link collapsed" style=" color:yellow!important; " href="<?=base_url('index.php/hrzone/CompanyGoals/AddSeoAnalystKPI');?>" >
                    
                    <span>SEO</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; " href="<?=base_url('index.php/hrzone/CompanyGoals/AddKPIContentWriterTeam');?>" >
                    
                    <span>Content Writer</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; " href="<?=base_url('index.php/hrzone/CompanyGoals/AddWebDeveloperKPI');?>" >
                    
                    <span>Web Developer</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; " href="<?=base_url('index.php/hrzone/CompanyGoals/AddGraphicDesignerKPI');?>" >
                    
                    <span>Web Designer</span>
                </a>
                    
                </div>
            </li><!-- Divider -->
            
			<li class="nav-item sidebarSubmenu">
                <a class="nav-link sa collapsed" href="#" 
				data-toggle="collapse" data-target="#teamGoalsView"
                    aria-expanded="true" aria-controls="teamGoals">
                    
                    <span>View/Edit KPI</span>
                </a>
                <div id="teamGoalsView" class="sidebarSubmenu collapse" aria-labelledby="headingFeedback"
                    data-parent="#accordionSidebar" >
                    
                        
                
                <a class="nav-link collapsed" style=" color:yellow!important; " href="<?=base_url('index.php/hrzone/CompanyGoals/SeoTeam');?>" >
                    
                    <span>SEO</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; " href="<?=base_url('index.php/hrzone/CompanyGoals/ContentWriterTeam');?>" >
                    
                    <span>Content Writer</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; " href="<?=base_url('index.php/hrzone/CompanyGoals/DeveloperTeam');?>" >
                    
                    <span>Web Developer</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; " href="<?=base_url('index.php/hrzone/CompanyGoals/DesignerTeam');?>" >
                    
                    <span>Web Designer</span>
                </a>
                    
                </div>
            </li><!-- Divider -->
            
			
          <li class="nav-item sidebarSubmenu">
                <a class="nav-link sa collapsed" href="#" 
				data-toggle="collapse" data-target="#KPILIST"
                    aria-expanded="true" aria-controls="teamGoals">
                    
                    <span>List of KPI Score</span>
                </a>
                <div id="KPILIST" class="sidebarSubmenu collapse" aria-labelledby="headingFeedback"
                    data-parent="#accordionSidebar" >
                    
                        
                
                <a class="nav-link collapsed" style=" color:yellow!important; " href="<?=base_url('index.php/hrzone/Kpi/MonthlyKpi');?>" >
                    
                    <span>Monthly KPI List</span>
                </a>
                <a class="nav-link collapsed" style=" color:yellow!important; " href="<?=base_url('index.php/hrzone/Kpi/YearlyMarksKpi');?>" >
                    
                    <span>Yearly KPI List</span>
                </a>
                
                    
                </div>
            </li><!-- Divider -->
            
			
          
            
            

        </ul>
        </div>
        <!-- End of Sidebar -->