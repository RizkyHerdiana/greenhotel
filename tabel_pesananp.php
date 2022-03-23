<?php 
	session_start();

  
   if($_SESSION['level']=="tamu"){
        header("location:halaman_tamu.php?pesan=gagal");

    }	
      elseif ($_SESSION['level']=="") {
        	
        header("location:login.php?pesan=gagal");
        }
            


		include 'koneksi.php';
		$data = mysqli_query($koneksi,"SELECT * from tb_pesan");
		if (isset ($_POST['cari'])){
    $key=$_POST['keyword'];
    $data = mysqli_query ( $koneksi,"	SELECT * from tb_pesan where nama like '%$key%' or check_in like '%$key%'");
    	

	 

		}
	


 ?>
<!DOCTYPE html>
<html>
<head>
	  <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tabel pesanan</title>



</head>
<body style="background: url(img/gambar5.jpg); background-size:cover">
	<?php
	include 'boostrap.php';
 
?><nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand navbar-center" href="#">TABEL BOOKING</a>
        <a class="navbar-brand navbar-right" href="halaman_petugas.php">Kembali</a>

  	
</nav>


	<br>
	<br>

</nav>
<div style="padding-top: 10px;" class="container">
	

 <?php 


  ?>

<br><br>

  <form action="" method="POST">

  <input style="width: 200px;" class="form-control" type="text" name="keyword" autofocus placeholder="seacrh" autocomplete="off"><button class="button btn btn-success border border-dark" type="submit" 
  name="cari">CARI</button>

                    
  </form>
  <br>
<br>
<br>
<div class="container">
		<div class="cointainer bg-light">
	<table class="table table-hover" border="1">
		<tr class="table-success">
			<th>Id Pesan</th>
			<th>Id kamar</th>
			<th>Nama</th>
			<th>check in</th>
			<th>check out</th>
			<th>Jumlah kamar</th>
			<th>jumlah hari</th>
			<th>status</th>
						<th>aksi</th>

		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_kamar']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['check_in']; ?></td>
                                <td><?php echo $d['check_out']; ?></td>
                               
                                <td><?php echo $d['jumlah_kamar']; ?></td>
				<td><?php echo $d['jumlah_hari']; ?></td>
				<td><?php echo $d['status']; ?></td>


				<td>
					<form method="POST" action="validasi.php">
						<input name="id_pesan" value="<?= $d['id_pesan'] ?>" hidden>
						<button style="width:80px" class="btn btn-success btn-sm" type="submit">Check_in</button>
					</form>
					<form method="POST" action=check_out.php>
						<input name="id_pesan" value="<?= $d['id_pesan'] ?>" hidden>
						<button style="width:80px" class="btn btn-danger btn-sm"  type="submit">Check_out</button>
					</form>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</div>
</div>
	         <td><a href="halaman_petugas.php"><button class="btn btn-light">kembali</button></a></td>

</body>
</html>

