<?php
    session_start();
    include_once 'database.php';
    if(isset($_POST ['save'])){     
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM tbl_login WHERE email = '$email' AND password = '$password' ";

        $run = mysqli_query($conn, $query);

        $ok = $run;

        if(mysqli_num_rows($ok)>0){
            $row = mysqli_fetch_array($run);
            // Set session variables
            $_SESSION["user_id"] = $row['LID'];
            $_SESSION["fname"] = $row['first_name'];
            $_SESSION["lname"] = $row['last_name'];
           
            

            echo "<script>window.open('index.php','_self')</script>";
        }else{
            echo "not looged in!!";
            // die('Couldn t Register You' .mysql_error());
        }
    }
?>

