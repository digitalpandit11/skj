<?php include 'header.php';?>
<style>
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

#tos-section {
    /* background-color: #fff8e7; */
    padding: 50px 20px;
    color: #4a4a4a;
    font-family: 'Segoe UI', sans-serif;
}

#tos-section .container {
    max-width: 1100px;
    margin: auto;
}

#tos-section .tos-title {
    font-size: 32px;
    color: #b88c16;
    font-weight: bold;
    margin-bottom: 15px;
    text-align: center;
}

#tos-section .tos-date {
    text-align: center;
    font-size: 16px;
    font-style: italic;
    color: #777;
    margin-bottom: 30px;
}

#tos-section .tos-list {
    list-style-type: decimal;
    padding-left: 20px;
}

#tos-section .tos-list li {
    margin-bottom: 25px;
    line-height: 1.6;
}

#tos-section .tos-list a {
    color: #b88c16;
    text-decoration: underline;
}

  </style>
<section id="hero1" style="padding: 0px 0;">


<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="mask flex-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-12" style="margin-top: 10px; margin-bottom: 70px;">
                            <br><br><br><br><br><br><br><br>
                            <h2 style="color: #e0b238;">
                                <center>Terms Of Service</center>
                            </h2>
                            <center>
                                <p style="color: #e0b238;"><a href="index.php">Home</a> -> Terms Of Service</p>
                                <center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</section><!-- End Hero -->

<section id="tos-section" class="tos-content">
  <div class="container">
    <p class="tos-date">Effective Date: 21-04-2025</p>
    <p>Welcome to Shri Krishna Jewellers. By accessing or using our website, you agree to the following Terms of Service.</p>

    <ol class="tos-list">
      <li><strong>General Terms</strong><br>
        By using our site or placing an order, you agree to be bound by these terms. Please read them carefully before making a purchase.</li>
      
      <li><strong>Product Information</strong><br>
        All jewelry items listed on our website are described and priced as accurately as possible. However, minor variations in appearance, weight, or color may occur.</li>
      
      <li><strong>Pricing</strong><br>
        All prices are in Indian Rupees (INR) and include applicable taxes unless stated otherwise. We reserve the right to change prices without prior notice.</li>
      
      <li><strong>Orders & Payment</strong><br>
        • Orders can be placed in-store<br>
        • Payment methods accepted: UPI, Credit/Debit Card, Net Banking, Cash (in-store)<br>
        • All orders are subject to availability and confirmation</li>
      
      <li><strong>Shipping & Delivery</strong><br>
        Shipping & Delivery NOT Available</li>
      
      <li><strong>Returns & Exchanges</strong><br>
        Return & Exchanges NOT Available</li>
      
      <li><strong>Intellectual Property</strong><br>
        All content including images, logos, and text is the property of Shri Krishna Jewellers and may not be used without permission.</li>
      
      <li><strong>Limitation of Liability</strong><br>
        We are not liable for any indirect or consequential losses. Our total liability for any claim shall not exceed the value of the product purchased.</li>
      
      <li><strong>Governing Law</strong><br>
        These Terms are governed by the laws of India. Any disputes will be handled in the courts of Pune, Maharashtra.</li>
      
      <li><strong>Contact Us</strong><br>
        📧 Email: <a href="mailto:support@shrikrishnajewellers.com">support@shrikrishnajewellers.com</a><br>
        📞 Phone: +91-9021909385<br>
        📍 Address: SHOP NO.8, SN/188/158/61, AMRUT SOCIETY, GUJARATH COLONY, BHELEKENAGAR, KOTHRUD, PUNE, MAHARASHTRA - 411029
      </li>
    </ol>
  </div>
</section>


<?php include 'footer.php';?>