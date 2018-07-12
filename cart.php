<?php 
	include_once 'database.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php');?>
<body class="animsition">

	<?php include('includes/header.php');?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="flex-c-m column-4">Avl Schemes</th>
							<th class="column-3">Initial Payable Amount **</th>
							<th class="column-3"></th>
							
						</tr>

						<tr class="table-row">
							<?php 
								$u_id = $_SESSION['user_id'];	//initializing the variables
								$target_dir="images/books/";
								$grand_total = 0;
								
								

								$query = "SELECT * FROM tbl_cart WHERE u_id = '$u_id' "; // Collecting data from tbl_cart
								$run = mysqli_query($conn, $query);
								$i=0;
								while($row = mysqli_fetch_array($run)){ 

									$book_id = $row["book_id"];
									$scheme_id = $row["scheme_id"];
									$_SESSION["book_id.$i"] = $book_id;
									
									
							
									$book_query = "SELECT * FROM tbl_book_details WHERE book_id = '$book_id' "; //fetching book
									$book_run = mysqli_query($conn, $book_query);

									while($book_row = mysqli_fetch_array($book_run)){ 
							
							?>

							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="<?php echo $target_dir.$book_row['img1']; ?>" alt="IMG-PRODUCT">
								</div>
							</td>

							<td class="column-2"><?php echo $book_row["title"]?></td>
							<!-- Adding price -->
							<?php 
								$scheme_query = "SELECT * FROM tbl_scheme WHERE scheme_id = '$scheme_id' ";
								$scheme_run = mysqli_query($conn, $scheme_query);
								$scheme_details = mysqli_fetch_array($scheme_run);
							?>
							<td class="column-3">Rs. <?php echo $book_row["price"]*$scheme_details["rate"] ?></td>

							<td class="column-4">
								<form id='update_cart' action="update_cart.php?book_id=<?php echo $book_id?>" method='post'>
								<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
									<!-- <select class="selection-2" name="offers">
										<option>Choose Your Offer...</option>
										<option>Buy New</option>
										<option>Rent For 10 Days @ 10% Of cost</option>
										<option>Rent For 30 Days @ 40% Of cost</option>
										<option>Rent For 60 Days @ 50% Of cost</option>
										<option>Rent For 90 Days @ 60% Of cost</option>
										<option>Rent For 180 Days @ 70% Of cost</option>
										<option>Rent For 360 Days @ 80% Of cost</option> -->
										<?php
											
											$query_scheme = "SELECT * FROM tbl_scheme ";
											$result_scheme = mysqli_query($conn,$query_scheme);
											echo '<select class="selection-2" name="scheme_id"';
											while ($row_scheme = mysqli_fetch_assoc($result_scheme)){
												echo '<option value="'.$row_scheme['scheme_id'].'"';
												if ($scheme_id == $row_scheme['scheme_id']) echo ' selected'; // pre-select if $artID is the current artID
												echo '>'.$row_scheme['text'].'</option>';
											}
											echo '</select>';
										?>
										
								</div>
								<div class="flex-c-m">
									<button class="flex-c-m w-size6 bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit" name="update_cart" form="update_cart">
										Apply
									</button>
								</div>								
							</form>
							</td>
							
							<td class="column-3">Rs. <?php echo $price = $book_row["price"]; ?></td>
						
						<?php 
								$grand_total += $price;	
						?>
							<td class="column-5 align-middle">
									<a href="delete_cart.php?book_id=<?php echo $book_row["book_id"]; ?>"><i class="fs-30	fa fa-trash" aria-hidden="true"></i></a>
							</td>
						</tr>
						<?php 
								}
							$i++;
						}
						?>
							
						
						
						<!-- <tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="images/item-05.jpg" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">Mug Adventure</td>
							<td class="column-3">$16.00</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product2" value="1">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">$16.00</td>
						</tr> -->
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<!-- <div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div> -->

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						
						<!-- <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button> -->
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit" name="update_cart" form="update_cart">
						Update Cart
						</button>
				</div>
			</div>

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						Rs. <?php echo $grand_total; ?>
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>

						<span class="s-text19">
							Calculate Shipping
						</span>

						<!-- <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
								 <select class="selection-2" name="country">
									<option>Select a country...</option>
									<option>US</option>
									<option>UK</option>
									<option>Japan</option>
								</select> 
						</div> -->
						<!-- <div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
						</div> -->

						<form action="shipping.php" method="POST">
							<div class="size13 bo4 m-b-22">
								<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="pincode" placeholder="<?php if($_SESSION["pin_no"]==''){echo "Pincode" ;}else{echo $_SESSION["pin_no"];}  ?>">
							</div>

							<div class="size14 trans-0-4 m-b-10">
								<!-- Button -->
								<input type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="Update Totals">
								<!-- <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Update Totals
								</button> -->
							</div>
						</form>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						Rs. <?php echo ($grand_total + $_SESSION['shipping_charges']); ?>
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
			</div>
		</div>
	</section>



	<?php include('includes/footer.php');?>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<?php include('includes/scripts.php');?>
</body>
</html>
