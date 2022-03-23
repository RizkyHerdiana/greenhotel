<?php 
include 'koneksi.php';
session_start();
$user= $_SESSION['username'];
$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$email = mysqli_real_escape_string($koneksi,$_POST['mail']);
$alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);
$no_telp = mysqli_real_escape_string($koneksi,$_POST['notelp']);
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));
$level = mysqli_real_escape_string($koneksi,$_POST['level']);

$query = mysqli_query($koneksi,"UPDATE tb_identitas SET nama='$nama',email='$email',alamat='$alamat',no_telp='$no_telp',username='$username',password='$password',level='$level' where username='$user'");

 
   header('location:profil.php');

?>