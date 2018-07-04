<?php 
    include_once 'database.php';
    $edit_record=$_GET['edit'];
    $query = "select * from tbl_book_details where book_id='$edit_record'";
    $run=mysqli_query($conn,$query);
    $ok=$run;
    $target_dir="../images/books/";

    while($row=mysqli_fetch_array($ok))
    {
        $ori_book_id=$row['book_id'];
        $ori_title=$row[1];
        $ori_author=$row[2];
        $ori_description=$row[3];
        $ori_isbn=$row[4];
        $ori_price=$row[5];
        $ori_category=$row[6];
        $ori_img1=$row[7];
        $ori_img2=$row[8];
        $ori_img3=$row[9];
    }
?>


<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">

    <title>Book Update</title>
</head>

<body>
    <div class="container"><br>
        <div class="container text-center">
            <h1>Book Update</h1>
        </div>
        <form class="form" method="POST" action='update.php?edit_form=<?php echo $ori_book_id; ?>'>
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" name="new_title" value='<?php echo $ori_title?>'>
            </div>
            <div class="form-group">
                <label>Author</label>
                <input class="form-control" type="text" name="new_author" value="<?php echo $ori_author?>">
            </div>
            <div class="form-group">
                <label>Desccription</label>
                <textarea class="form-control" cols="50" rows="10" name="new_description"><?php echo $ori_description?></textarea>
            </div>
            <div class="form-group">
                <label>ISBN</label>
                <input class="form-control" type="text" name="new_isbn" value="<?php echo $ori_isbn?>">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input class="form-control" type="text" name="new_price" value="<?php echo $ori_price?>">
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="new_category" value="<?php echo $ori_category?>">
                    <option value="Fiction">Fiction</option>
                    <option value="Non-Fiction">Non-Fiction</option>
                    <option value="Educational">Educational</option>
                    <option value="Romantic">Romantic</option>
                    <option value="Miscellaneous">Miscellaneous</option>
                </select>
            </div>
            
            <input class="btn btn-primary" type="submit" value="update" name="update">
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>


<?php 
if(isset($_POST['update']))
{
	$edit_record1=$_GET['edit_form'];
	$new_title=addslashes($_POST['new_title']);
	$new_author=$_POST['new_author'];
	$new_description=addslashes($_POST['new_description']);
    $new_isbn=$_POST['new_isbn'];	
    $new_price=$_POST['new_price'];	
    $new_category=$_POST['new_category'];
	$query1="UPDATE tbl_book_details SET title='$new_title',author='$new_author',description='$new_description',ISBN='$new_isbn',price='$new_price',category='$new_category' WHERE book_id = '$edit_record1'";
	$run=mysqli_query($conn,$query1);
		if($run)
	{
	echo "<script>window.open('Book_view.php','_self')</script>";
	}
	
}

?>

</body>

</html>