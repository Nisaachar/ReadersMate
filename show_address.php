<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('includes/head.php'); ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/scrollBar.css">
        <style>
            body {
            padding-top: 1em;
            }	
        </style> 
    </head>

<body class="animsition">

    <?php include('includes/header.php'); ?>






    <div class="d-flex justify-content-center" style="background-image: url(images/addressBkg.jpg); background-repeat: no-repeat; background-size: 100% auto; background-position:center;">
        <div class="col-md-3  bg3" style="height: 450px; margin: 100px 0px 100px 0px; filter: blur(0px); box-shadow: 0px 1px 15px 0px rgb(0,0,0,0.2)">
            
            
            <?php 
                $u_id = $_SESSION['user_id'];
                $query = "SELECT * FROM tbl_address WHERE LID = '$u_id' ";
                $run = mysqli_query($conn, $query);
                $rows = mysqli_fetch_array($run);

                if($rows){

                while($rows){

                ?>
                
                <h4 class="m-text26 p-b-30 p-t-50">
							Ship To, 
                </h4>

                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
               
                            <h4 class="card-title"><?php echo $rows['name']; ?></h4>
                            <p class="card-text"><strong> <?php echo $rows['contact_no']; ?> </strong></p>
                            <p class="card-text"><?php echo $rows['house_no']; ?> ,<?php echo $rows['colony']; ?> ,<strong> <?php echo $rows['locality']; ?></strong></p>
                            <p class="card-text"><?php echo $rows['city']; ?></p>
                            <div class=" pt-3">
                                <a href="askAddress.php" class="card-link">Update</a>
                                <a href="#" class="card-link float-right pt-3">Continue</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                   }
                } 
                else{
                    ?>
                    <h4 class="m-text26 p-b-30 p-t-50">
							Sorry There Are no addresses 
                    </h4>
                    <a href="askAddress.php">Add New Address</a>
                    <?php
                }  
            ?>

            
            <!-- <div class="container-fluid"> 
                <a href="askAddress.php" class="float-right pt-3">Update</a>
            </div>  -->
        
        </div> 
    </div>

    
    <?php include('includes/footer.php'); ?>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<?php include('includes/scripts.php'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
</body>
</html>
