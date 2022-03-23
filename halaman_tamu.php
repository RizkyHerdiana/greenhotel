<!DOCTYPE html>
<html>
<head>
    <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

	<title>Halaman tamu</title>
     <meta name="viewport"content="width-device-width, initial-scale=1" >
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js" ></script>
	  <link rel="stylesheet" type="text/css" href="styleindex.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="stylepetugs.css">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}

 
	?>
   
	  <nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand" href="#"><p>Halo <b><?php echo $_SESSION['username']; ?></b></p></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php 
   if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong> halaman </strong> tidak bisa diakses !
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
  }
 ?>


    <div class="collapse navbar-collapse text-right" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">LOGOUT</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profil.php">PROFIL</a>
        </li>
      </ul>
  </div>
</div>

</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img   style="width: 1000px; height: 700px;" src="img/kamar/tamu1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Green hotel</h5>
        <p>penginapan yang nyaman dan menyatu dengan alam</p>
      </div>
    </div>


    <div class="carousel-item">
      <img  style="width: 1000px; height: 700px;"  src="img/kamar/tamu2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Green house hotel</h5>
        <p>penginapan yang nyaman dan menyatu dengan alam</p>
      </div>
    </div> 



    <div class="carousel-item">
      <img  style="width: 1000px; height: 700px;"  src="img/kamar/tamu3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Green house hotel</h5>
        <p>penginapan yang nyaman dan menyatu dengan alam</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
  <div class="row align-items-start">
   
<br>


<table class="table table-hover" border="1">


 <th >GAMBAR</th>

  <th  style="width :300px; height: 10px; border: 0px;">TIPE</th>
    <th style="width :200px; height:10px; border: 0px;">HARGA</th>
        <th style="width :380px; height:10px; border: 0px;">FASILITAS</th>

  </div>
</div>
 <?php 
    include 'koneksi.php';
    $nama=$_SESSION['username'];
    $data = mysqli_query($koneksi,"SELECT * from tb_kamar");
    while($d = mysqli_fetch_array($data)){
     ?>
     <tr>         

<td><img style="width :340px; height: 210px; border: 0px;" src="img/kamar/<?php echo $d['gambar']; ?>"></td>                <td><?php echo $d['tipe_kamar']; ?></td>
                <td>Rp. <?php echo number_format($d['harga']) ; ?></td>
                <td><?php echo $d['fasilitas']; ?></td>
                  
<?php  
 ?>
    <td  ><a href="cek_booking.php?tipe=<?=$d['tipe_kamar']?>" class="btn btn-primary">Booking</a>
</td>


                </tr>
                <?php
    }
        ?>

  </div>

	<br/>
	<br/>
 </body>
</html>