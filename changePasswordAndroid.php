<?php 

	$conn=mysqli_connect('localhost','root','','automatedpayroll'); 
	if(isset($_POST['check'])) 
	{
		$empId=$_POST['empId']; 
		$empPass=md5($_POST['oldpass']); 
		$query="select * from emp_registration where Id='$empId' and Password='$empPass'"; 
		$res=mysqli_query($conn,$query); 
		if(($row=mysqli_fetch_assoc($res))>0) 
		{
			echo "success";
		}		
		else
		{
		 	echo "notsuccess"; 
		} 
	} 

if(isset($_POST['change'])) 
	{$empId=$_POST['empId'];
	 $empPass=md5($_POST['newpass']);
	$empId." ".$empPass; 
	 $query="update emp_registration set Password='$empPass' where Id='$empId'"; 
	 $res=mysqli_query($conn,$query); 
	 if($res>0)
	  {echo "success"; }
	   else
	    {echo "notsuccess";
	 printf("error: %s\n", mysqli_error($conn)); } 
} ?>