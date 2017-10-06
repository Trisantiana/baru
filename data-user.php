<?php
include_once 'lib/koneksi.php';
?>
<body bgcolor="#99FFFF">
<center>
	<h1> DATA USER </h1>
	<a href="menu1.php?hal=form-user"> Tambah User </a>
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<th>NO.</th>
			
			<th>USERNAME</th>
			<th>PASSWORD</th>
			
			<th>MENU</th>
		</tr>
		<?php
		$query = "select * from user";
		$result = $con->prepare($query);
		$result->execute();

		
		$i=1;
		while($row = $result->fetch()){
		?>
		<tr>
			<td><?=$i?></td>
			
			<td><?=$row['username']?></td>
			<td><?=$row['password']?></td>
			
			
			<td>
			<a href="?hal=edit-barang&edit&id_user=<?=$row['id_user']?>">Edit </a> |
			<a href="hapus-user.php?act=del&id_user=<?=$row['id_user']?>">Hapus </a>
				
			</td>
		</tr>
		
		<?php
		$i++;
		}
		?>
	</table>
	<a href="menu1.php"> Back</a>