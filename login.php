<?php
	
	include 'connection.php';
	session_start();
	if(isset($_POST['login']))
	{
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$query="select * from registration where user='$user' and pass='$pass'";
		$res=mysqli_query($conn,$query);
		if(mysqli_num_rows($res)>0)
		{
			$_SESSION['u']=$user;
			echo "Login Successful";
			header('location:home.php');

		}
		else
		{
			echo "Again check the username and Password";
		}
	}
?>