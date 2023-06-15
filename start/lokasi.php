
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
        <a class="nav-link" href="baru.php">Beranda <span class="sr-only">(current)</span></a>
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

  <button class="btn btn-primary " style=" border-color: #A3D49D; color: #080808ea; box-shadow: 0 4px 8px 0 #6f7174, 0 6px 10px 0 rgba(0, 0, 0, 0.80); background-color:#92c1f7 " type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Area</button>

  <button class="btn btn-primary " style=" border-color: #A3D49D; color: #080808ea; box-shadow: 0 4px 8px 0 #6f7174, 0 6px 10px 0 rgba(0, 0, 0, 0.80); background-color:#92c1f7 " type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Jalan</button>
   
  
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body " style="background-color:#E6F4BE; width: 40%; margin-left: auto; margin-right: auto;" >
      <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Ambon
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
       <a class="dropdown-item" href="uinsu.php">Politeknik Kesehatan Pasapua</a>
      <a class="dropdown-item" href="uinsu.php">Politeknik Negeri Ambon</a>
       <a class="dropdown-item" href="uinsu.php">STII Ambon</a>
        <a class="dropdown-item" href="uinsu.php">Universitas Pattimura</a>
        <a class="dropdown-item" href="uinsu.php">Universitas Darussalam Ambon</a>
        
    </div>
  </div> -->
  <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Balik Papan
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="uinsu.php">Universitas Balik Papan</a>
      <a class="dropdown-item" href="uinsu.php">Universitas Mulia</a>
      <a class="dropdown-item" href="uinsu.php">Universitas Tri Darma</a>
    </div>
  </div>
   <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle " style="color: #080808ea; border-style: none; background-color:#E6F4BE;"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Banda Aceh
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" >
      <a class="dropdown-item" href="uinsu.php">Universitas Syahkuala</a>
      <a class="dropdown-item" href="uinsu.php">UIN Ar-Raniry</a>
      <a class="dropdown-item" href="uinsu.php">Universitas Serambi Mekkah</a>
      <a class="dropdown-item" href="uinsu.php">STKIP BBG Banda Aceh</a>
      <a class="dropdown-item" href="uinsu.php">Universitas Iskandar Muda</a>
      <a class="dropdown-item" href="uinsu.php">STIE Banda Aceh</a>
    </div>
  </div> -->
   <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Bandung
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="uinsu.php">Institut Tekhnologi Bandung</a>
      <a class="dropdown-item" href="uinsu.php">Institut Tekhnologi Nasional</a>
      <a class="dropdown-item" href="uinsu.php">UIN Sunan Gunung Djati</a>
      <a class="dropdown-item" href="uinsu.php">UPI</a>
      <a class="dropdown-item" href="uinsu.php">Universitas Islam Bandung</a>
      <a class="dropdown-item" href="uinsu.php">Universitas Islam Nusantara</a>
      <a class="dropdown-item" href="uinsu.php">Universitas Tekhnologi Telkom</a>
    </div>
  </div>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Banjarmasin
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="uinsu.php">Universitas Lambung Mangkurat</a>
      <a class="dropdown-item" href="uinsu.php">Universitas Islam Kalimantan</a>
      <a class="dropdown-item" href="uinsu.php">UINAB</a>
      <a class="dropdown-item" href="uinsu.php">Politeknik Negeri Banjarmasin</a>
      <a class="dropdown-item" href="uinsu.php">Universitas Achmad Yani</a>
    </div>
  </div>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Batam
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="uinsu.php">UIB</a>
      <a class="dropdown-item" href="uinsu.php">Universitas Batam </a>
      <a class="dropdown-item" href="uinsu.php">Universitas Putera Batam</a>
    </div>
  </div>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Bekasi
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="uinsu.php">Universitas Muhammadiyah Bekasi</a>
      <a class="dropdown-item" href="uinsu.php">STMIK BANI SALEH</a>
      <a class="dropdown-item" href="uinsu.php">STBA JIA</a>
    </div>
  </div>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Bengkulu
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="uinsu.php">Universitas Bengkulu</a>
      <a class="dropdown-item" href="uinsu.php">UM Bengkulu</a>
      <a class="dropdown-item" href="uinsu.php">UNIDEV</a>
    </div>
  </div>
   <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Bogor
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Institut Pertanian Bogor</a>
      <a class="dropdown-item" href="#">Universitas Pakuan</a>
      <a class="dropdown-item" href="#">STIKOM Binaniaga Bogor</a>
      <a class="dropdown-item" href="#">Universitas Ibn Khaldun</a>
    </div>
  </div>
   <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Jakarta Barat
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Universitas Bina Nusantara</a>
      <a class="dropdown-item" href="#">Universitas Trisakti</a>
      <a class="dropdown-item" href="#">Universitas Mercu Buana</a>
      <a class="dropdown-item" href="#">IGI</a>
      <a class="dropdown-item" href="#">UBSI</a>
      
    </div>
  </div>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Jakarta Pusat
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Universitas Yarsi</a>
      <a class="dropdown-item" href="#">Universitas Bung Karno</a>
      <a class="dropdown-item" href="#">Universitas Persada Indonesia</a>
      <a class="dropdown-item" href="#">Saint Mary's Collage</a>
    </div>
  </div>
   <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Jakarta Selatan
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Universitas Pancasila</a>
      <a class="dropdown-item" href="#">Universitas Katolik Indonesia</a>
      <a class="dropdown-item" href="#">Universitas Paramadina</a>
      <a class="dropdown-item" href="#">Universitas Nasional</a>
      <a class="dropdown-item" href="#">Universitas Budi Luhur</a>
      <a class="dropdown-item" href="#">Universitas Bakrie</a>
      <a class="dropdown-item" href="#">Universitas Pertamina</a>
      <a class="dropdown-item" href="#">Sekolah Tinggi Pariwisata</a>
    </div>
  </div>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Jakarta Timur
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Universitas Negeri Jakarta</a>
      <a class="dropdown-item" href="#">Universitas Kristen Indonesia</a>
      <a class="dropdown-item" href="#">Universitas Islam Jakarta</a>
      <a class="dropdown-item" href="#">ITBU</a>
      <a class="dropdown-item" href="#">Universitas Jayabaya</a>
      <a class="dropdown-item" href="#">Institut Bisnis Nusantara</a>
      <a class="dropdown-item" href="#">Universitas Borobudur</a>
    </div>
  </div>
  
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Jakarta Utara
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Universitas Bunda Mulia</a>
      <a class="dropdown-item" href="#">UTA'45</a>
      <a class="dropdown-item" href="#">STIE TRianandra </a>
      <a class="dropdown-item" href="#">Politeknik Manufaktur Astra</a>
    </div>
  </div> -->
  <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Jambi
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Universitas Jambi</a>
      <a class="dropdown-item" href="#">Universitas Batanghari Jambi </a>
    </div>
  </div>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Lampung
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Universitas Lampung</a>
      <a class="dropdown-item" href="#">Institut Tekhnologi Sumatra</a>
      <a class="dropdown-item" href="#">Universitas Malahayati</a>
      <a class="dropdown-item" href="#">Universitas Saburai</a>
    </div>
  </div> -->
      
        <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle " style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Langsa
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div> -->

        <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle  "style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Lhoksemauwe
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div> -->
 <!--  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Malang
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div> -->
         <div class="btn-group "  role="group">
    <button id="btnGroupDrop1 " type="button" class="btn btn-secondary dropdown-toggle " style="color: #080808ea; border-style: none; background-color:#E6F4BE ;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Medan
    </button>
    <div class="dropdown-menu " aria-labelledby="btnGroupDrop1" >
      <a class="dropdown-item" href="uinsu.php">UINSU</a>
      <a class="dropdown-item" href="kota2.php">UNIMED</a>
      <a class="dropdown-item" href="lokasi2.php">UMSU</a>
      <a class="dropdown-item" href="#">UISU</a>
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
  <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Palembang
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div> -->
  <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Pangkal Pinang
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div> -->
        
  
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     Pekan Baru
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div>

  <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Samarinda
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div> -->
  
  <!-- <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style="color: #080808ea; border-style: none; background-color:#E6F4BE;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Semarang
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div> -->

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
           <a href="kota.php" class="btn btn-primary">Lihat</a>
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