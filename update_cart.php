<?php
session_start();
include_once 'database.php';
$u_id = $_SESSION['user_id'];
$scheme_id = $_POST['scheme_id'];
$book_id=$_GET['book_id'];

    $query = "UPDATE `tbl_cart` SET `scheme_id`=$scheme_id WHERE `book_id`=$book_id AND  `u_id`=$u_id" ;
    $run = mysqli_query($conn,$query);
   


if($run)
	{
	echo "<script>window.open('cart.php','_self')</script>";
	}
?>