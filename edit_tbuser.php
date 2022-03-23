<!DOCTYPE html>
<html>
<head>
      <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

    <meta charset="utf-8">
    <title>form Update</title>
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
        } ?>

      <link rel="stylesheet" type="text/css" href="styleregis.css">

</head>
<body>
    <?php 


    
 include "koneksi.php";
 $id_user = $_GET['id'];
 $query = "select * from tb_identitas where id_user='$id_user'";
 $result = mysqli_query($koneksi, $query);
 $row = mysqli_fetch_assoc($result);
 $nama = $row['nama'];
 $email = $row['email'];
 $alamat = $row['alamat'];
 $no_telp = $row['no_telp'];
 $username = $row['username'];
 $password = $row['password'];
 $level = $row['level'];




?>
        

      <div class="container">
           <h2 class="alert alert-success text-center">UPDATE DATA!</h1>

 
              <form action="update_tbuser.php" method="post">
                 <!-- <label>id user : </label><?php echo "$id_user";?><br> -->
                 <input name="id_user" value="<?= $id_user ?>" hidden>
           <div class="form-group" class="mb-3">
              <label style="width:100%;">
                 Nama Lengkap
                 <input  type="text" name="nama" class="form-control" value="<?php echo "$nama"; ?>" placeholder="Masukan Nama lengkap Anda">
             </label>
           </div>   
            <div class="form-group">
             <label style="width:100%;">
                 Alamat Email
                 <input type="Email" name="mail" class="form-control" placeholder="@gmail.com" value="<?php echo "$email"; ?>" >
             </label>
           </div> 
            <div class="form-group">
             <label style="width:100%;">
                 Alamat
                <input name="alamat" class="form-control" required="required" value="<?php echo "$alamat"; ?>" >
                     
                 </input>

             </label >
         </div> 
           <div class="form-group">
             <label style="width:100%;">
                 No Telp
                 <input type="number" name="notelp" class="form-control" placeholder="Masukan notelp Anda" value="<?php echo "$no_telp"; ?>" >
             </label>
         </div> 

          <div class="row">
              <div class="col-md">
               <div class="form-group">
                 <label style="width:100%;">
                   Buat Username
                    <input type="text" name="username" class="form-control" placeholder="buat username" value="<?php echo "$username"; ?>" >
             </label>
         </div> 

              </div>

            
          </div>
           <div class="form-group">
             <label style="width:100%;">
                
                <label style="width:100%;">Level</label>
                 <select class="form-select" name="level" required>
                     <option value="<?= $level ?>" selected><?= $level ?></option>
                     <option value="petugas">petugas</option>
                     <option value="tamu">tamu</option>
                 </select>
         </div> 
            <br>
           

         <button type="submit" class=" btn btn-primary ">UPDATE</button>
          <button type="reset" class=" btn btn-danger">RESET</button>
           </div> 

    
              </form>
         </label>
       </div>
 </form>

</body>
</html>