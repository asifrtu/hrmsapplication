
   <!-- Page Wrapper -->
   <div class="">
 	
	<button class="addEmpBtn addempbtn" ><a href="<?=base_url('index.php/hrzone/CompanyGoals/AddCompanyGoals');?>">+ Add Goals</a></button>
							
</div>


   <div id="wrapper">
<style>

.addempbtn a {
  display: block;
  color: white;
  
  text-decoration: none;
}
.addEmpBtn{
    float:center;
    background: #7db135;
    color: white;
    font-weight: 400;
    border-radius: 1px;
    padding: .1em 1.2em 0.1em 1.2em;
    border: none !important; 
	margin-top: 20px;
	margin-left: 26px;
}
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
			
  margin-top:16px;
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

.sidebar li .submenu{ 
	list-style: none; 
	margin: 0; 
	padding: 0; 
	padding-left: 1rem; 
	padding-right: 1rem;
}
 </style>
        <!-- Sidebar -->
		
		
		<nav class="sidebar card py-2 mb-4">
<ul class="nav flex-column" id="nav_accordion">
	<li class="nav-item">
		<a class="nav-link" href="#"> Link name </a>
	</li>
	<li class="nav-item has-submenu">
		<a class="nav-link" href="#"> Submenu links  </a>
		<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 1 </a></li>
			<li><a class="nav-link" href="#">Submenu item 2 </a></li>
			<li><a class="nav-link" href="#">Submenu item 3 </a> </li>
		</ul>
	</li>
	<li class="nav-item has-submenu">
		<a class="nav-link" href="#"> More menus  </a>
		<ul class="submenu collapse">
			<li><a class="nav-link" href="#">Submenu item 4 </a></li>
			<li><a class="nav-link" href="#">Submenu item 5 </a></li>
			<li><a class="nav-link" href="#">Submenu item 6 </a></li>
			<li><a class="nav-link" href="#">Submenu item 7 </a></li>
		</ul>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#"> Something </a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#"> Other link </a>
	</li>
</ul>
</nav>





<script>

document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
    element.addEventListener('click', function (e) {

      let nextEl = element.nextElementSibling;
      let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
            
            if(nextEl.classList.contains('show')){
              mycollapse.hide();
            } else {
                mycollapse.show();
                // find other submenus with class=show
                var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                // if it exists, then close all of them
                if(opened_submenu){
                  new bootstrap.Collapse(opened_submenu);
                }
            }
        }
    }); // addEventListener
  }) // forEach
}); 
</script>