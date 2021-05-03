<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>Tentang Progate</li>
        <li>Pengerahan</li>
        <li class="selected">Kontak</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="thanks-message">Terima kasih telah menghubungi kami!</div>
    <div class="display-contact">
      <div class="form-title">Terkirim</div>

      <div class="form-item">■ Nama</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ Umur</div>
      <?php echo $_POST['age']; ?>

      <div class="form-item">■ Kategori</div>
      <!-- Cetak kategori yang diterima dari formulir dibawah -->
      <?php echo $_POST['category']; ?>

      <div class="form-item">■ Pesan</div>
      <?php echo $_POST['body']; ?>

    </div>
  </div>

  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>Tentang Progate</li>
        <li>Pengerahan</li>
        <li>Kontak</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>