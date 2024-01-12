<?php
include "koneksi.php";
$Nama = $_POST["Nama"];
$alamat = $_POST["alamat"];
$TipeMobil = $_POST["TipeMobil"];
$kreditlunas = $_POST["kreditlunas"];
$Warna = $_POST["Warna"];
$Notelepon = $_POST["Notelepon"];
$Keterangan = $_POST["Keterangan"];

$update = "update form set Nama = '$Nama',alamat = '$alamat',TipeMobil = '$TipeMobil',kreditlunas = '$kreditlunas', Warna = '$Warna', Notelepon = '$Notelepon', Keterangan = '$Keterangan'";

$sql = mysqli_query($koneksi,$update);

if ($sql) {
	echo "<script> alert('Data berhasil disimpan');
	location.href='tampil.php'</script>";
}
else{
	echo "<script> alert(Data gagal disimpan');
	location.href='pesan.php'<script>";
}
?>