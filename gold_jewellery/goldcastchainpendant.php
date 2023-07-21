<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shri Krishna Jewellers</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon-shrikrishna-jewellers.png" rel="icon">
  <link href="../assets/img/favicon-shrikrishna-jewellers.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=+91 7030635555&text=Shri%20Krishna Jewellers." class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a>

  <!-- =======================================================
  * Template Name: Bocor - v2.0.0
  * Template URL: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .float{
  position:fixed;
  width:60px;
  height:60px;
  bottom:5px;
  right:20px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
  margin-top:16px;
}
  </style>
</head>

<body>

  <?php

      $servername = "localhost";
      $username = "avykewmy_3574_cg";
      $password = "Digitalindia@12345";
      $dbname = "avykewmy_shri_krishna_admin_panel";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      $prj= mysqli_query($conn,"select * from product_master") or die(mysqli_error($conn));

      //$result=mysqli_query($DBconnection,$query);
$row=mysqli_fetch_all($prj);
// print_r($row);
// die();

?>

  <!-- TradingView Widget BEGIN -->
  
  <!-- ======= Header ======= -->
<?php $data = "";
      $data1 = "";
      foreach($row as $rec)
      {
        $date = $rec['6'];
        $final_date = date("d-m-Y", strtotime($date));

        $silver_orn = "Silver Ornament's";
        $data .= 'Date'. ' -&nbsp; '. $final_date. '<span>&nbsp;&nbsp;&#124;&nbsp;&nbsp;</span>'.'Gold - 18c'. ' -&nbsp;₹ '. $rec['2']. '<span>&nbsp;&nbsp;&#124;&nbsp;&nbsp;</span>'. 'Gold - 22c'. ' -&nbsp;₹ '. $rec['3']. '<span>&nbsp;&nbsp;&#124;&nbsp;&nbsp;</span>'. 'Gold - 24c'. ' -&nbsp;₹ '. $rec['4']. '<span>&nbsp;&nbsp;&#124;&nbsp;&nbsp;</span>'. $silver_orn. ' -&nbsp;₹ '. $rec['5']. '<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>';
      }?>
  <header id="header1">
    <div class="container d-flex" style="margin-top: -17px;">

      

<!-- <marquee style="background: #213b52; color: #ffffff;" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="3"><b><?php echo $data; echo $data1;?><?php echo $data; echo $data1;?><?php echo $data; echo $data1;?><?php echo $data; echo $data1;?></b></marquee> -->


        
      

    </div>
  </header><!-- End Header -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- <h1 class="text-light"><a href="index.html"><img src="assets/img/logo.png"></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="../index.php"><img src="../assets/img/new_new_logo.png" alt=""></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../about_us.php">About Us</a></li>
          <li><a href="../gold_jewellery.php">Gold Jewellery</a></li>
          <li><a href="../silver_jewellery.php">Silver Jewellery</a></li>
          <li><a href="../ganpati_jewellery.php">Ganpati Jewellery</a></li>
          <!-- <li><a href="#">Ganpati Jewellery</a></li> -->
          <!-- <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="../contact.php">Contact Us</a></li>

          <li class="get-started"><a href="#contact">Enquire Now</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    <style>
  .profile-img {
width: 100%;
position: relative;
}

.img-responsive {
max-width:100%;
height:auto;
}

.img-circle {
position:absolute;
    z-index:99;
    left:40%;
    
    
    bottom: -42%;

}

.contentsssss {
  position: absolute;
  bottom: 0;
  width: 45%;
  padding-bottom: 200px;
  padding-left: 20px;
}


@media screen and (max-width: 600px) and (min-width: 100px){
  .img-circle {
    
    z-index:99;
    left:0%;
    
    
    bottom: -442%;
    
    }
}


@media screen and (max-width: 600px) and (min-width: 100px){
  .contentsssss {
    position: absolute;
    bottom: 10%;
    width: 100%;
    padding-bottom: 271px;
    padding-left: 10px;
    
    }
}

#myCarousel .carousel-item .mask {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-attachment: fixed
}

#myCarousel h4 {
    font-size: 50px;
    margin-bottom: 15px;
    color: #FFF;
    line-height: 100%;
    letter-spacing: 0.5px;
    font-weight: 600
}

#myCarousel p {
    font-size: 18px;
    margin-bottom: 15px;
    color: #d5d5d5
}





#myCarousel .carousel-item h4 {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}

#myCarousel .carousel-item p {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight
}

#myCarousel .carousel-item a {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp
}

#myCarousel .carousel-item .mask img {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight;
    display: block;
    height: auto;
    max-width: 100%
}

#myCarousel h4,
#myCarousel p,
#myCarousel a,
#myCarousel .carousel-item .mask img {
    -webkit-animation-duration: 1s;
    animation-duration: 1.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    
}

#myCarousel .container {
    max-width: 1430px
}

#myCarousel .carousel-item {
    height: 100%;
    min-height: 350px
}

