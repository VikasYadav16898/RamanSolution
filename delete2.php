<?php


include("../database/database.php");
$rollno= $_GET['delid'];
 
$query= "delete from iphone where id='$rollno' ";
$data=mysqli_query($link,$query);
 unlink('resume/'.$image);
if ($data)
 {

	echo "<script>
                   alert('Delete Successfull');
                   window.location.href='contactdetail.php';
		    </script>";
    
}
else{
	echo "<script>
                   alert('Delete Unsuccessfull')
		    </script>";
}

?>