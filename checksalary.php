<?php
	include 'abc1.php';

?>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('#sButton').on('click',function(){

			var Id=$('#sId').val();
			var fdate=$('#fdate').val();
			
			var tdate=$('#tdate').val();
		
			var Pay=$('#sPay').val();
			
			var ddata="Id="+Id+"&fdate="+fdate+"&tdate="+tdate;
			

			$.ajax({

				type:'GET',	
				url :'rCheckSalary.php',
				data: ddata,
				success:function(result){
					
						alert(result);
						 var payment="Total Payment is "+result*Pay;

						
						 $('#rcheck').html(payment);

					}
				

			});
		});
	});


</script>


<div class="col-lg-4 col-md-8 col-sm-8 col-sm-offset-2 col-lg-offset-4 ">
	<form name="form"  action="" >
		<div class="panel panel-primary">
			<div class="panel-heading">
				<p>Check Salary</p>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="emp_id">Employee Id</label>
					<input type="text" id="sId" name="emp_id" placeholder="emp_id" class="form-control">
				</div>
				<div class="form-group">
					<label for="inmonth"> Month</label>
					<label>From</label>
					<input type="date" id="fdate" name="frommonth" class="form-control">
					<label>To</label>
					<input type="date" id="tdate" name="tomonth" class="form-control">
				</div>
				<div class="form-group">
					<label for="pypday">Pay Per Day</label>
					<input type="text" id="sPay" name="pypday" class="form-control">
				</div>
				<div class="form-group">
					<input type="button" id="sButton" class="btn btn-danger" name="search" value="Check Salary">
				</div>
			</div>
		</div>

	</form>
</div>

 

 	<span id="rcheck" style="color:white"></span>
 	
 
<?php
	include 'xyz.php';
?>