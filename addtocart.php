<?php
    session_start();
    include_once 'database.php';
    $url = $_SERVER['REQUEST_URI'];
    $x = parse_url($url);
    $variables = $x['query'];
    // echo $variables;



    $u_id = $_GET['cart_book'];
	$book_id = $_GET["book_id"];
	$query = " INSERT INTO tbl_cart (book_id, u_id) VALUES ('$book_id' , '$u_id') ";
	$run = mysqli_query($conn, $query);

    header("Location: product.php?$variables");

?>

