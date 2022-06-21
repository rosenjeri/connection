<?php
$server = "localhost";
$username = "root";
$pass = "";
//connection to the database
$conn = new mysqli($server,$username,$pass);
//checking connection
if ($conn->connect_error){
    die("It did not connect".$conn->connect_error);
}else{
    echo "connected successfully to the db";
}