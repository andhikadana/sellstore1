<?php
session_start();
//include database
include 'database.php';
//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
//menyeleksi data dari database
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($database,"select * from admin where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>