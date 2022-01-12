<?php 

include 'functions.php';

if (isset($_POST["submit"])) {
    $findID = cari($_POST["kode"]);
    if($findID != 0) {
        $voucher = query("SELECT * FROM kode_voucher WHERE id = '$findID'");
        if( $voucher[0]['stats'] == "used") {
            $used = true;
        } else {
            if (ubah($voucher[0]) > 0) {
                $success = true;
            } else {
                $danger = true;           
            }
        }
        
    } else {
        $invalid = true;
    }
}


?>