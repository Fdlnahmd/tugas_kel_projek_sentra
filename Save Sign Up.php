<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$password=$_POST["password"]; //untuk password digunakan enskripsi md5
$nama_lengkap=$_POST["nama_lengkap"];
$jenis_kelamin=$_POST["jenis_kelamin"];
$alamat=$_POST["alamat"];
$hp=$_POST["hp"];
$status=$_POST["status"];



//Menginput data ke tabel
  $hasil=mysqli_query($koneksi, "INSERT INTO cust (username,pass,nama_lengkap,jenis_kelamin,alamat,hp,stats) VALUES('$username','$password','$nama_lengkap','$jenis_kelamin','$alamat','$hp','$status')");

//Kondisi apakah berhasil atau tidak
  if ($hasil) 
  {
	echo "<script>
				alert('Anda Berhasil Registrasi !');
				document.location='Login.php';
		  </script>";
  }
  else 
  {
	echo "<script>
				alert('Registrasi Anda Gagal !');
				document.location='Sign Up.php';
		  </script>";
  }
