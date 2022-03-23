<?php 
session_start ();
include 'koneksi.php';
$nama=$_SESSION['username'];
$masuk = mysqli_real_escape_string($koneksi,$_POST['masuk']);
$keluar = mysqli_real_escape_string($koneksi,$_POST['keluar']);
$date1=date_create("$masuk");
$date2=date_create("$keluar");
$diff =date_diff($date1,$date2);
$datetotal=$diff->format("%d%");
$jumlah = mysqli_real_escape_string($koneksi,$_POST['jumlah']);
$harga=$datetotal*$jumlah*750000;



mysqli_query($koneksi,"INSERT into tb_pesan values('','2','$nama','$masuk','$keluar','$jumlah','$datetotal','Rp.$harga.00','pending')");
		header("location:sdhpesan.php?pesan=berhasil");

?>


