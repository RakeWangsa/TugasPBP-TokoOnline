<!--
    Nama    : Rake Keylana Wangsa
    NIM     : 24060120130118
    Lab     : B1
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Keranjang Belanja</title>
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
            <a class="nav-link text-light" href="produk2.php"><strong>Produk</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="show_cart.php"><strong>Keranjang</strong></a>
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
    <?php
    session_start(); //inisialisasi session
    //$id = $_GET['id'];
    $id = !empty($_GET['id']) ? $_GET['id']:'';
    if($id != ""){
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }

        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]++;
        }else{
            $_SESSION['cart'][$id] = 1;
        }
    }
    ?>
        <div class="card bg-dark text-light">
        <div class="card-header"><strong>Keranjang Saya</strong></div>
        <div class="card-body">
        <br>
        <table class="table text-light" style="width:50%">
            <tr>
                <th>Id Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah Barang</th>
                <th>Total</th>
            </tr>

        <?php
        // include our login information
        require_once('db_login.php');
        $sum_qty = 0;
        $sum_price = 0;
        $barang='';
        $qty=$id;
        if(isset($_SESSION['cart'])){
        if(is_array($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $id => $qty){
                $query = "SELECT * FROM books WHERE isbn ='".$id."'";
                $result = $db->query($query);
                if (!$result){
                    die ("Could not connect to the database: <b />". $db->error. "<br>Query:".$query);
                }
                while ($row = $result->fetch_object()){
                    echo'<tr>';
                    echo'<td>'.$row->isbn.'</td>';
                    echo'<td>'.$row->title.'</td>';
                    $barang=$barang.$row->title;
                    echo'<td>'.$row->price.'</td>';
                    echo'<td>'.$qty.'</td>';
                    $barang=$barang.'('.$qty.') ';
                    $price = $row->price;
                    echo'<td>' .$row->price * $qty.'</td>';
                    $sum_qty = $sum_qty+$qty;
                    $sum_price = $sum_price + ($row->price * $qty);
                }
            }
            echo'<tr><td></td><td></td><td></td><td>'.$sum_qty.'</td><td>'.$sum_price.'</td></tr>';
            $result->free();
            $db->close();
        }else{
            echo '<tr><td colspan="6" align="center">There is no item in shopping cart</td></tr>';
        }
    }
        ?>
       </table>
        Total Barang =  <?php echo $sum_qty; ?><br><br>
        <a class="btn btn-primary" href="produk2.php">Lanjut Belanja</a>
        <a class="btn btn-danger" href="delete_cart.php">Hapus Keranjang</a><br /><br />
        <a class="btn btn-success" href="checkout.php?barang=<?php echo $barang ?>&price=<?php echo $sum_price ?>">Checkout</a><br /><br />
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
    </body>
</html>