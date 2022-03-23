<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>booking family</title>
	<link rel="stylesheet" type="text/css" href="styleregist.css">
</head>
  <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

<body>
    <?php 
    session_start();

    if($_SESSION['level']==""){
        header("location:login.php?pesan=gagal");
    }
    ?>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pemesanan kamar</title>
		<?php include 'boostrap.php' ?>

	<link rel="stylesheet" type="text/css" href="styleregis.css">
	   <form action="simpan_family.php" method="post">
	   	<br>
	   	<br>
	   	<br>
       <div class="container">
        <h2 class="alert alert-success text-center">FAMILY ROOM!</h1>

 
    <form action="simpan_family.php" method="post">
         <div class="form-group" class="mb-3">

             <label style="width:100%;">
                 masukan tanggal check in<br>
                 <input type="date" name="masuk" class="form-control" placeholder=""required="required">
             </label>
         </div>   
          <div class="form-group" class="mb-3">
             <label style="width:100%;">
                 masukan tanggal check out<br>
                 <input type="date" name="keluar" class="form-control" placeholder=""required="required">
             </label>
         </div> 
           
           <div class="form-group">
             <label style="width:100%;">
                 Jumlah<br>
                 <input type="number" name="jumlah" class="form-control" placeholder="jumlah kamar"required="required">
             </label>
         </div> 

        <br>
         <button type="submit" class=" btn btn-primary">PESAN</button>
        <button type="reset" class=" btn btn-danger">RESET</button>

    
    			
</form>
         </div>
</head>
<body>

