<?php 
    session_start();
    include_once 'database.php';

    $pin = $_POST['pincode'];
    $u_id = $_SESSION['user_id'];

    $query = "SELECT * FROM tbl_delivery WHERE pin_code = '$pin' ";
    $run = mysqli_query($conn, $query);
    $ok = $run;

    if($run){
        $row = mysqli_fetch_array($run);

        $_SESSION["shipping_charges"] = $row['charges'];
        $locality = $row['locality'];
        $_SESSION["pin_no"] = $pin;
    
        header("Location: cart.php");
    }else{
        header("Location: index.php");
    }

?>