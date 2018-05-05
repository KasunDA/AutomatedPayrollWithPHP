<?php

   session_start();
   if(!(isset($_SESSION['u'])))
   {
   	   header('location:index.php');
   }
   ?>

<!DOCTYPE html>
<html>
 	<title>Automated Payroll</title>
 	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/ajax/jquery.min.js"></script>
	
	<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"/> -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="usermade/user.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

  <style type="text/css">
  	
  	
  
  </style>
  
  <script type="text/javascript">
  	$(document).ready(function(){


  		$(".lis").fadeOut();

  		$("#sig").on('click',function(){
  			$(".r").css({'display':'none'});
  			$(".k").css({'display':'inline-block'});
  			
  		});

  		$("#reg").on('click',function(){
  			$(".k").css({'display':'none'});
  			$(".r").css({'display':'inline-block'});
  			
  		});

  		$(".bb").on('click',function(){
  			
  			$(".lis").fadeIn(100,function(){
  				$('.lis').css({'left':5});
  				$('.bbbb').css({'display':'none'});
  				$('.bbbb1').css({'display':'inline-block'});
  			});


  			
  			
  		});

  		$(".bb1").on('click',function(){
  			
  			$(".lis").fadeOut(100,function(){
  				$('.lis').css({'left':-400});
  				$('.bbbb').css({'display':'inline-block'});
  				$('.bbbb1').css({'display':'none'});
  			});


  			
  			
  		});

  		$("#userImg").on('click',function(){
  			
  			$(".Plis").fadeIn(100,function(){
  				$('.Plis').css({'right':5});
  				$('.Pbbbb').css({'display':'none'});
  				$('.Pbbbb1').css({'display':'inline-block'});
  			});


  			
  			
  		});

  		$("#userImg1").on('click',function(){
  			
  			$(".Plis").fadeOut(100,function(){
  				$('.Plis').css({'right':-400});
  				$('.Pbbbb').css({'display':'inline-block'});
  				$('.Pbbbb1').css({'display':'none'});
  			});


  			
  			
  		});

  		$('#logout').on('click',function(){

                
  			   $.ajax({
  			   	type: 'GET',
  			   	url: 'logout.php',
  			   	success:function(res)
  			   	{
  			   		window.location="http://localhost/AutomatedPayroll/index.php";
  			   	}
  			   })

  		})
  		
  	});
  </script>
	
</head>
<body style="background-color: #000">
	<div class="cont container-fluid"  >
       
       <div class="row">
       
		<div class="col-lg-1 col-lg-offset-1 bb col-xs-2 bbbb" style="padding: 20px;margin-left: 11.5%;cursor: pointer;" >
			
				<div class="bar1 "></div>
	    		<div class="bar2"></div>
				<div class="bar3"></div>
			
        
		</div>

		<div class="col-lg-1 col-lg-offset-1 bb1 col-xs-2 bbbb1" style="padding: 20px;margin-left: 11.5%;display: none;cursor: pointer;">
			
				<div class="bar1"></div>
	    		<div class="bar2"></div>
				<div class="bar3"></div>
			
        
		</div>
		
		<!--<div  class=" col-lg-offset-0 col-lg-2 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-xs-2 col-xs-offset-0"  >
			<img class="img-rounded img-respon sive rep" src="Image/_Payroll2.jpg" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
		</div>-->
		<div class="col-lg-4 col-lg-offset-1 col-xs-5  col-sm-4 col-md-6">

			<h1 class="s">Automated Payroll<br><span class="ss">with gps tracking and Image Capture</span></h1>
		
        
		</div>
		<div class="col-lg-2 col-lg-offset-1 col-xs-2 Pbbbb" id="userImg" style="padding: 15px;font-size:40px;margin:10px 15px 0 20px;cursor: pointer;">
		    <?php
		          
		          if(isset($_SESSION['u'])){
                       $user=$_SESSION['u'];
                       echo "<span class='glyphicon glyphicon-user' > ".$user."</span>";

		          }
		          
		          ?>
		</div>

		<div class="col-lg-2 col-xs-2 Pbbbb1" id="userImg1" style="padding: 15px;display:none;font-size:40px;margin:10px 15px 0 20px;cursor: pointer;">
		    <?php
		          
		          if(isset($_SESSION['u'])){
                       $user=$_SESSION['u'];
                       echo "<span class='glyphicon glyphicon-user' > ".$user."</span>";

		          }
		          
		          ?>
		</div>

	</div>

		
	</div>


<div  class="  lis kd" style="border-radius: 5%;transition:2s; background-image: url('http://creationmedia.in/wp-content/uploads/2015/03/More-Tumblr-Backgrounds-for-guys-light-gray.jpg');position: absolute;top: 151px;z-index:1 ;left:-400px;width:26%;box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.49)0 6px 20px 0 rgba(0, 0, 0, 0.59);">
		<ul>
			<a href="home.php"><span class="btn btn-group-justified" style="font-weight: 600;font-size: 25px;color:black;text-align: left">Home</span></a>
			<a href="addemployee.php" ><span class="btn btn-group-justified" style="font-weight: 600;font-size: 25px;color:black;text-align: left">Add Employee</span></a>
			<a href="checkemployee.php" ><span class="btn btn-group-justified" style="font-weight: 600;font-size: 25px;color:black;text-align: left">Check All Employee</span></a>
			<a href="location.php" ><span class="btn btn-group-justified" style="font-weight: 600;font-size: 25px;color:black;text-align: left">View location</span></a>
			<a href="checksalary.php" ><span class="btn btn-group-justified" style="font-weight: 600;font-size: 25px;color:black;text-align: left">Check Salary</span></a>
			<a href="viewImage.php" ><span class="btn btn-group-justified" style="font-weight: 600;font-size: 25px;color:black;text-align: left">View Image</span></a>
			<a href="changePassword.php"><span class="btn btn-group-justified" style="font-weight: 600;font-size: 25px;color:black;text-align: left">Change Password</span></span></a>
		</ul>
		
	</div>

	<div  class="Plis  " style="border-radius: 5%;transition:2s; background-image: url('http://creationmedia.in/wp-content/uploads/2015/03/More-Tumblr-Backgrounds-for-guys-light-gray.jpg');position: absolute;top: 151px;z-index:1 ;right:-400px;width:26%;box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.49)0 6px 20px 0 rgba(0, 0, 0, 0.59);">

            
<ul>
			<!--<a href="home.php"><span class="btn btn-group-justified" style="font-weight: 600;font-size: 25px;color:black;text-align: left">Change Password</span></a>-->
			<!--<a href="addemployee.php" ><span class="btn btn-group-justified" style="font-weight: 600;font-size: 25px;color:black;text-align: left">Edit Profile</span></a>-->
			<a href="" ><span type="submit" id="logout" class="btn btn-group-justified" name="logout" style="font-weight: 600;font-size: 25px;color:black;text-align: left">LogOut</span></a>
			
		</ul>
</div>


	<script>
		function myFunction(x) {
		    x.classList.toggle("change");
		   
		}
	</script>

	

 	<div class="container" style="border:none;background-image: url('https://static1.squarespace.com/static/5585b545e4b0731538e8a45a/t/55b56cd1e4b05bdbc9d323a7/1437953262290/coffee-computer.jpg?format=1500w');border-radius: 2%;min-height: 420px">
  <div class="row">