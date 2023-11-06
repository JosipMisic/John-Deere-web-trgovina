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
          <li><a class="nav-link scrollto active" href="o_nama.php">O nama</a></li>
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
    <img src="assets/img/onamabanner.jpg" class="img-fluid" alt="">
    </div>

    
      <div class="container" style="padding-top: 60px; padding-bottom: 100px;">
      
      <div class="d-flex align-items-center justify-content-center">
      <h1>MI RADIMO DA BI ŽIVOT NAPREDOVAO</h1>
      </div>
      <h4>Mi radimo kao nitko drugi</h4>
          <p>Bavimo se poslom nužnim za život. Radeći za ljude koji nam vjeruju i planet koji 
            nas hrani, stvaramo pametne povezane strojeve koji omogućuju napredak života.
          </p>

          <p>Kupci tvrtke John Deere u središtu su svega što radimo.</p>

          <p>Pozivajući se na više od 180 godina iskustva i terabajte preciznih podataka, dokazujemo da poznamo njih i njihov posao više nego bilo tko drugi. 
            Naša jednostavna tehnologija donosi rezultate koje vide na polju, na radnom mjestu i u bilanci. Osiguravamo neometan pristup dijelovima, uslugama
            i poboljšanjima učinkovitosti od zarade do zamjene pružajući vrhunsku podršku tijekom čitavog vijeka trajanja njihove opreme i uvijek misleći na 
            produktivnost i održivost.</p>

          <p>I nikada ne zaboravljamo da smo ovdje kako bi život napredovao.</p>
        

       

        <div class="row">
  <div class="col-sm-8">
  <img src="assets/img/onama1.jpg" class="img-fluid" alt="" style="width: 100%; height: auto;">
  </div>
  <div class="col-sm-4">
  <table style="height: 400px;">
  <tbody>
    <tr>
      <td class="align-middle">
      <h4 style="font-size: 2vw;">Održivost</h4>
      <p style="font-size: 1.1vw;">Radimo na tome da stvorimo rješenja koja podržavaju sredstva za život naših kupaca i zajednica diljem svijeta za buduće generacije.</p></td>
    </tr>
  </tbody>
</table>
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
  <table style="height: 400px;">
  <tbody>
    <tr>
      <td class="align-middle">
      <h4 style="font-size: 2vw;">Inovacije i tehnologija</h4>
      <p style="font-size: 1.1vw;">Radimo na tome da stvorimo nove načine razmišljanja i razvijemo nove načine provedbe. Ne zato da bismo poremetili status quo, 
        već da bismo razvili rješenja usmjerena na kupce koja njihove zadatke unaprjeđuju na jednostavnije i profitabilnije načine.</p></td>
    </tr>
  </tbody>
</table>
  </div>
  <div class="col-sm-8">
  <img src="assets/img/onama2.jpg" class="img-fluid" alt="" style="width: 100%; height: auto;">
  </div>
</div>

<div class="row">
  <div class="col-sm-8">
  <img src="assets/img/onama3.jpg" class="img-fluid" alt="" style="width: 100%; height: auto;">
  </div>
  <div class="col-sm-4">
  <table style="height: 400px;">
  <tbody>
    <tr>
      <td class="align-middle">
      <h4 style="font-size: 2vw;">Zajednica</h4>
      <p style="font-size: 1.1vw;">Naša je strast jednako odvažna kao i povjerenje koje ona nadahnjuje. Takvo poštovanje treba zaslužiti. 
        Ponoseći se dobro obavljenim poslom, imamo snažan utjecaj u svojim zajednicama i diljem svijeta.</p></td>
    </tr>
  </tbody>
</table>
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
  <table style="height: 400px;">
  <tbody>
    <tr>
      <td class="align-middle">
      <h4 style="font-size: 2vw;">Rukovodstvo</h4>
      <p style="font-size: 1.1vw;">Veliki rukovodioci zaslužni su za velike tvrtke, a naš Glavni izvršni direktor John May dijeli snažne 
        rukovodeće vrijednosti kao i njegovi prethodnici, uključujući integritet, kvalitetu, posvećenost i inovacije.</p></td>
    </tr>
  </tbody>
</table>
  </div>
  <div class="col-sm-8">
  <img src="assets/img/onama4.jpg" class="img-fluid" alt="" style="width: 100%; height: auto;">
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