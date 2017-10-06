<?php
include_once 'lib/koneksi.php';
?>
<body bgcolor="#99FFFF">
<center>
	<h1> DATA SUPLIER </h1>
	<a href="menu1.php?hal=form-suplier"> Tambah Suplier </a>
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<th>NO.</th>
			
			<th>NAMA</th>
			<th>VENDOR</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th>NO.HP</th>
			<th>MENU</th>
		</tr>
		<?php
		$query = "select * from suplier";
		$result = $con->prepare($query);
		$result->execute();

		
		$i=1;
		while($row = $result->fetch()){
		?>
		<tr>
			<td><?=$i?></td>
			
			<td><?=$row['nama']?></td>
			<td><?=$row['vendor']?></td>
			<td><?=$row['alamat']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['no_hp']?></td>
			<td>
			<a href="?hal=edit-barang&edit&id_suplier=<?=$row['id_suplier']?>">Edit </a> |
			<a href="hapus-suplier.php?act=del&id_suplier=<?=$row['id_suplier']?>">Hapus </a>
				
			</td>
		</tr>
		
		<?php
		$i++;
		}
		?>
	</table>
	<a href="menu1.php"> Back</a>