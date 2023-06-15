<?php
  session_start();
  include 'konek.php';

  // if (!isset($_SESSION['mitra'])){
  //     session_destroy();
  //     header('location:pemilik.php');
  //   }
    
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

    <title>Hello, world!</title>
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
        <a class="nav-link" href="#">Bantuan</a>
      </li>
      
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
    </nav>
  </head>
  <body>
  <div class="container-fluid">

  <br>
    <div class="row">
    <div class="col">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSwx2mvO-Z6lS_611TmSXl_a-dkuX7Lgqwo09Avozc20umV1_4Q" class="d-block w-100" alt="...">
    </div>
   
    <div class="carousel-item">
      <img src="https://lh5.googleusercontent.com/-dHPBdTMqABE/UYs_eBr9itI/AAAAAAAAC4k/7-vSFKJPSlo/s640/CIMG0051.JPG" class="d-block w-100 " alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    <div class="col">
   <ul class="nav flex-column">
  <li class="nav-item">
    <!-- <a class="nav-link active" href="#">Detail</a> -->

    
   
   <table class="table">
  <thead class="thead-dark">
    <tr>
      <!-- <th scope="col">No</th>
      <th scope="col">Luas</th>
      <th scope="col">Fasilitas</th>
      <th scope="col">Tarif</th> -->
    </tr>
  </thead>
 
  <tbody>
   <?php
      // $mitra = $_SESSION['mitra'];
      $id_kosi = $_GET['id'];
      $sql = "SELECT * FROM kos WHERE id_kos = '$id_kosi'";
      $koneksi =  mysqli_connect($host,$user,$pass,$db);
      $querydata = mysqli_query($koneksi , $sql);
      
      while ($hasil = mysqli_fetch_array($querydata)) {
          // var_dump($hasil);
        ?>
      <tr>
        <td scope="row">Nama Kos : <?php echo ($hasil['nama_kos'])?></td>
      </tr>  
      <tr>
        <td scope="row">Alamat : <?php echo ($hasil['alamat'])?></td>
      </tr>
      <tr>
        <td scope="row">Harga : <?php echo ($hasil['harga'])?></td>
      </tr>
      <tr>
        <td>
          <a class="btn btn-primary" href="#" role="button" style="background-color: #92c1f7; color: black;">Pesan</a>
        </td>        
      </tr>

   <!--  <tr>
      <td scope="row">1</td>
      <td>7*9 M</td>
      <td>Nama Kos : </td>
      <td>Rp. 800.000/bulan</td>
    </tr> -->
    <!-- <tr>
      <th scope="row"></th>
      <td></td>
      <td>Lemari</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td>Kamar mandi dalam</td>
      <td></td>
    </tr> -->
  </tbody>
   <?php
        }
    
    ?>
<!-- </table>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Kontak</a>
   <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hubungi</th>
      <th scope="col">Nomor </th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pak Budi</td>
      <td>082177456209</td>
      <td>Pemilik Kost</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ibu Nur</td>
      <td>082234345512</td>
      <td>Pemilik Kost</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr> 
  </tbody>
</table>
  </li> -->
<br>
  <!-- <a class="btn btn-primary" href="#" role="button" style="background-color: #92c1f7; color: black;">Pesan</a> -->
  <br>
  <!-- <li class="nav-item">
    <a class="nav-link" href="#">Ulasan</a>
   <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
  </div>
  <input type="text" class="form-control" placeholder="berikan tanggapan" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
  </li> -->
  
</ul>
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