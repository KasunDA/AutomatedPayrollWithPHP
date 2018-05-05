<?php
    include 'abc1.php';
   // include_once 'mlocation.php';
 ?>

<script type="text/javascript">
  

</script>
 <div class="col-lg-8">
 	<!-- <table class="table">
 		<tr>
 			<td>
 				<img src="<?php echo $row['empImage']; ?>">
 			</td>
 			<td>
 				<p><?php echo $row['empId']; ?></p>
 				<p><?php echo $row['empName']; ?></p>
 			</td>
 		</tr>
 	</table> -->
 	
 </div>
 <div class="col-lg-4 ">
 		<form name="form" enctype="multipart/form-data"  method="get" action="#">
 			<div class="panel panel-primary" style="background-color: rgba(0,0,0,.7);color:#fff;border-radius: 8%;margin-top: 20px">


				<p class="panel-heading" style="text-align: center;font-weight: bold;font-size: 20px;border-radius: 10%"> Search Employee Location Detail</p>
				<div class="panel-body">
        			<div class="form-group">
 						     
                 <form method="post" action="#">
 									<div class="form-group">
 										<label for="emp_id"> Employee Id:</label>
 								
 										<input type="text" name="emp_id" class="form-control">
 									</div>
 							
 									<div class="form-group">
 										<label for="emp_date">Date :</label>
 									
 										<input type="date" name="emp_date" id="date" class="form-control">
 									</div>
 								
 									<input type="submit" id="searchLocation" style="color:black" class="btn" name="search" value="Search">
 								</form>
 					</div>
 				</div>
 			</div>
 		
	 	</form>
 	</div>

	<div class="row">
		<div class="col-lg-12 " id="googleMap" style="border: 1px red solid; height: 550px;border-radius: 2%;margin: 2px;padding: 2px">

      
			<script>

          window.setInterval(function(){
  
                <?php  

              $conn=mysqli_connect('localhost','root','','automatedpayroll');
              $query="select * from emp_location where emp_id='9' order by emp_date DESC LIMIT 1";
              $res=mysqli_query($conn,$query);
              $row=mysqli_fetch_assoc($res);?>


},500);

				function myMap() {

          // var myLatlng = new google.maps.LatLng(26.218287,78.182831);
           var myLatlng = new google.maps.LatLng( <?php echo $row['emp_latitude'].",".$row['emp_longitude'];?>);
					var mapProp= {
    					center:myLatlng,
    					zoom:19,
					};

         
					var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

					var flightPlanCoordinates = [
		

		      <?php

        
      include_once 'mlocation.php';
     ?>
        ];
        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 3
        });

         var marker = new google.maps.Marker({
           position: myLatlng,
          title:"Hello World!"
         });
    
         marker.setMap(map);
        flightPath.setMap(map);
      }
				
			</script>
  			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIbymudRAW7AZ7EgRdhX9HMoWo7dyI0-k&callback=myMap"></script>
		</div>
	</div>

 <?php
     include 'xyz.php';
  ?>