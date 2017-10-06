
<?php

include_once 'lib/koneksi.php';

$POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($POST['submit'])) {
    $params = array(
        ':id_suplier' => $POST['id_suplier'],
        ':nama' => $POST['nama'],
        ':vendor' => $POST['vendor'],
        ':alamat' => $POST['alamat'],
        ':email' => $POST['email'],
        ':no_hp' => $POST['no_hp']
    );
    $sql = "update suplier set 
        nama = :nama, vendor = :vendor, alamat = :alamat, 
            email = :email, no_hp = :no_hp 
            where id_suplier = :id_suplier ";
    $pdo = $con->prepare($sql);
    $pdo->execute($params);
	header('location:menu1.php?hal=data-suplier');
} else {
    echo "<script>Maaf, data tidak lengkap!</script>";
}

header('location:menu1.php?hal=data-suplier');
?>

