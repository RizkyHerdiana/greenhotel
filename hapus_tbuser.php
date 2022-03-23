<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data=mysqli_query($koneksi,"DELETE FROM tb_identitas where id_user='$id'");
$query=mysqli_query($koneksi,"SELECT * FROM tb_identitas where id_user='$id'");
$cek = mysqli_num_rows($query);
if ($cek==0) {
	header("location:tabel_user.php?pesan=hapus");

}

?>