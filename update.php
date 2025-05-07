<?php 
include "connect.php";
$id = $_GET["updateid"];
if (isset($_POST["update"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    
    $query = "UPDATE `users` SET  name = '$name', email= '$email', mobile = '$number', password = '$password' WHERE id=$id";
    $result = mysqli_query($link, $query);
    if ($result) {
        header("location: index.php");

    } else {
        echo "problem";
        header("location: index.php");

    }
}
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title> CRUD | Update User </title>
</head>
<body>
    <h1>Update User</h1>
    <?php 
        
            $query = "select * from `users` where id=$id";
            $result = mysqli_query($link, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $name = $row["name"];
                $email = $row["email"];
                $number = $row["mobile"];
                $password = $row["password"];
                // $query1 = "delete from `users` where id=$id";
                // $result1 = mysqli_query($link, $query1);
                echo "
                <form method='post'>
                    <label for='name'>Name : </label>
                    <input type='text' name='name' id='name' value='$name'>
                    <label for='email'>Email : </label>
                    <input type='email' name='email' id='email' value='$email'>
                    <label for='number'>Mobile Number : </label>
                    <input type='text' name='number' id='number' value='$number'>
                    <label for='password'>Password : </label>
                    <input type='password' name='password' id='password' value='$password'>
                    <input type='submit'  value='update' name='update'>
                </form>
                ";


            }
        
    ?>
    
</body>
</html>