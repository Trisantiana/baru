
<?php

include_once 'lib/koneksi.php';

$POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($POST['submit'])) {
    $params = array(
        ':id' => $POST['id'],
        ':nama' => $POST['nama'],
        ':kategori' => $POST['kategori'],
        ':vendor' => $POST['vendor'],
        ':tipe' => $POST['tipe'],
        ':stok' => $POST['stok'],
        ':harga_beli' => $POST['harga_beli'],
        ':harga_jual' => $POST['harga_jual']
    );
    $sql = "update barang set 
        nama = :nama, kategori = :kategori, vendor = :vendor, tipe = :tipe, 
            stok = :stok, harga_beli = :harga_beli, harga_jual = :harga_jual 
            where id = :id";
    $pdo = $con->prepare($sql);
    $pdo->execute($params);
	header('location:menu1.php?hal=data-barang');
} else {
    echo "<script>Maaf, data tidak lengkap!</script>";
}

header('location:menu1.php?hal=data-barang');
?>

