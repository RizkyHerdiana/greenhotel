<?php 
include 'koneksi.php';
$nama = mysqli_real_escape_string($koneksi,$_POST['nama_fasilitas']);
$ket = mysqli_real_escape_string($koneksi,$_POST['ket']);
$gambar = mysqli_real_escape_string($koneksi,$_POST['gambar']);




mysqli_query($koneksi,"INSERT into tb_fasilitashotel values('','$nama','$ket','$gambar')");
		header("location:tabel_fasilitas.php?pesan=input");

?>