#myCarousel {
    position: relative;
    z-index: 1;
    background-image: url("../assets/img/internal_page/gold-inner-banner-background.webp");
    background-size: cover
}

@media screen and (max-width: 600px) and (min-width: 100px){
    .portfolio-wrap{
    width: 70%;
    height: 375px;
    position: relative;
    left: 50px;
  }
}
</style>

  <!-- ======= Hero Section ======= -->
  <section id="hero1" style="padding: 0px 0;">

    
      <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-12" style="margin-top: 10px; margin-bottom: 70px;"><br><br><br><br><br><br><br><br>
                            <h2 style="color: #e0b238;"><center>Cast Chain Pendant</center></h2>
                            <center><p style="color: #e0b238;"><a href="../index.php">Home</a> -> <a href="../gold_jewellery.php">Gold Jewellery</a> -> Cast Chain Pendant</p><center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div> 
</div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Varieties of Cast Chain Pendant</h2>
          <p data-aos="fade-in"></p>
        </div>

        <!-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-gents_rings">Gents Rings</li>
              <li data-filter=".filter-womens_rings">Womens Rings</li>
              <li data-filter=".filter-ear_chain">Ear Chain</li>
              <li data-filter=".filter-pendal">Pendal</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../assets/img/goldcastchainpendant/goldcastchainpendant.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="../assets/img/goldcastchainpendant/goldcastchainpendant.webp" data-gall="portfolioGallery" class="venobox" title=""><i class="icofont-ui-zoom-in"></i></a>
                
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../assets/img/goldcastchainpendant/goldcastchainpendant2.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="../assets/img/goldcastchainpendant/goldcastchainpendant2.webp" data-gall="portfolioGallery" class="venobox" title=""><i class="icofont-ui-zoom-in"></i></a>
                
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../assets/img/goldcastchainpendant/goldcastchainpendant3.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="../assets/img/goldcastchainpendant/goldcastchainpendant3.webp" data-gall="portfolioGallery" class="venobox" title=""><i class="icofont-ui-zoom-in"></i></a>
                
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../assets/img/goldcastchainpendant/goldcastchainpendant4.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="../assets/img/goldcastchainpendant/goldcastchainpendant4.webp" data-gall="portfolioGallery" class="venobox" title=""><i class="icofont-ui-zoom-in"></i></a>
                
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../assets/img/goldcastchainpendant/goldcastchainpendant5.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="../assets/img/goldcastchainpendant/goldcastchainpendant5.webp" data-gall="portfolioGallery" class="venobox" title=""><i class="icofont-ui-zoom-in"></i></a>
                
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../assets/img/goldcastchainpendant/goldcastchainpendant6.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="../assets/img/goldcastchainpendant/goldcastchainpendant6.webp" data-gall="portfolioGallery" class="venobox" title=""><i class="icofont-ui-zoom-in"></i></a>
                
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="../assets/img/goldcastchainpendant/goldcastchainpendant7.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="../assets/img/goldcastchainpendant/goldcastchainpendant7.webp" data-gall="portfolioGallery" class="venobox" title=""><i class="icofont-ui-zoom-in"></i></a>
                
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../assets/img/goldcastchainpendant/goldcastchainpendant8.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="../assets/img/goldcastchainpendant/goldcastchainpendant8.webp" data-gall="portfolioGallery" class="venobox" title=""><i class="icofont-ui-zoom-in"></i>
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../assets/img/goldcastchainpendant/goldcastchainpendant9.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="../assets/img/goldcastchainpendant/goldcastchainpendant9.webp" data-gall="portfolioGallery" class="venobox" title=""><i class="icofont-ui-zoom-in"></i></a>
                
              </div>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="../assets/img/goldcastchainpendant/goldcastchainpendant10.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="../assets/img/goldcastchainpendant/goldcastchainpendant10.webp" data-gall="portfolioGallery" class="venobox" title=""><i class="icofont-ui-zoom-in"></i></a>
                
              </div>
              
            </div>
          </div>

          

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Contact</h2>
          <p data-aos="fade-in"></p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Amrut Society, Gujarat Colony, Kothrud, Pune-38</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx">&#9742;</i>
                  <h3>Telephone No.</h3>
                  <p>020 2538 2115</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Whatsapp / Mob No.</h3>
                  <p>+91 7030635555</p>
                </div>
              </div>

              <div class="col-md-12">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <h3>Follow Us</h3>
                  <div class="social-links">
                    <a href="https://www.facebook.com/ShriKrishnaJewellersKothrud" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                    <a href="https://instagram.com/shri.krishna.jewellers" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="https://g.page/r/CZ6RgBm0-OdQEAg/review" class="google-plus" target="_blank"><i class="bx bxl-google"></i></a>
                  </div>
                  <br><br>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="section-title">
                <h2 data-aos="fade-in">Get In Touch With Us</h2>
            </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-top">

      <div class="container" data-aos="fade-up">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>Shree Krishna Jewellers</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div> -->

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Shri Krishna Jewellers</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
        Designed by <a href="https://vbdigitech.com/" target="_blank">VB Digitech</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>