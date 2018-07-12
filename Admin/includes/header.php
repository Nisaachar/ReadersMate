<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<!-- <a class="navbar-brand" href="#"><span>Readers</span>Mate</a> -->
				<a class="navbar-brand" href="#"><span>ADMIN</span>PANEL</a>
				<!-- <ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul> -->

<!-- Top Nav Links , Needs to change directory in IF conditions if changed the location of files -->
				<div class="nav navbar-top-links navbar-right" style="color:white; height: 60px;
padding: 15px 15px; ">
					<?php
					if($_SERVER['PHP_SELF'] == '/RM1/ReadersMate/Admin/book_view.php')
					{
			    	echo '<span style="padding-right: 15px;"><a class="btn btn-primary"  href="book_register.php"><em class="fa fa-plus " style="font-size: 1em;">&nbsp;</em> New Book</a></span>';
						echo '<span><a class="btn btn-default"  href="add_stocks.php"><em class="fa fa-plus " style="font-size: 1em;">&nbsp;</em> Add Stocks</a></span>';

					}
					if($_SERVER['PHP_SELF'] == '/RM1/ReadersMate/Admin/schemes.php')
					{

						echo '<span><a class="btn btn-default"  href="#"><em class="fa fa-plus " style="font-size: 1em;">&nbsp;</em> Add Schemes</a></span>';

					}
						?>

    </div>

			</div>
		</div><!-- /.container-fluid -->
	</nav>
