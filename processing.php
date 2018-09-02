<?php
    include_once 'database.php';
    if(isset($_POST['save'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_no = $_POST['phone_no'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $cnf_password = $_POST['cnf_password'];

        $query = "SELECT * FROM tbl_login WHERE email = '$email' ";
        $run = mysqli_query($conn, $query);

        $ok = $run;

        if(mysqli_num_rows($ok)>0){
            die('That Email already Exist !!');
        }else{

            $query = "INSERT INTO tbl_login (first_name, last_name, phone_no, email, password) VALUES ('$first_name', '$last_name', '$phone_no', '$email', '$password')" ;

            $rs = mysqli_query($conn, $query);

            if($rs){
                header("Location: login.php");

            }else{
                die('Couldn\'t Register You' .mysql_error());
            }
        }
    }
?>
