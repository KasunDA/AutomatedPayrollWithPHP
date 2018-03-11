<?php
	include 'abc1.php';

?>


<div class="col-lg-6">
	<form name="form" menctype="multi" action="#" method="post">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<p>Check Salary</p>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="emp_id">Employee Id</label>
					<input type="text" name="emp_id" placeholder="emp_id">
				</div>
				<div class="form-group">
					<label for="inmonth"> Month</label>
					<label>From</label>
					<input type="date" name="frommonth">
					<label>To</label>
					<input type="date" name="tomonth">
				</div>
				<div class="form-group">
					<input type="submit" name="search">
				</div>
			</div>
		</div>

	</form>
</div>

<?php
	include 'xyz.php';
?>