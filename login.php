<?php
	session_start();
	include 'connection.php';

	if(isset($_POST['login']))
	{
		
		$user=mysqli_real_escape_string($conn,$_POST['username']);
		$pass=mysqli_real_escape_string($conn,md5($_POST['password']));
		$query="select * from registration where Username=? ";
		
		$stmt=mysqli_stmt_init($conn);
		
		if(!mysqli_stmt_prepare($stmt,$query)){
			echo "Sql failed";
			 printf("error: %s\n", mysqli_error($conn));
		}
		else
		{
			mysqli_stmt_bind_param($stmt,"s",$user);
			mysqli_stmt_execute($stmt);
			$res=mysqli_stmt_get_result($stmt);
		
		
	
		$row=mysqli_num_rows($res);
		if($row>0)
		{    
			$result=mysqli_fetch_assoc($res);
             
             if($pass==$result['Password'])
             {
			$_SESSION['u']=$user;
			echo "true";
			//header('location:home.php');
             }
		}
		else
		{
			echo "Again check the username and Password";
		}
	}
	}
?>