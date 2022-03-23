<?php 
include 'koneksi.php';
session_start ();

$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$email = mysqli_real_escape_string($koneksi,$_POST['mail']);
$alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);
$telp = mysqli_real_escape_string($koneksi,$_POST['notelp']);
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));
$submit = mysqli_real_escape_string($koneksi,$_POST['submit']);

mysqli_query($koneksi,"INSERT into tb_identitas values('','$nama','$email','$alamat','$telp','$username','$password','tamu')");
		header("location:login.php?pesan=daftar");

?>

<h2>data berhasil di input ke database</h2>