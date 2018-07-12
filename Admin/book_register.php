<!doctype html>
<html lang="en">
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
    <br>
        <div class="container text-center">
            <h1>Book Registration</h1>
        </div>
        <form class="form" id="book_register" method="POST" action="process.php" enctype="multipart/form-data"></form>
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" name="title" form="book_register">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input class="form-control" type="text" name="author" form="book_register">
            </div>
            <div class="form-group">
                <label>Desccription</label>
                <textarea class="form-control" cols="50" rows="10" name="description" form="book_register"></textarea>
            </div>
            <div class="form-group">
                <label>ISBN</label>
                <input class="form-control" type="text" name="isbn" form="book_register">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input class="form-control" type="text" name="price" form="book_register">
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category" form="book_register">
                    <option value="Fiction">Fiction</option>
                    <option value="Non-Fiction">Non-Fiction</option>
                    <option value="Educational">Educational</option>
                    <option value="Romantic">Romantic</option>
                    <option value="Miscellaneous">Miscellaneous</option>

                </select>
            </div>

                <div class="form-group">
                    <label>Images:</label>
                    <!--<form id="form_upload" action="upload.php" method="post" enctype="multipart/form-data"></form>-->

                        <input type="file" name="fileToUpload[]" multiple="multiple"form="book_register">


                </div>





            <input class="btn btn-primary" type="submit" name="save" form="book_register">

    </div>
  <?php   }
  else {
    header('location: login.php');
  }?>
<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>


</body>

</html>
