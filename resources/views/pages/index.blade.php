@extends('layouts.app')
@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero">

    

<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

  <div class="carousel-item active" style="background-image: url(img/hero-carousel/hero-carousel-1.jpg)"><div class="info d-flex align-items-center">
    <div class="carousel-container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">Welcome to <span>FXDDMENA</span></h2>
          <p data-aos="fade-up">Access to global markets 24/7</p>
          <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
        </div>
      </div>
    </div>
    </div>
  </div></div>
  <div class="carousel-item" style="background-image: url(img/hero-carousel/hero-carousel-2.jpg)"><div class="info d-flex align-items-center">
    <div class="carousel-container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">Welcome to <span>FXDDMENA</span></h2>
          <p data-aos="fade-up">Access to global markets 24/7</p>
          <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
        </div>
      </div>
    </div>
    </div>
  </div></div>
  <div class="carousel-item" style="background-image: url(img/hero-carousel/hero-carousel-3.jpg)"><div class="info d-flex align-items-center">
    <div class="carousel-container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">Welcome to <span>FXDDMENA</span></h2>
          <p data-aos="fade-up">Access to global markets 24/7</p>
          <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
        </div>
      </div>
    </div>
    </div>
  </div></div>
  <div class="carousel-item" style="background-image: url(img/hero-carousel/hero-carousel-4.webp)"><div class="info d-flex align-items-center">
    <div class="carousel-container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">Welcome to <span>FXDDMENA</span></h2>
          <p data-aos="fade-up">Access to global markets 24/7</p>
          <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
        </div>
      </div>
    </div>
    </div>
  </div></div>
  

  <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
  </a>

  <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
  </a>

</div>

</section><!-- End Hero Section -->

<main id="main">
<!-- ======= Why Us Section ======= 
<section id="why-us" class="why-us section-bg">
<div class="container-fluid" data-aos="fade-up">
  <div class="row">
    <div
      class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1 "
    >
      <div class="content">
        <h2>
         
          <strong>Commission-free investing</strong>
        </h3>
     
        <a href="/" role="button" class="btn btn-warning rounded-5">
          OPEN ACCOUNT
</a>
       
      </div>
    </div>

<style>
.box {
position: relative;
width: 300px;
height: 300px;
}
.box-contents {

top: 0;
right: 0;
bottom: 0;
left: 0;


transition: .5s ease;
}
.hover-point {
position: absolute;
z-index: 2;
width: calc(100% / 3);
height: calc(100% / 3);
}
.hover-point:nth-child(1) {
top: 0;
left: 0;
}
.hover-point:nth-child(2) {
top: 0;
left: calc(100% / 3);
}
.hover-point:nth-child(3) {
top: 0;
right: 0;
}
.hover-point:nth-child(4) {
top: calc(100% / 3);
left: 0;
}
.hover-point:nth-child(5) {
top: calc(100% / 3);
right: 0;
}
.hover-point:nth-child(6) {
bottom: 0;
left: 0;
}
.hover-point:nth-child(7) {
bottom: 0;
left: calc(100% / 3);
}
.hover-point:nth-child(8) {
bottom: 0;
right: 0;
}
.hover-point:nth-child(1):hover ~ .box-contents {
transform-origin: right top;
transform: perspective(1000px) rotateX(10deg) rotateY(-10deg) rotateZ(2deg);
}
.hover-point:nth-child(2):hover ~ .box-contents {

transform-origin: center top;
transform: perspective(1000px) rotateX(10deg);
}
.hover-point:nth-child(3):hover ~ .box-contents {

transform-origin: left top;
transform: perspective(1000px) rotateX(10deg) rotateY(10deg) rotateZ(-2deg);
}
.hover-point:nth-child(4):hover ~ .box-contents {
transform-origin: left center;
transform: perspective(1000px) rotateY(-10deg);
}
.hover-point:nth-child(5):hover ~ .box-contents {
transform-origin: right center;
transform: perspective(1000px) rotateY(10deg);
}
.hover-point:nth-child(6):hover ~ .box-contents {
transform-origin: right bottom;
transform: perspective(1000px) rotateX(-10deg) rotateY(-10deg) rotateZ(-2deg);
}
.hover-point:nth-child(7):hover ~ .box-contents {
transform-origin: center bottom;
transform: perspective(1000px) rotateX(-10deg);
}
.hover-point:nth-child(8):hover ~ .box-contents {
transform-origin: left bottom;
transform: perspective(1000px) rotateX(-10deg) rotateY(10deg) rotateZ(2deg);
}



