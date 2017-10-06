 <center>
 <link rel="stylesheet" type="text/css" href="style/style.css">
	<h1>ADD BARANG</h1>
	<form action="menu1.php?hal=simpan-tambah-barang" method="post">
		<table>
			
			<tr>
				<td> Nama </td>
				<td> : </td>
				<td> <input type="text" name="nama"></td>
			</tr>
			<tr>
				<td> Kategori </td>
				<td> : </td>
				<td> <input type="text" name="kategori"></td>
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
				<td><input type="submit" name="submit" value="Kembali" href="data-barang.php" class="btn"></td>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Tambahkan" class="btn">
					
				</td>
			</tr>
		</table>
	</form>
 </center>


 <a href="menu1.php?hal=form-barang"></a>