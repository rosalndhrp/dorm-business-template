<?php
session_start();
    include 'konek.php';
    $koneksi =  mysqli_connect($host,$user,$pass,$db);
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="stylekos.css" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 

    <title>Juragan Kost</title>

    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      
  <a class="navbar-brand" href="#">
 
  Juragan Kost</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
     
    </span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Akun
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="pencari.php">Sebagai Pencari</a>
          <a class="dropdown-item" href="pemilik.php">Sebagai Pemilik</a>
         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bantuan</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  </head>
  <style>
    body{
      font-family: 'Poppins', sans-serif;
    }
  </style>
  <body>
    
    <div class="atas"> 

      <div class="judulbesar" style=" text-shadow: 2px 2px 2px #b0b0b0"><h1><img src="gambar/logo.png" style="width : 100px"; >  JuraganKost.com</h1></div>
       <div class="judulkecil" style="font-size: 25px; color: white ; text-shadow: 2px 5px 6px #000 ">
        <p >Cari Kost dimana saja dan kapan saja </p>
      </div>
      <div class="garisjudul" >
        <div class="mx-auto" style="width: 140px;">
           
            
              <div class="position-absolute" style="bottom: 200px;" >
      
        
       

<a class="btn btn-primary " style=" color: black; border-color: white; width: 100%; /*height: 40px;*/ background-color:#FCCBE2; font-size: 20px; " href="pagepemilik.php" role="button"> Cari Kost Di...</a>

      </div>
          
        </div>
     
  
      </div>
      <br>
<br>
  
    </div>


    
    
    

     
     
 
    

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>