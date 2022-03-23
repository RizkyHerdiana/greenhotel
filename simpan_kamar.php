<?php 
include 'koneksi.php';
$tipe = mysqli_real_escape_string($koneksi,$_POST['tipe_kamar']);
$harga = mysqli_real_escape_string($koneksi,$_POST['harga']);
$jumlah = mysqli_real_escape_string($koneksi,$_POST['jumlah']);
$gambar = mysqli_real_escape_string($koneksi,$_POST['gambar']);

$fasilitas = mysqli_real_escape_string($koneksi,$_POST['fasilitas']);

mysqli_query($koneksi,"INSERT into tb_kamar values('','$tipe','$harga','$jumlah','$gambar','$fasilitas')");
		header("location:tabel_kamar.php?pesan=input");

?>