</style>


<div class="hover-point"></div>
<div class="hover-point"></div>
<div class="hover-point"></div>
<div class="hover-point"></div>
<div class="hover-point"></div>
<div class="hover-point"></div>
<div class="hover-point"></div>
<div class="hover-point"></div>
    <div
      class="col-lg-5 align-items-stretch order-1 order-lg-2 img box-contents" 
      style="background-image: url('img/monitor.png')"
      data-aos="zoom-in"
      data-aos-delay="150"

    >
      &nbsp;
    </div>
   

  </div>
</div>
</section>
--------------->
<!--  Hero -->
<section id="heroabout88" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h2> <strong>Commission-free investing</strong></h2>
      
      <div class="d-flex">
        <a href="#about" style="--bs-btn-color: #ffffff!important;" class="btn btn-outline-warning btn-lg">Get Started</a>
      </div>
    </div>
  </section><!-- End Hero -->
<!-- End Why Us Section -->
<!-- ======= Services Section ======= -->
<section id="services" class="services">
<div class="container-fluid">
<div class="section-title">
  <h2>FXDD MENA</h2>
  <h3>Why <span>FXDD MENA</span> ?</h3>
  <p>
    Discover why traders choose us as their trusted broker

  </p>
</div>

<div class="row justify-content-center">
  <div class="col-xl-10">
    <div class="row">
      <div class="col-lg-4 col-md-6 icon-box">
        <div class="icon"><i class="ri-pie-chart-line"></i></div>
        <h4 class="title"><a href="">ACCOUNT TYPES</a></h4>
        <p class="description">
          Choose the account that suits your trading requirements & style
        </p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box">
        <div class="icon"><i class="ri-stack-line"></i></div>
        <h4 class="title"><a href="">LEVERAGE UP TO 1:1000</a></h4>
        <p class="description">
          Capitalize on opportunities & minimize volatility with tiers based on volume & asset class
        </p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box">
        <div class="icon"><i class="ri-markup-line"></i></div>
        <h4 class="title"><a href="">SECURITY OF FUNDS</a></h4>
        <p class="description">
          Segregated accounts, Tiers 1 banks, high reserves & negative balance protection
        </p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box">
        <div class="icon"><i class="ri-shape-line"></i></div>
        <h4 class="title"><a href=""> LIQUIDITY AGGREGATION</a></h4>
        <p class="description">
          Guaranteed execution with low latency ensuring favorable pricing for clients
        </p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box">
        <div class="icon"><i class="ri-fingerprint-line"></i></div>
        <h4 class="title"><a href="">24/7 CLIENT SUPPORT </a></h4>
        <p class="description">
          Round the clock live multilingual customer support with quick response rates
        </p>
      </div>
      <div class="col-lg-4 col-md-6 icon-box">
        <div class="icon"><i class="ri-body-scan-line"></i></div>
        <h4 class="title"><a href="">FAST DEPOSITS & WITHDRAWALS </a></h4>
        <p class="description">
          Deposit & withdraw from/to your e-wallets in Fiat with $0 transaction fees
        </p>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<!-- End Services Section -->
<!-- ======= Services Section ======= -->
<section id="services" class="services2 bg-lessdark">
<div class="container-fluid">
<div class="section-title">

  <h3> <span>18,000*+ markets. Countless opportunities.
  </span> </h3>
<p>Trade CFDs with us to take advantage of both rising and falling prices.

</p>
</div>

<div class="row justify-content-center">
  <div class="col-xl-10">
    <div class="row">
      <div class="col-lg-3 col-md-6 icon-box">
        <div class="icon text-center">
          <i class="ri-pie-chart-line"></i>
          <h4 class="title"><a href="">Forex</a></h4>
        </div>
       
      </div>
      <div class="col-lg-3 col-md-6 icon-box">
        <div class="icon text-center">
          <i class="ri-stack-line"></i>
          <h4 class="title"><a href="">Indices</a></h4>
        </div>
        
      </div>
      <div class="col-lg-3 col-md-6 icon-box">
        <div class="icon text-center">
          <i class="ri-markup-line"></i>
          <h4 class="title"><a href="">Cryptocurrencies</a></h4>
        </div>
        
      </div>
      <div class="col-lg-3 col-md-6 icon-box">
        <div class="icon text-center">
          <i class="ri-markup-line"></i>
          <h4 class="title"><a href="">Shares</a></h4>
        </div>
       
      </div>
    </div>
  </div>
