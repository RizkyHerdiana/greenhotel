<!DOCTYPE html>
<html>
<head>
    <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

  <meta charset="utf-8">
  <title>Tipe</title>
   <meta name="viewport"content="width-device-width, initial-scale=1" >
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js" ></script>

  <link rel="stylesheet" type="text/css" href="styleindex.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand" href="#">Green Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-right" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="booking.php">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid banner">
  <div class="text-center">
    <h4 class="display-6">Fasilitas Hotel</h4>
        <h4 class="display-1"><span style="">Green house Hotel</span></h4>
        

  </div>
 </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div class="container">


 
 
 <table class="table table-hover" border="1">


 <th >gambar</th>
  <th  style="width :300px; height: 10px; border: 0px;">Fasilitas</th>
    <th style="width :300px; height:10px; border: 0px;">Keterangan</th>


   
  </div>
</div>
<?php 
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"SELECT * from tb_fasilitashotel");
    while($d = mysqli_fetch_array($data)){
     ?>
     <tr>        
                <td><img style="width :400px; height: 210px; border: 0px;" src="img/kamar/<?php echo $d['gambar']; ?>"></td>
                <td><?php echo $d['nama_fasilitas']; ?></td>
                <td><?php echo $d['ket']; ?></td>                
                </tr>
                <?php
    }
    ?>

    </table>


 <div class="container-fluid">
         
</div>
</div>

      <div class="container-fluid">

         
    <hr style="background-color: black;">
<table>
  <tr>
  <td rowspan="2" width="100%">herdiana2832004@gmail.com</td>
    <td rowspan="2" width="100%">@SMKmahardhikaBatujajar</td>
      

  <th><img style="width:90px; height: 100px;" src="img/logo.gif" class="rounded float-end" alt="...">    
</th>

</table>




</body>
</html>