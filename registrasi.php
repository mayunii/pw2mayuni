<!DOCTYPE html>
<html>
<head>
	<title>Latihan Registrasi</title>
</head>

<body>

<?php
	$kabupaten = [
					[
						id=>1
						"nama_kab"=>"Pontianak"
					],
					[
						id=>2
						"nama_kab"=>"Kubu Raya"
					],
					[
						id=>3
						"nama_kab"=>"Sambas"
					],
					[
						id=>4
						"nama_kab"=>"Singkawang"
					]
				];

	<h1>Registrasi Dulu Yaa</h1>
	<form action="proses.php" method="POST"> 
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td>
					<input type="number" name="nohp">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="20" rows="5"></textarea>
				</td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td>:</td>

				<td>
					<select name="kabupaten">
					<?php  foreach ($kabupaten as $kab): ?>
					<h1>
					<?php echo $kab ['nama_kab']; ?>
					</h1>
					
				<?php endforeach; ?>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jeniskelamin"> Pria <br>
					<input type="radio" name="jeniskelamin"> Wanita
				</td>
			</tr>
			<tr>
				<td>Prodi Pilihan</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="prodipil"> Sistem Informasi <br>
					<input type="checkbox" name="prodipil"> Sistem Komputer <br>
					<input type="checkbox" name="prodipil"> Teknik Informatika
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Simpan">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>