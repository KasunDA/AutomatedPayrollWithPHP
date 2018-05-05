<?php
    
    include 'connection.php';
  if(isset($_GET['search'])){

              	$empId=$_GET['emp_id'];
              	$empDate=$_GET['emp_date'];
		   
		   $query="select * from emp_location where emp_id='$empId' and emp_date='$empDate'";
		   $res=mysqli_query($conn,$query);
		  
	  
	  
         while( $a=mysqli_fetch_assoc($res))
		 {
		       echo "{lat:".$a['emp_latitude'].",lng:".$a['emp_longitude']."},";
			
		 }

		
		 
		}
		 


    ?>