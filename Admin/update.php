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


<?php include 'includes/head.php';?>

<?php
if(!isset($_SESSION)) session_start();
if(isset($_SESSION['admin']))
    {
        ?>

  <body>
    <?php include 'includes/header.php';?>
    <?php include 'includes/sidebar.php';?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

     <div class="row">
  			<div class="col-lg-12">
  				<h1 class="page-header">Book Update</h1>


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
                    <option value="Fiction" <?php if($ori_category == 'Fiction') echo 'selected';?> >Fiction</option>
                    <option value="Non-Fiction" <?php if($ori_category == 'Non-Fiction') echo 'selected';?>>Non-Fiction</option>
                    <option value="Educational" <?php if($ori_category == 'Educational') echo 'selected';?>>Educational</option>
                    <option value="Romantic" <?php if($ori_category == 'Romantic') echo 'selected';?>>Romantic</option>
                    <option value="Miscellaneous" <?php if($ori_category == 'Miscellaneous') echo 'selected';?> >Miscellaneous</option>
                </select>
            </div>
            <div class="form-inline">
              <input class="btn btn-primary" type="submit" value="update" name="update">
              <a class="btn btn-danger" href="book_view.php">Cancel</a>
            </div>
        </form>
      </div>
    </div>

<?php include 'includes/scripts.php';?>


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
<?php   }
else {
  header('location: login.php');
}?>
<?php include 'includes/footer.php';?>

</html>
