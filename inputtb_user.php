<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>form pendaftaran</title>
        <?php  include 'boostrap.php';
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
        

      <div class="container">
           <h2 class="alert alert-success text-center">TAMBAH USER </h1>

 
              <form action="simpan_tbuser.php" method="post">
           <div class="form-group" class="mb-3">
              <label style="width:100%;">
                 Nama Lengkap
                 <input type="text" name="nama" class="form-control" placeholder="Masukan Nama lengkap Anda">
             </label>
           </div>   
            <div class="form-group">
             <label style="width:100%;">
                 Alamat Email
                 <input type="Email" name="mail" class="form-control" placeholder="@gmail.com">
             </label>
           </div> 
            <div class="form-group">
             <label style="width:100%;">
                 Alamat
                 <textarea name="alamat" class="form-control" required="required"></textarea>

             </label >
         </div> 
           <div class="form-group">
             <label style="width:100%;">
                 No Telp
                 <input type="number" name="notelp" class="form-control" placeholder="Masukan notelp Anda">
             </label>
         </div> 

          <div class="row">
              <div class="col-md">
               <div class="form-group">
                 <label style="width:100%;">
                   Buat Username
                    <input type="text" name="username" class="form-control" placeholder="buat username">
             </label>
         </div> 

              </div>

              <div class="col-md-6">
                  
                   <div class="form-group">
             <label style="width:100%;">
                 Buat Password
                 <input type="password" name="password" class="form-control" placeholder="buat password">
             </label>
         </div> 
              </div>
          </div>
           <div class="form-group">
             <label style="width:100%;">
                 daftar sebagai<br>
                 <div class="form-check-inline">
                     <input type="radio" name="level"class="form_daftar" 
                 required="required"value="petugas">
                 <label>petugas</label>
                 </div>
                  <div class="form-check-inline">
                     <input type="radio" name="level"class="form_daftar" 
                 required="required"value="tamu" disabled>
                 <label>tamu</label>
                 </div>
         </div> 
            <br>
           

         <button type="submit" class=" btn btn-primary">DAFTAR</button>
          <button type="reset" class=" btn btn-danger">RESET</button>
           </div> 

    
              </form>
         </label>
       </div>
 </form>

</body>
</html>