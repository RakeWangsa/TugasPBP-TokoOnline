<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Produk</title>
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
            <a class="nav-link active text-light" aria-current="page" href="home.php"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="produk2.php"><strong>Produk</strong></a>
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

  <h4 class="card-title bg-dark text-light p-3">Produk Kami</h4>
  <div class="row bg-dark text-light">
  <div class="col-sm-6">
    <div class="card border-light" style="background:#333333;width:80%">
      <div class="card-body">
        <img src="1s.png">
        <h5 class="card-title">Laptop</h5>
        <p class="card-text">$999.99</p>
      <a href="show_cart.php?id=1" class="btn btn-primary">Beli</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
  <div class="card border-light" style="background:#333333;width:80%">
      <div class="card-body">
      <img src="2.png">
        <h5 class="card-title">Headset</h5>
        <p class="card-text">$24.99</p>
        <a href="show_cart.php?id=2" class="btn btn-primary">Beli</a>
      </div>
    </div>
  </div>
</div>
<div class="row bg-dark text-light">
  <div class="col-sm-6">
  <div class="card border-light" style="background:#333333;width:80%">
      <div class="card-body">
      <img src="3.png">
        <h5 class="card-title">Mouse</h5>
        <p class="card-text">$9.99</p>
        <a href="show_cart.php?id=3" class="btn btn-primary">Beli</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card border-light" style="background:#333333;width:80%">
      <div class="card-body">
      <img src="4.png">
        <h5 class="card-title">Monitor</h5>
        <p class="card-text">$199.99</p>
        <a href="show_cart.php?id=4" class="btn btn-primary">Beli</a>
      </div>
    </div>
  </div>
</div>
<div class="row bg-dark text-light">
    <div class="col-sm-6">
    <div class="card border-light" style="background:#333333;width:80%">
        <div class="card-body">
        <img src="5.png">
          <h5 class="card-title">Keyboard</h5>
          <p class="card-text">$36.99</p>
          <a href="show_cart.php?id=5" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
    <div class="card border-light" style="background:#333333;width:80%">
        <div class="card-body">
        <img src="6.png">
          <h5 class="card-title">Computer</h5>
          <p class="card-text">$499.99</p>
          <a href="show_cart.php?id=6" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row bg-dark text-light">
    <div class="col-sm-6">
    <div class="card border-light" style="background:#333333;width:80%">
        <div class="card-body">
        <img src="7.png">
          <h5 class="card-title">VGA</h5>
          <p class="card-text">$799.99</p>
          <a href="show_cart.php?id=7" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
    <div class="card border-light" style="background:#333333;width:80%">
        <div class="card-body">
        <img src="8.png">
          <h5 class="card-title">Ram</h5>
          <p class="card-text">$44.99</p>
          <a href="show_cart.php?id=8" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row bg-dark text-light">
    <div class="col-sm-6">
    <div class="card border-light" style="background:#333333;width:80%">
        <div class="card-body">
        <img src="9.png">
          <h5 class="card-title">SSD</h5>
          <p class="card-text">$49.99</p>
          <a href="show_cart.php?id=9" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
    <div class="card border-light" style="background:#333333;width:80%">
        <div class="card-body">
        <img src="10.png">
          <h5 class="card-title">Microphone</h5>
          <p class="card-text">$34.99</p>
          <a href="show_cart.php?id=10" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>
</body>

</html>