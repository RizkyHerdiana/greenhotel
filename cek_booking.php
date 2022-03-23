<?php 
include 'koneksi.php';
$tipe = $_GET['tipe'];

if ($tipe=='single') {

header("location:bookingsingle.php");
}
else if ($tipe=='couple') {

header("location:bookingcouple.php");
}

else if ($tipe=='family') {

header("location:bookingfamily.php");
}
else{
	header("location:halaman_tamu.php");


}



?>