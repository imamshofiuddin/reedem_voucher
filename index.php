<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reedem Voucher</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center">
        <h2>Masukkan Kode Voucher</h2>
        <form action="validation.php" method="POST">
            <label for="kode">Kode Voucher </label>
            <input type="text" id="kode" name="kode" autofocus>
            <button type="submit" name="submit">Pakai Kode</button>
            <p>*Kode hanya bisa dipakai satu kali</p>
        </form>
    </div>
</body>
</html>