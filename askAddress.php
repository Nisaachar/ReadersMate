<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php'); ?>
<body class="animsition">

    <?php include('includes/header.php'); ?>






    <div class="d-flex justify-content-center" style="background-image: url(images/addressBkg.jpg); background-repeat: no-repeat; background-size: 100% auto; background-position:center;">
        <div class="col-md-3  bg3" style="height: 850px; margin: 100px 0px 100px 0px; filter: blur(0px); box-shadow: 0px 1px 15px 0px rgb(0,0,0,0.2)">
            <h4 class="m-text26 p-b-30 p-t-50">
							Ship To, 
			</h4>

						<form method = "POST" action = "adding_address.php">
                        <div class="bo4  size15 m-b-40">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Name">
                        </div>
                        
						<div class="bo4  size15 m-b-40">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="house_no" placeholder="House No">
						</div>

                        <div class="bo4  size15 m-b-40">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="lane" placeholder="Lane No./ Building / Colony">
						</div>

                        <div class="bo4  size15 m-b-40">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="locality" placeholder="Locality">
                        </div>
                        
                        <div class="bo4  size15 m-b-40">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="land_mark" placeholder="Land Mark">
                            <small id="emailHelp" class="form-text text-muted float-right">Ex. Near Park or Temple, It Helps Us To Locate Your House</small>
                        </div>
                            
                        <div class="bo4  size15 m-b-40">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="contact_no" placeholder="Contact Number">
                        </div>

                        <div class="bo4  size15 m-b-40">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="city" placeholder="City">
                        </div>

						<div class="p-t-20">
						    <input type="submit" name="save" value="Next" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" style="width=100%"> 
                        </div>
                        </form>
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

</body>
</html>
