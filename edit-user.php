<?php
include_once 'lib/koneksi.php';

$GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);

if(isset($GET['id_user'])){
    $sql = "select * from user where id_user = :id_user";
    $param = array(':id_user' => $GET['id_user']);
    $res = $con->prepare($sql);
    $res->execute($param);
    $row = $res->fetch();
}
?>

<center>
<link rel="stylesheet" type="text/css" href="style/style.css">
    <h1>EDIT DATA USER</h1>

    <form action="menu1.php?hal=simpan-edit-user" method="post">
      
        <input type="hidden" required="" name="id_user" 
                           value="<?=$row['id_user']?>"/> 
           <table cellspacing="10">
            <tr>
                <td>Username</td>
                <td><input type="text" required name="username" 
                           value="<?=$row['username']?>"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" required name="password" 
                           value="<?=$row['password']?>"/></td>
            </tr>
           
            <tr>
				<td></td>
				
				<td><button type="submit" name='submit'>Update</button>	
			</tr>
        </table>
    </form>
</center>

<a href="menu1.php?hal=edit-user"></a>