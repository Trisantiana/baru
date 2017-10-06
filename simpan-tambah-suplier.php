<?php
 include_once 'lib/koneksi.php';
 
 $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
 
 if(isset($POST['simpan'])){
	 $params = array(
		':id_suplier' => $POST['id_suplier'],
		':nama' => $POST['nama'],
		':vendor' => $POST['vendor'],
		':alamat' => $POST['alamat'],
		':email' => $POST['email'],
		':no_hp' => $POST['no_hp']
	);	
	$sql = "insert into suplier values (:id_suplier, :nama, :vendor, :alamat, :email, :no_hp )";
	$pdo = $con->prepare($sql);
	$pdo->execute($params);
	
	header('location:menu1.php?hal=data-suplier');
}else{
		die("Missing parameter!");
 }
 