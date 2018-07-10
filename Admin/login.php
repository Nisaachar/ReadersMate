<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
</head>
<?php session_start(); ?>
<body>
    <div class="container">
        <form action="login.php" method="post" class="form-group">
            <label>Password</label>
            <input type="password" name="password"></input>
            <input type="submit"></input>
        </form>
    </div>
    <?php 
    if(isset($_POST['password']))
    {
    $password = $_POST['password'];
    if($password == 'Dukhhaizindagimein')
    {
        $_SESSION['admin']=1;
        echo "<script>window.open('book_view.php','_self')</script>";
    }
    else {
        echo "<script>window.open('index.php')</script>";
    }
}
    ?>
</body>
</html>