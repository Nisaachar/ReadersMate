<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php');?>
<body class="animsition">

	<?php include('includes/header.php');?>

	<!-- breadcrumb
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.html" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="product.html" class="s-text16">
			Women
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="#" class="s-text16">
			T-Shirt
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			Boxy T-Shirt with Roll Sleeve Detail
		</span>
	</div>-->

	<!-- Product Detail -->

	<?php
		include_once 'database.php';
		$get_book=$_GET['book'];

            $que = mysqli_query($conn, "SELECT * FROM tbl_book_details WHERE book_id='$get_book' ");
			$scheme_query = mysqli_query($conn, "SELECT * FROM tbl_scheme");
			$ok=$que;
			$target_dir = "images/books/";

            while($row=mysqli_fetch_array($ok))
            {
				$book_id=$row['book_id'];
                $title=$row[1];
                $author=$row[2];
                $description=$row[3];
                $isbn = $row[4];
                $price=$row[5];
				$category=$row[6];
				$img1 = $row[7];
				$img2 = $row[8];
				$img3 = $row[9];
        	}
	?>

	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="<?php echo $target_dir.$img1; ?>">
							<div class="wrap-pic-w">
								<img src="<?php echo $target_dir.$img1; ?>" >
							</div>
						</div>

						<div class="item-slick3" data-thumb="<?php echo $target_dir.$img2; ?>">
							<div class="wrap-pic-w">
								<img  src="<?php echo $target_dir.$img2; ?>" >
							</div>
						</div>

						<div class="item-slick3" data-thumb="<?php echo $target_dir.$img3; ?>">
							<div class="wrap-pic-w">
								<img  src="<?php echo $target_dir.$img3; ?>" >
							</div>
						</div>

					</div>
				</div>
			</div>


            <?php


            ?>

			
			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13" style="font-size:2em;">
                    <?php echo $title; ?>
				</h4>
				<h6 style="font-size: 1rem">By - <?php echo $author ?></h6>
				<br>

				<span class="m-text17">
					Rs. <?php echo $price?>

				</span><span class="m=text12"><em>initial payable*</em></span><br>
				<span><small class="s-text8">Free Shiping and Returns for Raipur.**</small></span>


<br><br>
				<span class="m-text17">
					<small>Rent Offers*</small>
				</span><br>
				<div>
				<span class="m-text12 "><?php while ($row1=mysqli_fetch_array($scheme_query)) {
					$days = $row1[1];
					$rate = $row1[2];
					$new_price = ceil($price*$rate);
					echo "<span class='m-text17 p-l-25'><small>Rs. ".$new_price." </small></span>  for ".$days." days<span class='s-text8'>  ".((1-$rate)*100)."% off.</span><br>";
				} ?></span>
			</div>



				<!--  -->
				<div class="p-t-33 p-b-60">

					<!-- <div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="size">
								<option>Choose an option</option>
								<option>Size S</option>
								<option>Size M</option>
								<option>Size L</option>
								<option>Size XL</option>
							</select>
						</div>
					</div>

					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Color
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="color">
								<option>Choose an option</option>
								<option>Gray</option>
								<option>Red</option>
								<option>Black</option>
								<option>Blue</option>
							</select>
						</div>
					</div> -->

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<!-- <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button> -->
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<span><button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="margin-left: -68%">
									Rent
								</button>
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">ISBN: <?php echo $isbn ?></span>
					<span class="s-text8">Category: <?php echo $category ?></span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?php echo $description ?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							* while ordering initial payable amount is to be paid. Then after successfull return of the book you will recieve your remaining amount in form of credits.
							<br>** For Shiping outside Raipur, a minimum of rs.50 Delivery Charges will be applicable on orders below rs.500.
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<?php 
						$related_query = mysqli_query($conn, "SELECT * FROM tbl_book_details WHERE category = '$category' AND book_id != $get_book ");
						while($related_row = mysqli_fetch_array($related_query)){
							$rel_title = $related_row[1];
							$rel_price = $related_row[5];
							$rel_img1 = $related_row[7];
										
					?>
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="<?php echo $target_dir.$rel_img1; ?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.php?book=<?php echo $related_row["book_id"]; ?>" class="block2-name dis-block s-text3 p-b-5">
									<?php echo $rel_title ?>
								</a>

								
								<span class="block2-oldprice m-text7 p-r-5" >
										Rs. <?php echo $rel_price ?>
								</span>
								<span class="block2-newprice m-text p-r-5">
									<?php echo "<strong>Rs. ".ceil($rel_price*$rate)."</strong> <small><em>".((float)(1-$rate)*100)."% off on rent </em></small>" ?>
								</span>
							</div>
						</div>
					</div>
					<?php 
						}
					?>
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
