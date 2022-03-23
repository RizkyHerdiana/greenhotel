<?php 
include 'koneksi.php';
$id_fasilitas = mysqli_real_escape_string($koneksi,$_POST['id_fasilitashotel']);
$nama = mysqli_real_escape_string($koneksi,$_POST['nama_fasilitas']);
$ket = mysqli_real_escape_string($koneksi,$_POST['ket']);
$gambar = mysqli_real_escape_string($koneksi,$_POST['gambar']);



$query = mysqli_query($koneksi,"UPDATE tb_fasilitashotel SET nama_fasilitas='$nama',ket='$ket',gambar='$gambar'where id_fasilitashotel='$id_fasilitas'");


   header('location:tabel_fasilitas.php');

?>