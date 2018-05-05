<?php
    
		 $conn=mysqli_connect('localhost','root','','automatedpayroll');
		 $empId= $_POST['emp_id'];
		 $empLongitude=$_POST['mLongitude'];
		 $empLatitude=$_POST['mLatitude'];
		 $empDate=$_POST['empDate'];
		 $query="Insert into emp_location (emp_id,emp_date,emp_longitude,emp_latitude) values('$empId','$empDate','$empLongitude','$empLatitude')";
		 mysqli_query($conn,$query);

		 printf("error %s",mysqli_error($conn));

		 ?>