<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Checkout</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body class="bg-dark">
    <?php
session_start();
require_once('db_login.php');
if (!isset($_SESSION['username'])){
  header('Location: index.php');
}
// mengecek apakah user belum menekan tombol submit
if (isset($_POST["submit"])){
    $valid = TRUE; //flag validasi

    $nama = test_input($_POST['nama']);
    if ($nama == ''){
        $error_nama = "Nama is required";
        $valid = FALSE;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $nama)){
        $error_nama = "Only letters and white space allowed";
        $valid = FALSE;
    }

    $email= $_SESSION['username'];
    
    $hp = test_input($_POST['hp']);
    if ($hp == ''){
        $error_hp = "hp is required";
        $valid = FALSE;
    }else if (!is_numeric($hp)){
      $error_hp = "Only number allowed";
      $valid = FALSE;
  }
    
    $alamat = test_input($_POST['alamat']);
    if ($alamat == ''){
        $error_alamat = "alamat is required";
        $valid = FALSE;
    }

    $barang = $_GET['barang'];
    $harga = $_GET['price'];

//add data into database
if ($valid){

    //asign a query
    $query = " INSERT INTO checkout (nama, email, hp, alamat, barang, harga) VALUES ( '$nama', '$email', '$hp', '$alamat', '$barang', '$harga')";
    echo $query;
    //execute the query
    $result = $db->query($query);
    if (!$result){
        die ("Could not the query the database: <br />" . $db->error . '<br>Query:' .$query);
    } else{
        $db->close();
        header('Location: show_cart.php');
    }
}
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
            <a class="nav-link text-light" href="produk2.php"><strong>Produk</strong></a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-success" href="show_cart.php"><strong>Keranjang -></strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="checkout.php?barang=<?php echo $barang ?>&price=<?php echo $sum_price ?>"><strong>Checkout</strong></a>
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
  <form method="POST" autocomplete="on" action="">
<div class="container  text-light">
<div class="mb-3">
<label for="nama" class="form-label">Email</label>
<input class="form-control" type="text" name="email" value="<?php echo $_SESSION['username']; ?>" disabled readonly>
</div>
<div class="mb-3">
  <label for="nama" class="form-label">Nama</label>
  <input type="text" class="form-control" id="nama" name="nama" value="<?php if(isset($nama)) echo $nama;?>">
  <div class="text-danger"><?php if (isset($error_nama)) echo $error_nama;?></div>
</div>
<div class="mb-3">
  <label for="hp" class="form-label">No HP</label>
  <input type="text" class="form-control" id="hp" name="hp" value="<?php if(isset($hp)) echo $hp;?>">
  <div class="text-danger"><?php if (isset($error_hp)) echo $error_hp;?></div>
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" id="alamat" name="alamat" rows="3" value="<?php if(isset($alamat)) echo $alamat;?>"></textarea>
  <div class="text-danger"><?php if (isset($error_alamat)) echo $error_alamat;?></div>
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Barang yang dibeli</label>
<input class="form-control" type="text" value="<?php echo $_GET['barang'] ?>" disabled readonly>
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Total Harga</label>
<input class="form-control" type="text" value="<?php echo $_GET['price'] ?>" disabled readonly>
</div>
<a type="submit" class="btn btn-danger mt-3" href="show_cart.php">Kembali</a>
<button type="submit" class="btn btn-success mt-3" name="submit" value="submit">Simpan</button>
        </div>
</form>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
    </body>
</html>