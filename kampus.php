<?php
session_start();
    include 'konek.php';

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
  </div>
    </nav>
  </head>
  <body>
  <br>
  
   <br>
    <div class="judul2">
      <p style="text-align: center; padding-top: 1%; font-family: verdana; font-size: 30px;">Kost Terdekat</p>
    </div>

    <div style=" border-bottom: 5px solid rgb( 90,79,79); width: 50%; margin-left: auto; margin-right: auto;"></div>
    <br>
     
    <div class="container">
      <div class="row"> 


    <?php

      $kampus = $_GET['kampus'];

      $sql = "SELECT * FROM kos WHERE kampus ='$kampus'";
       

      $querydata = mysqli_query($koneksi , $sql);
     
      while ($hasil = mysqli_fetch_array($querydata)) {
      ?>
        <div class="col-sm">   
      <div class="card" style="width: 18rem;">
        <img src="http://localhost/Juragankost/gambar/kost4.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Medan</h5>
          <h4 class="card-title"><?php echo($hasil['alamat'])?></h4>
          <p class="card-text"><?php echo($hasil['deskripsi'])?></p>
          <a href="juragandetail2.php/?id=<?=$hasil['id_kos']?>" class="btn btn-primary">Lihat</a>
        </div>
      </div>
    </div>

    <?php
      }
    ?>
        <br>

    </div>  
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>