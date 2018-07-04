<?php
include_once 'database.php';
for ($i=0;$i<3;$i++)
{
    $target_dir = "../images/books/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$i]);
    $j=$i+1;
    $uploadOk = 1;

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"][$i]). " has been uploaded.";
            rename($target_file,$target_dir. "img".$j.".jpg");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>