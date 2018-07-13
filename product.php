<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php');?>
<body class="animsition">

	<?php include('includes/header.php');?>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="product.php?category=&offset=0&state=0&cart_book=" class="s-text13 active1">
									All
								</a>
							</li>

							<li class="p-t-4">
								<a href="product.php?category=Fiction&offset=0&state=0" class="s-text13">
									Fiction
								</a>
							</li>

							<li class="p-t-4">
								<a href="product.php?category=Non-Fiction&offset=0&state=0" class="s-text13">
									Non-Fiction
								</a>
							</li>

							<li class="p-t-4">
								<a href="product.php?category=Educational&offset=0&state=0" class="s-text13">
									Educational
								</a>
							</li>

							<li class="p-t-4">
								<a href="product.php?category=Novel&offset=0&state=0" class="s-text13">
									Novels
								</a>
							</li>
							<li class="p-t-4">
								<a href="product.php?category=Miscellaneous&offset=0&state=0" class="s-text13">
									Miscellaneous
								</a>
							</li>
						</ul>
						<div class="search-product pos-relative bo4 of-hidden">
							<form method="POST" action="somewhere.php">
								<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-book" placeholder="Search Books..." id="search_book">
								<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" type="submit">
									<i class="fs-12 fa fa-search" aria-hidden="true"></i>
								</button>	
							</form>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!-- -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<a href="#">
										<option>Default Sorting</option>
										<option>Popularity</option>
										<option>Price: low to high</option>
										<option>Price: high to low</option>
									</a>									
								</select>
							</div>

							<!-- <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>
								</select>
							</div> -->
						</div>
						<?php
							$selector = NULL;
							$selector = $_GET['category'];
							// $search_query = $_GET['search_book'];
							//static $offset = 0;
							$offset = $_GET['offset'];

							$limiting = 9;
							$target_dir="images/books/";
							$state = $_GET['state'];
							if($state==1)
							{
								$offset = $offset + $limiting;
							}
							if($state==0)
							{
								$offset = $offset;
							}
							if($state==-1)
							{
								$offset = $offset - $limiting;
							}
							include_once 'database.php';
							if($selector){
								$books = mysqli_query($conn, "SELECT * FROM tbl_book_details WHERE category = '$selector' LIMIT $offset, $limiting");
								$tab_indexing = mysqli_query($conn, "SELECT * FROM tbl_book_details WHERE category = '$selector' ");
							}else{
								$books = mysqli_query($conn, "SELECT * FROM tbl_book_details LIMIT $offset, $limiting");
								$tab_indexing = mysqli_query($conn, "SELECT * FROM tbl_book_details ");
							}


							$scheme_query = mysqli_query($conn, "SELECT * FROM tbl_scheme WHERE scheme_id=4");
							$row2 = mysqli_fetch_array($scheme_query);
							$days = $row2['days'];
							$rate = $row2['rate'];
							$text = $row2['text'];

							$howmany = mysqli_num_rows($tab_indexing);
								?>
						<span class="s-text8 p-t-5 p-b-5">
							<?php if($offset<=($howmany))
							{
								if(($offset+$limiting)>$howmany)
								{
									$n1 = $howmany;
								}
								else {
									$n1 = $offset+$limiting;
								}
								echo "Showing ".($offset+1)."-".$n1." of ".($howmany);
							}?>
						</span>
					</div>

					<!-- Product -->
					<!-- php code starts here -->
					<div class="row">
							<?php
							
							if($offset>=($howmany)){
								echo "Sorry, There is no book in $selector section";
							}

                            while($row = mysqli_fetch_array($books)){
                        ?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<a href='product-detail.php?book=<?php echo $row["book_id"];?>'><img src="<?php echo $target_dir.$row['img1'] ?>" ></a>

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="addtocart.php?category=<?php echo $selector ?>&offset=<?php echo $offset; ?>&state=0&cart_book=<?php echo $_SESSION['user_id'];?>&book_id=<?php echo $row["book_id"]; ?> ">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href='product-detail.php?book=<?php echo $row["book_id"];?>' class="block2-name dis-block s-text3 p-b-5" style="font-size:1.25em;">
                                        <?php echo $row["title"]; ?>
									</a>
									<span class="block2-oldprice m-text7 p-r-5" >
										Rs. <?php echo $row["price"] ?>
									</span>
									<span class="block2-newprice m-text p-r-5">

									<?php echo "<strong>Rs. ".ceil($row['price']*$rate)."</strong> <small><em>".((float)(1-$rate)*100)."% off on rent </em></small>" ?>
									</span>
									
								</div>
							</div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
					<a href="product.php?offset=<?php echo 0 ?>&state=0&category=<?php echo $selector ?>" class="item-pagination flex-c-m trans-0-4">Start</a>
					<a href="product.php?offset=<?php echo $offset; ?>&state=-1&category=<?php echo $selector ?>" class="item-pagination flex-c-m trans-0-4">prev</a>
					<?php
						$total_tabs = ceil($howmany / $limiting) ;
						$i = 0;
						while($i <= $total_tabs){
					?>
						<a href="product.php?offset=<?php echo $i*$limiting; ?>&state=0&category=<?php echo $selector ?>" class="item-pagination flex-c-m trans-0-4"	><?php echo $i+1; ?></a>
					<?php
						$i++;
						}
					?>
						<a href="product.php?offset=<?php echo $offset; ?>&state=1&category=<?php echo $selector ?>" class="item-pagination flex-c-m trans-0-4">Next</a>
					</div>
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
