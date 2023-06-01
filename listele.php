<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Veritabanı bağlantısı yapılacak bilgiler
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
include 'Lnavbar.php';
// Tablo verilerini sorgula
$sql = "SELECT * FROM personelbilgi";
$result = $conn->query($sql);

// Sorgu sonuçlarını kontrol et
if ($result && $result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Adı</th><th>Soyadı</th><th>Numara</th><th>Adres</th><th>Departman</th></tr>";
    
    // Verileri tabloya yazdır
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Adı"] . "</td><td>" . $row["Soyadı"] . "</td><td>" . $row["Numara"] . "</td><td>" . $row["Adres"] . "</td><td>" . $row["Departman"] . "</td></tr>";
    }
    
    echo "</table>";
} else {
    echo "Tablo boş.";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
</body>
</html>