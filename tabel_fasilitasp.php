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
           
	 ?>
	  <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

	<title>tabel Fasilitas</title>
	
</head>
<body style="background: url(img/gambar5.jpg); background-size:cover">

       <nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand navbar-center" href="#">TABEL FASILITAS</a>
        <a class="navbar-brand navbar-right" href="halaman_petugas.php">Kembali</a>


  	
</nav>

	<br><br>
		<div class="container">

		<br><br><br>


	<table class="table table-hover bg-light" border="1">


		<tr class="table-success">
			<th>id fasilitas</th>
			<th>fasilitas</th>
			<th width="300px">keterangan</th>	


			
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_fasilitashotel");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_fasilitashotel']; ?></td>
				<td><?php echo $d['nama_fasilitas']; ?></td>
				<td><?php echo $d['ket']; ?></td>
				
			<?php 
                
		}
		?>
	</table>
	         <td><a href="halaman_admin.php"><button class="btn btn-light">kembali</button></a></td>

	</div>

</body>
</html>