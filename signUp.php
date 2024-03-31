
<?php include('components/header.php'); ?>
<head>
	<style>
		 .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
	</style>
</head>
	<body style="background-color:#d2dab5">
		<div class="page-wrapper">
			<main class="main">
				
				<!-- section start-->
				<section class="section " style="background:#93cfbb;margin-top:-50px;">
					<div class="container" >
						<div class="row offset-margin" style="justify-content:center">
                        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-0 col-xl-4 w">
								<form class="form account-form sign-up-form" action="input/register.php" method="post" id="emailForm">
									<div class="form__fieldset">
										<h6 class="form__title">Sign Up</h6>
										<div class="row">
											<div class="col-12">
											<!-- <div>
            <label for="profilePicture">Profile Picture:</label>
            <input type="file" id="profilePicture" name="profilePicture" accept="image/*" onchange="displayImage()">
        </div>
        <div>
            <img id="profilePicPreview" class="profile-pic" src="#" alt="Preview">
        </div> -->
												<input class="form__field" type="text" name="name" placeholder="Full Name"/ required>
												<input class="form__field" type="email" id="email" name="email" placeholder="Email"/ required>
												<input class="form__field" id = "pass" type="password" name="pass" placeholder="Password" oninput="validatePassword()"/ required>
												<span id="passwordError" style="color: red;"></span>
												<input class="form__field" type="text" name="mobno" placeholder="Mobile"/ required>
												<input class="form__field" type="text" name="uid" placeholder="U ID"/ required>
												
											</div>
											<div class="col-12"><strong>I agree with <a class="form__link" href="#">Term of Services</a></strong></div>
											<div class="col-12 text-center">
                                            <button onclick="getEmailInfo(event)" class="form__submit" type="submit" name="register" value="Submit"><?php echo isset($_POST['register']) && $_POST['register'] == "Submit" ? "Signing Up..." : "Sign Up"; ?></button>
											<button  class="form__submit" id="submit" type="submit" name="register" value="Submit" style="display:none"><?php echo isset($_POST['register']) && $_POST['register'] == "Submit" ? "Signing Up..." : "Sign Up"; ?></button>
											</div>
											<div class="col-12 text-center"><strong><a class="form__link" href="login.php">Sign in</a> if you an account</strong></div>
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
	<script>
async function getEmailInfo() {
    event.preventDefault();
    let email = document.getElementById('email').value;
    let data = { email: email };

    //console.log(data);
    try {
        const response = await fetch('apis/getRegisteredEmail.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const responseData = await response.json();
        if (responseData.status == 'success') {
			document.getElementById('submit').click();
            
        } else {
           
			alert("Email Already Exist");
        }
    } catch (error) {
        console.error('Error:', error);
    }
}
// funtion to validate password
    function validatePassword(){
        var passwordInput = document.getElementById('pass');
        var password = passwordInput.value;
        var passwordError = document.getElementById('passwordError');

        // Define regular expressions for validation
        var regexDigit = /\d/;
        var regexAlpha = /[a-zA-Z]/;
        var regexSpecial = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

        // Perform validation checks
        var isValid = true;
        if (password.length < 6) {
            isValid = false;
            passwordError.textContent = 'Password must be at least 6 characters long.';
        } else if (!regexDigit.test(password) || !regexAlpha.test(password) || !regexSpecial.test(password)) {
            isValid = false;
            passwordError.textContent = 'Password must contain at least 1 letter, 2 digits, and 1 special character.';
        } else {
            passwordError.textContent = '';
        }

        // Update input style based on validation result
        if (isValid) {
            passwordInput.classList.remove('invalid');
        } else {
            passwordInput.classList.add('invalid');
        }
    }
// fucniton to display image
function displayImage() {
            const fileInput = document.getElementById('profilePicture');
            const previewImg = document.getElementById('profilePicPreview');
            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                previewImg.src = '#';
            }
        }
		</script>
</html>