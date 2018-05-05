<?php

      include_once 'connection.php';
    $Id=$_POST['emp_id'];
   $fdate=$_POST['fromDate'];
    $tdate=$_POST['toDate'];


   $query="select * from emp_log where empId='$Id' and empDate between '$fdate' and '$tdate'";
     $res=mysqli_query($conn,$query);

     $result=mysqli_num_rows($res);

      echo $result;

     ?>