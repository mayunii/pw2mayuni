<!DOCTYPE html>
<html>
<head>
	<title>Proses Registrasi</title>
</head>
<body>

<h1>Selamat Yaa Anda Terdaftar</h1>
<h3>Ini Identitas Anda</h3>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?= $_POST['nama'] ?></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><?= $_POST['username'] ?></td>
	</tr>
	<tr>
		<td>No HP</td>
		<td>:</td>
		<td><?= $_POST['nohp'] ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?= $_POST['alamat'] ?></td>
	</tr>
</table>

</body>
</html>