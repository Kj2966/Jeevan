<?php 
include('../db/config.php');
echo "yes1";
if(isset($_POST['register']) && $_POST['register'] == "Submit") {
echo "yes";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $mobno = $_POST['mobno'];
    $uid = $_POST['uid'];
    
    // Hash the password using bcrypt
    $hashed_pass = password_hash($pass, PASSWORD_BCRYPT);
    
    // Prepare and execute the query
    echo $registerQry = "INSERT INTO `login`(`name`, `email`, `pass`,`mobno`,`uid`) VALUES ('$name', '$email', '$hashed_pass','$mobno','$uid')";
    $registerExe = mysqli_query($con, $registerQry);

    if($registerExe) {
        // echo $registerQry;
        // Registration successful, redirect to login page
        header('Location:../login.php');
        exit();
    } else {
        // Handle registration failure
        echo "Registration failed. Please try again.";
    }
}




?>