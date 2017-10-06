<link rel="stylesheet" type="text/css" href="style/login.css">
<body bgcolor="#66FFCC">
<center> <br>
<h2>Silahkan Login!</h2> <br>
	<table>
	<form method="post" action="">

	
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username" placeholder="Your Username" class="form-login"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" placeholder="Your Password" class="form-login"></td>
		</tr>
		<br>
		<tr>
		<div>
			<td>  JABATAN  </td>
			
			<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select>
				<option>-Jabatan-</option>
				<option>Admin</option>
				<option>User</option>
			</select>
			</td>
			</div>
		</tr>
		<tr>
			<td></td>
			<td> 
			<input type="submit" name="submit" value="Login" class="tombol">
			 </td>
		</tr>
	
	</body>
	</table>
	</form>
</center>


<?php
 include_once 'lib/koneksi.php';
 
 $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
 
 if(isset($POST['submit'])){
	 $params = array(
		':username' => $POST['username'],
		':password' => $POST['password'],
		
	);	
	$sql = "select * from user where username=':username' and password=':password'";
	$pdo = $con->prepare($sql);
	$pdo->execute($params);
	

 if ($sql==1)
		{
			session_start();
			$_SESSION['username']=$username;
			echo "<script>alert ('berhasil') </script>";
			echo "<script>location.href='menu1.php' </script>";
		}
		else
		{
			echo "<script> alert('gagal log in') </script>";
		}
	}

?>



		
		
