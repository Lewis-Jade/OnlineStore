<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'oninestore';


$conn = mysqli_connect($servername,$username,$password,$dbname);



if(mysqli_connect_error()){


    echo "an error occured" . mysqli_connect_error();



}

