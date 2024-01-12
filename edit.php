<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Pembelian</title>
	<style type="text/css">
		td
	</style>
</head>
<body>

	<?php
	include "koneksi.php";
	$Nama = $_REQUEST["Nama"];
	$tampil = "select * from form where Nama = '$Nama'";
	$sql = mysqli_query($koneksi,$tampil);
	$data = mysqli_fetch_array($sql);
	?>


		<form action="update.php?Nama=<?= $data['Nama'] ?>" method = "POST">
	
		<table border="1" align="center" width="400">
			
			<tr align="center">
				<td colspan="3">Data Pembelian</td>
			</tr>

			<tr>
				<td align="left">Nama</td>
				<td align="center">:</td>
				<td><input type="text" name="Nama" value="<?= $data['Nama'] ?>">
				</td>
			</tr>

			<tr>
				<td align="left">alamat</td>
				<td align="center">:</td>
				
					<td><input type="text" name="alamat" value="<?= $data['alamat'] ?>">
				</td>
			</tr>

			<tr>
				<td align="left">TipeMobil</td>
				<td align="center">:</td>
				<td><input type="text" name="TipeMobil" value="<?= $data['TipeMobil'] ?>">
				</td>
				</td>
			</tr>

			<tr>
				<td align="left">kreditlunas</td>
				<td align="center">:</td>
				<td><input type="text" name="kreditlunas" value="<?= $data['kreditlunas'] ?>">
				</td>
			</tr>

			<tr>
				<td align="left">Warna</td>
				<td align="center">:</td>
				<td><input type="text" name="Warna" value="<?= $data['Warna'] ?>">
				</td>
				</td>
			</tr>

			<tr>
				<td align="left">Notelepon</td>
				<td align="center">:</td>
				<td><input type="text" name="Notelepon" value="<?= $data['Notelepon'] ?>">
				</td>
			</tr>

			<tr>
				<td align="left">Keterangan</td>
				<td align="center">:</td>
				<td><input type="text" name="Keterangan" value="<?= $data['Keterangan'] ?>">
				</td>
			</tr>

			<tr align="center">
				<td colspan="3">
					<button name="input" type="submit">Transaksi</button>
					<button name="batal" type="reset">Batal</button>
				</td>
			</tr>

		</table>
	</form>
	<br>
	<br>
	<a href="tampil.php">Lihat Data</a>
</body>
</html>

