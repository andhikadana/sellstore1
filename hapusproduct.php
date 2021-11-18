<?php
include 'koneksi1.php';
$id = $_GET['id'];
mysqli_query($tambah,"delete from product where id='$id'");
header("Location:sellstore.php");
?>