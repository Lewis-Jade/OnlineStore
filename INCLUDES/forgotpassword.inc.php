<?php
session_start();

if(isset($_POST['submit'])){
  require_once('dbh.inc.php');
  $email = $_POST['email'];

   $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");

   $stmt->bind_param('s',$email);

   $stmt->execute();

   $result = $stmt->get_result();


   if($result->num_rows>0){
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $email;
    $_SESSION['otp_expiry'] = time() + 300;

    $subject = "Password Reset OTP";
    $message = "Your OTP is: " . $otp;
    $headers = "From: no-reply@example.com";

    if (mail($email, $subject, $message, $headers)) {
        $_SESSION['message']="An OTP has been send to your email";
        header("Location: ../VIEWS/verify_otp.php");
        exit();
    }else{
        $_SESSION['message'] = "Error sending email!"; 
        header("Location: ../VIEWS/forgot_password.php");
        die();
    }
   }else{
      $_SESSION['message'] = "Email does not exist";
      header("Location: ../VIEWS/forgot_password.php");
      die();
   }





}