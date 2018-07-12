<?php
if(!isset($_SESSION)) session_start(); ?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['fname'];?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<!-- <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form> -->
		<ul class="nav menu">
			<li class="<?php if($_SERVER['PHP_SELF'] == '/RM1/Admin/dashboard.php') echo 'active'; ?>"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="<?php if($_SERVER['PHP_SELF'] == '/RM1/Admin/book_view.php') echo 'active'; ?>"><a href="book_view.php"><em class="fa fa-book">&nbsp;</em> All Books</a></li>
			<li class="<?php if($_SERVER['PHP_SELF'] == '/RM1/Admin/users.php') echo 'active'; ?>"><a href="users.php"><em class="fa fa-users">&nbsp;</em> Users</a></li>
			<li class="<?php if($_SERVER['PHP_SELF'] == '/RM1/Admin/orders.php') echo 'active'; ?>"><a href="orders.php"><em class="fa fa-tasks">&nbsp;</em> Orders</a></li>
			<li class="<?php if($_SERVER['PHP_SELF'] == '/RM1/Admin/schemes.php') echo 'active'; ?>"><a href="schemes.php"><em class="fa fa-certificate">&nbsp;</em>Scheme &amp; Offers</a></li>
			<!-- <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li> -->
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
