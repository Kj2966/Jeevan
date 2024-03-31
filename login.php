
<?php include('components/header.php');
include('db/config.php');
// login code
if(isset($_POST['login']) && $_POST['login'] == "Submit") {
    // echo "<script>alert('in')</script>";
    $email = $_POST['email'];
    $pass = $_POST['pass'];
  
    
    // Fetch hashed password from the database based on the provided email
    $fetchPassQry = "SELECT `pass`,`email`,`mobno`,`name` FROM `login` WHERE `email` = '$email'";
    $result = mysqli_query($con, $fetchPassQry);
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_pass = $row['pass'];
        $uEmail=$row['email'];
        $uName=$row['name'];
        $uMobno=$row['mobno'];

        // Verify the password
        if(password_verify($pass, $hashed_pass)) {
            // Password is correct, set session and redirect to dashboard
            session_start();
            $_SESSION['jeevanEmail'] = $uEmail;
            $_SESSION['jeevanMobno'] = $uMobno;
            $_SESSION['jeevanName'] =$uName;


           header('Location:home.php');
            exit();
        } else {
            echo "<script>alert('Incorrect email or password. Please try again.')</script>";
        }
    } else {
        // User with provided email not found
        echo "<script>alert('Incorrect email or password. Please try again.')</script>";

    }
}


?>


	<body style="background-color:#d2dab5">
		<div class="page-wrapper">
			<!-- aside dropdown start-->
			
			<!-- header start-->
			
			<!-- header end-->
			<main class="main">
				
				<!-- section start-->
				<section class="section " style="background:#93cfbb;margin-top:-50px;">
					<div class="container" >
						<div class="row offset-margin" style="justify-content:center">
                        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-0 col-xl-4 margin-bottom">
								<form class="form account-form sign-in-form" action="" method="post">
									<div class="form__fieldset">
										<h6 class="form__title">Sign In</h6>
										<div class="row">
											<div class="col-12">
												<input class="form__field" type="email" name="email" placeholder="Username"/>
												<input class="form__field" type="password" name="pass" placeholder="Pass"/>
											</div>
											<div class="col-12 d-flex align-items-end justify-content-between flex-wrap">
												<label class="form__checkbox-label"><span class="form__label-text">Remember me</span>
													<input class="form__input-checkbox" type="checkbox" name="size-select" value="yes" checked="checked"/><span class="form__checkbox-mask"></span>
												</label><a class="form__link" href="#">I forgot my password</a>
											</div>
											<div class="col-12 text-center">
                                            <button class="form__submit" type="submit" name="login" value="Submit"><?php echo isset($_POST['login']) && $_POST['login'] == "Submit" ? "Signing In..." : "Sign In"; ?></button>


											</div>
											<div class="col-12 text-center"><strong><a class="form__link" href="signUp.php">Sign up</a> if you don’t have an account</strong></div>
										</div>
									</div>
								</form>
							</div>
							
							
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- bottom bg start-->
            </main> 
        </div>
			
	</body>
    
</html>