<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Perpustakaan Online</title>
	  <script>
		  var login = () => alert("Login Dulu Bos");
	  </script>
    </head>
    <body>
      <div id="container">
        <div align="center" class="header"><img src="images/logo_ubsi.png" width="100" height="100"><h1 align="center">Perpustakaan Universitas BSI</h1>
        </div>
        <div class="main">
          <div class="left">
            <h3 align="center">MENU</h3>
            <p>
              <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><input class="search" type="text" placeholder="Search..." required></li>
              </ul>
            </p>
          </div>
          <div class="middle">
            <h3 align="center">Buku Trending</h3>
            <h2 align="center">The God Delucion</h2><br>
            <div align="center">
              <img src="images/TGD.jpg" width="300" >
            </div>
            <p><a href="#" onclick="login()">Baca Selengkapnya >></a></p>
          </div>
          <div class="right">
            <h3 align="center">Daftar Buku Best Seller</h3>
            <p>
              <ul>
                <li><a href="#" onclick="login()">A Tale of Two Cities</a></li>
                <li><a href="#" onclick="login()">The Lord of The Ring</a></li>
                <li><a href="#" onclick="login()">Dream of The Read Chamber</a></li>
              </ul>
            </p>
          </div>
        </div>
      </div>
      <div class="footer">
        <p align="center">Copyright &copy; 2020 Belajar CSS Responsive </p>
      </div>
    </div>
  </body>
</html>
