<?php
$koneksi=mysqli_connect("localhost", "root", "", "tireg");

//cek koneksi
if ($koneksi) {
	// echo "Koneksi  Berhasil";
}
else {
	echo "Koneksi Gagal";
}
?>