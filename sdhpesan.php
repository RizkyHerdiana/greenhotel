<!DOCTYPE html>
<html>
<head>
	<title>selamat menikmati</title>
    <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

</head>
<?php include 'boostrap.php';


 ?>
<body style="background: url(img/gambar5.jpg); background-size:cover">
<div class="container">
<div class="alert alert-success d-flex alert-dismissible fade show align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
berhasil booking kamar!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	<span aria-hidden="true"></span>
</button>
  </div>
</div>
<?php 



 ?>
 <div class="container bg-light">
  <table class="table table-hover" border="1">

    <tr class="table-success">
      <th>id booking</th>
      <th>Nama</th>
      <th>Tipe Kamar</th>
      <th>check in</th>
      <th>check out</th>
      <th>Jumlah kamar</th>
      <th>jumlah hari</th>
      <th>total harga</th>

    </tr>
    <?php 
    session_start();
    include 'koneksi.php';
    $nama=$_SESSION['username'];
    $data = mysqli_query($koneksi,"SELECT * from tb_pesan WHERE nama = '$nama'");
    while($d = mysqli_fetch_array($data)){
     ?>
     <tr> 
                <td><?php echo $d['id_pesan']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['id_kamar']; ?></td>
                <td><?php echo $d['check_in']; ?></td>
                <td><?php echo $d['check_out']; ?></td>      
                <td><?php echo $d['jumlah_kamar']; ?></td>
                <td><?php echo $d['jumlah_hari']; ?></td>
                <td><?php echo $d['harga']; ?></td>

                </tr>
                <?php
    }
    ?>
    </table>
    </div>

           <td><a href="cetak.php"><button style="width:80px;" class="btn btn-success border border-dark">CETAK</button></a></td>
               <td><a href="halaman_tamu.php"><button style="width:80px;" class="btn btn-light border border-dark">kembali</button></a></td>



        
</body>
</html>

