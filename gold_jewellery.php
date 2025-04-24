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
                            <h2 style="color: #e0b238;"><center>Gold Jewellery</center></h2>
                            <center><p style="color: #e0b238;"><a href="index.php">Home</a> -> Gold Jewellery</p><center>
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
          <h2 data-aos="fade-in">Gold Jewelleries We Offer</h2>
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

          

          <div class="col-lg-3 col-md-6 portfolio-item filter-gold">
            <div class="portfolio-wrap">
              <img src="assets/img/pendal/pendal.webp" class="img-fluid" alt="">
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
              <img src="assets/img/dorle/dorle2.webp" class="img-fluid" alt="">
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