<?php 
    session_start();
    include_once 'database.php';
    
    $qty = $_POST["qty"];
    $book_id = $_GET["book_id"];
    $u_id = $_SESSION["user_id"];

    $query = "UPDATE tbl_cart SET qty = '$qty' WHERE tbl_cart.u_id = '$u_id' AND tbl_cart.book_id = '$book_id' ";
    $run = mysqli_query($conn, $query);

    header("Location: cart.php");
?>