<?php
    include_once 'database.php';
    if(isset($_POST['save'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_no = $_POST['phone_no'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cnf_password = $_POST['cnf_password'];
        

        if(mysqli_num_rows($email) > 0){
            die('That Email already Exist !!');
        }else{

            $query = "INSERT INTO tbl_login (first_name, last_name, phone_no, email, password) VALUES ('$first_name', '$last_name', '$phone_no', '$email', '$password')" ;

            $rs = mysqli_query($conn, $query);

            if($rs){
                echo"DATA SAVED SUCCESSFULLY!!";

            }else{
                die('Couldn\'t Register You' .mysql_error());
            }
        }
    }
?>