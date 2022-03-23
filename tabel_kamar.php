<!DOCTYPE html>
<html>
<head>
		<?php

	session_start();
		include 'boostrap.php';


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

	<title>tabel kamar</title>
</head>
<?php 
include 'boostrap.php';

	 ?>
<body style="background: url(img/gambar5.jpg); background-size:cover">

<nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand navbar-center" href="#">TABEL KAMAR</a>
    <a class="navbar-brand navbar-right" href="halaman_admin.php">Kembali</a>

  	
</nav>

	

	<br>
	<br>

<div class="container">
	<br>
	<br>
	<a href="tambah_kamar.php"><button class="btn btn-success border border-dark">+ Tambah kamar</button></a>

	<br>
	
	<div style="padding-top:auto;" class="container">
	 	</div>


	<br><br>
			<div class="cointainer bg-light">

	<table  class="table table-hover" border="1">
		<tr class="table-success">
			<th>id kamar</th>
			<th>tipe kamar</th>
			<th>harga kamar</th>
			<th>total kamar</th>
			<th width="300px">fasilitas</th>	
			<th>Aksi</th>	

		
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_kamar");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['tipe_kamar']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['total_kamar']; ?></td>
				<td><?php echo $d['fasilitas']; ?></td>


                
 

				<td>
					<a 
					href="edit_kamar.php?id=<?php echo $d['id_kamar']; ?>"><button style="width: 80px;" class="btn btn-success">Edit</button><br>
				</a>


           <a href="hapus_kamar.php?id=<?php echo $d['id_kamar']; ?>"><button style="width: 80px;"class="btn btn-danger">Hapus</button>
				

					</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</div>
	         <td><a href="halaman_admin.php"><button class="btn btn-light">kembali</button></a></td>

</body>
</html>