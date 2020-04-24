<?php 

require_once("config.php");

if(isset($_POST['login'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
        if(password_verify($password, $user["password"])){
            session_start();
            $_SESSION["user"] = $user;
            header("Location: home.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Anggota</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
  <body>
    <form method="post" action="">
      <div class="tampilan">
        <div class="kepala">
          <div class="logo"></div>
          <h2 align="center" class="judul">Login Account</h2>
        </div>
        <div class="artikel">
          <div class="kotak">
            <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
            <p><input type="password" name="password" value="" placeholder="Password"></p>
            <p class="submit"><input type="submit" name="login" value="Login"></p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
