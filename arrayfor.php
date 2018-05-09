<!DOCTYPE html>
<html>
<head>
	<title>Latihan tabel</title>
</head>
<body>
	<h1>Latihan Tabel Perulangan </h1>
	<table border="1">
		<tr>
			<th>Id Prodi</th>
			<th>Nama Prodi</th>
			<th>Kuota</th>
			<th>Kaprodi</th>
		</tr>

<?php

//$i=2 echo ($i<=100)? "Ilhamsyah":"Renny";

		for ($i=1; $i <=100 ; $i++) {
?>
		<tr>
			<td><?php echo $i ?></td>
			<td>Sistem Informasi</td>
			<td><?php echo $i*3 ?></td>

<?php if ($i%2) : ?>
			<td>Ilhamsyah</td>

<?php else : ?>
			<td>Renny</td>

<?php  endif; ?>

		</tr>






<?php
		}

 ?>

	</table>
</body>
</html>



<?php

	for ($i=1; $i <10 ; $i++) :
	?>

<?php
		echo "coba berulang-ulang <br>";

 ?>

 <?php
		endfor;

 ?>

 