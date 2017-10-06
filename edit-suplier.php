<?php
include_once 'lib/koneksi.php';

$GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);

if(isset($GET['id_suplier'])){
    $sql = "select * from suplier where id_suplier = :id_suplier";
    $param = array(':id_suplier' => $GET['id_suplier']);
    $res = $con->prepare($sql);
    $res->execute($param);
    $row = $res->fetch();
}
?>

<center>
<link rel="stylesheet" type="text/css" href="style/style.css">
    <h1>EDIT DATA BARANG</h1>

    <form action="menu1.php?hal=simpan-edit-suplier" method="post">
      
        <input type="hidden" required="" name="id_suplier" 
                           value="<?=$row['id_suplier']?>"/> 
           <table cellspacing="10">
            <tr>
                <td>Nama Suplier</td>
                <td><input type="text" required name="nama" 
                           value="<?=$row['nama']?>"/></td>
            </tr>
            <tr>
                <td>Vendor</td>
                <td><input type="text" required name="vendor" 
                           value="<?=$row['vendor']?>"/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" required name="alamat" 
                           value="<?=$row['alamat']?>"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" required name="email" 
                           value="<?=$row['email']?>"/></td>
            </tr>
            <tr>
                <td>No.Hp</td>
                <td><input type="text" required name="no_hp" 
                           value="<?=$row['no_hp']?>"/></td>
            </tr>
            <tr>
				<td></td>
				
				<td><button type="submit" name='submit' class="btn">Update</button>	
                
			</tr>
        </table>
    </form>
</center>

<a href="menu1.php?hal=edit-suplier"></a>