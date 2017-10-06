
<?php

include_once 'lib/koneksi.php';

$POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($POST['submit'])) {
    $params = array(
        ':id_user' => $POST['id_user'],
        ':username' => $POST['username'],
        ':password' => $POST['password']
    );
    $sql = "update user set 
        username = :username, password = :password  
            where id_user = :id_user ";
    $pdo = $con->prepare($sql);
    $pdo->execute($params);
	header('location:menu1.php?hal=data-user');
} else {
    echo "<script>Maaf, data tidak lengkap!</script>";
}

header('location:menu1.php?hal=data-user');
?>

