<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <section  class="cart">
            <h1> welcome to Devv Electronics</h1>
          <div class="main-link">    
            
          <a href="index.php"   class="back"> <i class="fa-solid fa-arrow-left-long"></i>Go Back</a>
        
        </div>
        </section>
        <section  class="form-section">
         <form action="../INCLUDES/login.inc.php" method="POST">
         <h2>Hello Again!</h2>
         <h5>Welcme Back</h5>
         <div class="inputBox">
         <i class="fa-solid fa-envelope"></i>
         
            <input type="text" placeholder="Email" name="email" required>
         </div>
         
         <div class="inputBox">
         <i class="fa-solid fa-lock"></i>
         <input type="password"  placeholder="Password"  name="password" required>
  
         </div>
         <input type="submit" name="submit"  value="Login">
         <div class="links">
            <a href="forgot_password.php">Forgot password?</a>
            <a href="signup.php">Don't have an Account yet?</a>
         </div>
         
         </form>
        <?php
           if(isset($_SESSION['message'])){
            echo '<p>'.$_SESSION['message'].'</p>';
             unset($_SESSION['message']);

           }
        
        
        ?>
          <?php
    
        if(isset($_SESSION['success-message'])){
            echo "<p style='color: green;'>" . $_SESSION['success-message'] . "</p>";
            unset($_SESSION['success-message']); // Remove only the message, keep OTP
        }


        ?>
        

        </section>
    </div>
</body>
</html>