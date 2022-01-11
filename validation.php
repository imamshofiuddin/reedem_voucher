<?php 

include 'functions.php';

if (isset($_POST["submit"])) {
    $findID = cari($_POST["kode"]);
    if($findID != 0) {
        if(hapus($findID) > 0) {
            echo"<script>
            alert('Kode Berhasil Dipakai');
            document.location.href='index.php'; 
            </script>";
        } else {
            echo"<script>
            alert('Kode Gagal Digunakan');
            document.location.href='index.php'; 
            </script>";
        }
        
    } else {
            echo"<script>
            alert('Kode Voucher Salah!');
            document.location.href='index.php'; 
            </script>";
    }
}


?>