<?php 

$user = 'root';
$password = 'root';
$db = 'crud';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

if (!$success) {
    echo die(mysqli_error($link)); 
}