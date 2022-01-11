<?php 

$conn = mysqli_connect("localhost", "root", "", "db_voucher");

function query($ambil) {
    global $conn;

    $result = mysqli_query($conn, $ambil);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function cari($kode) {
    global $conn;
    $ambil = mysqli_query($conn, "SELECT id FROM kode_voucher WHERE kode = '$kode' ");
    $countRow = mysqli_num_rows($ambil);
    $dataId = query("SELECT id FROM kode_voucher WHERE kode = '$kode'");
    if($countRow > 0) {
        return $dataId[0]['id'];
    } else {
        return 0;
    }
}

function hapus($id) {
	global $conn;
	$result = mysqli_query($conn,"DELETE FROM kode_voucher WHERE id = $id");
	return mysqli_affected_rows($conn);
}

?>