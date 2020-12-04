<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../koneksi.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($mysql,"select * from users where email='$email' and sandi='$password'");
$data1 = mysqli_fetch_array($data);
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	$_SESSION['nama'] = $data1['nama_lengkap'];
	header("location:../Dashboard.php");
}else{
	header("location:../index.php?pesan=gagal");
}
?>