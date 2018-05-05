<?php 

    include_once 'abc1.php';
 ?>

  <script type="text/javascript">
  	
     
     $(document).ready(function() {

     	 $('#clic').on('click',function(){


     	 	$.ajax({

     	 	  type:'GET',
     	 	  url : 'rCheckEmployee.php',
     	 	  data:   "k",
     	 	  success:function(result)
     	 	  {
     	 	  	   var obj=JSON.parse(result);
                    
     	 	      var x="";
     	 	      
     	 	      x="<table class='table' style='border-radius:5px;'><tr><th>EmpId</th><th>empName</th><th>empEmail</th><th>empMobileNo</th></tr>"
     	 	      for(var i=0; i<obj.length; i++)
     	 	      {
                      x+="<tr><td>"+obj[i].Id+"</td><td width='450'>"+obj[i].Username+"</td><td>"+obj[i].empEmail+"</td><td>"+obj[i].empMobileNo+"</td></tr>";
     	 	      }	    

     	 	      x+="<tr><td colspan='4'> Total Employee Working : "+obj.length+"</td></tr></table>"

     	 	      $('#tab').html(x).css({'display':'block'});

     	 	  }
     	 });
     	 });
     	 

     });

  </script>


     <input type="button" name="button" value="button" id="clic">

    <div  class="col-lg-8 col-lg-offset-2"  style="background-color: rgba(0,0,0,0.8);color: white;font-weight: 800;margin-top:20px;margin-bottom:20px;display: none;border-radius:3%" id="tab">
    	
    </div>


 <?php


    include_once 'xyz.php';

 ?>