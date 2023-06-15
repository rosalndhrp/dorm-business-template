<?php
    session_start();
    if (isset($_GET['log'])) {
     if ($_GET['log']==1) {
      if ($_GET['log']==2){
        echo "<script> alert('berhasil daftar')</script>";
    }
      }
    

  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css" />

    <title>Juragan Kost</title>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand"  style=" font-family: Lithos Pro;" href="#">Juragan KOST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
      </li>
      
     
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Bantuan</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Nama Kost" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <?php
    if (isset($_SESSION['user'])) {
        echo "<a class='nav-link' href='logout.php' >Logout</a>";
    }
    elseif (isset($_SESSION['mitra'])) {
        echo "<a class='nav-link' href='logout.php' >Logout</a>";
    }

    ?>
  </div>
    </nav>
  </head>
  <body>
    
  <div class="card text-center">
  <div class="card-header" style=" background-color:#92c1f7; border-style: solid; font-family: Lithos Pro;" >
    Juragan Kost
  </div>
  <div class="card-body bg-dark" style="background-color: #92c1f7;" >

    <h5 class="card-title" style="color: white; font-family: rockwell;">Cari Lokasi Berdasarkan</h5>
    <p class="card-text"  > 
       
          <div class="container" >
  <p>
    
      <a class="btn btn-primary" style=" border-color: #A3D49D; color: #080808ea; box-shadow: 0 4px 8px 0 #6f7174, 0 6px 10px 0 rgba(0, 0, 0, 0.80); background-color:#92c1f7 " data-toggle="collapse" href="#multiCollapseExample1" role="button " aria-expanded="false" aria-controls="multiCollapseExample1">Kampus berdasarkan kota</a>


  
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body " style="background-color:#E6F4BE; width: 40%; margin-left: auto; margin-right: auto;" >
      
         <div class="btn-group "  role="group">
    <button id="btnGroupDrop1 " type="button" class="btn btn-secondary dropdown-toggle " style="color: #080808ea; border-style: none; background-color:#E6F4BE ;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Medan
    </button>
    <div class="dropdown-menu " aria-labelledby="btnGroupDrop1" >
      <a class="dropdown-item" href="kampus.php?kampus=uinsu">UINSU</a>
      <a class="dropdown-item" href="kampus.php?kampus=unimed">UNIMED</a>
      <a class="dropdown-item" href="kampus.php?kampus=umsu">UMSU</a>
      <a class="dropdown-item" href="kampus.php?kampus=uisu">UISU</a>
      <a class="dropdown-item" href="#">USU</a>
      <a class="dropdown-item" href="#">UPH</a>
    </div>
  </div>
  <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle " style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Meulaboh
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div> -->
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Padang
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div>
 
  
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Pekan Baru
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div>

 

      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
</div>
</div>

  </p>
  
  </div>
  <div class="card-footer text-muted" style=" background-color:#92c1f7; border-style: solid; ">
    Kota-Kota Besar 
  </div>
</div>
<dir>
     <div class="container">
      <div class="row"> 
         <div class="col-sm">
        
          <div class="card" style="width: 18rem;">
      <img src="gambar/medan.jpg" class="card-img-top" alt="">
       <div class="card-body">
        <h5 class="card-title">Medan</h5>
          <p class="card-text"></p>
           <a href="kota.php?kota=medan" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
       
        <div class="col-sm">
     
          <div class="card" style="width: 18rem;" >
      <img src="gambar/aceh.jpg" class="card-img-top" style="height: 215px;" alt="...">
       <div class="card-body">
        <h5 class="card-title">Aceh</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
        <div class="col-sm">
        
          <div class="card" style="width: 18rem;">
      <img src="gambar/padang.jpg" class="card-img-top" style="height: 215px;" alt="...">
       <div class="card-body">
        <h5 class="card-title">Padang</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
        <br>
        <div class="col-sm">
        <br>
          <div class="card" style="width: 18rem;">
      <img src="gambar/palembang.jpg" class="card-img-top" style="height: 215px;"  alt="...">
       <div class="card-body">
        <h5 class="card-title">Palembang</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
        <br>
        <div class="col-sm">
        <br>
          <div class="card" style="width: 18rem;">
      <img src="gambar/riau.jpg" class="card-img-top" style="height: 215px;" alt="...">
       <div class="card-body">
        <h5 class="card-title">Pekan Baru</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
        <div class="col-sm">
        <br>
          <div class="card" style="width: 18rem;">
      <img src="gambar/bengkulu.jpg" class="card-img-top"  style="height: 215px;" alt="...">
       <div class="card-body">
        <h5 class="card-title">Bengkulu</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>

         <div class="col-sm">
         <br>
          <div class="card" style="width: 18rem;">
      <img src="gambar/lampung.jpg" class="card-img-top"  style="height: 215px;" alt="...">
       <div class="card-body">
        <h5 class="card-title">Lampung</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
         <div class="col-sm">
         <br>
          <div class="card" style="width: 18rem;">
      <img src="gambar/pangkal pinang belitung.jpg" class="card-img-top" style="height: 215px;"  alt="...">
       <div class="card-body">
        <h5 class="card-title">Pangkal Pinang</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
         <div class="col-sm">
         <br>
          <div class="card" style="width: 18rem;">
      <img src="gambar/jakarta.jpg" class="card-img-top" style="height: 215px;"  alt="...">
       <div class="card-body">
        <h5 class="card-title">Jakarta</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
         <div class="col-sm">
         <br>
          <div class="card" style="width: 18rem;">
      <img src="gambar/bandung.jpg" class="card-img-top"  style="height: 215px;" alt="...">
       <div class="card-body">
        <h5 class="card-title">Bandung</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>

         <div class="col-sm">
         <br>
          <div class="card" style="width: 18rem;">
      <img src="gambar/semarang.jpg" class="card-img-top" style="height: 215px;"  alt="...">
       <div class="card-body">
        <h5 class="card-title">Semarang</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
         <div class="col-sm">
         <br>
          <div class="card" style="width: 18rem;">
      <img src="gambar/surabaya.jpg" class="card-img-top"  style="height: 215px;" alt="...">
       <div class="card-body">
        <h5 class="card-title">Surabaya</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
         <div class="col-sm">
         <br>
          <div class="card" style="width: 18rem;">
      <img src="gambar/makassar.jpg" class="card-img-top"  style="height: 215px;" alt="...">
       <div class="card-body">
        <h5 class="card-title">Makassar</h5>
          <p class="card-text"></p>
           <a href="kota2.php" class="btn btn-primary">Lihat</a>
         </div>
          </div>
        </div>
      </div>
    </div>
</dir>

  
   
  
     
     
  
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>