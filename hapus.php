<?php
include "koneksi.php";
$id=$_REQUEST["id"];
$hapus = "delete from form where Nama = '$Nama'";
$sql = mysqli_query($koneksi,$hapus);
if ($sql) {
	echo "<script> alert('Data Berhasil Dihapus');
	location.href='tampil.php'</script>";
}
else{
	echo "<script> alert('Data Gagal Dihapus');
	location.href='tampil.php'</script>";
}
?>