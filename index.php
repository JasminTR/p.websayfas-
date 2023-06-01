<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
</head>

<body>
    <?php
    // Oturumu başlat
    session_start();

    // Oturumda kullanıcı adı var mı kontrol edelim
    if (!isset($_SESSION['username'])) {
        // Kullanıcı oturum açmadıysa login.php sayfasına yönlendir
        header("Location: login.php");
        exit;
    }
    else{
        header("Location: Lnavbar.php");
    }
    ?>


</body>

</html>