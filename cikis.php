<?php
// Oturumu başlat
session_start();

// Oturumu sonlandır
session_unset(); // Oturum verilerini temizler
session_destroy(); // Oturumu tamamen kapatır

// Kullanıcıyı başka bir sayfaya yönlendir
header("Location: login.php");
exit;
?>
