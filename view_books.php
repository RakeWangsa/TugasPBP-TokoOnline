<!--
    Nama    : Rake Keylana Wangsa
    NIM     : 24060120130118
    Lab     : B1
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bookrama</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="view_books.php">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="show_cart.php">Keranjang</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Akun
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profil.php">Info Profil</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
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
        <div class="card-body bg-dark text-light">
        <table class="table text-light">
            <tr>
                <th>ISBN</th>
                <th>Author</th>
                <th>Title</th>
                <th>Price</th>
                <th>Action</th>
            </tr>

        <?php
        // include our login information
        require_once('db_login.php');
        //execute the query
        $query = "SELECT * FROM books ";
        $result = $db->query($query);
        if (!$result){
            die ("Could not connect to the database: <b />". $db->error. "<br>Query:".$query);
        }
        //fetch and display the result
        $tes=0;
        while ($row = $result->fetch_object()){
          echo $tes;
            echo'<tr>';
            echo'<td>'.$row->isbn.'</td>';
            echo'<td>'.$row->author.'</td>';
            echo'<td>'.$row->title.'</td>';
            echo'<td>'.$row->price.'</td>';
            echo "<img src='1.png' width='70' height='90' />";
            //echo'<td><img src="'.$row->foto.'"></td>';
            //echo "<img src='$row->foto' width='70' height='90' />";
            echo'<td><a class="btn btn-primary" href="show_cart.php?id='.$row->isbn.'">Add to Cart</a></td>';
            echo'</tr>';
            $tes++;
        }
        echo '</table>';
        echo '<br />';
        echo 'Total Rows ='.$result->num_rows;
        $result->free();
        $db->close();
        ?>
        </table>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
    </body>
</html>