`	<?php
include_once 'lib/koneksi.php';
?>
<body bgcolor="#99FFFF">
<center>
	<h1> DATA BARANG </h1>
	<a href="menu1.php?hal=form-barang"> Tambah Barang </a>
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<th bgcolor="#d3fef7">NO.</th>
			
			<th >NAMA</th>
			<th bgcolor="#d3fef7">KATEGORI</th>
			<th >VENDOR</th>
			<th bgcolor="#d3fef7">TIPE</th>
			<th >STOK</th>
			<th bgcolor="#d3fef7">HARGA BELI</th>
			<th >HARGA JUAL</th>
			<th bgcolor="#d3fef7">MENU</th>
		</tr>
		<?php
		$query = "select * from barang";
		$result = $con->prepare($query);
		$result->execute();
		
		$i=1;
		while($row = $result->fetch()){
		?>
		<tr>
			<td bgcolor="#d3fef7"><?=$i?></td>
			
			<td><?=$row['nama']?></td>
			<td  bgcolor="#d3fef7"><?=$row['kategori']?></td>
			<td><?=$row['vendor']?></td>
			<td  bgcolor="#d3fef7"><?=$row['tipe']?></td>
			<td><?=$row['stok']?></td>
			<td  bgcolor="#d3fef7"><?=$row['harga_beli']?></td>
			<td ><?=$row['harga_jual']?></td>
			<td  bgcolor="#d3fef7">
			<a href="?hal=edit-barang&edit&id=<?=$row['id']?>">Edit </a> |
			<a href="hapus-barang.php?act=del&id=<?=$row['id']?>">Hapus </a>
				
			</td>
		</tr>
		
		<?php
		$i++;
		}
		?>
	</table>

	<a href="menu1.php"> Back</a>
	</center>