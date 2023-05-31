<?php 
session_start();

$kd_produk = $_GET['kd_produk'];

if (isset($_SESSION['pesanan'][$kd_produk]))
{
	$_SESSION['pesanan'][$kd_produk]+=1;
}

else 
{
	$_SESSION['pesanan'][$kd_produk]=1;
}

echo "<script>alert('Produk telah masuk ke pesanan anda');</script>";
echo "<script>location= 'pesanan_pembeli.php'</script>";
