
<script type="text/javascript">
	
	$(document).ready(function(){
		$('#lbtn').on('click',function(){

			var user=$('#luser').val();
			var pass=$('#lpass').val();
			
			var ddata="username="+user+"&password="+pass+"&login";
			

			$.ajax({

				type:'POST',
				url :'login.php',
				data: ddata,
				success:function(result){
					if(result=="true")
					{
						alert(result);
						window.location="http://localhost/AutomatedPayroll/home.php";
					}
					else
					{
						alert(result);
					}
				}

			});
		});
	});

</script>

<div class="col-lg-4 col-lg-offset-4 bo1 col-xs-8  col-xs-offset-2 col-sm-6  col-sm-offset-3 k"  >
    	<form name="form"  action="">
			<div class="panel panel-primary l " style="margin-top: 60px;background-color:  #fffff2;">
				
						<p class="panel-heading"  style="text-align: center;font-weight: bold;font-size: 20px">Login</p>
				
				<div class="panel-body">
					
					
						<div class="form-group">
							<input type="text" name="username" id="luser" class="form-control" placeholder="Username">		
						</div>
						<div class="form-group">
							<input type="password" name="password" id="lpass" class="form-control" placeholder="password">
						</div>
						
							
						<div>
							<input type="button" id="lbtn" name="login" value="LogIn" class="btn btn-primary">
						</div>
						
						
					
					
				</div>
        
		</div>
		</form>
	</div> 