<!DOCTYPE html>
<html>
<head>
    <?php 
        session_start();

     if($_SESSION['level']=="tamu"){
        header("location:halaman_tamu.php?pesan=gagal");

    }   
      elseif ($_SESSION['level']=="") {
            
        header("location:login.php?pesan=gagal");
        }
              elseif ($_SESSION['level']=="petugas") {
            
        header("location:halaman_petugas.php?pesan=gagal");
        } ?>
      <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

	<meta charset="utf-8">
	<title>edit fasiitas</title>
        <?php  include 'boostrap.php'; ?>

      <link rel="stylesheet" type="text/css" href="styleregis.css">

</head>
<body>
<?php

   

 include "koneksi.php";
 $id_fasilitas = $_GET['id'];
 $query = "select * from tb_fasilitashotel where id_fasilitashotel='$id_fasilitas'";
 $result = mysqli_query($koneksi, $query);
 $row = mysqli_fetch_assoc($result);
 $nama_fasilitas = $row['nama_fasilitas'];
 $ket = $row['ket'];
  $gambar = $row['gambar'];




?>
       

	  <div style="" class="container">
        
        <h1 class="alert alert-success text-center">EDIT FASILITAS!</h1>

 
    <form action="update_fasilitas.php" method="post">
         <input name="id_fasilitashotel" value="<?= $id_fasilitas?>" hidden>
         <div class="form-group" class="mb-3">
             <label style="width:100%;">
                 Nama Fasilitas
                 <input type="text" name="nama_fasilitas" class="form-control" required="required" value="<?php echo "$nama_fasilitas"; ?>">
             </label>
         </div>   
          <div class="form-group">
             <label  style="width:100%;">
                 Keterangan
                 <input type="text" name="ket" class="form-control"required="required" value="<?php echo "$ket"; ?>" >
             </label>
         </div> 
          <div class="form-group">
             <label  style="width:100%;">
                 Keterangan
                 <input type="text" name="gambar" class="form-control"required="required" value="<?php echo "$gambar"; ?>" >
             </label>
         </div> 
                   
          
            <br>
                        <br>

         <button type="submit" class=" btn btn-primary">UPDATE</button>
        <button type="reset" class=" btn btn-danger">RESET</button>

    
    			
</form>

</body>
</html>