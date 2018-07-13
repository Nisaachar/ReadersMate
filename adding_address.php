<?php 
    session_start();
    include_once 'database.php';

    $u_id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $house_no = $_POST['house_no'];
    $locality = $_POST['locality'];
    $land_mark = $_POST['land_mark'];
    $contact_no = $_POST['contact_no'];
    $city = $_POST['city'];

    $query = "SELECT * FROM tbl_address WHERE LID = '$u_id' ";
    $run = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($run);

    if($row){
        $data_query = "UPDATE tbl_address SET house_no = '$house_no' , name = '$name', locality = '$locality' , land_mark = '$land_mark', contact_no = '$contact_no', city = '$city' WHERE tbl_address.LID = '$u_id' " ;
        $data_run = mysqli_query($conn, $data_query);
    }else{
        // $data_query = "UPDATE tbl_address SET LID = '$u_id' , house_no = '$house_no' , locality = '$locality' , land_mark = '$land_mark', contact_no = '$contact_no', city = '$city' WHERE tbl_address.LID = '$u_id' " ;
        $data_query = " INSERT INTO tbl_address (LID, name, house_no, locality, land_mark, contact_no, city ) VALUES ('$u_id', '$name', '$house_no' , '$locality', '$land_mark', '$contact_no', '$city') ";
        $data_run = mysqli_query($conn, $data_query);
    }
    header("Location: askAddress.php")
?>