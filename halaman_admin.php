<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
    <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">
    <link rel="stylesheet" type="text/css" href="stylequote.css">


</head>
<body>

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
        }
        
    include 'koneksi.php';

    $tb1 = mysqli_query($koneksi,"select * from tb_identitas");
    $cn1 =mysqli_num_rows($tb1);
    $tb2 = mysqli_query($koneksi,"select * from tb_kamar");
    $cn2  = mysqli_num_rows($tb2);
    $tb3 = mysqli_query($koneksi,"select * from tb_pesan");
    $cn3  = mysqli_num_rows($tb3);
    $tb4 = mysqli_query($koneksi,"select * from tb_fasilitashotel");
    $cn4   = mysqli_num_rows($tb4);
    while($d = mysqli_fetch_array($tb1)){
    }

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-tranparant shadow-lg fixed-top">
  <div style="font-weight: bold;  " class="container">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['username']; ?></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-right" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabel
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          	<li><a class="dropdown-item" href="tabel_user.php">User</a></li>
            <li><a class="dropdown-item" href="tabel_kamar.php">kamar</a></li>
            <li><a class="dropdown-item" href="tabel_pesanan.php">Bookingan</a></li>
            <li><a class="dropdown-item" href="tabel_fasilitas.php">Fasilitas hotel</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profil.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
             </ul>
    </div>
  </div>

  	
</nav>
      <img  style="width: 100%; height: 700px;"  src="img/gambar4.jpg" class="img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Green house hotel</h3>
        <p>Halaman Admin</p>
      </div>
      <br>
      <br>

<table style="width:100%; padding-left: 20px;" table table>
<th><div class="card " style=" padding-left: 5px ; padding-top: 5px; width: 18rem; height: 12rem;">
<img style="width:60px; height: 60px;" src="img/user.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">JUMLAH USER</h5>
    <h6 class="card-subtitle mb-2 text-muted "><?php echo $cn1; ?></h6>

  </div>
</div></th>

<th><div class="card " style="width: 18rem; height: 12rem;">
    <img style="padding-left: 5px ; width:60px;  padding-top: 5px; height: 60px;" src="img/bed.png" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">JUMLAH KAMAR</h5>
    <h6 class="card-subtitle mb-2 text-muted "><?php echo $cn2; ?></h6>

  </div>
</div></th>


<th><div class="card " style="width: 18rem; height: 12rem;">
        <img style="padding-left: 5px ; width:60px;  padding-top: 5px; height: 60px;" src="img/booking.png" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">JUMLAH BOOKINGAN</h5>
    <h6 class="card-subtitle mb-2 text-muted "><?php echo $cn3; ?></h6>

  </div>
</div></th>


<th><div class="card " style="width: 18rem; height: 12rem;">
        <img style="padding-left: 5px ; width:60px;  padding-top: 5px; height: 60px;" src="img/fasilitas.png" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">JUMLAH FASILITAS HOTEL</h5>
    <h6 class="card-subtitle mb-2 text-muted "><?php echo $cn4; ?></h6>




</table>






<br>

<br>


<br>

<br>

<br>

<br>


<section class="py-5">
    <div class="container">
        <!-- FOR DEMO PURPOSE -->
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <header class="text-center pb-5">
                    <h1 class="h2">Admin</h1>
                    <p>tetap bekerja walau badan lelah.</p>
                </header>
            </div>
        </div><!-- END -->


        <div class="row">
            <div class="col-lg-6 mx-auto">

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Daripada belajar dari kesuksesan orang lain, belajarlah dari kesalahan mereka. Sebagian besar orang yang gagal memiliki alasan yang sama (gagal) sedangkan kesuksesan dapat dikaitkan dengan berbagai macam alasan.</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Jack ma
                    </footer>
                </blockquote><!-- END -->

            </div>
        </div>
    </div>
</section>



</body>
 
</html>