<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/style.css" />
    <title>Kotak Saran | AnB Marketplace</title>
  </head>
  <body>
    <div class="tampilSaran-container">
      <h1>Kotak Saran</h1>
      <div class="center-tampilSaran">
        <?php
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $saran = $_POST['saran'];

        if(!empty($nama)) {
          echo "<h2>Nama : $nama </h2>";
        }

        if(!empty($email)) {
          echo "<h2>Email : $email </h2>";
        }

        if(!empty($saran)) {
          echo "<h2>Saran : $saran </h2>";
        }
        ?>
      </div>
      <button type="button" class="btn-kembali">
        <a href="../home/home.html">Kembali</a>
      </button>
    </div>
  </body>
</html>
