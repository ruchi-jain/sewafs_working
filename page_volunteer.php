<?php 
   $page_title = "Volunteer" . $_SESSION['userName'] ;
   include('page_header.php');
?>


<!--=== Content Part ===-->
<div class="body">
    <div class="breadcrumbs margin-bottom-50">
        <div class="container">
            <h1 class="color-green pull-left">Volunteer Profile</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                <li class="active"> Volunteer</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->


<!--=== Content Part ===-->
<div class="container">  
  <h4> This is Volunteer Profile Page </h4>
</div><!--/container-->    
<!-- End Content Part -->


<?php
include("page_footer.php");
include("copyright.php");
include("js.php");
?>

</body>
</html>