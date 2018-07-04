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
            $_SESSION['u_id'] = $run['LID'];
            header("Location: index.php");
            exit();
        }else{
            echo "not looged in!!";
            // die('Couldn t Register You' .mysql_error());
        }
    }
?>

