<?php
     session_start();
    include 'abc1.php';
    include 'reg_emp.php';
 ?>


   <script type="text/javascript">
   	   $(document).ready(function() {
   	   	   $("#pic").on('click',function(){
   	   	   	$(".profile").('<img src="Image/Payroll.jpg" />');
   	   	   });
   	   });
   </script>

<form name="form" menctype="multipart/form-data" method="post" action="#">
	<div class="col-lg-8 col-lg-offset-2"  >	
	<div class="panel panel-primary" style="background-color:  #fffff2;">
		<div class="panel-heading"> Add Employee</div>
		<div class="panel-body">
 <table class="table">
 	<tr>
 		<td colspan="2" >
			<img src="Image/download.png" alt="kp" class="profile" style="border-radius: 50%">
			<p id="pic">Change Photo</p>


		</td>
 	</tr>
	<tr>
		
		<td>
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input type="text" class="form-control" name="firstname" placeholder="First Name"/>
			</div>
			<div class="form-group">
				<label for="gn">Gender</label><br>
				
				<input type="radio" name="gn">
				<label >Male</label>
				<input type="radio" name="gn" style="margin-left: 10%"> 
				<label>Female</label>
			</div>
			<div class="form-group">
				<label for="date">Date of Birth</label>
				<input type="date" class="form-control" name="date">
			</div>
			<div class="form-group">
				<label for="state">State</label>
				<input type="text" class="form-control" name="state">
			</div>
			<div class="form-group">
				<label for="tahsil">Tahsil</label>
				<input type="text"  class="form-control"name="tahsil">
			</div>
			<div class="form-group">
				<label for="city">Villag/Town/City</label>
				<input type="text" class="form-control" name="city">
			</div>
			<div class="form-group">
				<label for="mobile">Mobile No.</label>
				<input type="text" class="form-control" name="mobile">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password">
			</div>
			

		</td>
		<td>
			<div class="form-group">
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" class="form-control" placeholder="Last Name"/>
			</div>
			<div class="form-group">
				<label> for="st" Status</label><br>
				
				<input type="radio" name="st">
				<label>Married</label>
				<input type="radio" name="st" style="margin-left: 10%"> 
				<label>Unmarried</label>
			</div>
			<div class="form-group">
				<label for="f_h">Father/Husband</label>
				<input type="text" class="form-control" name="f_h">
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" class="form-control" name="address">	
			</div>
			<div class="form-group">
				<label for="district">District</label>
				<input type="text" class="form-control" name="district">
			</div>
			<div class="form-group">
				<label for="phone">Phone No</label>
				<input type="text" class="form-control" name="phone">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email">
			</div>
				<div class="form-group">
				<label for="rePassword">Re-password</label>
				<input type="password" class="form-control" name="rePassword">
			</div>
			
		</td>
	</tr> 
	<tr><td colspan="2"> <input type="submit" class="form-control" name="submit" class="btn btn-primary"></td></tr>
	
 </table>
 
</div>
 </div>
 </div>
 </form>

 <?php
     include 'xyz.php';
  ?>