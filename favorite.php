<?php

require 'functions.php';
$resep = query("SELECT * FROM resep WHERE judul = '" . $_GET['name'] . "'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<body>

    <section>
        <nav id="navbar" class="navbar fixed-top">
            <div class="container-fluid d-flex">
              <a href="index.php"><img src="img/logo.png" class="logo"></a>
              <a class="navbar-brand " href="#">Icepee</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <a href="#"><img src="img/logo.png" class="logo"></a>
                  <h5 class="offcanas-title" id="offcanvasNavbarLabel">Icepee</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#"> <i class="bi bi-house"></i> Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#favorite"> <i class="bi bi-heart"></i> Favorite</a>
                    </li>              
                    <li class="nav-item">
                      <a class="nav-link" href="#about11"> <i class="bi bi-info-circle"></i> About</a>
                    </li>              
                  </ul>
                </div>
              </div>
            </div>
        </nav>
                
        <?php if ( $resep != false ): ?>
          <!-- main content -->
          <div class="main-conteet">
              <?php foreach( $resep as $rsp ) : ?>
                  <?php $cara_s = explode('_' ,$rsp['cara']) ?>
                  <?php $bahan_s = explode('_' ,$rsp['bahan']) ?>
              <div class="pembungkus-tampil">
                <div class="judul-tampil"><?= $rsp["judul"]; ?></div>
                  <div class="sasar">
                      <div><img src="img/favorite/<?= $rsp["gambar"]; ?>" width="300" class="img-tampil" ></div>
  
                      <div class="sasaran">
                          <div class="bahan-tampil">
                            <h3>Bahan Bahan</h3>
                              <ul>
                                  <?php foreach ($bahan_s as $bahan) :?>
                                  <li><?= $bahan ?></li>
                                  <?php endforeach; ?>
                              </ul>
                          </div>
                      </div>
                  </div>
  
                  <h4 class="khusus">Cara Membuat</h4>
                  <div class="cara-tampil">
                      <ul>
                          <?php foreach ($cara_s as $cara) :?>
                          <li><?= $cara ?></li>
                          <?php endforeach; ?>
                      </ul>
                  </div>
  
      
              </div class="pembungkus-tampil">
              <?php endforeach; ?>
          </div>
          <!-- end main content -->

        <!-- jika input tidak ditemukan -->
        <?php else  :  ?>
        <div><h1>tidak ditemukan</h1></div>
        <?php endif; ?>
        <!-- end -->

    </section>

    

     <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>                        

</body>
</html>