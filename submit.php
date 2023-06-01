<?php
include 'connect.php';

// Veritabanına bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Formdan gelen verileri alınması
$adı = $_POST['ad'];
$soyadı = $_POST['soyad'];
$numara = $_POST['numara'];
$adres = $_POST['adres'];
$departman = $_POST['departman'];

// Veritabanına verilerin eklenmesi
$sql = "INSERT INTO personelbilgi (adı, soyadı, numara, adres, departman)
        VALUES ('$adı', '$soyadı', '$numara', '$adres', '$departman')";

if ($conn->query($sql) === TRUE) {
    include 'form.php';
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>
