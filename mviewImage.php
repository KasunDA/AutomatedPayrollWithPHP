<?php

     include 'connection.php';
     
     if(isset($_POST['search']))
     {
     	$empId=$_POST['empId'];
     	$date=$_POST['date'];

     	$query="Select * from emp_log where empId='$empId' and empDateTime='$date'";
     	$res=mysqli_query($conn,$query);
     	$row=mysqli_fetch_assoc($res);
     }