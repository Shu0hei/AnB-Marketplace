<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/style.css" />
    <title>Saran | AnB Marketplace</title>
  </head>
  <body class="saran-body">
    <div class="saran-container">
      <h1 class="saran-label">Saran</h1>
      <form
        class="saran-form"
        method="post"
        action="tampilSaran.php"
        name="form"
        onsubmit="return validate()"
      >
        <div class="font">Nama</div>
        <input type="text" name="nama" autocomplete="off" requires/>
        <div id="email-error">Tolong masukan nama anda</div>

        <div class="font font2">Email</div>
        <input type="email" name="email" required/>
        <div id="password-error">Tolong masukan email</div>

        <div class="font font2">Saran</div>
        <textarea name="saran" cols="46" rows="10" required></textarea>
        <div id="saran-error">Tolong masukan saran</div>

        <button type="submit" class="first-btn" >Kirim</button>
        <button type="button" class="second-btn"><a href="../home/home.html">Kembali</a></button>
      </form>
    </div>
  </body>
</html>
