  <?php include 'header.php';?>

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
    background-image: url("assets/img/internal_page/internal_background_skj.webp");
    background-size: cover
}

@media screen and (max-width: 600px) and (min-width: 100px){
    .portfolio-wrap{
    width: 70%;
    height: 310px;
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
                            <h2 style="color: #ffffff;"><center>Ganpati Jewellery</center></h2>
                            <center><p style="color: #ffffff;"><a href="index.php" style="color: #ffffff;">Home</a> -> Ganpati Jewellery</p><center>
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
          <h2 data-aos="fade-in">Ganpati Jewelleries We Offer</h2>
          <p data-aos="fade-in"></p>
        </div>

        <!-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-gold">Gold Jewellery</li>
              <li data-filter=".filter-silver">Sliver Jewellery</li>
              <li data-filter=".filter-ganpati">Ganpati Jewellery</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-3 col-md-6 portfolio-item filter-ganpati">
            <div class="portfolio-wrap">
              <img src="assets/img/ganapati_haar/ganapati-haar.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_niranjan/silver_niranjan2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_niranjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="ganpati_jewellery/ganapati_haar.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="ganpati_jewellery/ganapati_haar.php" style="font-size: 16px;"><h4>Ganapati Haar</h4></a>
                <p>Ganapati Jewellery</p>
              </div>
            </div>
            <a href="ganpati_jewellery/ganapati_haar.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Ganapati Haar</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-ganpati">
            <div class="portfolio-wrap">
              <img src="assets/img/ganapati_kan/ganapati-kan.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_niranjan/silver_niranjan2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_niranjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="ganpati_jewellery/ganapati_kan.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="ganpati_jewellery/ganapati_kan.php" style="font-size: 16px;"><h4>Ganapati Kan</h4></a>
                <p>Ganapati Jewellery</p>
              </div>
            </div>
            <a href="ganpati_jewellery/ganapati_kan.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Ganapati Kan</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-ganpati">
            <div class="portfolio-wrap">
              <img src="assets/img/ganapati_ladu/ganapati-ladu.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_niranjan/silver_niranjan2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_niranjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="ganpati_jewellery/ganapati_ladu.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="ganpati_jewellery/ganapati_ladu.php" style="font-size: 16px;"><h4>Ganapati Ladu</h4></a>
                <p>Ganapati Jewellery</p>
              </div>
            </div>
            <a href="ganpati_jewellery/ganapati_ladu.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Ganapati Ladu</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-ganpati">
            <div class="portfolio-wrap">
              <img src="assets/img/ganapati_modak/ganapati-modak.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_niranjan/silver_niranjan2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_niranjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="ganpati_jewellery/ganapati_modak.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="ganpati_jewellery/ganapati_modak.php" style="font-size: 16px;"><h4>Ganapati Modak</h4></a>
                <p>Ganapati Jewellery</p>
              </div>
            </div>
            <a href="ganpati_jewellery/ganapati_modak.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Ganapati Modak</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-ganpati">
            <div class="portfolio-wrap">
              <img src="assets/img/ganapati_mukut/ganapati-mukut.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_niranjan/silver_niranjan2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_niranjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="ganpati_jewellery/ganapati_mukut.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="ganpati_jewellery/ganapati_mukut.php" style="font-size: 16px;"><h4>Ganapati Mukut</h4></a>
                <p>Ganapati Jewellery</p>
              </div>
            </div>
            <a href="ganpati_jewellery/ganapati_mukut.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Ganapati Mukut</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-ganpati">
            <div class="portfolio-wrap">
              <img src="assets/img/ganapati_pan_supari/ganapati-pan-supari.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_niranjan/silver_niranjan2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_niranjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="ganpati_jewellery/ganapati_pan_supari.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="ganpati_jewellery/ganapati_pan_supari.php" style="font-size: 16px;"><h4>Ganapati Pan Supari</h4></a>
                <p>Ganapati Jewellery</p>
              </div>
            </div>
            <a href="ganpati_jewellery/ganapati_pan_supari.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Ganapati Pan Supari</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-ganpati">
            <div class="portfolio-wrap">
              <img src="assets/img/ganapati_undir_mouse/ganapati-undir.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_niranjan/silver_niranjan2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_niranjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="ganpati_jewellery/ganapati_undir_mouse.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="ganpati_jewellery/ganapati_undir_mouse.php" style="font-size: 16px;"><h4>Ganapati Undir</h4></a>
                <p>Ganapati Jewellery</p>
              </div>
            </div>
            <a href="ganpati_jewellery/ganapati_undir_mouse.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Ganapati Undir</b></p></center></a>
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
                                  <p><a href="tel:02025382115">020 2538 2115</a></p>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                  <i class="bx bx-phone-call"></i>
                                  <h3>Whatsapp / Mob No.</h3>
                                  <p><a target="_blank" href="https://wa.me/7030635555">+91 7030635555</a> | <a
                                          target="_blank" href="https://wa.me/9021909385">+91 9021909385</a></p>
                              </div>
                          </div>

                          <div class="col-md-6">
                              <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                  <h3>Follow Us</h3>
                                  <div class="social-links">
                                      <a href="https://www.facebook.com/ShriKrishnaJewellersKothrud" class="facebook"
                                          target="_blank"><i class="bx bxl-facebook"></i></a>
                                      <a href="https://instagram.com/shri.krishna.jewellers" class="instagram"
                                          target="_blank"><i class="bx bxl-instagram"></i></a>
                                      <a href="https://g.page/r/CZ6RgBm0-OdQEAg/review" class="google-plus"
                                          target="_blank"><i class="bx bxl-google"></i></a>
                                  </div>
                                  <br>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                  <i class="bx bx-envelope"></i>
                                  <h3>Email</h3>
                                  <p><a target="_blank"
                                          href="mailto:support@shrikrishnajewellers.com">support@shrikrishnajewellers.com</a>
                                  </p>
                              </div>
                          </div>
                      </div>

                  </div>

                  <div class="col-lg-6">

                      <form action="forms/contact.php" method="post" role="form" class="php-email-form"
                          data-aos="fade-up">
                          <div class="section-title">
                              <h2 data-aos="fade-in">Get In Touch With Us</h2>
                          </div>
                          <div class="form-row">
                              <div class="col-md-6 form-group">
                                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                      data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                  <div class="validate"></div>
                              </div>
                              <div class="col-md-6 form-group">
                                  <input type="email" class="form-control" name="email" id="email"
                                      placeholder="Your Email" data-rule="email"
                                      data-msg="Please enter a valid email" />
                                  <div class="validate"></div>
                              </div>
                          </div>

                          <div class="form-group">
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"
                                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validate"></div>
                          </div>

                          <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validate"></div>
                          </div>
                          <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required"
                                  data-msg="Please write something for us" placeholder="Message"></textarea>
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

  <?php include 'footer.php';?>