<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<?php include 'Lnavbar.php'; ?>
  <div class="container">
    <form action="submit.php" method="POST">
      <div class="mb-3">
        <label for="ad" class="form-label">Adı</label>
        <input type="text" class="form-control" id="ad" name="ad" placeholder="Adınızı girin">
      </div>
      <div class="mb-3">
        <label for="soyad" class="form-label">Soyadı</label>
        <input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyadınızı girin">
      </div>
      <div class="mb-3">
        <label for="numara" class="form-label">Numara</label>
        <input type="text" class="form-control" id="numara" name="numara" placeholder="Numaranızı girin">
      </div>
      <div class="mb-3">
        <label for="adres" class="form-label">Adres</label>
        <textarea class="form-control" id="adres" name="adres" rows="3" placeholder="Adresinizi girin"></textarea>
      </div>
      <div class="mb-3">
        <label for="departman" class="form-label">Departman</label>
        <select class="form-select" id="departman" name="departman">
          <option selected>Seçiniz</option>
          <option>IT</option>
          <option>Satış</option>
          <option>muhasebe</option>
          <option>finans</option>
          <option>büro</option>
          <option>resepsiyon</option>
          <option>Pazarlama</option>
          <option>boart</option>
          <!-- Diğer departmanları buraya ekleyebilirsiniz -->
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
