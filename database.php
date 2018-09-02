<?php
$url='127.0.0.1';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"testing");
if(!$conn)
{
    die ('Could not connect:' .mysql_error());
}
?>
