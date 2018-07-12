<?php
    session_start();
    include_once 'database.php';
    if(isset($_POST ['save'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM tbl_login WHERE email = '$email' AND password = '$password' AND admin_status = 1 ";

        $run = mysqli_query($conn, $query);

        $ok = $run;

        if(mysqli_num_rows($ok)>0){
            $row = mysqli_fetch_array($run);
            // Set session variables
            $_SESSION["user_id"] = $row['LID'];
            $_SESSION["fname"] = $row['first_name'];
            $_SESSION["lname"] = $row['last_name'];
            $_SESSION["admin"] = $row['admin_status'];




            echo "<script>window.open('dashboard.php','_self')</script>";
        }else{
            header('location: ../ReadersMate/Admin/sorry.php');
            // die('Couldn t Register You' .mysql_error());
        }
    }
?>
