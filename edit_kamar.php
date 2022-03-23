<!DOCTYPE html>
<html>
<head>
      <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

	<meta charset="utf-8">
	<title>form pendaftaran</title>
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

      <link rel="stylesheet" type="text/css" href="styleregis.css">

</head>
<body>
        
<?php

 include "koneksi.php";
 $id_kamar = $_GET['id'];
 $query = "select * from tb_kamar where id_kamar='$id_kamar'";
 $result = mysqli_query($koneksi, $query);
 $row = mysqli_fetch_assoc($result);
 $tipe_kamar = $row['tipe_kamar'];
 $harga = $row['harga'];
  $gambar = $row['gambar'];

 $jumlah = $row['total_kamar'];
 $fasilitas = $row['fasilitas'];


?>

	  <div class="container">
        
        <h1 class="alert alert-success text-center">EDIT KAMAR!</h1>

 
    <form action="update_kamar.php" method="post">
        <input name="id_kamar" value="<?= $id_kamar?>" hidden>

         <div class="form-group" class="mb-3">
             <label style="width:100%;">
                 Tipe Kamar
                 <input type="text" name="tipe_kamar" class="form-control"  value="<?php echo "$tipe_kamar"; ?>"  >
             </label>
         </div>   
         <div class="form-group" class="mb-3">
             <label style="width:100%;">
                 harga kamar
                 <input type="text" name="harga" class="form-control"  value="<?php echo "$harga"; ?>">
             </label>
         </div>  
         <div class="form-group" class="mb-3">
             <label style="width:100%;">
                total kamar
                 <input type="text" name="total_kamar" class="form-control"  value="<?php echo "$jumlah"; ?>">
             </label>
         </div>  
          <div class="form-group">
             <label style="width:100%;">
                 fasilitas
                 <input type="text" name="fasilitas" class="form-control" value="<?php echo "$fasilitas"; ?>" >
             </label>
         </div> 
          <div class="form-group">
             <label style="width:100%;">
                 gambar
                 <input type="text" name="gambar" class="form-control" value="<?php echo "$gambar"; ?>" >
             </label>
         </div> 


         
        
          
            <br>
                        <br>

         <button style="width: 80px;" type="submit" class=" btn btn-primary ">update</button>
        <button type="reset" class=" btn btn-danger">RESET</button>

    
    			
</form>

</body>
</html>