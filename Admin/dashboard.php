<!DOCTYPE html>
<html>
<?php
if(!isset($_SESSION)) session_start(); ?>
<?php include 'includes/head.php';?>
<?php include 'includes/database.php';?>
<?php

include 'counter.php';

?>

<body>
    <?php include 'includes/header.php';?>
    <?php include 'includes/sidebar.php';?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

   <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
    <div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">
                <?php
                $order_query = mysqli_query($conn,"SELECT * FROM tbl_orders");
                  $order_count=0;
                  while($order_row=mysqli_fetch_array($order_query))
                  {
                    $order_count++;
                  }
                  echo $order_count;
                ?>
              </div>
							<div class="text-muted">New Orders</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">
                <?php
                $scheme_query = mysqli_query($conn,"SELECT * FROM tbl_scheme");
                  $scheme_count=0;
                  while($schem_row=mysqli_fetch_array($scheme_query))
                  {
                    $scheme_count++;
                  }
                  echo $scheme_count;
                ?>
              </div>
							<div class="text-muted">Schemes</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">
                <?php
                $user_query = mysqli_query($conn,"SELECT * FROM tbl_login");
                  $user_count=0;
                  while($user_row=mysqli_fetch_array($user_query))
                  {
                    $user_count++;
                  }
                  echo $user_count;
                ?>
              </div>
							<div class="text-muted">Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
    <blockquote class="blockquote text-right">
<p class="mb-0">"Zindagi Mein Dukh Hai"</p>
<footer class="blockquote-footer"><cite title="Source Title">Depressed Panda</cite></footer>
</blockquote>


    </div>

</body>
<?php include 'includes/footer.php'?>
<?php include 'includes/scripts.php'?>
</html>
