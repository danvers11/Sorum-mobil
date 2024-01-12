<?php
include "koneksi.php";
$Nama = $_POST["Nama"];
$alamat = $_POST["alamat"];
$TipeMobil = $_POST["TipeMobil"];
$kreditlunas = $_POST["kreditlunas"];
$Warna = $_POST["Warna"];
$Notelepon = $_POST["Notelepon"];
$Keterangan = $_POST["Keterangan"];


$simpan = "insert into form (Nama,alamat,TipeMobil,kreditlunas,Warna,Notelepon,Keterangan) values ('$Nama','$alamat','$TipeMobil','$kreditlunas','$Warna','$Notelepon','$Keterangan')";

$sql = mysqli_query($koneksi,$simpan);


if ($sql) {
	echo "<script> alert('Data berhasil disimpan');
	location.href='tampil.php'</script>";}
else{
	echo "<script> alert('Data gagal disimpan);
	location.href='pesan.php'<script>";
}
?>