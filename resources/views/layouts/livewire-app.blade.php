
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FXDDMENA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="css/main.css" rel="stylesheet">
  @livewireStyles
  @yield('head')
  <style>.btn-outline-warning {
    --bs-btn-color: #000000!important;}
    
    </style>
</head>
 
<body>
  <header id="header" class="header d-flex align-items-center">
    <div class="container header1">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-8 d-flex flex-row-reverse gap-2">
          <a class="btn button-mine1 btn-sm" href="#" role="button"> PAMM Login </a>
          <a class="btn button-mine1 btn-sm" href="#" role="button"> Open Account </a>
          <a class="btn button-mine1 btn-sm" href="#" role="button"> IB Login </a>
          <a class="btn button-mine1 btn-sm" href="#" role="button"> Client Login </a>
        </div>
      </div>
    </div>
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>FXDDMENA<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#"><span>COMPANY</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">FXDD Latest News</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Complaint Form</a></li>
              <li><a href="#">Documents, Policies and
                forms</a></li>
                <li><a href="#">Promotions</a></li>
              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>MARKETS</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Forex</a></li>
              <li><a href="#">Stocks</a></li>
              <li><a href="#">Indices</a></li>
              <li><a href="#">Metals</a></li>
              <li><a href="#">Energies:</a></li>
              <li><a href="#">Asset list</a></li>
                <li><a href="#">Cryptocurrency</a></li>
              
            </ul>
          </li>

        <li class="dropdown"><a href="#"><span>TRADING</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Accounts</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Accounts Overview</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Tools</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deposits and
                    Withdrawals</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Tools and FAQ</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Online Tools</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Research and Analysis</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">ITEM</a></li>
                </ul>
              </li>
        
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>EDUCATION</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Webinars</a></li>
              <li><a href="#">Educational Videos</a></li>
            
            </ul>
          </li>
          <li><a href="blog.html">PLATFORM</a></li>

          <li class="dropdown"><a href="#"><span>PARTHNERSHIPS</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Inroducing Broker</span> </a>
                
              </li>
              <li class="dropdown"><a href="#"><span>Liquidity</span></a>
              
              </li>
              <li class="dropdown2"><a href="#"><span>Offers and Promotions</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Refer a Friend program</a></li>
                  <li><a href="#">Promotions</a></li>
                </ul>
              </li>
            
        
            </ul>
          </li>

        </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header>

  <section id="heroabout" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Trade <span>
 With An Established Industry Leader</span></h1>
      <h2>
</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section>
        
  @yield('content')

  {{ $slot }}


<div class="container-fluid p-3 bg-darkmine text-white ">
  
  <div class="row">
    <div class="col-4 text-center text-sizemine3">
      <a href="/"> <i class="ri-facebook-fill "></i></a>
      <a href="/"> <i class="ri-twitter-fill"></i></a>
        <a href="/"> <i class="ri-instagram-fill"></i></a>
          <a href="/"> <i class="ri-youtube-fill"></i></a>
    </div>
    <div class="col-4"></div>
    <div class="col-4"><div id="hero">
      <div class="row justify-content-center">
      <div class="col-lg-6 text-center pt-2">
      <a class="btn btn-whitemine" href="#" role="button">Open Account</a></div></div></div></div>
    </div>
  </div>
 
  <footer id="footer" class="footer">
  
  <div class="footer-content position-relative">
    <div class="container">
      <div class="row">
  
        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h3>FXddMena</h3>
            <p>
              (Headquarters)
              <br>
              Philip Heymans Alle 15
              2900<br>
              Hellerup
              Denmark <br><br>
      <div class="col-lg-4 col-md-4 footer-links">
      <ul>
      <li><a href="#">Contact FXDDMENA</a></li></ul></div> </p>
                <div class="social-links d-flex">
                  <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div><!-- End footer info column-->
      
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Products & pricing</h4>
              <ul>
                <li><a href="#">Stocks</a></li>
                <li><a href="#">ETFs</a></li>
                <li><a href="#">Bonds</a></li>
                <li><a href="#">Mutual funds</a></li>
                <li><a href="#">Listed options</a></li>
                <li><a href="#">Futures</a></li>
          <li><a href="#">General charges</a></li>
              </ul>
            </div><!-- End footer links column-->
      
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Platforms</h4>
              <ul>
                <li><a href="#">Client service</a></li>
                <li><a href="#">VIP offering</a></li>
                <li><a href="#">FXddmena account</a></li>
                <li><a href="#">Corporate account</a></li>
                <li><a href="#">Professional account</a></li>
                <li><a href="#">Portfolio Based Margin account</a></li>
                <li><a href="#">Investment portfolios</a></li>
              </ul>
            </div><!-- End footer links column-->
      
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>General</h4>
              <ul>
                <li><a href="#">Open account</a></li>
                <li><a href="#">About FXddmena</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Institutional & Partners</a></li>
                <li><a href="#">Support centre</a></li>
                <li><a href="#">More products</a></li>
              </ul>
            </div><!-- End footer links column-->
      
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Other</h4>
              <ul>
                <li><a href="#">Trade inspiration</a></li>
                <li><a href="#">Outrageous Predictions</a></li>
                <li><a href="#">Quarterly Outlook</a></li>
                <li><a href="#">Refer a friend</a></li>
                <li><a href="#">Margin information</a></li>
                <li><a href="#">Frequently asked questions</a></li>
              </ul>
            </div><!-- End footer links column-->
      
          </div>
        </div>
      </div>
  
    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
        <a href="/">Compliance</a>
        <a href="">Risk warning</a>
        <a href="">Terms of Use</a>
        <a href="">Investor relations</a>
        <a href="">Protection of funds</a>
        <a href="">Privacy</a>
        <a href="">General business terms</a>
        </div>
      </div>
    </div>
    <div class="footer-legal position-relative">
      <div class="container">
        <div class="copyright">
          <p class="text-size12">FXDDMENA brand is authorized and regulated in various jurisdictions.</p>
          <p class="text-size12">FXDDMENA  (www.fxddmena.com) with registration number HE 11111 and registration address at 35, Lamprou Konstantara, FXTM Tower, 4156, Kato Polemidia, Limassol, Cyprus is regulated by the Cyprus Securities and Exchange Commission with CIF license number 185/12, licensed by the Financial Sector Conduct Authority (FSCA) of South Africa, with FSP No. 11111.
          </p>
          <p class="text-size12">Exinity UK Limited (www.fxddmena.com) with registration number 10599136 and registration address at 1 st. Katharine's Way London, England, E1W 1UN, UK is authorised and regulated by the Financial Conduct Authority with license number 777911.
    
          </p>
          <p class="text-size12">Exinity Limited (www.fxddmena.com) with registration number c2e23 C1/GBL and registration address at 5th Floor, NEX Tower, Rue du Savoir, Cybercity, 72201 Ebene, Republic of Mauritius is regulated by the Financial Services Commission of the Republic of Mauritius with an Investment Dealer License with license number 3424fds.
    
          </p>
    
          <p class="text-size12">Risk Warning: CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money.
    
          </p>
    
          <p class="text-size12">Regional restrictions FXDDMENA brand does not provide services to residents of the USA, Mauritius, Japan, Canada, Haiti, Suriname, the Democratic Republic of Korea, Puerto Rico, Brazil, the Occupied Area of Cyprus and Hong Kong. Regulations section of our FAQs.
    
          </p>
          2022 &copy; <strong><span>FXDDMENA</span></strong>.
        </div>
      </div>
    </div>
  
  </footer>
  <!-- End Footer -->
   
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <div id="preloader"></div>
  
  <!-- Vendor JS Files -->
  
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  
  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  @livewireScripts
  @yield('script')
  </body>
  
  </html>
 