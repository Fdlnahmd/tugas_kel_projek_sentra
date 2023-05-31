<?php 

include('koneksi.php');

$id_menu = $_GET['id'];

$hapus= mysqli_query($koneksi, "DELETE FROM produk WHERE id='$id_menu'");

if($hapus)
	header('location: Menu Admin.php');
else
	echo "Hapus data gagal";
