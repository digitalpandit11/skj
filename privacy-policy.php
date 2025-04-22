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

.privacy-policy-section {
    background-color: #f9f9f9;
    padding: 60px 0;
    font-size: 16px;
    line-height: 1.8;
    color: #333;
    border-top: 1px solid #ddd;
}

.privacy-policy-section .container {
    max-width: 1140px;
}

.privacy-policy-section p {
    margin-bottom: 20px;
}

.privacy-policy-section h3.section-title {
    color: #e0b238;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 40px;
    text-align: center;
}

.privacy-policy-section h5 {
    font-size: 20px;
    font-weight: 600;
    color: #222;
    margin-top: 30px;
    margin-bottom: 15px;
}

.privacy-policy-section ul {
    padding-left: 20px;
    margin-bottom: 20px;
}

.privacy-policy-section ul li {
    list-style-type: disc;
    margin-bottom: 10px;
}
.tos-date {
    text-align: center;
    font-size: 16px;
    font-style: italic;
    color: #777;
    margin-bottom: 30px;
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
                                <center>Privacy Policy</center>
                            </h2>
                            <center>
                                <p style="color: #e0b238;"><a href="index.php">Home</a> -> Privacy Policy</p>
                                <center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</section><!-- End Hero -->

<section class="privacy-policy-section py-5">
  <div class="container">
  <p class="tos-date">Effective Date: 21-04-2025</p>
    <p>Shri Krishna Jewellers is committed to protecting your privacy. This Privacy Policy outlines how we collect, use, and protect your personal information when you visit our website or engage with our services.</p>

    <h5>1. Information We Collect</h5>
    <ul>
      <li>Name, contact number, email address</li>
      <li>Billing and shipping address</li>
      <li>Payment details (processed securely via third-party providers)</li>
      <li>Purchase history</li>
      <li>Messages or inquiries sent through our website or social media</li>
    </ul>

    <h5>2. How We Use Your Information</h5>
    <ul>
      <li>Process and fulfill your orders</li>
      <li>Respond to your queries and customer service requests</li>
      <li>Send order confirmations, invoices, and promotional emails</li>
      <li>Improve our website and services</li>
    </ul>

    <h5>3. Sharing Your Information</h5>
    <ul>
      <li>We do not sell or rent your personal data. We may share your information with:</li>
      <li>Payment gateways (e.g., Razorpay, PayPal)</li>
      <li>Shipping partners</li>
      <li>Marketing service providers (only if you’ve opted in)</li>
    </ul>

    <h5>4. Cookies</h5>
    <p>Our website uses cookies to improve user experience and analyze traffic. You can disable cookies in your browser settings if you prefer.</p>

    <h5>5. Your Rights</h5>
    <ul>
      <li>Request access to your data</li>
      <li>Ask for corrections</li>
      <li>Request deletion of your data</li>
      <li>Opt out of marketing communications</li>
    </ul>

    <h5>6. Data Security</h5>
    <p>We take industry-standard precautions to protect your information. However, no online transmission is completely secure.</p>

    <h5>7. Contact Us</h5>
    <p>If you have questions about this policy, please contact us at:</p>
    <ul>
      <li>📧 <strong>Email:</strong> support@shrikrishnajewellers.com</li>
      <li>📞 <strong>Phone:</strong> +91-9021909385</li>
      <li>📍 <strong>Address:</strong> SHOP NO.8, SN/188/158/61, AMRUT SOCIETY, GUJARATH COLONY, BHELEKENAGAR, KOTHRUD, PUNE, MAHARASHTRA - 411029</li>
    </ul>
  </div>
</section>


<?php include 'footer.php';?>