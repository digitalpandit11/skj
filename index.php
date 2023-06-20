  <?php include 'header.php';?>

  <!-- ======= Hero Section ======= -->
  <section id="hero1" style="padding: 0px 0;">

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

#myCarousel .carousel-item a {
    background: #FF0000;
    font-size: 14px;
    color: #FFF;
    padding: 13px 32px;
    display: inline-block
}

#myCarousel .carousel-item a:hover {
    background: #FF0000;
    text-decoration: none
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
    min-height: 550px
}

#myCarousel {
    position: relative;
    z-index: 1;
    background-image: url("assets/img/gold-jewellery-homepage-banner-background_new1.webp");
    background-size: cover
}

.carousel-control-next,
.carousel-control-prev {
    height: 40px;
    width: 40px;
    padding: 12px;
    top: 50%;
    bottom: auto;
    transform: translateY(-50%);
    background-color: #fdab25;
}

.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease, -webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px
}

.carousel-fade .carousel-item {
    opacity: 0;
    -webkit-transition-duration: .6s;
    transition-duration: .6s;
    -webkit-transition-property: opacity;
    transition-property: opacity
}

.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right,
.carousel-fade .carousel-item.active {
    opacity: 1
}

.carousel-fade .carousel-item-left.active,
.carousel-fade .carousel-item-right.active {
    opacity: 0
}

.carousel-fade .carousel-item-left.active,
.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item-prev.active,
.carousel-fade .carousel-item.active {
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0)
}

@supports (transform-style:preserve-3d) {

    .carousel-fade .carousel-item-left.active,
    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item-prev.active,
    .carousel-fade .carousel-item.active {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.carousel-fade .carousel-item-left.active,
.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item-prev.active,
.carousel-fade .carousel-item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

@-webkit-keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}

@-webkit-keyframes fadeInUp {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp
}

@-webkit-keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

@keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight
}

.para-graph-slider{
  text-align: center;
  margin-left: 50px;
}

@media screen and (max-width: 600px) and (min-width: 100px){
  .para-graph-slider {
    
    text-align: center;
    margin-left: 0px;
    
    }
}

@media screen and (max-width: 600px) and (min-width: 100px){
    .portfolio-wrap{
    width: 70%;
    height: 400px;
    position: relative;
    left: 50px;
  }
}

</style>

<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/gold-jewellery-background.png" alt="Second slide">
      <div class="contentsssss">
    <h1 style="color: #fdab25; font-family: sans serif font; font-weight: 600"><center>Gold Jewellery</center></h1><br>
    <h4 style="color: #fdab25; font-size: 20px; font-family: Montserrat; font-weight: 500">Show the World, Your Shine. Jewellery that speaks itself Our Jewellery Your Style </h4>

    <center><button type="button" class="btn btn-warning" style="color: #ffffff; background-color: #fdab25;">Learn More</button></center>
  </div>
      <img src="assets/img/gold-jewellery-design.png" class="img-circle">
    </div>


    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/silver-jewellery-homepage-banner-background.png" alt="Second slide">
      <div class="contentsssss">
    <h1 style="color: #fdab25; font-family: sans serif font; font-weight: 600"><center>Gold Jewellery</center></h1><br>
    <h4 style="color: #fdab25; font-size: 20px; font-family: Montserrat; font-weight: 500">Show the World, Your Shine. Jewellery that speaks itself Our Jewellery Your Style </h4>

    <center><button type="button" class="btn btn-warning" style="color: #ffffff; background-color: #fdab25;">Learn More</button></center>
  </div>
      <img src="assets/img/silver-jewellery-homepage-banner-design.png" class="img-circle">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    



  <div class="profile-image img-responsive">
   <img src="assets/img/gold-jewellery-background.png"/>
   <div class="contentxxxxx">
    <h1 style="color: #fdab25; font-family: sans serif font; font-weight: 600"><center>Gold Jewellery</center></h1><br>
    <h4 style="color: #fdab25; font-size: 20px; font-family: Montserrat; font-weight: 500">Show the World, Your Shine. Jewellery that speaks itself Our Jewellery Your Style </h4>

    <center><button type="button" class="btn btn-warning" style="color: #ffffff; background-color: #fdab25;">Learn More</button></center>
  </div>
   <img src="assets/img/gold-jewellery-design.png" class="img-circleaaaa">
