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


     <div class="row">
  			<div class="col-lg-10">
  				<h1 class="page-header">Book Stocks</h1>

  			</div>

  		</div><!--/.row-->

<div class="row">
    <!-- <div class="container-fluid">
        <div class=""> -->
        <table class="table table-striped table-responsive">

        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Cover Image</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Description</th>
            <th scope="col">ISBN</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Quantity</th>
            <th scope="col"></th>
            <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            <tr>
            <?php

                include_once 'database.php';
                $que="select * from tbl_book_details";

                $run=mysqli_query($conn,$que);
                $ok=$run;
                $i=1;
                $target_dir="../images/books/";

                while($row=mysqli_fetch_array($ok))
                {
                    $book_id=$row[0];
                    $title=$row[1];
                    $author=$row[2];
                    $description=$row[3];
                    $isbn=$row[4];
                    $price=$row[5];
                    $category=$row[6];
                    $img1=$row[7];
                    $img2=$row[8];
                    $img3=$row[9];
                    $qty = $row['qty'];

                ?>
                <th scope="row"><?php echo $i ?></th>


                <td><a href="#"><img src="<?php echo $target_dir.$img1 ?>" width="120" height="184px" title="Click to Change"></a></td>
                <th><?php echo $title ?></th>
                <td><?php echo $author ?></td>
                <td><?php echo $description ?></td>

                <td><?php echo $isbn ?></td>
                <td><?php echo $price ?></td>
                <td><?php echo $category ?></td>
                <td><?php echo $qty ?></td>
                <td><a href="update.php?edit=<?php echo $book_id;?>" class="btn btn-default">Edit</a></td>
                <td><a href="delete.php?del=<?php echo $book_id;?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php $i++; } ?>


        </tbody>
    </table>
    <!-- </div>-->
                </div>


</div>
  <?php   }
  else {
    header('location: login.php');
  }?>
<?php include 'includes/footer.php';?>
</html>
