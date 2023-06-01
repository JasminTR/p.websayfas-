<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="login.css">
    <title>LOGIN</title>
</head>
<body>

	<?php
	    include 'Cnavbar.php';
    // Oturumu başlat
    session_start();

    // Oturumda kullanıcı adı var mı kontrol edelim
    if (!isset($_SESSION['username'])) {
    } else {
        // Kullanıcı oturum açmadıysa login.php sayfasına yönlendir
        header("Location: index.php");
        exit;
    }
    ?>
    <div class="logincontainer">
        <div class="loginheader">
            <h1>Login</h1>
        </div>
        <div class="loginmain">
            <form action="kontrol.php" method="POST">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="username">
                </span><br>
                <span>
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                </span><br>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
