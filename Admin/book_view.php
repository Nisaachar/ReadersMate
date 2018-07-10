<!doctype html>
<html lang="en">
<?php include 'head.php';?>
<?php include 'header.php';?>

  <body>
    
    <div class="navbar sticky-top navbar-dark bg-dark">
        <h1 style="color: white;">List of books</h1> 
        <div style="display: flex;">
            <a href="book_register.html"><button class="btn btn-primary" style="margin-right:20px;">New Book</button></a>
            <a href="logout.php"><button class="btn btn-danger" style="margin-right:20px;">logout</button></a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filter
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Fiction</a>
                    <a class="dropdown-item" href="#">Non-Fiction</a>
                    <a class="dropdown-item" href="#">Educational</a>
                    <a class="dropdown-item" href="#">Romance</a>
                    <a class="dropdown-item" href="#">Miscellaneous</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="">
        <table class="table table-striped">
        <caption>List of all books</caption>
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
                    
                ?>
                <th scope="row"><?php echo $i ?></th>
                

                <td><a href="#"><img src="<?php echo $target_dir.$img1 ?>" width="180" height="275px" title="Click to Change"></a></td>
                <th><?php echo $title ?></th>
                <td><?php echo $author ?></td>
                <td><?php echo $description ?></td>
                <td><?php echo $isbn ?></td>
                <td><?php echo $price ?></td>
                <td><?php echo $category ?></td>
                <td><a href="update.php?edit=<?php echo $book_id;?>" >Edit</a></td>
                <td><a href="delete.php?del=<?php echo $book_id;?>" class="text-danger">Delete</a></td>
                </tr>
                <?php $i++; } ?>
                

        </tbody>
    </table>
    </div>
                </div>
                
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
<?php include 'footer.php';?>
</html>