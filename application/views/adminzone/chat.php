 
 <?php include('header.php'); ?>
 
 
 <style>
  .tooltip .tooltiptext {
  visibility: hidden;
  width: 500px !important;
  background-color: #7343c5 !important;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 5px 5px 5px !important;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}
 .notification_box_readToday{
	 border-radius: 2px;
    background: #f6c23e;
    border: 1px solid #e7d8ee;
 }
.marquee{
  display:block;
position:relative;

height: 444px;
animation:scroll 18s linear infinite;

}

.main-box{
	border: 1px solid #ccc;
    margin: 10px 0;
    background: #fff;
    color: #333;
}
.main-box p{
	margin: 0;
}
.link-btn{
    width: 180px;
    background: #ff8a00;
    color: #fff;
    border: none;
    padding: 5px;
    border-radius: 2px;
    box-shadow: 0px 2px 2px #999;
	margin-bottom: 15px;
}
.head-div{
	background: #f7f7f7;
	padding: 10px;
	display: flex;
    justify-content: space-between;
}
.control{
	width: 100%;
    font-size: 15px;
    padding: 5px;
    border-radius: 3px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
}
 </style>
 
<div class=" container-fluid options" >
    
<div class="col-lg-2">
  <div class="main_slider">
        
    <div class="links">
        <a>All Links List</a>
    </div>

   </div>
</div>

<div class="col-lg-10">
  <div class="main_slider">      
    <div class="links">
        <a>All</a>
    </div>
  </div>
	<div class="main-box">
	   <div class="head-div">
	       <p>Paperub</p> 
		   <span><i class="fa fa-plus-circle" data-toggle="modal" data-target="#myModal" aria-hidden="true"></i></span>
	   </div>
	   <div class="row p-3 addbtn">
	   <div class="col-lg-3">
	      <button class="link-btn">Dashboard Login</button>
	   </div>
	   <div class="col-lg-3">
	      <button class="link-btn">Dashboard Login</button>
	   </div>
	   <div class="col-lg-3">
	      <button class="link-btn">Dashboard Login</button>
	   </div>
	   <div class="col-lg-3">
	      <button class="link-btn">Dashboard Login</button>
	   </div>
	   <div class="col-lg-3">
	      <button class="link-btn">Dashboard Login</button>
	   </div>
	   <div class="col-lg-3">
	      <button class="link-btn">Dashboard Login</button>
	   </div>
	   <div class="col-lg-3">
	      <button class="link-btn">Dashboard Login</button>
	   </div>
	   <div class="col-lg-3">
	      <button class="link-btn">Dashboard Login</button>
	   </div>
	   </div>
	</div>
 </div>




<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add </h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <input type="text" class="control" placeholder="Name">
		<input type="url" class="control" placeholder="Url">
		<input type="submit" class="btn-submit" value="Submit">
      </div>

    </div>
  </div>
</div>

<!-- Modal Ends -->



<footer class="fixed-bottom py-1 ">
<p style="margin-bottom: 0px;">HR HELP 24x7</p>
</footer>
</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="<?= base_url("Assets\NewJs/infiniteslidev2.js") ?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
    <script>
	
	function sliderList(){
			$('.slide_vertical').infiniteslide({
				direction: 'up',
				speed:15,
				responsive:true,
				pauseonhover: true
			});
		}
	
        $(document).ready(function(){
            var YearID = 2021;
		CommentSystem(YearID);
       
	   
	   
	

		
	   
	   
	   
      $("#attnId").click(function(){
        // alert("Dekh k bhai.........");
        var ajaxurl = "<?=site_url('adminzone/dashboard/AutoAttendance');?>";
                $.ajax({
                    type: "post",
                    url: ajaxurl,
                    data: {present:true },
                    dataType: "JSON",
                    success: function(response){
                        // alert(response.message);
                        if(response.status === 'P'){
							Swal.fire({
							title: response.message,
							position: 'center',
							icon: 'success',
							showConfirmButton: false,
							color: '#FFF',
							background: '#1C304C',
							timer: 3500
							})
							// alert(response.message);
                        }else if(response.status == 'MD'){
                          Swal.fire({
							title: response.message,
							position: 'center',
							icon: 'success',
							showConfirmButton: false,
							color: '#FFF',
							background: '#1C304C',
							timer: 3500
							})
						   // alert(response.message);
                        }else if(response.status == 'A'){ 
                            Swal.fire({
							html: response.message,
							position: 'center',
							icon: 'warning',
							showConfirmButton: false,
							color: '#FFF',
							background: '#1C304C',
							timer: 3500
							})
							// alert(response.message);
                        }else{
							 Swal.fire({
							html: response.message,
							position: 'center',
							icon: 'warning',
							showConfirmButton: false,
							color: '#FFF',
							background: '#1C304C',
							timer: 34500
							})
							// alert(response.message);
                        }
                        
                        
                        
                    }
                
                });
      });
    });
       

function HrNotificationSystem(YearID){
	var ajaxurl = "<?=site_url('adminzone/Comment/HrNotification');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
			data: {YearID:YearID},
			dataType: "JSON"
        }).done(function(response){
			
			datacomment = response.dataAnni;
			
			console.log(datacomment);
			if(response){
				$("#NotificationList").html(`
			
			
			${response.dataAnni.map(function(dataAnni, index){
					return(`
					
							
								<a class="dropdown-item d-flex align-items-center" href="${dataAnni.TitleUrl}">
					<div class="mr-3">
						<div class="icon-circle bg-primary">
							<i class="fas fa-file-alt text-white"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">${dataAnni.NotifyDate}</div>
						<span class="font-weight-bold">${dataAnni.Title}</span>
					</div>
				</a>
							`)}).join('')}
							
				
				
					
					`);
					
					$("#notifyCount").html(`
			
			
			        ${response.CountData.map(function(dataCountData, index){
					return(`
							<span>${dataCountData.CountNotfy}</span>
							
							`)}).join('')}
							
					`);
					}else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}



function CommentSystem(YearID){
	var ajaxurl = "<?=site_url('adminzone/EventController/AdminComment');?>";
        $.ajax({
            type: "get",
            url: ajaxurl,
			data: {YearID:YearID},
			dataType: "JSON"
        }).done(function(response){
			
			datacomment = response.dataAdmin;
			console.log(datacomment);
			if(response){
				$("#htmlRenderComment").html(`
			
				<div class="slide_vertical_wrap" >
    <ul class="slide_vertical">
			${response.dataAnni.map(function(dataAnni, index){
					return(`
					
										
							<li>
								<h3 class="notification_date"></h3>
								<div class="notification_box_read">
								<div class="notification_title container">
								<h5></h5>
								<h6></h6>
								</div>
								<div class="notifications container">
								<p>${dataAnni.title}</p>
								</div>
								</div>
								</li>

							
							
							
							`)}).join('')}
							
			${response.dataAnni.map(function(dataAnni, index){
					return(`
					
										
							<li>
								<h3 class="notification_date"></h3>
								<div class="notification_box_read">
								<div class="notification_title container">
								<h5></h5>
								<h6></h6>
								</div>
								<div class="notifications container">
								<p></p>
								</div>
								</div>
								</li>

							
							
							
							`)}).join('')}	
				
				
				
			${response.datadob.map(function(datadob, index){
					return(`
					
														
							<li>
								<h3 class="notification_date"></h3>
								<div class="notification_box_read">
								<div class="notification_title container">
								<h5></h5>
								<h6></h6>
								</div>
								<div class="notifications container">
								<p>${datadob.title}</p>
								</div>
								</div>
								</li>

							
							`)}).join('')}
							
				
				
				
				
				
							
						${response.dataEvent.map(function(dataEvent, index){
					return(`
					

						<li>
								<h3 class="notification_date">${dataEvent.startEvent}</h3>
								<div class="${(dataEvent.dateEvent == dataEvent.currdate)? 'notification_box_readToday' : 'notification_box_read'}">
								<div class="notification_title container">
								<h5 class="col-lg-9" style="padding-right:0px!important; padding-left:0px!important;">${dataEvent.title}</h5>
								<h6 class="col-lg-3 " style="padding-left:0px!important;padding-right:0px!important;">${dataEvent.startTime}&nbsp;&nbsp;-&nbsp;&nbsp;${dataEvent.endTime}</h6>
								</div>
								<div class="notifications container">
								<p>${dataEvent.discription}</p>
								</div>
								</div>
								</li>

							
							`)}).join('')}
							
							
							
							
			
			${response.data.map(function(data, index){
					return(`
					
														
							<li>
								<h3 class="notification_date"></h3>
								<div class="notification_box_read">
								<div class="notification_title container">
								<h5></h5>
								<h6></h6>
								</div>
								<div class="notifications container">
								<p>${data.CommentUser}</p>
								</div>
								</div>
								</li>

							`)}).join('')}
							
							
					
					
					
					`);
					
					sliderList();
					
		}else 
				$("#CompanydataTable tbody").html("<div>No data Found.....</div>");
        });
}


		   
        </script>  
<script>
 function myFunction() {
      var x = document.getElementById("myLink");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
	
	$(function() {
$('#add').click(function(){
	var newDiv = $('<div class="col-lg-3"><button class="link-btn">Dashboard Login</button></div>');
  //newDiv.style.background = "#000";
  $('.addbtn').append(newDiv);
});
});
	
	
	

    </script>
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
    
	<link rel="stylesheet" href=" <?= base_url("Assets/vendor/fontawesome-free/css/all.min.css") ?>" >
	
    <!-- Bootstrap core JavaScript-->
   
    <script src="<?= base_url("Assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("Assets/vendor/jquery-easing/jquery.easing.min.js") ?>"></script>
    <script src="<?= base_url("Assets/js/sb-admin-2.min.js") ?>"></script>
</body>
</html>