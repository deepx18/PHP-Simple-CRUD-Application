<?php 
include "connect.php";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    
    $sql_query = "insert into users ( name, email, mobile, password )
    values ( '$name', '$email', '$number', '$password' ) ";
    $result = mysqli_query($link, $sql_query);
    if ($result) {
        header("Location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title> CRUD | Add User </title>
</head>
<body>
    <h1>Add User</h1>
    <form method="post">
        <label for="name">Name : </label>
        <input type="text" name="name" id="name">
        <label for="email">Email : </label>
        <input type="email" name="email" id="email">
        <label for="number">Mobile Number : </label>
        <input type="text" name="number" id="number">
        <label for="password">Password : </label>
        <input type="password" name="password" id="password">
        <input type="submit"  value="Submit" name="submit">
    </form>
</body>
</html>