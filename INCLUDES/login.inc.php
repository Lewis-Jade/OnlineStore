<?php
session_start();


if(isset($_POST['submit'])){
require_once('../INCLUDES/dbh.inc.php');

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param('s',$email);
$stmt->execute();

$result=$stmt->get_result();


if($result->num_rows){

    $row = $result->fetch_assoc();

    if(password_verify($password,$row['password'])){

        header("Location:  ../VIEWS/home.php");
        die();
    }else{
       $_SESSION['message']="Incorrect username or password";
       header("Location:  ../VIEWS/login.php");
        die();

    }
}else{
    $_SESSION['message']="User does not Exist";
    header("Location:  ../VIEWS/login.php");
     die();

 }




}