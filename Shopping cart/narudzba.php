<?php
session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>John Deere HR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/john deere icon.png" rel="icon">
  <link href="assets/img/john deere icon.png" rel="apple-touch-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="">

</head>
<body>


<?php require_once ("php/header.php"); ?>

<div class="p-3 bg-success text-dark">
<div class="container d-flex align-items-center justify-content-center">
<h2 style="font-size: 2.5vw;">Zahvaljujemo na narudžbi!</h2>
</div>
</div>
<!-- <div class="table-responsive"> -->

  <?php
    include "db.php";
    if(isset($_SESSION['userid'])){
      $userId = (int)$_SESSION['userid'];
      $sqlDohvatiNarudzbe = "SELECT id FROM narudzba WHERE userId=$userId";
      $result = $conn->query($sqlDohvatiNarudzbe);
      if($result->num_rows > 0){
          $brojNarudzbe = 1;
          while($row = $result->fetch_assoc()){
          echo '<div class="table-responsive">';
          echo '<table class="table table-hover table-dark">';
            echo '<thead>';
              echo '<tr>';
                echo '<th>Narudžba' . $brojNarudzbe . '</th>';
                $brojNarudzbe ++;
              echo '</tr>';
              echo '<tr>';
                echo '<th scope="col">Redni broj</th>';
                echo '<th scope="col">Naziv</th>';
                echo '<th scope="col">Cijena</th>';
              echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            $narudzbaId = $row['id'];
            $sqlDohvatiIdKomponente = "SELECT productId FROM narudzbaproduct WHERE narudzbaId=$narudzbaId";
            $result_2 = $conn->query($sqlDohvatiIdKomponente);
            $redniBroj = 1;
            $ukupno = 0;
            if($result_2->num_rows > 0){
                while($row_2 = $result_2->fetch_assoc()){
                  echo '<tr>';
                  echo '<th scope="row">' . $redniBroj . '</th>';
                  $redniBroj ++;
                  $productId = $row_2['productId'];
                  $sqlDohvatiKomponentu = "SELECT * FROM producttb WHERE id=$productId";
                  $result_3 = $conn->query($sqlDohvatiKomponentu);
                  if($result_3->num_rows > 0){
                      while($row_3 = $result_3->fetch_assoc()){
                        $productName = $row_3['product_name'];
                        $productPrice = $row_3['product_price'];
                        $ukupno += (int)$row_3['product_price'];
                      }
                  }
                  echo '<td>' . $productName . '</td>';
                  echo '<td>' . $productPrice . '</td>';
                  echo '</tr>';
                } 
            }
              echo '<tr>';
                echo '<th scope="row">Ukupno</th>';
                echo '<td></td>';
                echo '<td>' . $ukupno . '</td>';
              echo '</tr>';
              echo '</tbody>';
            echo '</table>';
            echo '</div>';
          }
      }
    }
  ?>
 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>