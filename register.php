<?php

require_once("config.php");

if(isset($_POST['register'])){  
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password =password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $sql = "INSERT INTO users (name, username, email, password)
            VALUES (:name, :username, :email , :password) ";
    $stmt = $db->prepare($sql);

    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );
    $saved = $stmt->execute($params);

    if($saved) header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <title>Registration</title>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form action="" method="post">
        <div class="input-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" placeholder="Nama Lengkap">
        </div>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Daftar</button>
        </div>
         <p>Sudah punya akun? <a href="login.php">Sign In</a></p>
    </form>
</body>
</html>