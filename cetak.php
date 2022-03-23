<!DOCTYPE html>
<html>
<head>
	<title>pembayaran</title>

</head>
  <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

<?php 

    include 'boostrap.php'

    
 ?>
<body>
  <div class="container">
  <h3>GREEN HOUSE HOTEL </h3>
	<table class="table table-hover" border="2">

    <tr>
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
    <script>
    	
    	window.print()
    </script>
    <h5>Tipe kamar :</h5>
    <ul>1 = single</ul>
    <ul>2 = couple</ul>
    <ul>1 = family</ul>
</div>

</body>
</html>