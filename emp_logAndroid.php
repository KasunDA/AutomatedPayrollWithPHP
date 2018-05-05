<?php

       include_once 'connection.php';
     if(isset($_POST['Image']))
	 {
		
		 $empId=mysqli_real_escape_string($conn,$_POST['emp_id']);
		 $empLongitude=mysqli_real_escape_string($conn,$_POST['empLongitude']);
		 $empLatitude=mysqli_real_escape_string($conn,$_POST['empLatitude']);
		 $empDate=mysqli_real_escape_string($conn,$_POST['empDate']);
		 $empTime=mysqli_real_escape_string($conn,$_POST['empTime']);
		 $imageData=$_POST['empImage'];
		 
		 $empImageNewName= "Image/EmpId_".$empId."_".uniqid('',true)."."."jpg";
		 
		 $query="Insert into emp_log values(?,?,?,?,?,?)";
		 
		 $stmt=mysqli_stmt_init($conn);
		 
		 if(!mysqli_stmt_prepare($stmt,$query))
		 {
			 printf("Error  %s\n",mysqli_error($conn));
		 }
		 else
		 {
			 mysqli_stmt_bind_param($stmt,"ssssss",$empId,$empImageNewName,$empDate,$empTime,$empLongitude,$empLatitude);
			 mysqli_stmt_execute($stmt);
			 $res=mysqli_stmt_get_result($stmt);	
			 printf("Error  %s\n",mysqli_error($conn));	 
		 
		 	echo "KK";
		    file_put_contents($empImageNewName,base64_decode($imageData));
		 
		 }
		
	 }
?>