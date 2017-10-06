 <center>
	<h1>ADD BARANG</h1>
	<form action="simpan-tambah-barang.php" method="post">
		<table>
			<tr>
				<td> ID </td>
				<td> : </td>
				<td> <input type="text" name="id"></td>
			</tr>
			<tr>
				<td> Nama </td>
				<td> : </td>
				<td> <input type="text" name="nama">	
				</td>
			</tr>
			<tr>
				<td> Kategori </td>
				<td> : </td>
				<td> 
					<select name="id_kategori">
					<?php
						//<include "koneksi.php";
						$query = "select * from kategori";
						$result = $con->prepare($query);
						$result->execute();
						while( $row=$result->fetch())
						{
						?>
						<option value="<?=$row['id_kategori']?>"> <?=$row['kategori']?> 
						</option>
						<?php
					}
					?>
				</td>
			</tr>
			<tr>
				<td> Vendor </td>
				<td> : </td>
				<td> <input type="text" name="vendor"></td>
			</tr>
			<tr>
				<td> Tipe </td>
				<td> : </td>
				<td> <input type="text" name="tipe"></td>
			</tr>
			<tr>
				<td> Stok </td>
				<td> : </td>
				<td> <input type="text" name="stok"></td>
			</tr>
			<tr>
				<td> Harga Beli</td>
				<td>:</td>
				<td><input type="text" name="harga_beli"></td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td>:</td>
				<td><input type="text" name="harga_jual"></td>
			</tr>
			<tr> 
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Tambahkan">
					<input type="reset" name="reset" value="Batal">
				</td>
			</tr>
		</table>
	</form>
 </center>