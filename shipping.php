<?php 
    session_start();
    include_once 'database.php';

    $pin = $_POST['pincode'];
    $u_id = $_SESSION['user_id'];

    $query = "SELECT * FROM tbl_delivery WHERE pin_code = '$pin' ";
    $run = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($run);

    if($row){

        $charges = $row['charges'];
        $locality = $row['locality'];

        $data_query = "UPDATE tbl_login SET pin_code = '$pin' , delivery_charges = '$charges' , locality = '$locality' WHERE tbl_login.LID = '$u_id' " ;
        $data_run = mysqli_query($conn, $data_query);
        
        header("Location: cart.php");
    }else{
        $data_query = "UPDATE tbl_login SET pin_code = 'Invalid' WHERE tbl_login.LID = '$u_id' " ;
        $data_run = mysqli_query($conn, $data_query);
        header("Location: cart.php");
    }

?>