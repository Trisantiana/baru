<?php 
	include "lib/koneksi.php";
	if (isset($_POST ['submit']))
	{


		$query = "select * from login where username=':username' and password=':password'";
		$result = $con->prepare($query);
		$result->execute();
		
		$i = 1;
		while($row = $result->fetch()){
		?>
		<tr>
			<td><?=$i?></td>
			<td><?=$row['username']?></td>
			<td><?=$row['password']?></td>
		</tr>
		
		<?php
		$i++;
		}
		?>
		
		}
?>
<a href="menu.php"> </a>