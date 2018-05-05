<?php
	
	include_once 'connection.php';
	$query="select * from emp_registration";
	$res=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($res))
	{
		$data[]=$row;
	}
	echo json_encode($data);
?>