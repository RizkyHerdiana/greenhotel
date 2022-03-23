<!DOCTYPE html>
<html>
<head>
    <?php 
include 'boostrap.php';
  session_start();

      if ($_SESSION['level']=="") {
          
      }
?>
    <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

  <title>tabel user</title>


</head>
<body style="background: url(img/gambar5.jpg); background-size:cover">



  <?php
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="hapus"){
      echo "<div class='alert'>Berhasil di hapus!</div>";
    }
  }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand navbar-center" href="#"> Profil</a>
    
</nav>
  <br>
  
  <br/>
  <br/>
  <div class="container">
    <div class="cointainer bg-light">

  <table  class="table table-hover " border="1">
    <tr class="table-success">
      <th>id user</th>
      <th>Nama</th>
      <th>email</th>
      <th>Alamat</th>
      <th>no_telp</th>
      <th>username</th>
      <th>Password</th>
    </tr>
    <?php 
    include 'koneksi.php';
    $nama= $_SESSION['username'];
    $no = 1;
    $data = mysqli_query($koneksi,"SELECT * from tb_identitas where username = '$nama'");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['no_telp']; ?></td>
        <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['password']; ?></td>


      </tr>
      <?php 
    }
    ?>
  </table>
  
    <?php 


    
 include "koneksi.php";
 $query = "select * from tb_identitas where username='$nama'";
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

 
              <form action="update_profil.php" method="post">
                 <!-- <label>id user : </label><?php echo "$id_user";?><br> -->
                 <input name="id_user" value="<?= $id_user ?>" hidden>
           <div class="form-group" class="mb-3">
              <label style="width:100%;">
                 Nama Lengkap
                 <input  type="text" name="nama" class="form-control" value="<?php echo "$nama"; ?>" placeholder="Masukan Nama lengkap Anda"autocomplete="off">
             </label>
           </div>   
            <div class="form-group">
             <label style="width:100%;">
                 Alamat Email
                 <input type="Email" name="mail" class="form-control" placeholder="@gmail.com" value="<?php echo "$email" ; ?>" >
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
                   ubah Username
                    <input type="text" name="username" class="form-control" placeholder="ubah username" value="<?php echo "$username"; ?>" >
             </label>
             <label style="width:100%;">
                   ubah Username
                    <input type="password" name="password" class="form-control" placeholder="ubah Password" value="<?php echo "$password"; ?>" >
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
  </div>
  </div>
           <td><a href="halaman_admin.php"><button class="btn btn-light">kembali</button></a></td>


</body>
</html>
