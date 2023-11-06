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

<body>
<section class="vh-150" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="assets/img/John deere prijava logo.jpg"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Prijava u korisnički račun MojJohnDeere</h4>
                  </div>
  
                  <form action="includes/login.inc.php" method="post">
                    <p>Molimo unesite svoje podatke:</p>
  
                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example11" class="form-control" name="uid" placeholder="Unesite korisničko ime" />
                      <label class="form-label" for="form2Example11">Korisničko ime</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" name="pwd" placeholder="Unesite lozinku" class="form-control" />
                      <label class="form-label" for="form2Example22">Lozinka</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn btn-outline-warning" type="submit" name="submit">Prijava</button>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Nemate račun?</p>
                      <a class="btn btn-outline-success" href="registracija.php" role="button">Kreirajte novi</a>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <img src="assets/img/9rx.jpg" style="width: 100%; height: auto;" alt="logo">
                  <h4 class="mb-4" style="padding: 10px;">MyJohnDeere: Podaci o vašoj floti na jednom mjestu, kada i gdje vam trebaju.</h4>
                  <p class="small mb-0" style="padding: 10px">Dobro došli u vaše iskustvo vlasništva.
                    Nove značajke obuhvaćaju mogućnost pregledavanja vaše flote, naručivanje traktora, 
                    pristupanje jamstvenim informacijama i upravljanja odnosima s vašim zastupnikom. 
                    Naš cilj je da vam olakšamo pronalaženje vaših informacija i dodavanje vrijednosti.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 

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