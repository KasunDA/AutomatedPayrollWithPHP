<?php


      include_once 'connection.php';
      
      $empId=$_GET['Id'];
       $date=$_GET['date'];

      $query="Select  e.empId,e.empImage,e.empDate,r.Username from  emp_log as e inner join emp_registration as r where e.empId='$empId'and r.Id='$empId' and e.empDate='$date'";
      $res=mysqli_query($conn,$query);
     
       $result=mysqli_fetch_assoc($res);
      if($result>0)
      {
           
      	$data[]=$result;
      	
      	 print(json_encode($data));


      }

     
      ?>