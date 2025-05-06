<?php 
include "connect.php";

if (isset($_GET["deleteid"])) {
    $id = $_GET["deleteid"];
    $query = "delete from `users` where id=$id";
    $result = mysqli_query($link, $query);

    echo $result;
    header("location: display.php");
}