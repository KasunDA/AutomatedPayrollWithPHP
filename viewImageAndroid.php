<?php
	
	include_once 'connection.php';
    $Id=$_POST['empId'];
    $date=$_POST['date'];
    $query="Select empImage from emp_log where empId='$Id' and empDate='$date' LIMIT 1 ";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    echo $row['empImage'];
?>