<!DOCTYPE html>
<html>
<head>
		<?php 
include 'boostrap.php';
	session_start();


   if($_SESSION['level']=="tamu"){
        header("location:halaman_tamu.php?pesan=gagal");

    }	
      elseif ($_SESSION['level']=="") {
        	
        header("location:login.php?pesan=gagal");
        }
              elseif ($_SESSION['level']=="petugas") {
        	
        header("location:halaman_petugas.php?pesan=gagal");
        }
	 ?>

	  <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

	<title>tabel user</title>


</head>
<body style="background: url(img/gambar5.jpg); background-size:cover">



	<?php
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="hapus"){
      echo "<div class='alert'>Berhasil di hapus!</div>";
    }
  }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand navbar-center" href="#">TABEL USER</a>
    <a class="navbar-brand navbar-right" href="halaman_admin.php">Kembali</a>

  	
</nav>
	<br>
	
	<br>
	<br>
<div class="container">
	<a href="inputtb_user.php"><button class="btn btn-success border border-dark">+ Tambah user</button></a>
	</div>
	<br/>
	<br/>
	<div class="container">
		<div class="cointainer bg-light">

	<table  class="table table-hover " border="1">
		<tr class="table-success">
			<th>id user</th>
			<th>Nama</th>
			<th>email</th>
			<th>Alamat</th>
			<th>no_telp</th>
			<th>username</th>
			<th>level</th>
			<th>Aksi</th>

		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_identitas");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telp']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['level']; ?></td>


				<td>
					<a 
					href="edit_tbuser.php?id=<?php echo  $d['id_user']; ?>"><button style="width:80px;" class="btn btn-success btn-sm">EDIT</button><br>
				</a>
					<a href="hapus_tbuser.php?id=<?php echo $d['id_user']; ?>"><button style="width:80px;" class="btn btn-danger btn-sm">HAPUS</button>


					</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	  
	  	</div>
	</div>
	       


</body>
</html>
