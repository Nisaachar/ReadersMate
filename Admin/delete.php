<?php

    include_once 'database.php';

    $delete_record=$_GET['del'];
    
	$que="DELETE FROM tbl_book_details WHERE book_id='$delete_record'"; 
    $run=mysqli_query($conn,$que); 
    
	$ok=$run;
	if($ok)
	{
	echo"<script>window.open('book_view.php?deleted=Record has been deleted sucessfully !','_self')</script>";
	}
	else
	{
		echo"error:".mysqli_error($conn);
	}

?>