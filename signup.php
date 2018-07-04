<html>
<?php include('includes/head.php');?>
<body>

    
    
    <body class="animsition">

        <?php include('includes/header.php');?>

        <!--USER REGISTRATION FORM-->

        <script language="javascript">
            function check(){
                var checker = document.details ;
                // if(checker.first_name.value== "" || checker.last_name.value == ""){
                //     alert("You can't leave any field blank");
                //     return false;
                // }

                if(checker.password.value != checker.cnf_password.value){
                    alert("Confirm Password Doesn't matches with the original Password!");  
                    return false;
                }
                else if(checker.password.value.length <= 8){
                    alert("The password Length Should be Greater than 8 characters");
                    return false;
                }
                 return true;
            }
        </script>

        <div class="d-flex justify-content-center" style="background-image: url(images/master-slide-02-blur.jpg); background-repeat: no-repeat; background-size: 100% auto; background-position:center;">
            <div class="col-md-3 bg3 p-r-20 p-l-20" style="height: 600px; margin: 100px 0px 100px 0px; filter: blur(0px); box-shadow: 0px 1px 15px 0px rgb(0,0,0,0.2)">
                <h4 class="m-text26 p-b-30 p-t-50">
                    Create Account
                </h4>
                <form name = "details" method = "post" action="processing.php" onSubmit="return check();" >
                    <div class="form-group">
                        <div class="input-group bo4 size15">

                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" class="form-control" placeholder="First Name" name="first_name" required>
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                        </div>
                
                    </div>
                    <div class="form-group">

                        <div class="input-group bo4 size15 mb-40">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" class="form-control" placeholder="Phone No." name="phone_no" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group bo4 size15">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="email" class="form-control" placeholder="E-mail Address" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group bo4 size15">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="password" class="form-control" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group bo4 size15">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="password" class="form-control" placeholder="Confirm Password" name="cnf_password" min="8" required>
                        </div>
                    </div>
                    <div class="p-t-20 p-b-20 p-l-50 p-r-50">
                        <!-- Button -->
                    <input type="submit" name="save" value="Continue" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" style="width=100%"> 


                        
                    </div>
                    <p class="text-center">
                        <span>Already have an account
                            <a href="login.php">Sign in</a>
                        </span>
                    </p>
                </form>
            </div>
        </div>
    



        <?php include('includes/footer.php');?>



        <!-- Back to top -->
        <div class="btn-back-to-top bg0-hov" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="fa fa-angle-double-up" aria-hidden="true"></i>
            </span>
        </div>

        <?php include('includes/scripts.php');?>
    </body>

</html>