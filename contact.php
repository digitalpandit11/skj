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
    background-image: url("assets/img/internal_page/gold-inner-banner-background.webp");
    background-size: cover
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
                            <h2 style="color: #e0b238;"><center>Contact Us</center></h2>
                            <center><p style="color: #e0b238;"><a href="index.php">Home</a> -> Contact Us</p><center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div> 
</div>

  </section><!-- End Hero -->


  <main id="main">

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
            
            <form action="contact_process.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
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
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" style="overflow-x: scroll;">
        <div class="row">
          <div class="col-lg-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.5236259663498!2d73.8055212642986!3d18.505225074474538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfb99eaaaaab%3A0x50e7f8b41980919e!2sShri%20Krishna%20Jewellers!5e0!3m2!1sen!2sin!4v1623482343386!5m2!1sen!2sin" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    

  </main><!-- End #main -->

  <?php include 'footer.php';?>