<?php
include("connect.php");

if(isset($_POST["sing_up"]))
{
    $username = $_POST["username"];
    $password = ( $_POST["password"]);
    $ekle = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
    $calistirekle = mysqli_query($conn, $ekle);



if ($calistirekle) {
    echo '<div class="alert alert-success" role="alert">
        Kayıt Başarılı bir şekilde eklendi
      </div>';
} else {
    echo '<div class="alert alert-danger" role="alert">
        Kayıt Oluşturulurken bir problem oluştu: ' . mysqli_error($conn) . '
      </div>';
}

}

mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="login.css">
    <title>SİNG </title>
</head>
<body>
    <?php include 'cnavbar.php'; ?>

    <div class="logincontainer">
        <div class="loginheader">
            <h1>Sing Up</h1>
        </div>
        <div class="loginmain">
            <form action="sing_up.php" method="POST">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="username">
                </span><br>
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="password" name="password">
                </span><br>
                <button type="submit" name="sing_up">Sing Up</button>
            </form>
        </div>
    </div>
</body>
</html>
