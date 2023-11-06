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



      <div class="container" style="padding-top: 100px; padding-bottom: 100px;">

      <h1>UPRAVLJANJE</h1>
    
      <div class="d-flex align-items-center justify-content-center">

      <div class="embed-responsive embed-responsive-16by9"> 
      <video class="video-fluid" autoplay loop muted style="">
                  <source src="upravljanje.mp4" type="video/mp4">
      </video>
            </div>
     </div>
      
      <div class="d-flex align-items-center justify-content-center" style="padding-top: 30px;">
      <h2>Donosite bolje odluke s našim alatima za upravljanje u preciznoj poljoprivredi</h2>
      </div>
      <div class="d-flex align-items-center justify-content-center" style="padding-top: 30px;">
      <div class="text-center">
        Učinkovitije postavite i planirajte svoje poslove. Nadgledajte produktivnost svojih strojeva i primjena u pokretu. I na kraju žetvene sezone analizirajte performanse svih poljoprivrednih radova.
      </div>
      </div>
      <div class="d-flex align-items-center justify-content-center" style="padding-top: 30px;">
      <div class="text-center">
        Pridružite se revoluciji pametne poljoprivrede uz John Deere Operations Center™. Bez papira. Bez izgubljenih bilješki. Bez briga!
      </div>
      </div>

      
      <div class="container">
      <div class="d-flex align-items-center justify-content-center" style="padding-top: 70px;">
  <div class="row">
    <div class="col-sm">
    <img src="assets/img/upravljanje1.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-sm">
    <img src="assets/img/upravljanje2.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-sm">
    <img src="assets/img/upravljanje3.jpg" class="img-fluid" alt="">
    </div>
  </div>
</div>
  </div>

  <div class="container">
      <div class="d-flex align-items-center justify-content-center" style="padding-top: 30px;">
  <div class="row">
    <div class="col-sm">
    <h4>Brže postavljanje</h4>
    Postavljanje polja, usjeva i strojeva u servisu John Deere Operations CenterTM štedi vam puno vremena na polju jer možete unaprijed planirati sav svoj rad s alatima kao što je AutoSetup.
    </div>
    <div class="col-sm">
    <h4>Jednostavan nadzor</h4>
    Aktiviranje vaših zadataka kada je potrebno, čime se izbjegavaju kašnjenja ili pogreške s manje iskusnim rukovateljima. Također možete nadzirati performanse u stvarnom vremenu s bilo kojeg uređaja.
    </div>
    <div class="col-sm">
    <h4>Moćni uvidi</h4>
    Analiza učinkovitosti vaših strojeva i aplikacija jednostavna je i može donijeti ogromna poboljšanja u prinosima, financijskoj kontroli i održivosti.
    </div>
  </div>
</div>
  </div>

  <div class="container">
  <div class="row g-0" style="padding-top: 30px;">
  <div class="col-8">
    <img src="assets/img/upravljanje4.jpg" alt="" style="width:100%">
  </div>
  <div class="col-4 bg-secondary text-white">
  <table style="height: 400px;">
  <tbody>
    <tr>
      <td class="align-middle" style="padding-left: 20px;">
      <h4 style="font-size: 1.5vw;">Saznajte više o pametnom upravljanju u poljoprivredi</h4>
      <p style="font-size: 1.0vw;">John Deere Operations CenterTM sigurno pohranjuje sve vaše podatke o stroju i polju i može se povezati s više od 200 neovisnih softverskih tvrtki. 
        To vam omogućuje kombiniranje podataka o stroju i polju s podacima iz drugih izvora precizne poljoprivrede kako biste iskoristili prednosti pametne poljoprivrede. Štoviše, besplatan je!</p></td>
    </tr>
  </tbody>
</table>
</div>
</div>
  </div>


  <div class="container">
  <div class="row g-0">
  <div class="col-4 bg-secondary text-white">
  <table style="height: 400px;">
  <tbody>
    <tr>
      <td class="align-middle" style="padding-left: 15px;">
      <h4 style="font-size: 1.5vw;">Pitajte stručnjaka za brzi početak</h4>
      <p style="font-size: 1.0vw;">Zašto ne učiti od profesionalaca? Jednostavno razgovarajte s jednim od naših stručnjaka za preciznu poljoprivredu kod vašeg lokalnog distributera. 
        Oni će vas u kratkom vremenu uputiti u novi način rada koji vam donosi brojne prednosti</p></td>
    </tr>
  </tbody>
</table>
</div>
  <div class="col-8">
    <img src="assets/img/upravljanje5.jpg" alt="" style="width:100%">
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