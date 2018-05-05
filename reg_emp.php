<?php
 	
 	include 'connection.php';

 	if(isset($_POST['submit']))
 	{
 		$fname=$_POST['firstname'];
 		$lname=$_POST['lastname'];
 		$gender=$_POST['gn'];
 		$status=$_POST['st'];
 		$dob=$_POST['date'];
 		$f_h=$_POST['f_h'];
 		$add=$_POST['address'];
 		$state=$_POST['state'];
 		$district=$_POST['district'];
 		$tahsil=$_POST['tahsil'];
 		$city=$_POST['city'];
 		$phone=$_POST['phone'];
 		$mobile=$_POST['mobile'];
 		$email=$_POST['email'];
 		$pass=$_POST['password'];
 		$repass=$_POST['rePassword'];

 		$query="Insert into reg_emp  values('$fname','$lname','$gender','$status','$dob','$f_h','$add','$state','$district','$tahsil','$city','$phone','$mobile','$email','$pass')";
 		$res=mysqli_query($conn,$query);
 		
 	}
