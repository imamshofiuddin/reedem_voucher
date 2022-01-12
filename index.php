<?php 

include 'validation.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="center p-5 shadow bg-light">
        <h2>Masukkan Kode Voucher</h2>
        <form method="POST">
          <div class="row g-3 align-items-center mt-3">
            <div class="col-auto">
              <label for="kode" class="col-form-label">Kode Voucher</label>
            </div>
            <div class="col-auto">
              <input type="text" id="kode" class="form-control" name="kode" aria-describedby="passwordHelpInline" required>
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Kode voucher hanya bisa dipakai sekali
              </span>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Pakai Kode</button>
          </div>
        </form>
    </div>

    <!-- Alert Success -->
    <?php if(isset($success)) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Voucher berhasil digunakan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>

    <!-- Alert Danger -->
    <?php if(isset($danger)) : ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Maaf</strong> Voucher gagal digunakan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>

    <!-- Alert Invalid -->
    <?php if(isset($invalid)) : ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Maaf</strong> Kode voucher yang anda masukkan salah.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>

    <!-- Alert used voucher -->
    <?php if(isset($used)) : ?>
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Maaf</strong> Kode voucher sudah digunakan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>