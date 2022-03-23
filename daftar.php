<!DOCTYPE html>
<html>
<head>
      <link rel="icon"  href="img/gambar4.jpg" type="img/kamar/fasilitas2.jpg">

	<meta charset="utf-8">
	<title>form pendaftaran</title>
        <?php  include 'boostrap.php'; ?>

      <link rel="stylesheet" type="text/css" href="styleregis.css">

</head>
<body>
        

	  <div class="container">
        
        <h1 class="alert alert-success text-center">SILAHKAN MASUKAN DATA!</h1>

 
    <form action="simpan.php" method="post">
         <div class="form-group" class="mb-3">
             <label style="width:100%;">
                 Nama Lengkap
                 <input type="text" name="nama" class="form-control" required="required" placeholder="Masukan Nama lengkap Anda">
             </label>
         </div>   
          <div class="form-group">
             <label style="width:100%;">
                 Alamat Email
                 <input type="Email" name="mail" class="form-control" required="required" placeholder="@gmail.com">
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
                 <input type="number" name="notelp" required="required" class="form-control" placeholder="Masukan notelp Anda">
             </label>
         </div> 

          <div class="row">
              <div class="col-md">
               <div class="form-group">
                 <label style="width:100%;">
                   Buat Username
                    <input type="text" name="username" class="form-control" required="required" placeholder="buat username">
             </label>
         </div> 

              </div>

              <div class="col-md-6">
                  
                   <div class="form-group">
             <label style="width:100%;">
                 Buat Password
                 <input type="password" name="password"required="required" class="form-control" placeholder="buat password">
             </label>
         </div> 
              </div>
          </div>
           
          
            <br>
                        <br>

         <button type="submit" class=" btn btn-primary">DAFTAR</button>
        <button type="reset" class=" btn btn-danger">RESET</button>

    
    			
</form>

</body>
</html>