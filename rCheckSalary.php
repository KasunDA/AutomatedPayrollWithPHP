<?php

      include_once 'connection.php';
     $Id=$_GET['Id'];
     $fdate=$_GET['fdate'];
     $tdate=$_GET['tdate'];


     $query="select * from emp_log where empId='$Id' and empDate between '$fdate' and '$tdate'";
     $res=mysqli_query($conn,$query);

     $result=mysqli_num_rows($res);

     echo $result;

     ?>