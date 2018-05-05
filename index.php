<?php
    include 'abc.php';
    
    ?>
 


<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 5px">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" ></li>
         
    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner">
      <div class="item active">
        <img src="Image/scroll.jpg" class="img-rounded">
      </div>
      <div class="item">
        <img src="Image/scroll1.jpg" class="img-rounded">
      </div>
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  
</div>




  


   	

   <div class="btn-group btn-group-justified" style="margin-bottom: 20px;">
  	<a  id="sig" class="btn btn-primary">Sign In</a>
  	<a  id="reg" class="btn btn-primary">Registration</a>

	</div>


<?php
    include 'log.php';
    
    include 'reg.php';
    include 'xyz.php';
 ?>