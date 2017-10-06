<?php
	/*include_once "lib/koneksi.php";
	session_start();
	$username=isset($_SESSION['username']) ?$_SESSION['username']: "";
	if($username=="")
	{
		echo "<script>alert('anda harus login dulu')</script>";
		echo "<script>location.href='login.php' </script>";
	} */
?>
<html>
<head>
	<title> sistem penjualan </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style/admin.css ">
		<script src="../js/jquery-2.1.1.js"></script>

</head>
<body>
	<div id="header">
		<div class="logo">
			<a href="#"> SISTEM <span> PENJUALAN</span> </a>
		</div>
	</div>

<a class="mobile"> MENU </a>

<div id="container">
	<div class="sidebar">
		<ul id="nav">
			<li> <a class="selected" href="menu1.php"> Menu </a> </li>
			<li> <a href="?hal=data-barang">Barang </a> </li>
			<li> <a href="?hal=data-kategori"> Kategori </a> </li>
			<li> <a href="?hal=data-suplier"> Suplier </a> </li>
			<li> <a href="?hal=data-user"> User </a> </li>
		</ul>
	</div>
</div>

<div class="content">
	<?php
		$hal=isset ($_GET['hal']) ?$_GET['hal'] :"dashboard";
		include ("$hal".".php");

	?>
</div>


</div> <!-- #container-->

<script type="text/javascript">

	$(document).ready(function() {
		$("a.mobile").click (function (){
			$(".sidebar").slideToggle('fast');
		});

	window.onresize = function (event) {
		if ($(window).width () > 480){
			$(".sidebar").show();
		};
	
	});
	
</script>

</body>
</html>


	</body>