</div> -->
<br><br><br><br><br>
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">

    <!-- <div class="carousel-item active" style="background-image: url('assets/img/skg_web_diwali_Background.webp');">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-12 order-md-1 order-1" style="margin-top: 10px; margin-bottom: 70px;">
                            <center><h4 style="color: #ffffff;">Diwali Offer</h4></center>
                            <p style="color: #ffffff;" class="para-graph-slider"><b>20% Discount on All Gold Jewellery Making Charges!</b></p> <br> <center><a href="contact.php" style="background-color: #fdab25;">Contact Us Now</a></center>
                        </div>
                        <div class="col-md-7 col-12 order-md-2 order-2"><img src="assets/img/diwali_size_image.webp" class="mx-auto" alt="slide" style="margin-top: -84px;"></div>
                    </div>
                </div>
            </div>
      </div> -->

        <div class="carousel-item active">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-12 order-md-1 order-1" style="margin-top: 10px; margin-bottom: 70px;">
                            <center><h4 style="color: #fdab25; ">Gold Jewellery</h4></center>
                            <p style="color: #fdab25;" class="para-graph-slider"><b>"Be Ready for Every Occasion, Because You are Precious to Us!"</b></p> <br> <center><a href="gold_jewellery.php" style="background-color: #fdab25;">Check The Varieties</a></center>
                        </div>
                        <div class="col-md-7 col-12 order-md-2 order-2"><img src="assets/img/gold-jewellery-banner-design_1.webp" class="mx-auto" alt="slide" style="margin-top: -84px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item" style="background-image: url('assets/img/silver-jewellery-homepage-banner-background_new1.webp');">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-12 order-md-1 order-1" style="margin-top: 10px; margin-bottom: 70px;">
                            <center><h4 style="color: #ffffff;">Silver Jewellery</h4></center>
                            <p style="color: #ffffff;" class="para-graph-slider"><b>"Fashion and Style in Every Thing We Own, Jewellery Crafted with Care and Love!"</b></p> <br> <center><a href="silver_jewellery.php" style="background-color: #fdab25;">Check The Varieties</a></center>
                        </div>
                        <div class="col-md-7 col-12 order-md-2 order-2"><img src="assets/img/silver-jewellery-banner-design.webp" class="mx-auto" alt="slide" style="margin-top: -84px;"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="carousel-item" style="background-image: url('assets/img/ganapati-jewellery-homepage-banner-background.webp');">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-12 order-md-1 order-1" style="margin-top: 10px; margin-bottom: 70px;">
                            <center><h4 style="color: #ffffff;">Ganpati Jewellery</h4></center>
                            <p style="color: #ffffff;" class="para-graph-slider"><b>"Artistic Ganpati Jewellery Accessories, With Exclusive Design And Collection."</b></p> <br> <center><a href="ganpati_jewellery.php" style="background-color: #fdab25;">Check The Varieties</a></center>
                        </div>
                        <div class="col-md-7 col-12 order-md-2 order-2"><img src="assets/img/skj-ganapati-idol.png" class="mx-auto" alt="slide" style="margin-top: -84px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>


   

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/home_icon/kangan.webp" class="img-fluid" alt="" data-aos="flip-right">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/home_icon/anklet.webp" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/home_icon/haar.webp" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/home_icon/jhumka.webp" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/home_icon/haar2.webp" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="assets/img/home_icon/kade.webp" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="500">
            </div>
          </div>

          

        </div>


        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-in" data-aos-delay="100">About Us</h3>
              <p data-aos="fade-in">
                The Story of <b>Shri Krishna Jewellers</b> is no Fairy Tale, But Epically scripted by <b>Three Generations Of
                Vedpathak Clan</b>. All this started way back in 19 th Century by Our Grandfather <b>Late. Narayan Shankar
                Vedpathak</b>. He started his Journey on 26 th June 1929. Initially there was no momentum in Business due to many other reasons including early independence situations and extended family, and this led <b>Late. Rajvilas Narayan Vedpathak</b> to leave home along with family business and work with escape at Solapur. (1970-1983).
              </p>

              <p><br>Late. Rajvilas Narayan Vedpathak Re-Discovered his passion in Jewellery and started <b>Pushparaj Jewellers</b> At Mangalmurti Park, Kothrud On 2 nd May 1993. This Store then relocated At Amrut Society, Gujrat Colony, Kothrud - As <b>Shri Krishna Jewellers</b> On 14 th June 1997.</p><br>

              <p><br><b>Mr. Rohit Rajvilas Vedpathak</b> Fully Engaged with Clan in Year 2001 And Flourished Business with his Innovative Ideas and Helped Gaining Unbeatable Trust Of 9000+ Satisfied Customers. While Quality Products and Transparent Processing helps us in Building Customer Trust, What Also Sets Us above from Crowed Is Wide Variety of Gold &amp; Silver Necklaces, Bangles, Chains, Ear-rings, Mangalsutra, Rings, Gemstones, and Gold-Silver Coins Etc.</p>
              <!-- <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4><a href="#">Corporis voluptates sit</a></h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4><a href="#">Ullamco laboris nisi</a></h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4><a href="#">Labore consequatur</a></h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4><a href="#">Beatae veritatis</a></h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div> -->
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Services</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Aperiores voluptates</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-3.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Veritatis natus nisi</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-4.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Aliquam veritatis</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
 -->    <!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Features</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/features-4.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Features Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Jewelleries We Offer</h2>
          <p data-aos="fade-in"></p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-gold">Gold Jewellery</li>
              <li data-filter=".filter-silver">Silver Jewellery</li>
              <li data-filter=".filter-ganpati">Ganpati Jewellery</li>
              <!-- <li data-filter=".filter-ganpati">Ganpati Jewellery</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/gents/gentsring2.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/gents/gentsring2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/gents_rings.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="gold_jewellery/gents_rings.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/gents_rings.php" style="font-size: 16px;"><h4>Gents Rings</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/gents_rings.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Gents Rings</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/womens/womensring3.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/womens/womensring3.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/womens_rings.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="gold_jewellery/womens_rings.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/womens_rings.php" style="font-size: 16px;"><h4>Womens Rings</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/womens_rings.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Womens Rings</b></p></center></a>
          </div>

          

          <!-- <div class="col-lg-3 col-md-6 portfolio-item filter-ganpati">
            <div class="portfolio-wrap">
              <img src="assets/img/ganpati/ganapati_idol.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                

                <p style="color: #ffffff;"><a href="#" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="#" style="font-size: 16px;"><h4>Silver Ganpati</h4></a>
                <p>Ganpati Jewellery</p>
              </div>
            </div>
            <a href="#" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Ganpati</b></p></center></a>
          </div> -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/pendal/pendal.webp" class="img-fluid" alt="" style="border-radius: 5px;">
              <div class="portfolio-links">
                <!-- <a href="assets/img/pendal/pendal.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/pendal.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="gold_jewellery/pendal.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/pendal.php" style="font-size: 16px;"><h4>Pendal</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/pendal.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Pendal</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/ear_chain/ear_chain.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/ear_chain/ear_chain.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/ear_chain.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="gold_jewellery/ear_chain.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/ear_chain.php" style="font-size: 16px;"><h4>Ear Chain</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/ear_chain.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Ear Chain</b></p></center></a>
          </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/goldchain/goldchain.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/goldchain/goldchain.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/chain.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="gold_jewellery/chain.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/chain.php" style="font-size: 16px;"><h4>Chain</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/chain.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Chain</b></p></center></a>
          </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/braceletgold/braceletgold.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/braceletgold/braceletgold.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/bracelet.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="gold_jewellery/bracelet.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/bracelet.php" style="font-size: 16px;"><h4>Bracelet</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/bracelet.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Bracelet</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/short_mangalsutra/short_mangalsutra.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/short_mangalsutra/short_mangalsutra.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/short_mangalsutra.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="gold_jewellery/short_mangalsutra.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/short_mangalsutra.php" style="font-size: 16px;"><h4>Short Mangalsutra</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/short_mangalsutra.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Short Mangalsutra</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/long_mangalsutra/long_mangalsutra.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/long_mangalsutra/long_mangalsutra.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/long_mangalsutra.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="gold_jewellery/long_mangalsutra.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/long_mangalsutra.php" style="font-size: 16px;"><h4>Long Mangalsutra</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/long_mangalsutra.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Long Mangalsutra</b></p></center></a>
          </div>



          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/jhumka/jhumka.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/jhumka/jhumka.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/jhumka.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="gold_jewellery/jhumka.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/jhumka.php" style="font-size: 16px;"><h4>Jhumka</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/jhumka.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Jhumka</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/thushi/thushi.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/thushi/thushi.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/thushi.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="gold_jewellery/thushi.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/thushi.php" style="font-size: 16px;"><h4>Thushi</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/thushi.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Thushi</b></p></center></a>
          </div>










          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/baal-ring/baal-ring.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/baal-ring/baal-ring.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/baal_ring.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="gold_jewellery/baal_ring.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/baal_ring.php" style="font-size: 16px;"><h4>Baal Ring</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/baal_ring.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Baal Ring</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/baccha-tops/baccha-tops.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/baccha-tops/baccha-tops.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/baccha_tops.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="gold_jewellery/baccha_tops.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/baccha_tops.php" style="font-size: 16px;"><h4>Baccha Tops</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/baccha_tops.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Baccha Tops</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/necklace/necklace.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/necklace/necklace.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/necklace.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="gold_jewellery/necklace.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/necklace.php" style="font-size: 16px;"><h4>Necklace</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/necklace.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Necklace</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/kadli/kadli.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/kadli/kadli.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/kadli.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="gold_jewellery/kadli.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/kadli.php" style="font-size: 16px;"><h4>Kadli</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/kadli.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Kadli</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/dool/dool.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/dool/dool.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/dool.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="gold_jewellery/dool.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/dool.php" style="font-size: 16px;"><h4>Dool</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/dool.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Dool</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/dorle/converted-gold_dorle.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/dorle/dorle2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/dorle.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="gold_jewellery/dorle.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/dorle.php" style="font-size: 16px;"><h4>Dorle</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/dorle.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Dorle</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/rani_haar/rani_haar.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/dorle/dorle2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/dorle.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="gold_jewellery/rani_haar.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/rani_haar.php" style="font-size: 16px;"><h4>Rani Haar</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/rani_haar.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Rani Haar</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/couple_ring/couple_ring.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/dorle/dorle2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/dorle.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="gold_jewellery/couple_ring.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/couple_ring.php" style="font-size: 16px;"><h4>Couple Ring</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/couple_ring.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Couple Ring</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/goldcastchainpendant/goldcastchainpendant.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/dorle/dorle2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/dorle.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="gold_jewellery/goldcastchainpendant.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/goldcastchainpendant.php" style="font-size: 16px;"><h4>Cast Chain Pendant</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/goldcastchainpendant.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Cast Chain Pendant</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/antique_haar/Antique_Haar.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/dorle/dorle2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="gold_jewellery/dorle.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="gold_jewellery/antique_haar.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="gold_jewellery/antique_haar.php" style="font-size: 16px;"><h4>Antique_Haar</h4></a>
                <p>Gold Jewellery</p>
              </div>
            </div>
            <a href="gold_jewellery/antique_haar.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Antique_Haar</b></p></center></a>
          </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/jodavi/jodavi.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/jodavi/jodavi.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/jodavi.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="silver_jewellery/jodavi.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/jodavi.php" style="font-size: 16px;"><h4>Jodvi</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/jodavi.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Jodvi</b></p></center></a>
          </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/painjan/painjan.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/painjan/painjan.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/painjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="silver_jewellery/painjan.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/painjan.php" style="font-size: 16px;"><h4>Painjan</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/painjan.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Painjan</b></p></center></a>
          </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/fancy_jodvi/fancy_jodvi.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/fancy_jodvi/fancy_jodvi.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/fancy_jodvi.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="silver_jewellery/fancy_jodvi.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/fancy_jodvi.php" style="font-size: 16px;"><h4>Fancy Jodvi</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/fancy_jodvi.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Fancy Jodvi</b></p></center></a>
          </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/silver_glass/silver_glass.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_glass/silver_glass.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_glass.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="silver_jewellery/silver_glass.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/silver_glass.php" style="font-size: 16px;"><h4>Silver Glass</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/silver_glass.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Glass</b></p></center></a>
          </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/silver_loti/silver_loti.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_loti/silver_loti.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_loti.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="silver_jewellery/silver_loti.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/silver_loti.php" style="font-size: 16px;"><h4>Silver Loti</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/silver_loti.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Loti</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/silver_phulpatra/silver_phulpatra.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_phulpatra/silver_phulpatra.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_phulpatra.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="silver_jewellery/silver_phulpatra.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/silver_phulpatra.php" style="font-size: 16px;"><h4>Silver Phulpatra</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/silver_phulpatra.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Phulpatra</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/silver_plate/silver_plate.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_plate/silver_plate.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_plate.php" title="More Details"><i class="icofont-link"></i></a> -->
                <p style="color: #ffffff;"><a href="silver_jewellery/silver_plate.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/silver_plate.php" style="font-size: 16px;"><h4>Silver Plate</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/silver_plate.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Plate</b></p></center></a>
          </div>






          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/silver_bracelet/silver_bracelet.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_bracelet/silver_bracelet.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_bracelet.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="silver_jewellery/silver_bracelet.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/silver_bracelet.php" style="font-size: 16px;"><h4>Silver Bracelet</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/silver_bracelet.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Bracelet</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/silver_dish/silver_dish.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_dish/silver_dish.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_dish.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="silver_jewellery/silver_dish.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/silver_dish.php" style="font-size: 16px;"><h4>Silver Dish</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/silver_dish.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Dish</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/silver_kade/silver_kade.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_kade/silver_kade.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_kade.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="silver_jewellery/silver_kade.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/silver_kade.php" style="font-size: 16px;"><h4>Silver Kade</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/silver_kade.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Kade</b></p></center></a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/silver_niranjan/silver_niranjan2.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_niranjan/silver_niranjan2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_niranjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="silver_jewellery/silver_niranjan.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/silver_niranjan.php" style="font-size: 16px;"><h4>Silver Niranjan</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/silver_niranjan.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Niranjan</b></p></center></a>
          </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/silver_chain/silver-chain.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_niranjan/silver_niranjan2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_niranjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="silver_jewellery/silver_chain.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/silver_chain.php" style="font-size: 16px;"><h4>Silver Chain</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/silver_chain.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Chain</b></p></center></a>
          </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-silver">
            <div class="portfolio-wrap">
              <img src="assets/img/silver_gulabdani/silver-gulabdani.webp" class="img-fluid" alt="">
              <div class="portfolio-links">
                <!-- <a href="assets/img/silver_niranjan/silver_niranjan2.webp" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                <a href="silver_jewellery/silver_niranjan.php" title="More Details"><i class="icofont-link"></i></a> -->

                <p style="color: #ffffff;"><a href="silver_jewellery/silver_gulabdani.php" style="font-size: 16px;">Check Variety</a></p>
              </div>
              <div class="portfolio-info">
                <a href="silver_jewellery/silver_gulabdani.php" style="font-size: 16px;"><h4>Silver Gulabdani</h4></a>
                <p>Silver Jewellery</p>
              </div>
            </div>
            <a href="silver_jewellery/silver_gulabdani.php" style="font-size: 16px;"><center><p style="color: #e0b238;"><b>Silver Gulabdani</b></p></center></a>
          </div>
          
          
          
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

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Team</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="assets/img/team/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-2.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Pricing</h2>
          <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="zoom-in">
            <h3>Free</h3>
            <h4>$0<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box featured" data-aos="zoom-in">
            <span class="featured-badge">Featured</span>
            <h3>Business</h3>
            <h4>$29<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box" data-aos="zoom-in">
            <h3>Developer</h3>
            <h4>$49<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    
    <!-- End Frequently Asked Questions Section -->

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
  <script>
    $(document).ready(function(){

    $('#myCarousel').carousel({
    interval: 3000,
    })

    });
  </script>
  <?php include 'footer.php';?>

  