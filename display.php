<?php 
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style1.css">
    <title> CRUD | Display Users </title>
</head>
<body>
    <div class="header">
        <h1>USERS Control Panel</h1>
        <button id="addUser"><a href="user.php">Add User</a></button>
    </div>
    
    <div class="table">
        <div class="tableHead">
            <div>ID</div>
            <div>Name</div>
            <div>Email</div>
            <div>Mobile</div>
            <div>Password</div>
            <div>Actions</div>
        </div>
        <?php 
            $query = "select * from `users`";
            $result = mysqli_query($link, $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["id"];
                    $name = $row["name"];
                    $email = $row["email"];
                    $number = $row["mobile"];
                    $password = $row["password"];
                    echo "
                        <div class='row'>
                            <div>$id</div>
                            <div>$name</div>
                            <div>$email</div>
                            <div>$number</div>
                            <div>$password</div>
                            <div class='btns'>
                                <button><a href='update.php?updateid=$id'>Update</a></button>
                                <button><a href='delete.php?deleteid=$id'>Delete</a></button>
                            </div>
                        </div>
                    ";
                }
            }
        ?>
        
    </div>
</body>
</html>