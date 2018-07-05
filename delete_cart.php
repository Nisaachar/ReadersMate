<?php 
    session_start();
    include_once 'database.php';
    
    $book_id = $_GET["book_id"];
    $u_id = $_SESSION["user_id"];

    $query = "DELETE FROM tbl_cart WHERE tbl_cart.u_id = '$u_id' AND tbl_cart.book_id = '$book_id' ";
    $run = mysqli_query($conn, $query);

    header("Location: cart.php");
?>