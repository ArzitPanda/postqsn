<?php 
session_start();
define('USER', '');  //add your username here
define('PASSWORD', ''); //add your password here
define('HOST', 'localhost');
define('DATABASE', '');   //add your schema namehere


$data =mysqli_connect(HOST, USER, PASSWORD, DATABASE,3306) ;


if ($data->connect_error) {
    die("Connection failed: " . $data->connect_error);
}





?>