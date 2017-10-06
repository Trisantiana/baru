<?php
include_once 'koneksi.php';
?>

<center>
	<h1> DATA BARANG </h1>
	<a href="form-b1.php"> Tambah Barang </a>
	<table border="1" style="border-collapse: collapse;">
		<tr>
			
			<th>ID</th>
			<th>NAMA</th>
			<th>KATEGORI</th>
			<th>VENDOR</th>
			<th>TIPE</th>
			<th>STOK</th>
			<th>HARGA BELI</th>
			<th>HARGA JUAL</th>
			<th>MENU</th>
		</tr>
		<?php
		$query = "select b.*, k.kategori from barang b, kategori k where b.kategori=k.kategori";
		$result = $con->prepare($query);
		$result->execute();
		
		$i=1;
		while($row = $result->fetch()){
		?>
		<tr>
			<td><?=$i?></td>
			
			<td><?=$row['nama']?></td>
			<td><?=$row['kategori']?></td>
			<td><?=$row['vendor']?></td>
			<td><?=$row['tipe']?></td>
			<td><?=$row['stok']?></td>
			<td><?=$row['harga_beli']?></td>
			<td><?=$row['harga_jual']?></td>
			<td>
			<a href="edit-barang.php?act=edit&id=<?=$row['id']?>">Edit </a> |
			<a href="hapus-barang.php?act=del&id=<?=$row['id']?>">Hapus </a>
				
			</td>
		</tr>
		
		<?php
		$i++;
		}
		?>
	</table>