<?php
 include_once 'lib/koneksi.php';
 
 $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
 
 if(isset($POST['simpan'])){
	 $params = array(
		':id_user' => $POST['id_user'],
		':username' => $POST['username'],
		':password' => $POST['password']
	);	
	$sql = "insert into user values (:id_user, :username, :password )";
	$pdo = $con->prepare($sql);
	$pdo->execute($params);
	
	header('location:menu1.php?hal=data-user');
}else{
		die("Missing parameter!");
 }
 