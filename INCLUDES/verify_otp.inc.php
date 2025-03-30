<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_otp = $_POST['otp'];


    if (isset($_SESSION['otp']) && $_SESSION['otp'] == $entered_otp && time() <= $_SESSION['otp_expiry']) {
        $_SESSION['verified'] = true;
       
        header("Location: ../VIEWS/reset_password.php");
        exit();
    } else {
        $_SESSION['message']= "Invalid or expired OTP!";
        header("Location: ../VIEWS/verify_otp.php");
        exit();
    }
}


