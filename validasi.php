<?php 
include 'koneksi.php';
if (isset($_POST['id_pesan'])) {
	$id = $_POST['id_pesan'];
	mysqli_query($koneksi,"UPDATE tb_pesan SET status = 'Check_in' where id_pesan = '$id'");
	header("location:tabel_pesanan.php");
}
?>