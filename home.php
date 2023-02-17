<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Home</title>
</head>

<body>
<?php

session_start(); //inisialisasi session
require_once('db_login.php');
if (!isset($_SESSION['username'])){
    header('Location: index.php');
}
?>
  <nav class="navbar navbar-expand-lg bg-dark sticky-top">
    <div class="container-fluid">
      <img src="logopbp.png" style="width:15%;margin-right:20px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-success" aria-current="page" href="home.php"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="produk2.php"><strong>Produk</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="show_cart.php"><strong>Keranjang</strong></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <strong>Akun</strong>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profil.php">Info Profil</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--carousel-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slide1.jpg" class="d-block w-100" alt="gambar1" style="height:450px">
        <div class="carousel-caption d-none d-md-block">
          <p class="text-warning">Kami memiliki banyak koleksi laptop gaming dengan model terbaru.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="slide2.jpg" class="d-block w-100" alt="gambar2" style="height:450px">
        <div class="carousel-caption d-none d-md-block">
          <p class="text-warning">Kami memiliki koleksi komponen komputer terbaik yang dapat menambah spesifikasi komputer anda.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="slide3.jpg" class="d-block w-100" alt="gambar3" style="height:450px">
        <div class="carousel-caption d-none d-md-block">
          <p class="text-warning">Kami menyediakan gaming gear dengan kualitas terbaik untuk menunjang anda dalam bermain game.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="row bg-dark text-light">
    <div class="col-sm-12">
      <div class="card bg-dark">
        <div class="card-body">
          <img src="logopbp.png" style="width:8%;margin-right:20px">
          <p class="card-text">Bermain game menjadi salah satu hiburan ketika kamu sedang bosan atau ingin mengisi waktu luang, namun seiring perkembangan zaman, bermain game tidak hanya menjadi hiburan maupun hobi tapi juga bisa menjadi profesi sebagai pemain E-sport. Oleh karena itu sudah ada banyak sekali brand yang memproduksi peralatan khusus untuk main game. Namun tidak semua peralatan khusus main game yang terjual di pasaran memiliki kualitas terbaik dan original. Maka dari itu Hype Gaming hadir menyediakan kebutuhan peralatan gaming terbaik dan terjamin original setiap produknya. Toko ini menjual berbagai macam kebutuhan gaming, yaitu seperti headset gaming, keyboard,VGA Card, monitor, dan masih banyak lagi.</p>
          <button type="button" class="btn btn-success"><a class="nav-link text-light" href="produk2.php">Belanja Sekarang</a></button>
        </div>
      </div>
    </div>
  <div class="col-sm-6">
    <div class="card bg-dark">
      <div class="card-body">
        <h5 class="card-title">Kemudahan Berbelanja</h5>
        <p class="card-text">Dapatkan kemudahan berbelanja di Hype Gaming, Kami menyediakan kebutuhan untuk gaming anda.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card bg-dark">
      <div class="card-body">
        <h5 class="card-title">Juara Pengiriman Delivery</h5>
        <p class="card-text">Dapatkan kemudahan pengiriman barang ke rumah anda dengan minimal belanja 300 ribu radius 10km dari kantor kami.</p>
      </div>
    </div>
  </div>
</div>
<div class="row bg-dark text-light">
  <div class="col-sm-6">
    <div class="card bg-dark">
      <div class="card-body">
        <h5 class="card-title">Berbelanja Dengan Gadget</h5>
        <p class="card-text">Anda bisa memesan produk kami melalui gadget kesayangan anda, belanja praktis dan mudah.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card bg-dark">
      <div class="card-body">
        <h5 class="card-title">Sosial Media</h5>
        <p class="card-text">Follow twitter dan fan page facebook kami untuk mendapatkan update promo special setiap harinya.</p>
      </div>
    </div>
  </div>
</div>
<div class="bg-dark p-4 text-light">
  <h3>Follow Us!</h3>
<button type="button" class="btn btn-primary"><a class="nav-link active text-light" aria-current="page" href="http://facebook.com"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg> Facebook</a></button>
<button type="button" class="btn btn-info"><a class="nav-link active text-light" aria-current="page" href="http://twitter.com"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg> Twitter</a></button>
<button type="button" class="btn" style="background:#FF1493"><a class="nav-link active text-light" aria-current="page" href="http://instagram.com"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg> Instagram</a></button></div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>
</body>

</html>