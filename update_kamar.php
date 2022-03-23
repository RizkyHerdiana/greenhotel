<?php 
include 'koneksi.php';
$id_kamar = mysqli_real_escape_string($koneksi,$_POST['id_kamar']);
$tipe_kamar = mysqli_real_escape_string($koneksi,$_POST['tipe_kamar']);
$harga = mysqli_real_escape_string($koneksi,$_POST['harga']);
$total = mysqli_real_escape_string($koneksi,$_POST['total_kamar']);
$fasilitas = mysqli_real_escape_string($koneksi,$_POST['fasilitas']);
$gambar = mysqli_real_escape_string($koneksi,$_POST['gambar']);


$query = mysqli_query($koneksi,"UPDATE tb_kamar SET tipe_kamar='$tipe_kamar',harga='$harga',total_kamar='$total',gambar='$gambar',fasilitas='$fasilitas' where id_kamar='$id_kamar'");

   header('location:tabel_kamar.php');

?>