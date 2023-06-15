<?php
    session_start();
    include 'konek.php';
    
    if (!isset($_SESSION['mitra'])){
      session_destroy();
      header('location:pemilik.php');
    }
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

  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand"  style=" font-family: Lithos Pro;" href="#">Juragan KOST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><?=$_SESSION['mitra']?> <span class="sr-only">(current)</span></a>
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
   

     <div class="container">

      <div class="card-footer text-muted">
  <form action="tambahkost.php" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nama Kost</label>
          <input name="namakos" type="text" class="form-control" id="namakos" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Harga</label>
          <input name="harga" type="text" class="form-control" id="harga" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Alamat</label>
        <input name="alamat" type="text" class="form-control" id="alamat" placeholder="">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Foto</label>
        <input name="foto" type="file" class="form-control" id="foto" placeholder="">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Kota</label>
        <input name="kota" type="text" class="form-control" id="kota" placeholder="">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Slot</label>
        <input name="slot" type="text" class="form-control" id="slot" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
      </div>

         <button type="submit" class="btn btn-primary"  >
         Daftar</button>
  </form>

  </div>


    <div class="row"> 

    <?php
      $mitra = $_SESSION['mitra'];
      $koneksi =  mysqli_connect($host,$user,$pass,$db);
      $sql = "SELECT * FROM kos";
      $querydata = mysqli_query($koneksi , $sql);
      
      while ($hasil = mysqli_fetch_array($querydata)) {
      ?>
        <div class="col-sm">   
      <div class="card" style="width: 18rem;">
        <img src="gambar/kost4.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title"><?php echo($hasil['nama_kos'])?></h5>
          <h5 class="card-title"><?php echo($hasil['kota'])?></h5>
          <h4 class="card-title"><?php echo($hasil['alamat'])?></h4>
          <p class="card-text"><?php echo($hasil['deskripsi'])?></p>

          <a href="juragandetail2.php?id=<?=$hasil['id_kos']?>" class="btn btn-primary">Lihat</a>
        </div>
      </div>
    </div>
    <?php
      }
    ?>

  
  
        <br>

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