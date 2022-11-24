<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Company Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>This is Energy And <em>Electrical Engineering</em> Website</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          Cepmek
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          </li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video1.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Everyone!</h6>
              <h2>Welcome to Website Cepmek</h2>
              <p>This is Energy And Electrical Engineering</p>
              <div class="main-button-red">
                  <div><a href="regist.php">Click Here To Regist</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="assets/images/panas.bumi.webp" alt="">
              </div>
              <div class="down-content">
                <h4>Energi Panas Bumi</h4>
                <p>Energi panas bumi terdapat di pusat bumi dan berasal dari peluruhan radioaktif. Energi inilah yang memanaskan bumi dari dalam.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/matahari1.jpg" alt="">
              </div>
              <div class="down-content">
                <h4>Energi Matahari</h4>
                <p>Energi yang diperoleh dengan cara mengumpulkan panas yang berasal dari sinar matahari.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/angin.webp" alt="">
              </div>
              <div class="down-content">
                <h4>Tenaga Angin</h4>
                <p>Jenis energi terbarukan yang ditangkap melalui turbin angin, yang bekerja melalui energi kinetik angin.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/air1.jpg" alt="">
              </div>
              <div class="down-content">
                <h4>Tenaga Air</h4>
                <p>Energi yang memanfaatkan arus air sehingga menghasilkan energi listrik untuk kebutuhan manusia..</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/bipmasa.jpg" alt="">
              </div>
              <div class="down-content">
                <h4>Biomassa</h4>
                <p>Jenis sumber energi ini berasal dari biomassa atau organisme, termasuk di dalamnya produk dari proses metabolisme hewan seperti kotoran.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Energi Terbarukan</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4> Potensi Energi</h4>
            <ul>
              <li>Tenaga Air 75,67 GW</li>
              <li>Panas Bumi 27 GW</li>
              <li>Mikrohydro 712 GW</li>
              <li>Biomassa 49,81 GW</li>
              <li>Energ Surya 4,8 kWh/m2/hari</li>
              <li>Energi Angin 3-6 m/det.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <img src="assets/images/tenagaair.jpg"></a>
                </div>
                <div class="down-content">
                  <h4>Tenaga Air</h4></a>
                  <p>Pertumbuhan PLTA di Indonesia sangat lamban, padahal potensi tenaga air Indonesia cukup besar yaitu mencapai 75000 MW.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <img src="assets/images/batubara2.jpg"></a>
                </div>
                <div class="down-content">
                  <h4>Batubara</h4></a>
                  <p>Produksi batu bara di tahun 2009 mencapai 225 juta ton, yang terbagi atas 75 juta ton untuk pemanfaatan dalam negeri dan 150 juta ton untuk ekspor..</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <img src="assets/images/surya1.jpg" alt=""></a>
                </div>
                <div class="down-content">
                <h4>Energi Surya</h4></a>
                  <p>Pemanfaatan energi surya di Indonesia baru mencapai 0,05% dari potensi yang ada, dan kapasitas terpasang untuk Pembangkit Tenaga Surya baru mencapai 100 MW.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <img src="assets/images/RR1.jpg" alt=""></a>
                </div>
                <div class="down-content">
                  <h4>Energi Biomassa</h4></a>
                  <p>Potensi besar biomassa yang ada untuk energi saat ini adalah limbah hasil perkebunan seperti kelapa sawit, kelapa dan tebu.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>Pekerjaan Di Bidang Energi Terbarukan</h3>
                <p>Pabrik turbin angin, Installer, Operator.<br>Fabricator Surya/Installer (Orang yang bekerja di Pabrik)<br>Petani<br>Insinyur</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Daftar!</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>Manfaat</h3>
                <p>Energi terbarukan memiliki manfaat yang baik yaitu bersifat ramah lingkungan. Hal ini karena energi terbarukan berasal langsung dari tenaga yang dihasilkan oleh proses alam, contohnya energi yang dihasilkan oleh sinar matahari proses penggelolaannya tidak akan mengeluarkan polusi yang tidak baik untuk lingkungan..</p>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span> LOKASI PLTA Terbesar Di Indonesia</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>1. Waduk Cirata, Jawa Barat<br>2. Waduk Saguling, Jawa Barat<br>3. PLTA Sulewana, Poso, Sulawesi Tengah<br>4. PLTA Sigura-Sigura Samosir, Sumatera Utara<br>5.  PLTA Musi, Bengkulu<br>6. PLTA Mrica, Banjarnegara<br>7.  PLTA Asahan, Sumatera Utara<br>8.  Waduk Jatiluhur, Purwakarta, Jawa Barat</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Lokasi PLTU Terbesar Di Indonesia</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>1.  PLTU Paiton Swasta I dan II<br>2. PLTU Suralaya<br>3. PLTU Cirebon <br>4. PLTU Batang </p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Lokasi PLTS Tebesar Di Indonesia</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>1. PLTS Likupang<br>2. PLTS Oelpuah<br>3. PLTS CCA (CocaCola Amatil)<br>4. PLTS Waduk Cirata
                        </p>
                    </div>
                </div>
            </article>
        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>Ketenagalistrikan Dan Energi</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">9</div>
                    <div class="count-title">Kebutuhan Listrik</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">7</div>
                    <div class="count-title">Jenis Pembangkit Listrik</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">432</div>
                    <div class="count-title"> Gigawatt Energi Alternatif</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">3</div>
                    <div class="count-title">GW Energi Nuklir </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=P5eehpv-NRE" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Hubungi Kami Disini</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">KIRIM PESAN</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>010-020-0340</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>info@cepmek.inf</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Jakarta Barat,Cengkareng</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Cepmek. Ltd. All Rights Reserved. 
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>