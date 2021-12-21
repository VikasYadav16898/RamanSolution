<?php
session_start();
$admin=$_SESSION['sid'];
include("../database/database.php");
if($admin=="")
{
  header("location:index.php");
}

?>


<?php


include("header.php");
?>

<?php


include("sidebar.php");
?>


 
<div class="content-wrapper" style="min-height: 900.667px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
    
   $sel=mysqli_query($link,"select * from iphone");
    $count1=mysqli_num_rows($sel);

?>


              <h3><?=$count1?></h3>

              <p> Form Details</p>
            </div>
            <div class="icon">
              <i class=" ion ion-person-add"></i>
            </div>
            <a href="contactdetail.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
      </div>
      <!-- /.row -->
      <!-- Main row -->
    
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>


       
    
 <?php

include ("footer.php");
 ?>
