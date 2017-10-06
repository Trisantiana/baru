<?php
include_once 'lib/koneksi.php';

$GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($GET['id_kategori'])) {
	$sql = "select * from kategori where id_kategori = :id_kategori";
	$params = array(':id_kategori' => $GET['id_kategori']);
	$res = $con->prepare($sql);
	$res->execute($params);
	$row = $res->fetch();
}
?>

<center>
<link rel="stylesheet" type="text/css" href="style/style.css">
	<h1> EDIT DATA BARANG </h1>

	<form action="menu1.php?hal=simpan-edit-kategori" method="post">
	
	
		
		
		<input type="hidden" required="" name="id_kategori" value="<?=$row['id_kategori']?>"/>

		<table cellspacing="10">
		
		<tr>
			<td>Nama Kategori</td>
		
			<td><input type="text" required name="kategori" value="<?=$row['kategori']?>"/></td>
		</tr>
		<tr>
			<td></td>
			
			<td><input type="submit" name="submit" value="Update" class="btn"></td>
		</tr>
		</form>
		</table>
</center>

<a href="menu1.php?hal=edit-kategori"></a>