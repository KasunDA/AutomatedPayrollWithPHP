<!DOCTYPE html>
<html>
 	<title>Automated Payroll</title>
 	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/ajax/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
  	$(document).ready(function(){
  		$("#sig").on('click',function(){
  			$(".r").css({'display':'none'});
  			$(".k").css({'display':'inline-block'});
  			
  		});

  		$("#reg").on('click',function(){
  			$(".k").css({'display':'none'});
  			$(".r").css({'display':'inline-block'});
  			
  		});

  		$(".bb").on('click',function(){
  			
  			$(".lis").toggle();
  			
  		});
  	});
  </script>
	<style type="text/css">
		

		.r,.k{
			display: none;
		}
		
		.cont{
			/*display: inline-block;*/
			 background-color:  #ffe6e6;
			max-height:100px;
			min-height: 50px;
			/*border: groove;*/
			padding: 7.5px 0 10px 0;
			margin:0px 5px 0px 5px;
			border-radius: 15%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

		}
        
        @media screen and (min-width: 992px) {
 		    .s {y
  		     font-size:  33px;
  		     text-align: center;
        	margin-top: -4px
   			 }
   			 .ss{
        	font-size:  20px;
        	text-align: center;
         }
         .rep{
      	  	 width: 80%;
      	  	 

      	  }

      	  .bar1,.bar2,.bar3{
			width: 40px;
			height: 5px;
			margin: 5px;
			transition: 0.2s;
			background-color: black;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		}

		
     
        @media screen and (max-width: 992px) {
 		    .s{
        	font-size:  25px;
        	text-align: center;
        	margin-top: 10px
        	}
        	.ss{
        	font-size:  18px;
        	text-align: center;
      	  }
      	   h1{
      	  	font-size: 22px;
      	  }

      	  .rep{
      	  	 width: 75%;
      	  	 margin-left: -13px;
      	  
      	  }

      	  .bar1,.bar2,.bar3{
			width: 35px;
			height: 3.5px;
			margin: 5px 0 0 35px;
			transition: 0.2s;
			background-color: black;
		}
		}

		@media screen and (max-width: 768px) {
 		    .s{
        	font-size:  16px;
        	text-align: center;
        	margin-top: 5px;
        	margin-left: 15px;
        	}
        	.ss{
        	font-size:  12px;
        	

      	  }
      	  h1{
      	  	font-size: 18px;
      	  }

      	  .rep{
      	  	 width: 200%;
      	  	 margin-left: -13px;
      	  	 margin-top: 5px; 
      	  }

      	  .bar1,.bar2,.bar3{
			width: 30px;
			height: 3px;
			margin: 5px 0 0 15px;
			transition: 0.2s;
			background-color: black;
		}
		}

		.bo{
			
			min-height: 200px;
			text-align:  center;
			margin-top: 5px
		}
		.bo1{
			
			min-height: 463px;
			text-align:  center;
			margin-top: 5px;
			margin-bottom: 5px;
		}
        /*.s{
        	font-size:  25px;
        	text-align: center;
        	margin-top: 20px
        }
        .ss{
        	font-size:  15px;
        	text-align: center;
        }
       */
		.change .bar1 {
    		-webkit-transform: rotate(-45deg) translate(-9px, 6px);
   			 transform: rotate(-45deg) translate(-6px, 6px);
		}

		.change .bar2 {opacity: 0;}

		.change .bar3 {
  		  -webkit-transform: rotate(45deg) translate(-8px, -8px);
  		  transform: rotate(45deg) translate(-7px, -7px);
		}
	</style>
</head>
<body style="background-color: #bfbfbf">
	<div class="cont container-fluid" >
       
       <div class="row">
		<div class="col-lg-1 col-lg-offset-2 bb col-xs-2" style="padding: 15px" onclick="myFunction(this)">
			<div class="bar1 "></div>
	    	<div class="bar2"></div>
			<div class="bar3"></div>
        
		</div>
		<div  class=" col-lg-offset-0 col-lg-2 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-xs-2 col-xs-offset-0"  >
			<img class="img-rounded img-respon sive rep" src="Image/_Payroll2.jpg" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
		</div>
		<div class="col-lg-4 col-xs-5  col-sm-4 col-md-6">

			<p class="s">Automated Payroll<br><span class="ss">with gps tracking and Image Capture</span></p>
		
        
		</div>
		<div class="col-lg-2 col-xs-2" style="padding: 15px;margin:10px 15px 0 20px;">
		    <?php
		          
		          if(isset($_SESSION['u'])){
                       $user=$_SESSION['u'];
                       echo "<span class='glyphicon glyphicon-user' style='box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);'>".$user."</span>";

		          }
		          
		          ?>
		</div>

		<div  class="col-lg-11  col-xs-offset-1	 lis " style="border: groove;display: none;border-radius: 15%;transition:2s;background-color: #ffe6e6;position: absolute;top: 102px;z-index:1;width: 85% ;box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<ol>
			<li><a href="home.php" class="btn btn-group-justified">Home</a></li>
			<li><a href="addemployee.php" class="btn btn-group-justified">Add Employee</a></li>
			<li><a href="location.php" class="btn btn-group-justified">View location</a></li>
			<li><a href="checksalary.php" class="btn btn-group-justified">Check Salary</a></li>
			<li><a href="#" class="btn btn-group-justified">View Image</a></li>
			<li><a href="#" class="btn btn-group-justified">Change Password</a></li>
		</ol>
		
	</div>
	</div>
	</div>
	<script>
		function myFunction(x) {
		    x.classList.toggle("change");
		}
	</script>

	

 	<div class="container" style="border:none;background-color:  #fffff2;border-radius: 2%;">
