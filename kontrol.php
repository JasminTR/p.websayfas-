<?php
    // MySQL bağlantısını sağlayalım
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Bağlantıyı kontrol edelim
    if ($conn->connect_error) {
        die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
    }

    // POST verilerini alalım


    $username = $_POST['username'];
    $password = $_POST['password'];	
    
    // Veritabanında kontrol edelim
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Giriş başarılı ise oturum başlatalım
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "Giriş başarısız. Lütfen tekrar deneyin.";
    }

    $conn->close();
    ?>