@extends('layouts.app')
@section('content')
<!--  Hero -->
<section id="heroabout18" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1> <span>
      Cryptocurrency Details
</span></h1>
      <h2>
</h2>
     
    </div>
  </section><!-- End Hero -->

  <div class="bg-light text-secondary px-4 py-5 ">
    <div class="py-5">
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">At FXDD we are committed to providing a single point of access to all global asset classes. As such, we have introduced cryptocurrency trading on MT4, MT5 and WebTrader. Now you can trade Bitcoin, Litecoin and Ethereum 24/5 with FXDD from a single account, utilizing your margin among all asset classes. The unique nature of cryptocurrencies as well as a quickly escalating global interest in this asset class seems to point towards further growth in popularity. With this growth comes volatility, which in turn provides ample opportunities for all traders.
</p>
<h3 class=" fw-bold text-black">Trading Parameters</h3>
<ul>
    <li>Leverage 4:1 (Regardless of what your account leverage is for FX and other instruments)
</li>
    <li>Size: 1 Coin / Contract
</li>
    <li>Symbols: BTCUSD, BTCEUR, BTCJPY, LTCUSD, ETHUSD
</li>
    <li>Minimum / Maximum Trade Size: 0.01 / 1
</li>
    <li>Limit and Stop levels: 0.01
</li>
    <li>Total Daily Volume Limit: 10 Contracts
</li>
</ul>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Start Trading Now</button>
          <button type="button" class="btn btn-outline-light btn-lg px-4">View Pricing</button>
        </div>
      </div>
    </div>
  </div>

  <!-- second section -->
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/bit.png" class="d-block mx-lg-auto img-fluid rounded-circle" alt="Bootstrap Themes" width="200" height="200" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h2 class="display-5 fw-bold lh-1 mb-3">Bitcoin</h2>
        <p class="lead">Bitcoin was the first major cryptocurrency, having been introduced in 2009. It can be acquired through a process known as mining and serves as an asset, able to be exchanged for other currencies, products or services. At the time of writing the world is still unsure of what to make of this finance industry disruptor. A glance at the historical chart will quickly show how extremely volatile this instrument has been. Please take this into consideration when exploring trading opportunities.
</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-outline-warning btn-lg px-4 me-md-2">Start Trading Now</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">View Pricing</button>
        </div>
      </div>
    </div>
  </div>
  
    <!-- 3 section -->
    <div class="bg-light  px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start pl-5 pr-5">
        <h2 class="display-5 fw-bold lh-1 mb-3 ml-5">Litecoin</h2>
        <p class="col-lg-10 fs-4">Litecoin offers similar features to Bitcoin and is one of the most well-known cryptocurrencies. Its relatively cheaper price makes it more appealing to smaller investors and speculators. The main difference between Litecoin and Bitcoin comes in the form of speed of mining and also the amount of blockchain needed to create a single Litecoin.

</p>
<div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-outline-warning btn-lg px-4 me-md-2">Start Trading Now</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">View Pricing</button>
        </div>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
      <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="img/litcoin.png" class="img-fluid rounded-3  mb-4" style="margin-left: 12rem;" alt="Example image" width="200" height="200" loading="lazy">
      </div>
    </div>
      </div>
    </div>
  </div>
  <!-- 4 section -->
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/Ethereum.svg" class="d-block mx-lg-auto img-fluid rounded-circle" alt="Bootstrap Themes" width="200" height="200" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h2 class="display-5 fw-bold lh-1 mb-3">Ethereum</h2>
        <p class="lead">Ethereum attracts a lot of attention due to its versatile nature. Its usage as a means for financial transactions is attracting a lot of attention. It is capable of storing sophisticated computer programs, giving it an advantage over Bitcoin in certain use-cases.
</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-outline-warning btn-lg px-4 me-md-2">Start Trading Now</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">View Pricing</button>
        </div>
      </div>
    </div>
  </div>
@endsection

