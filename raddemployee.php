<?php
   
   include 'connection.php';



     	$fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
     	$uname=$_POST['username'];
     	$gender=$_POST['gn'];
     	$status=$_POST['st'];
     	$dob=$_POST['date'];
     	$f_h=$_POST['f_h'];
     	$city=$_POST['city'];
     	$state=$_POST['state'];
     	$address=$_POST['address'];
     	$tahsil=$_POST['tahsil'];
        $district=$_POST['district'];
     	$country=$_POST['country'];
     	$phoneNo=$_POST['phone'];
     	$mobileNo=$_POST['mobile'];
     	$email=$_POST['email'];
     	$password=md5($_POST['password']);
     	$fileName = $_FILES['fie']['name'];
		$fileTmpNam = $_FILES['fie']['tmp_name'];
		$fileExt = explode('.',$fileName);
		$fileActualExt =strtolower(end($fileExt));
		$fileNewName= "Image/".uniqid('',true).".".$fileActualExt;
		$fullName=$fname." ".$lname;
     	
     	$query="insert into emp_registration(Username,FullName,empGender,empStatus,empDateOfBirth,empFatherHusband,empAddress,empCity,empState,empDistrict,empPhonNo,empMobileNo,empEmail,Password,empImage) values( '$uname','$fullName','$gender','$status','$dob','$f_h','$address','$city','$state','$district','$phoneNo','$mobileNo','$email','$password','$fileNewName')";
       
        
     	$res=mysqli_query($conn,$query);
           
     	

     	if ( false===$res ) {
                 printf("error: %s\n", mysqli_error($conn));
             
        }
 		else {
 			  move_uploaded_file($fileTmpNam,$fileNewName);
 			 echo "successfully  registererd employee";
			}



     ?>