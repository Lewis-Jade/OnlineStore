<?php
   session_start();

if(isset($_POST['submit'])){
 require_once('../INCLUDES/dbh.inc.php');
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];
  $cnf_password = $_POST['cnf_password'];
  $county = $_POST['county'];
  $address = $_POST['address'];
  $phonenumber = $_POST['phonenumber'];

  $hash;

  $passwordPattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";


  if (!preg_match($passwordPattern, $password)) {
      $_SESSION['message'] = "Password must be at least 8 characters long, include an uppercase letter, lowercase letter, a number, and a special character!";
      header("Location: ../VIEWS/signup.php");
      exit();
  }

  
  if($password !== $cnf_password){

     $_SESSION['message'] = "Password do not match!";
     header("Location:  ../VIEWS/signup.php");

     die();


  }

  $query = $conn->prepare( "SELECT * FROM  users WHERE  email = ?");
   $query->bind_param('s',$email);

   $query->execute();

   $result=$query->get_result();

   if($result->num_rows>0){

      $_SESSION['message'] = "User ulready exists!";
       header("Location:  ../VIEWS/signup.php");
       die();
   }
       $hash = password_hash($password,PASSWORD_DEFAULT);
     $stmt = $conn->prepare("INSERT INTO users(firstname,lastname,gender,password,address,county,email,phonenumber) VALUES(?,?,?,?,?,?,?,?)  ");

     $stmt->bind_param('sssssssi',$firstname,$lastname,$gender,$hash,$address,$county,$email,$phonenumber);

     

     $result = $stmt->execute();;

     if($result){

       header("Location:  ../VIEWS/success.php");
       die();
     }
    


  }
