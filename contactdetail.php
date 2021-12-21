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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Form Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Daily Learn
</a></li>
        <li class="active">  Form Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
 











        

<section class="col-md-12 connectedSortable">
  <div class="box"  >
            <div class="box-header with-border"  >
               <i class="fa fa-user"></i>
              <h3 class="box-title">Form Details  </h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body" style="overflow: scroll;">
              <table class="table table-bordered " id="example4">
                <thead>
                <tr>
                     <th>Action</th>
                  <th>S No</th>
                  <th>Name</th>
                  <th>Phone</th>
                   <th>Email</th>
                  <th>Board</th>
                  <th>Age</th>
                   <th>City</th>
                 <th>Requirement</th>
                 
                </tr>
</thead>



<?php
    $s=1;
   $sel=mysqli_query($link,"select * from iphone order by id desc");
    while($arr=mysqli_fetch_assoc($sel))
    {
      $id=$arr['id'];
       

?>
<tbody>
      <tr>
        <td>
        
       
        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" href='delete2.php?delid=<?=$arr['id'];?>' ><i class="fa fa-trash"></i></a>
    </td>
   <td><?=$s;?></td>
    <td><?=$arr['name'];?></td>
     <td><?=$arr['mobile'];?></td>
      <td><?=$arr['email'];?></td>
       <td><?=$arr['board'];?></td>
         
        <td><?=$arr['age'];?></td>
        <td><?=$arr['city'];?></td>
        <td><?=$arr['requirement'];?></td>
       

        
       
      </tr>
<?php
      $s++;
   }

?>


</tbody>
<tfoot></tfoot>

               
                
              </table>
            </div>
            
            
          </div>
          <!-- /.box -->
</section>







       
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>


 <?php

include ("footer.php");
 ?>
<script>
   
   $(document).ready(function() {
    $('#example4').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>