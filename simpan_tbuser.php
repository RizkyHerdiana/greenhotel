<?php 
include 'koneksi.php';
$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$email = mysqli_real_escape_string($koneksi,$_POST['mail']);
$alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);
$telp = mysqli_real_escape_string($koneksi,$_POST['notelp']);
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));
$submit = mysqli_real_escape_string($koneksi,$_POST['submit']);
$level= mysqli_real_escape_string($koneksi,$_POST['level']);

mysqli_query($koneksi,"INSERT into tb_identitas values('','$nama','$email','$alamat','$telp','$username','$password','$level')");
		header("location:tabel_user.php?pesan=input");

?>