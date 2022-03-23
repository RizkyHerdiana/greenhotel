<html>
<head>
  <title>halaman login user</title>
  <link rel="stylesheet" type="text/css" href="stylelogint.css">
    <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

</head>
<body>

 <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
  }
 if(isset($_GET['pesan'])){
    if($_GET['pesan']=="daftar"){
      echo "<div class='alert2'>Berhasil Daftar, silahkan login !</div>";
    }
  }
   if(isset($_GET['pesan'])){
    if($_GET['pesan']=="book"){
      echo "<div class='alert'>untuk membooking kamar silahkan login terlebih dahulu !</div>";
    }
  }
   if(isset($_GET['pesan'])){
    if($_GET['pesan']=="user"){
      echo "<div class='alert'>username kosong!</div>";
    }
  }
   if(isset($_GET['pesan'])){
    if($_GET['pesan']=="pass"){
      echo "<div class='alert'>Password kosong!</div>";
    }
  }



  ?>
 
  <div class="kotak_login">
    <p class="tulisan_login">Silahkan login</p>
 
    <form action="cek_login.php" method="post">
      <label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Username .." >
 
      <label>Password</label>
      <input type="password" name="password" class="form_login" placeholder="Password .." >
 
      <input type="submit" class="tombol_login" value="LOGIN">
      

 
      <br/>
      <br>
      <center>
              <center>
        <a class="link" href="daftar.php">Registrasi</a>
        <br>
        <br>
      </center>
    </form>
            <a class="link" href="index.php">kembali ke home</a>

    
  </div>
 
 
</body>
</html>