<?php
include_once 'lib/koneksi.php';
?>
<body bgcolor="#99FFFF">
<center>
<link rel="stylesheet" type="text/css" href="style/style.css">
	<h1>Data Kategori</h1> <br>
	<a href="menu1.php?hal=form-kategori"> Tambah Kategori </a> <br>
	<table border="1" style="border-collapse: collapse;">
		<tr>
			
			<th> No.</th>
			<th> KATEGORI</th>
			<th> MENU</th>
		</tr>

		<?php
		$query= "select * from kategori";
		$result=$con->prepare($query);
		$result->execute();

		$i=1;
		while($row = $result->fetch()){
			?>
			<tr>
				<td><?=$i?></td>
				
				<td><?=$row['kategori']?></td>
				<td>
					<a href="?hal=edit-barang&edit&id_kategori=<?=$row['id_kategori']?>"> Edit </a> |
					<a href="hapus-kategori.php?act=del&id_kategori=<?=$row['id_kategori']?>"> Hapus
				</td>
			</tr>
			<?php
			$i++;
			}
			?>
	</table>
	<a href="menu1.php"> Back</a>
</center>
