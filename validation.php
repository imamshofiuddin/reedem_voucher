<?php 

include 'functions.php';

if (isset($_POST["submit"])) {
    $findID = cari($_POST["kode"]);
    if($findID != 0) {
        $voucher = query("SELECT * FROM kode_voucher WHERE id = '$findID'");
        if( $voucher[0]['stats'] == "used") {
            echo"<script>
            alert('Kode Voucher Sudah Digunakan!');
            document.location.href='index.php';
            </script>";
        } else {
            if (ubah($voucher[0]) > 0) {
                echo"<script>
                alert('Kode Voucher Berhasil Digunakan!'); 
                document.location.href='index.php';
                </script>";
            } else {
                echo"<script>
                alert('Kode Voucher Gagal Digunakan!');
                document.location.href='index.php';
                </script>";             
            }
        }
        
    } else {
            echo"<script>
            alert('Kode Voucher Salah!');
            document.location.href='index.php';
            </script>";
    }
}


?>