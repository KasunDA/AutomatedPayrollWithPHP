<?php

     include_once 'connection.php';

     $query="select Id,Username,empMobileNo,empEmail from emp_registration";
     $res=mysqli_query($conn,$query);
     while(($row=mysqli_fetch_assoc($res))>0)
     {
     	$result[]=$row;
     }

      print(json_encode($result));
  ?>