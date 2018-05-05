<?php
 	
 	include 'connection.php';

 	if(isset($_POST['registration']))
 	{
 		$username=mysqli_real_escape_string($conn,$_POST['username']);
    $fullName=mysqli_real_escape_string($conn,$_POST['fullName']);
 		$add=mysqli_real_escape_string($conn,$_POST['address']);
 		$state=mysqli_real_escape_string($conn,$_POST['state']);
 		$city=mysqli_real_escape_string($conn,$_POST['city']);
 		$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
 		$pass=mysqli_real_escape_string($conn,md5($_POST['password']));
  		$country=mysqli_real_escape_string($conn,$_POST['country']);
 		$postion=mysqli_real_escape_string($conn,$_POST['position']);
    $sec=$_POST['secure'];


    if($sec=='4444')
    {


 		$query="Insert into registration (Username,FullName,Email,Password,Position,Number,Address,City,State,Country)  values(?,?,?,?,?,?,?,?,?,?)";

 		$stmt=mysqli_stmt_init($conn);

 		
        if(!mysqli_stmt_prepare($stmt,$query))
        {
        	
        	  
       
             printf("error: %s\n", mysqli_error($conn));
        }
 		else {

 			    mysqli_stmt_bind_param($stmt,"ssssssssss",$username,$fullName,$email,$pass,$postion,$mobile,$add,$city,$state,$country);
 			    mysqli_stmt_execute($stmt);
                 $res=mysqli_stmt_get_result($stmt);
               
                 if($res>0)
                 {
                 	echo 'done.';
                 }
                 else {
                 	echo "failed";
                 	printf("error: %s\n", mysqli_error($conn));
                 }
                 

 			 
			}
  	}
    else
    {
      echo "secure code not matched";
    }
  }

  	if(isset($_POST['uvalidation']))
  	{
  		$user=$_POST['username'];
         
  		$query="select Username from registration";
  		$res=mysqli_query($conn,$query);

  		while($row=mysqli_fetch_assoc($res)){
             

            $a=$row['Username'];
  		if($user==$a)
  		{    
  			echo "yes";
  			break;
  		}
  		
  	}

  	}

    if(isset($_POST['evalidation']))
    {
      $email=$_POST['email'];
         
      $query="select Email from registration";
      $res=mysqli_query($conn,$query);
      

      while($row=mysqli_fetch_assoc($res)){


            $a=$row['Email'];
      if($email==$a)
      {    
        echo "yes";
        break;
      }
      
    }

    }

 	?>
