<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Profil Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
<body class="bg-dark">
<?php

session_start(); //inisialisasi session
if (!isset($_SESSION['username'])){
    header('Location: index.php');
}
?>
    <body class="bg-dark">
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
            <a class="nav-link text-light" href="produk2.php"><strong>Produk</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="show_cart.php"><strong>Keranjang</strong></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
<br>
<div class="card bg-dark text-light border-light">
    <div class="card-header border-light">Profil Page</div>
    <div class="card-body">
        <p>You are logged in as <b><?php echo $_SESSION['username']; ?></p>
        <br><br>
        <a class="btn btn-primary" href="index.html">Home</a>
        <a class="btn btn-danger" href="logout.php">Logout</a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>
</html>