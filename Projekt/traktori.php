<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>John Deere HR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Ikone -->
  <link href="assets/img/john deere icon.png" rel="icon">
  <link href="assets/img/john deere icon.png" rel="apple-touch-icon">

  <!-- Google Fontovi -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Fileovi -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Glavni CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      
      <a href="index.php" class="logo"><img src="assets/img/John Deere logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Početna</a></li>
          <li><a class="nav-link scrollto disabled" href="#about">Hrvatska</a></li>
          <li><a class="nav-link scrollto disabled" href="#why-us">Proizvodi</a></li>
          <li><a class="nav-link scrollto disabled" href="#team">6R modeli</a></li>
          <li><a class="nav-link scrollto disabled" href="#contact">Kontakt</a></li>
          <li><a class="nav-link scrollto " href="o_nama.php">O nama</a></li>
          <li class="dropdown"><a href="#"><span>Oprema</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="upravljanje.php">Upravljanje</a></li>
              <li><a href="traktori.php">Traktori</a></li>
            </ul>
          </li>

          <ul class="menu-member">
            <?php
              if(isset($_SESSION["userid"]))
              {
            ?>
              <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
              <li><a class="getstarted" href="includes/logout.inc.php">Odjava</a></li>
            <?php
              }
              else
              {
            ?>
              <li><a class="getstarted" href="prijava.php">Prijava</a></li>
            <?php
              }
            ?>
            </ul>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- Kraj Header-a -->



    <div class="d-flex align-items-center justify-content-center">
    <img src="assets/img/6rbanner.jpg" class="img-fluid" alt="">
    </div>

    
      <div class="container" style="padding-top: 50px; padding-bottom: 100px;">
      
      <h1>Traktori John Deere</h1>
      <h4>Moćan, svestran, produktivan - Stvoren za vaše poljoprivredne primjene</h4>
          <p>Zamislite modernu poljoprivredu bez traktora nije moguće. Ovi strojevi pomažu farmerima širom svijeta da završe svoj posao. 
            A budući da ovaj posao može biti ne samo raznolik, već i pun izazova, potrebna im je odgovarajuća oprema, -
            svestrani strojevi za vuču, oranje i pumpanje, ali i na koje se mogu pouzdati svaki dan.
          </p>

          <p>Kompaktni, srednji ili veliki - bez obzira na veličinu, John Deere traktori dizajnirani su da objedine sve 
          osobine koje su vam potrebne za svakodnevni rad na polju, farmi ili u vrtu. 
          Bilo da više volite kombinaciju male veličine, okretnosti i proširivosti ili čistu konjsku snagu i 
          izvanrednu efikasnost, naši poljoprivredni traktori pomaknut će vas i vaše poslovanje unaprijed. Pronađite svoje ispod!</p>
        

        <div class="d-flex align-items-center justify-content-center">
      <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="assets/img/9rx.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Serija 9</h4>
      <p class="card-text"><small class="text-muted">HP</small></p>
      <p class="card-text"><h2>484 - 691</h2></p>
      <div class="d-flex justify-content-center">
      <a class="btn btn-warning" href="detalji9.php" role="button">Pogledajte 9 seriju</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="assets/img/John Deere 8R naslovna.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Serija 8</h4>
      <p class="card-text"><small class="text-muted">HP</small></p>
      <p class="card-text"><h2>308 - 443</h2></p>
      <div class="d-flex justify-content-center">
      <a class="btn btn-warning" style="" href="detalji8.php" role="button">Pogledajte 8 seriju</a>
            </div>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="assets/img/John Deere 7R naslovna.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Serija 7</h4>
      <p class="card-text"><small class="text-muted">HP</small></p>
      <p class="card-text"><h2>297 - 385</h2></p>
      <div class="d-flex justify-content-center">
      <a class="btn btn-warning" href="detalji7.php" role="button">Pogledajte 7 seriju</a>
            </div>
     
    </div>
            </div>
  </div>
</div>
            </div>

  </main><!-- Kraj #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="d-flex justify-content-center">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>John Deere</h3>
              <p>
                Jablanova 16 <br>
                31000 Osijek<br><br>
                <strong>Kontakt:</strong> +385 31 297 341<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Proizvodi i podrška</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Oprema</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dijelovi i usluge</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pronađite trgovca</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Informacije o popravku i održavanju</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Informacije o tvrtki</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="o_nama.php">O nama</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inovacije</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Održivost</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">O našem nacionalnom zastupniku</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Novosti i obavijesti</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
            </div>

    <div class="container">
      <div class="copyright">
        <strong><span>Autorsko pravo© 2023 Deere & Company</span></strong>. Sva prava pridržana.
      </div>
    </div>
  </footer><!-- Kraj Footera -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Fileovi -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Glavni JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>