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

  <!-- Poveznica sa CSS Fileom -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      
      <a href="index.php" class="logo"><img src="assets/img/John Deere logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Početna</a></li>
          <li><a class="nav-link scrollto" href="#about">Hrvatska</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Proizvodi</a></li>
          <li><a class="nav-link scrollto" href="#team">6R modeli</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontakt</a></li>
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

  <!-- ======= Carousel sekcija ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active position-relative">
            <div class="carousel-container">
              <div class="carousel-content">
                <video class="video-fluid" autoplay loop muted style="height: 1550px;">
                  <source src="video1.mp4" type="video/mp4">
              </video>
              <div class="d-flex align-items-center justify-content-center">
              <h2 class="carousel-caption animate__animated animate__fadeInDown" style="top: 400px;">Nova 9R serija</h2>
              <p class="carousel-caption animate__animated animate__fadeInUp" style="top: 500px;">Izgradili smo traktore John Deere serije 9 kako bi nadmašili sva očekivanja koja možda imate od traktora na ovoj razini. 
              Pripremite se za moćnu učinkovitost koja pokriva više hektara uz nižu cijenu, uživajte u obilju udobnosti i pogodnosti i radite pametnije od svih koje poznajete, zahvaljujući značajkama John Deere precizne poljoprivrede kao što je AutoSetup. 
              Traktori serije 9 pojačivač su produktivnosti s pametnom snagom za poljoprivrednike koji žele biti izvrsni.</p>
            </div> 
            </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item position-relative">
            <div class="carousel-container">
              <div class="carousel-content">
                <video class="video-fluid" autoplay loop muted style="height: 1550px;">
                  <source src="video2.mp4" type="video/mp4">
              </video>
              <div class="d-flex align-items-center justify-content-center">
              <h2 class="carousel-caption animate__animated animate__fadeInDown" style="top: 400px;">Nova 8R serija</h2>
              <p class="carousel-caption animate__animated animate__fadeInUp" style="top: 500px;">Poljoprivreda budućnosti: hvaljena serija 8 ostaje vjerna svom moćnom nasljeđu kako bi služila naprednim poljoprivrednicima kao što ste vi, 
              koji oblikuju održivu budućnost moderne poljoprivrede. 
              Naša serija 8 uključuje traktor s gusjenicama John Deere 8RX koji čuva tlo i ima visokotehnološka poboljšanja poput našeg nagrađivanog mjenjača eAutoPowr™.</p>
            </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item position-relative">
            <div class="carousel-container">
              <div class="carousel-content">
                <video class="video-fluid" autoplay loop muted style="height: 1550px;">
                  <source src="video3.mp4" type="video/mp4">
              </video>
              <div class="d-flex align-items-center justify-content-center">
              <h2 class="carousel-caption animate__animated animate__fadeInDown" style="top: 400px;">Nova 7R serija</h2>
              <p class="carousel-caption animate__animated animate__fadeInUp" style="top: 500px;">Na dodjeli međunarodnih nagrada za traktor godine 2022. suci su bili impresionirani širokim rasponom kvaliteta stroja 7R 350 AutoPowr™ 
              koje je pokazao u odnosu na svoje konkurente u segmentu velikih traktora i proglasili su ga ukupnim pobjednikom. 
              Posebno su istaknuli luksuznu udobnost koju nudi posebno prostrana kabina traktora serije 7R i vrhunske performanse u polju koje pokazuje taj traktor.</p>
            </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- Kraj carousel sekcije -->

  <main id="main">

    <!-- ======= Hrvatska Sekcija ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Naš službeni partner za Hrvatsku je:</h3>
              <div class="row">
                <div class="text col-xl-3" style="padding-top: 15px; padding-left: 15px">
                  <h4>Josip Mišić Company</h4>
                  <p>Sa zadovoljstvom smo godinama generalni distributer John Deere proizvoda za Hrvatsko tržište</p>
                </div>
               
              
              </div>
            </div><!-- Kraj .content-->
          </div>
        </div>

      </div>
    </section><!-- Kraj Sekcije Hrvatska -->

    <!-- ======= Counteri Sekcija ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="21318" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Zadovoljnih korisnika</strong> naših proizvoda</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="5215" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projekata</strong>, suradnji te potpisanih ugovora </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="1679" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Zaposlenih</strong> koji Vam stoje na raspolaganju</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Kraj Counteri Sekcije -->

    <!-- ======= Traktori Sekcija ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">
          <div class="d-flex align-items-center justify-content-center">
          <a href="traktori.php"><img src="assets/img/John Deere traktori icon.png" class="img-fluid" alt=""></a>
          </div>
          <h5>Traktori</h5>
        </div>

      </div>
    </section><!-- Kraj traktori sekcije -->

    <!-- ======= Proizvodi Sekcija ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Proizvodi</h2>
          <p>Moćan, svestran, produktivan -
            Stvoren za vaše poljoprivredne primjene</p>
        </div>

        <div class="row">
       
        <div class="col-lg-12 mt-4 mt-lg-0">
        <a class="nav-link" href="detalji9.php">
            <div class="box" style="height: 420px;">
               <span>John Deere</span>
              <h4>Serija 9</h4>
              <p>Traktori serije 9 rukuju najvećim dostupnim priključcima i nude veliku vuču zahvaljujući širokom rasponu mogućnosti balastiranja. Pa neka govore brojke: 9 tona maksimalnog kapaciteta dizanja, do 8 hidrauličnih SCV-a, i maksimalni balast od 30.390 kg.</p>
              <div class="d-flex align-items-center justify-content-end">
                <img src="assets/img/serija 9 naslovna.jpg" class="img-fluid" alt="" style="height: 300px;">
              </div>
            </div>
          </div>
        </a>

        
          <div class="col-lg-12 mt-4 mt-lg-0">
          <a class="nav-link" href="detalji8.php">
            <div class="box" style="height: 420px;">
               <span>John Deere</span>
              <h4>Serija 8</h4>
              <p>Tri koncepta koja odgovaraju vašim lokalnim uvjetima i individualnim poljoprivrednim praksama - od svestranog traktora serije 8R do traktora serije 8RT sa snažnom vučom i traktora 8RX koji čuva tlo - pogledajte kako izgleda poljoprivreda budućnosti.</p>
              <div class="d-flex align-items-center justify-content-end">
                <img src="assets/img/serija 8 naslovna.jpg" class="img-fluid" alt="" style="height: 300px;">
              </div>
            </div>
          </div>
          </a>

          <div class="col-lg-12 mt-4 mt-lg-0">
          <a class="nav-link" href="detalji7.php">
            <div class="box" style="height: 420px;">
               <span>John Deere</span>
              <h4>Serija 7</h4>
              <p>Spoznajte pravu snagu! Naljepnica na poklopcu motora traktora pokazuje samo nazivnu snagu motora. Ali naši motori pružaju porast okretnog momenta do 40 % i impresivnu snagu od oko 10 % - “maksimalna snaga” koja je uvijek dostupna pod bilo kojim uvjetima.</p>
              <div class="d-flex align-items-center justify-content-end">
                <img src="assets/img/serija 7 naslovna.jpg" class="img-fluid" alt="" style="height: 300px;">
              </div>
            </div>
          </div>
          </a>

        </div>
      

      </div>
    </section><!-- Kraj Sekcije Proizvodi -->

    

    <!-- ======= 6R Modeli Sekcija ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>6R Modeli</h2>
          <p>Nadovezujući se na njenu legendarnu vučnu snagu, pouzdanost i udobnost, seriji 6R dodali smo dva nova, pa čak i pametnija modela. 
            Mali okvir 6R 150 i srednji okvir 6R 185 zaokružuju ponudu iznimno inteligentnim značajkama automatizacije i izvanrednim transportnim performansama. 
            Svaki 6R traktor dizajniran je i projektiran da bude najsvestraniji, laganiji i najsnažniji sastavni dio vaše radne snage.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member">
              <img src="assets/img/Modeli 1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>6R</h4>
                  <span>Mali okvir</span>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="collapse" data-bs-target="#model1">Više ▼</button>
          </div>
          <div id="model1" class="collapse" style="padding-top: 15px;">
                  <h5>4,5 l motor s 4 cilindra</h5>
                  135 ks (99 kW) - 177 ks (130 kW), maks. snaga s IPM (ECE-R120)
                  </div>
            </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="member">
              <img src="assets/img/Modeli 2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>6R</h4>
                  <span>Srednji okvir</span>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="collapse" data-bs-target="#model2">Više ▼</button>
          </div>
          <div id="model2" class="collapse" style="padding-top: 15px;">
                  <h5>6,8 l motor s 6 cilindara</h5>
                  192 ks (141 kW) - 234 ks (172 kW), maks. snaga s IPM (ECE-R120)
                  </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img src="assets/img/Modeli 3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>6R</h4>
                  <span>Veliki okvir</span>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="collapse" data-bs-target="#model3">Više ▼</button>
          </div>
          <div id="model3" class="collapse" style="padding-top: 15px;">
                  <h5>6,8 l motor s 6 cilindara</h5>
                  223 ks (164 kW) - 259 ks (190 kW), maks. snaga s IPM (ECE-R120)
                  </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
            <div class="member">
              <img src="assets/img/Modeli 4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>6R</h4>
                  <span>Vrlo veliki okvir</span>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="collapse" data-bs-target="#model4">Više ▼</button>
          </div>

          <div id="model4" class="collapse" style="padding-top: 15px;">
                  <h5>6,8 l motor s 6 cilindara</h5>
                  281 ks (206 kW) - 301 ks (222 kW), maks. snaga s IPM (ECE-R120)
                  </div>
          </div>
          </div>
        </div>
      </div>
    </section><!-- Kraj  6R modeli sekcije -->



    <!-- ======= Kontakt sekcija ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontakt</h2>
          <p>Budite povezani s nama. Imate pitanja ili nejasnoća? Slobodno ispunite polja ispod i pošaljite nam poruku, naš tim odgovorit će Vam sa zadovoljstvom u što kraćem roku.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Adresa</h3>
              <address>Jablanova 16, 31000 Osijek</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Kontakt broj</h3>
              <p><a href="tel:+155895548855">+385 31 297 341</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

  

      </div>
    </section><!-- kraj kontakt sekcije -->

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