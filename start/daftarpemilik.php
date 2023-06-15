<?php
  session_start();

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
  <a class="navbar-brand" href="#">Juragan KOST</a>
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
  <div class="mx-auto" style="width: 500px; height: 50px;" class="d-inline-block align-top" alt="">
    <div class="card text-center">
  <div class="card-header">
    Daftar akun Juragan Kost
  </div>
  <div class="card-body">
    <h5 class="card-title">Isi kan data diri anda disini</h5>
    <p class="card-text"></p>
    
  </div>
  <div class="card-footer text-muted">
    <form action="prosesdaftarp.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama</label>
      <input name="nama" type="text" class="form-control" id="inputEmail4" placeholder="Nama">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Username</label>
      <input name="username" type="text" class="form-control" id="inputPassword4" placeholder="Username Anda">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Password</label>
    <input name="pass" type="password" class="form-control" id="inputAddress" placeholder="Password Anda">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="inputAddress2" placeholder="misal:Jl. Sutomo Ujung, Medan Gaharu">
  </div>
  <div class="form-group">
    <label for="inputAddress">Telepon</label>
    <input name="telepon" type="password" class="form-control" id="inputAddress" placeholder="misal:082......">
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input name="email" type="email" class="form-control" id="inputAddress" placeholder="misal:rosa@gmail.com">
  </div>
  <div class="form-group">
    <label for="inputAddress">Kelamin</label>
    <input name="kelamin" type="text" class="form-control" id="inputAddress" placeholder="misal: P/L">
  </div>
  
 
  <button type="submit" class="btn btn-primary" >Sign in</button>
</form>

  </div>
</div>
  
  </div>
  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>