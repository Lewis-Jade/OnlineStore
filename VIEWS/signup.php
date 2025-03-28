<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="../CSS/signup.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <a href="index.php"><i class="fa-solid fa-circle-arrow-left"></i></a>
    <section>
        <!-- <h1>Lets get You an Account Right Now!</h1> -->
          <form action="../INCLUDES/signup.inc.php"   method="POST">
            <h2>Sign Up </h2>
            <div class="inputBox">
                <input type="text"  name="firstname"  placeholder="firstname" required>
                <input type="text"  name="lastname" placeholder="lastname" required>
                <input type="email"   name="email"  placeholder="email" required>
                <input type="number" min="0" name="phonenumber" placeholder="phonenumber" required>
                <label for="">Gender</label>
                <div class="gender">
                    <label for="">Male</label>
                <input type="radio"  name="gender" placeholder="gender"  value="Male" required>
                <label for="">Female</label>
                <input type="radio"   name="gender"  placeholder="gender"  value="Female" required>
           
                </div>
                  
            </div>

            <!-- second division -->

            <div class="inputBox two">
          
                 <img  id="eye-icon" src="../IMG/hide.png" alt="">
                <input type="password" id="current-password"  name="password"  autocomplete="new-password" placeholder="password">
            
                
                <input type="password"   name="cnf_password" autocomplete="new-password" placeholder=" confirm password">
                 <input type="text"    name="address"  placeholder="Address">

                 <select name="county" >
                <option value="">Select County</option>
              
                 <?php
                 
                 $counties = [
                    "Baringo", "Bomet", "Bungoma", "Busia", "Elgeyo Marakwet", "Embu", "Garissa", "Homa Bay", "Isiolo", 
                    "Kajiado", "Kakamega", "Kericho", "Kiambu", "Kilifi", "Kirinyaga", "Kisii", "Kisumu", "Kitui", "Kwale", 
                    "Laikipia", "Lamu", "Machakos", "Makueni", "Mandera", "Marsabit", "Meru", "Migori", "Mombasa", "Murang'a", 
                    "Nairobi", "Nakuru", "Nandi", "Narok", "Nyamira", "Nyandarua", "Nyeri", "Samburu", "Siaya", "Taita Taveta", 
                    "Tana River", "Tharaka Nithi", "Trans Nzoia", "Turkana", "Uasin Gishu", "Vihiga", "Wajir", "West Pokot"
                ];
                 
                   foreach($counties as $county){

                    echo '<option>'.$county.'</option>';

                   }
                  

                 ?>
          

                 </select>

            </div>

            <input type="submit" name="submit" value="Sign Up">
             
          </form>

          <?php
          
          if(isset(  $_SESSION['message'])){

            echo '<p>'.  $_SESSION['message'].'</p>';
            unset(  $_SESSION['message']);
          }
          
          ?>
      
        </section>
    </div>
</body>
<script src="../SCRIPTS/index.js"></script>
</html>