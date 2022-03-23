<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data=mysqli_query($koneksi,"DELETE FROM tb_fasilitashotel where id_fasilitashotel='$id'");
$query=mysqli_query($koneksi,"SELECT * FROM tb_fasilitashotel where id_fasilitashotel='$id'");
$cek = mysqli_num_rows($query);
if ($cek==0) {
	header("location:tabel_fasilitas.php?pesan=hapus");

}

?>