</div>
</div>
</section>
<!-- End Services Section -->
<!-- ======= platform Section ======= -->
<section id="why-us" class="why-us section-bg">
<div class="container-fluid" data-aos="fade-up">
<div class="row">

  <div
    class="col-lg-12 align-items-stretch order-1 order-lg-2 img"
    style="
      background-image: url('img/macbook_3.png');
      height: 398px;
    "
    data-aos="zoom-in"
    data-aos-delay="150"
  >
    &nbsp;
    
  </div>
  <div
    class="col-lg-12 align-items-stretch order-1 order-lg-2 img my-5"
    style="
      background-image: url('img/plateform.png');
      height: 120px;
    "
    data-aos="zoom-in"
    data-aos-delay="150"
  >
    &nbsp;
    
  </div>

  
</div>
<div id="hero">
<div class="row justify-content-center">
<div class="col-lg-6 text-center">
<a class="btn btn-outline-warning" href="#" role="button">Compare Platforms</a></div></div></div>

</div>
</section>
<!-- End platform Section -->
<!-- ======= deposit Section ======= -->
<section id="clients" class="clients pt-5 bg-lessdark">

<div class="container-fluid">
  <div class="section-title">
    <h3> <span>Our deposit and withdrawal methods
    </span> </h3>

  </div>
<div class="container" data-aos="zoom-out">

<div class="clients-slider swiper">
  <div class="swiper-wrapper align-items-center">
    <div class="swiper-slide"><a href="/login"><img src="img/deposit-logo/visa.svg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="/login"><img src="img/deposit-logo/mastercard-sm.svg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="/login"><img src="img/deposit-logo/bitcoin-sm.svg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="/login"><img src="img/deposit-logo/tether-sm.svg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="/login"><img src="img/deposit-logo/neteller.svg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="/login"><img src="img/deposit-logo/tmi.png" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="/login"><img src="img/deposit-logo/bank.svg" class="img-fluid" alt=""></a></div>
    <div class="swiper-slide"><a href="/login"><img src="img/deposit-logo/up.svg" class="img-fluid" alt=""></a></div>
  </div>
</div>

</div>
</section><!-- End deposit Section -->



<!-- ======= platform Section ======= -->
<section id="why-us " class="why-us section-bg">
<div class="container  font-boldmine6 ">
<div class="row ">
  <div class="col-4"> <p class="text-sizemine2 ">Company news</p>
    <p><a href="/blog" class="greyb-colormine">Forex 101</a></p>
    <p><a href="/blog" class="greyb-colormine">Forex 101</a></p>
    <p><a href="/blog" class="greyb-colormine">Forex 101</a></p>
    <p><a href="/blog">More News <i class="fix-iconmine ri-arrow-right-fill"></i></a></p>
  </div>
  <div class="col-4"><p class="text-sizemine2">FXEducation</p>
  <p><a href="/blog" class="greyb-colormine">Forex 101</a></p>
  <p><a href="/blog" class="greyb-colormine">Forex 101</a></p>
  <p><a href="/blog" class="greyb-colormine">Forex 101</a></p>
  <p><a href="/blog">Start Learning <i class="fix-iconmine ri-arrow-right-fill"></i></a></p>
  </div>
  <div class="col-4"><p class="text-sizemine2">Need help?</p><p >Visit our  <a style="color: #ffc732;" href="#">Help Centre</a><i class="fix-iconmine ri-arrow-right-fill"></i></p>
  <p>Any questions? Feel free to <a href="mail:info@fxddmena.com" style="color: #ffc732;"><i class="fix-iconmine ri-mail-line"></i> Contact us</a>
  </p>
  <a class="btn btn-whitemine" href="#" role="button">Live Chat </a>
  <a class="btn btn-whitemine" href="#" role="button">Callback</a></div></div></div></div>
  </div>
</div>
</div>
</section>
<!-- End platform Section -->

@endsection
 