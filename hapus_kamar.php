<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data=mysqli_query($koneksi,"DELETE FROM tb_kamar where id_kamar='$id'");
$query=mysqli_query($koneksi,"SELECT * FROM tb_kamar where id_kamar='$id'");
$cek = mysqli_num_rows($query);
if ($cek==0) {
	header("location:tabel_kamar.php?pesan=hapus");

}

?>