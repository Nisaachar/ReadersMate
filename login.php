<html>
<?php include('includes/head.php');?>
    <body>
        
        
        <body class="animsition">

	<?php include('includes/header.php');?>
            
            
  
       
            
  <div class="d-flex justify-content-center" style="background-image: url(images/master-slide-02-blur.jpg); background-repeat: no-repeat; background-size: 100% auto; background-position:center;">
            <div class="col-md-3  bg3" style="height: 500px; margin: 100px 0px 100px 0px; filter: blur(0px); box-shadow: 0px 1px 15px 0px rgb(0,0,0,0.2)">

						<h4 class="m-text26 p-b-30 p-t-50">
							Login
						</h4>

						<form method = "POST" action = "loggedin.php">
						<div class="bo4  size15 m-b-40">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email">
                            <small id="emailHelp" class="form-text text-muted float-right">We'll never share your email with anyone else.</small>
						</div>

						<div class="bo4 size15 m-b-40">
							<input class="sizefull s-text7 p-l-20 p-r-20" type="password" name="password" placeholder="Password"> 
                            <a href="#"><div class="form-text text-muted float-right">Forgot Password</div></a>
						</div>
						
						<div class="p-t-20">
							<!-- Button -->
						<input type="submit" name="save" value="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" style="width=100%"> 
						</form>
						</div>
                        <div class=" t-center p-t-17"><a>OR</a></div>
                        <div class="s-text2  t-center  p-t-0" style="text-transform: none;"><small>New User ? Click Here for <a href="signup.php">Sign Up</a></small></div>
				
				</div>
       
    </div> 
    </div>       



	<?php include('includes/footer.php');?>
	
	
	
	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>
	
	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>
            <?php include('includes/scripts.php');?>
    </body>
</html>