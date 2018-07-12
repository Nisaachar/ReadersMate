<?php
    session_start();
    include_once 'database.php';

    $u_id = $_SESSION['user_id'];
    $book_id = $_GET['book_id'];

   
    $query = " INSERT INTO tbl_cart (book_id, u_id) VALUES ('$book_id' , '$u_id') ";
    $run = mysqli_query($conn, $query);
    
    header('Location: ' .$_SERVER['HTTP_REFERER'] );
?>

