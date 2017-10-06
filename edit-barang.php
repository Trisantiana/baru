<?php
include_once 'lib/koneksi.php';

$GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);

if(isset($GET['id'])){
    $sql = "select * from barang where id = :id";
    $param = array(':id' => $GET['id']);
    $res = $con->prepare($sql);
    $res->execute($param);
    $row = $res->fetch();
}
?>

<center>
<link rel="stylesheet" type="text/css" href="style/style.css">
    <h1>EDIT DATA BARANG</h1>

    <form action="menu1.php?hal=simpan-edit-barang" method="post">
      
        <input type="hidden" required="" name="id" 
                           value="<?=$row['id']?>"/> 
           <table cellspacing="10">
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" required name="nama" 
                           value="<?=$row['nama']?>"/></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" required name="kategori" 
                           value="<?=$row['kategori']?>"/></td>
            </tr>
            <tr>
                <td>Vendor</td>
                <td><input type="text" required name="vendor" 
                           value="<?=$row['vendor']?>"/></td>
            </tr>
            <tr>
                <td>Tipe</td>
                <td><input type="text" required name="tipe" 
                           value="<?=$row['tipe']?>"/></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" required name="stok" 
                           value="<?=$row['stok']?>"/></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="text" required name="harga_beli" 
                           value="<?=$row['harga_beli']?>"/></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" required name="harga_jual" 
                           value="<?=$row['harga_jual']?>"/></td>
            </tr>
            <tr>
				<td></td>
				
				<td><button type="submit" name='submit' class="btn">Update</button>	
			</tr>
        </table>
    </form>
</center>

<a href="menu1.php?hal=edit-barang"></a>