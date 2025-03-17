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
          <form action="">
            <h2>Sign Up </h2>
            <div class="inputBox">
                <input type="text"   placeholder="firstname" required>
                <input type="text"   placeholder="lastname" required>
                <input type="email"   placeholder="email" required>
                <label for="">Gender</label>
                <div class="gender">
                    <label for="">Male</label>
                <input type="radio"   placeholder="gender"  value="Male" required>
                <label for="">Female</label>
                <input type="radio"   placeholder="gender"  value="Female" required>
                </div>
            </div>

            <!-- second division -->

            <div class="inputBox">
                <input type="password"  placeholderr="password">
                <input type="password"  placeholderr=" confirm password">
                 <input type="text"  placeholder="Address">

                 <select name="" id="">
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

            <input type="submit"  value="Sign Up">
             
          </form>
        </section>
    </div>
</body>
</html>