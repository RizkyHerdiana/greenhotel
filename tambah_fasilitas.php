<!DOCTYPE html>
<html>
<head>
      <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

	<meta charset="utf-8">
	<title>form pendaftaran</title>
        <?php  include 'boostrap.php';
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

      <link rel="stylesheet" type="text/css" href="styleregis.css">

</head>
<body>
        

	  <div class="container">
        
        <h1 class="alert alert-success text-center">TAMBAH FASILITAS!</h1>

 
    <form action="simpan_fasilitas.php" method="post">
         <div class="form-group" class="mb-3">
             <label style="width:100%;">
                 Nama Fasilitas
                 <input type="text" name="nama_fasilitas" class="form-control">
             </label>
         </div>   
          <div class="form-group">
             <label style="width:100%;">
                 Keterangan
                 <input type="text" name="ket" class="form-control" >
             </label>
         </div>
         <div class="form-group">
             <label style="width:100%;">
                 Nama Gambar
                 <input type="text" name="gambar" class="form-control" >
             </label>
         </div>
          
            <br>
                        <br>

         <button  type="submit" class=" btn btn-primary">TAMBAH</button>
        <button type="reset" class=" btn btn-danger">RESET</button>

    
    			
</form>

</body>
</html>