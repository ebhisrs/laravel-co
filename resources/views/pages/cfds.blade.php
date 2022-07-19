@extends('layouts.app')
@section('content')
<!--  Hero -->
<section id="heroabout17" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>CFDs Details

 <span><i class="bi bi-arrow-down" style="color:#ffffff;"></i>
</span></h1>
 
    
    </div>
  </section><!-- End Hero -->

  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h3 class=" fw-bold">Trade Indices, Single Stocks, Metals, and Energy CFDs on FXDD's Platforms
</h3>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">You can trade CFDs in various exciting markets, including indices, metals and energies all from our various platforms. Trading CFDs is one of the quickest and most accessible ways to tap into a multitude of markets, expanding the variety of your portfolio while increasing your opportunity potential.

</p>
     
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
    
    </div>
  </div>

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h3 class=" fw-bold lh-1 mb-3">CFD Guide
</h3>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        
      </div>
    </div>
  </div>

<!-----accordion----->
<div class="container-fluid">
    <div class="row">
<div class="accordion paddingme" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Offering List
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <!----table--->
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name	</th>
      <th scope="col">Official Name</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">AUS200	</th>
      <td>The S&P/ASX200 - The Australian Stock Exchange Index
</td>

    </tr>
    <tr>
      <th scope="row">FRA.40	</th>
      <td>CAC40 Cotation Assistée en Continu - French Stock Exchange Index
</td>
    
    </tr>
    <tr>
      <th scope="row">COPPER</th>
      <td colspan="2">Copper</td>
      
    </tr>
    <tr>
      <th scope="row">GER.30	</th>
      <td colspan="2">DAX Deutscher Aktienindex - German Stock Exchange Index
</td>
      
    </tr>
    <tr>
      <th scope="row">UK.100	</th>
      <td colspan="2">FTSE100 - Financial Times & London Stock Exchange Index
</td>
      
    </tr>
    <tr>
      <th scope="row">NATGAS</th>
      <td colspan="2">Natural Gas
</td>
      
    </tr>
    <tr>
      <th scope="row">ESP.35</th>
      <td colspan="2">Spanish Stock Exchange Index
</td>
      
    </tr>
    <tr>
      <th scope="row">UKOIL</th>
      <td colspan="2">Brent Crude Oil
</td>
      
    </tr>
    <tr>
      <th scope="row">USA.30</th>
      <td colspan="2">Dow Jones Industrial Average
</td>
      
    </tr>
    <tr>
      <th scope="row">NAS100</th>
      <td colspan="2">NASDAQ
</td>
      
    </tr>
    <tr>
      <th scope="row">SPX500</th>
      <td colspan="2">S&P 500
</td>
      
    </tr>
    <tr>
      <th scope="row">JPN225</th>
      <td colspan="2">NIKKEI225 - Tokyo Stock Exchange
</td>
      
    </tr>
    <tr>
      <th scope="row">HKG.33</th>
      <td colspan="2">Hang Seng Index - Hong Kong Stock Exchange
</td>
      
    </tr>
    <tr>
      <th scope="row">CHN.50</th>
      <td colspan="2">SGX FTSE China A50 Index - Shanghai and Shenzhen Stock Exchanges
</td>
      
    </tr>
    <tr>
      <th scope="row">USD.X	</th>
      <td colspan="2">US Dollar Index Futures
</td>
      
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Trading Hours and Break Times
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Instrument Name</th>
      <th scope="col">Trading Hours in GMT</th>
      <th scope="col">Break Time in GMT</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">USA.30</th>
      <td>Sun 22:00 - Fri 20:15	</td>
      <td>20:15-20:30, 21:00-22:00
</td>
   
    </tr>
    <tr>
      <th scope="row">NAS100</th>
      <td>Sun 22:00 - Fri 20:15	</td>
      <td>20:15-20:30, 21:00-22:00
</td>
  
    </tr>
    <tr>
      <th scope="row">SPX500</th>
      <td>Sun 22:00 - Fri 20:15	</td>
      <td>20:15-20:30, 21:00-22:00</td>
    </tr>
    <tr>
      <th scope="row">OILUSD	</th>
      <td>Sun 22:00 - Fri 20:45	</td>
      <td>21:00-22:00</td>
    </tr>
    <tr>
      <th scope="row">UK.OIL	</th>
      <td>Sun 22:00 - Fri 20:45	</td>
      <td>21:00-00:00
</td>
    </tr>
    <tr>
      <th scope="row">XAU, XAG, XPT	</th>
      <td>Sun 22:00 - Fri 20:45		</td>
      <td>21:00-22:00
</td>
    </tr>
    <tr>
      <th scope="row">NATGAS</th>
      <td>Sun 22:00 - Fri 20:45		</td>
      <td>21:00-22:00
</td>
    </tr>
    <tr>
      <th scope="row">Copper	</th>
      <td>Sun 22:00 - Fri 20:45</td>
      <td>21:00-22:00
</td>
    </tr>
    <tr>
      <th scope="row">UK.100	</th>
      <td>Mon 7:00 - Fri 20:45		</td>
      <td>21:00 - 07:00
</td>
    </tr>
    <tr>
      <th scope="row">GER.30	</th>
      <td>Mon 7:00 - Fri 20:45	</td>
      <td>21:00 - 07:00
</td>
    </tr>
    <tr>
      <th scope="row">FRA.40	</th>
      <td>Mon 7:00 - Fri 20:45		</td>
      <td>21:00 - 07:00
</td>
    </tr>
    <tr>
      <th scope="row">ESP.35</th>
      <td>Mon 7:00 - Fri 19:00	</td>
      <td>19:00 - 07:00
</td>
    </tr>
    <tr>
      <th scope="row">AUS200	</th>
      <td>Sun 23:00 - Fri 20:00		</td>
      <td>06:30-07:10, 21:00-24:00

    </tr>
    <tr>
      <th scope="row">HKG.33	</th>
      <td>Mon 01:15 - Fri 19:00	</td>
      <td>04:00-05:00, 08:30-09:15
</td>
    </tr>
    <tr>
      <th scope="row">JPN225	</th>
      <td>Sun 23:00 - Fri 20:15	</td>
      <td>20:15 - 23:00
</td>
    </tr>
    <tr>
      <th scope="row">CHN.50	</th>
      <td>Mon 00:00 - Fri 20:45	</td>
      <td>08:30-9:00, 20:45-01:00
</td>
    </tr>
    <tr>
      <th scope="row">USD.X	</th>
      <td>Mon 01:00 - Fri 22:00	</td>
      <td>22:00-1:00

</td>
    </tr>
    <tr>
      <th scope="row">Single Stocks	</th>
      <td>Mon 13:30 - Fri 20:00		</td>
      <td>20:00-13:30

</td>
    </tr>
  </tbody>
</table>
<p>*Certain products' trading hours are subject to shift 1hour forward/backward with a change between Standard Time and DST

</p>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Pip Values
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name	</th>
      <th scope="col">Currency Used for Pip Value Conversion	</th>
      <th scope="col">PIP/Tic Decimal	</th>
      <th scope="col">Pip/Tic Value
</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">AUS200	</th>
      <td>AUD	</td>
      <td>0.01	</td>
      <td>AUD/USD = 0.77; Pip Value = $0.0077
</td>
    </tr>
    <tr>
      <th scope="row">FRA.40	</th>
      <td>EUR	</td>
      <td>0.01	</td>
      <td>EUR/USD = 1.20; Pip Value = $0.012</td>
    </tr>
    <tr>
      <th scope="row">COPPER</th>
      <td >USD</td>
      <td>0.001	</td>
      <td>Pip = $1.00</td>
    </tr>
    <tr>
      <th scope="row">GER.30	</th>
      <td >EUR</td>
      <td>0.01	</td>
      <td>EUR/USD = 1.20; Pip Value = $0.012
</td>
    </tr>
    <tr>
      <th scope="row">UK.100	</th>
      <td >GBP</td>
      <td>0.01		</td>
      <td>GBP/USD = 1.35; Pip Value = $0.013
</td>
    </tr>
    <tr>
      <th scope="row">NATGAS</th>
      <td >USD</td>
      <td>0.0001	</td>
      <td>Pip = $0.10
</td>
    </tr>
    <tr>
      <th scope="row">ESP.35	</th>
      <td >EUR	</td>
      <td>0.01		</td>
      <td>EUR/USD = 1.20; Pip Value = $0.012
</td>
    </tr>
    <tr>
      <th scope="row">UK.OIL	</th>
      <td >USD</td>
      <td>0.001	</td>
      <td>Pip = $0.10
</td>
    </tr>
    <tr>
      <th scope="row">USA.30	</th>
      <td >USD	</td>
      <td>0.01	</td>
      <td>Pip = $0.01
</td>
    </tr>
    <tr>
      <th scope="row">NAS100	</th>
      <td >USD	</td>
      <td>0.01	</td>
      <td>Pip = $0.01
</td>
    </tr>
    <tr>
      <th scope="row">SPX500	</th>
      <td >USD	</td>
      <td>0.01	</td>
      <td>Pip = $0.10
</td>
    </tr>
    <tr>
      <th scope="row">USD.X		</th>
      <td >USD	</td>
      <td>0.001		</td>
      <td>Pip = $1.00

</td>
    </tr>
    <tr>
      <th scope="row">JPN225	</th>
      <td >JPY	</td>
      <td>0.01	</td>
      <td>USD/JPY = 103.00; Pip Value = $0.0097

</td>
    </tr>
    <tr>
      <th scope="row">HKG.33	</th>
      <td >HKD	</td>
      <td>0.01	</td>
      <td>USD/HKG = 7.76; Pip Value = $0.013
</td>
    </tr>
    <tr>
      <th scope="row">CHN.50</th>
      <td >USD	</td>
      <td>0.01	</td>
      <td>Pip = $0.01
</td>
    </tr>
  </tbody>
</table>      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
      MT4 Configuration
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name	</th>
      <th scope="col">MT4 Contract Size for 1.0 Lot	</th>
      <th scope="col">Minimum Trade Lot Size	</th>
      <th scope="col">Maximum Trade Lot Size	</th>
      <th scope="col">Maximum Leverage
</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">AUS200</th>
      <td>1	</td>
      <td>1	</td>
      <td>1000</td>
      <td>1:100
</td>
    </tr>
    <tr>
      <th scope="row">FRA.40	</th>
      <td>1</td>
      <td>0.1</td>
      <td>1000	</td>
      <td>1:100
</td>
    </tr>
    <tr>
      <th scope="row">COPPER	</th>
      <td >1000</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">GER.30	</th>
      <td >1</td>
      <td>0.1</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">UK.100	</th>
      <td >1</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">NATGAS	</th>
      <td >1000</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">ESP.35		</th>
      <td >1000</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">UK.OIL	</th>
      <td >100</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">USA.30	</th>
      <td >1</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">NAS100	</th>
      <td >1</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">SPX500</th>
      <td >10</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">USD.X	</th>
      <td >1000</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">JPN225</th>
      <td >100</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">HKG.33	</th>
      <td >10</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>
    <tr>
      <th scope="row">CHN.50</th>
      <td >1</td>
      <td>0.1	</td>
      <td>1000	</td>
      <td>1:100
	</td>
    </tr>

  </tbody>
</table>
    </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
      Margin Requirement
      </button>
    </h2>
    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <h3><strong>Notional Value x Margin Requirement for the account</strong></h3><p> *Notional Value = Contract size * Price</p>
        <p>**Margin Requirement are converted to respective account currency</p>
        <h3><strong>Example;</strong></h3>
        <p>Margin Requirement for 1 standard lot of USA.30</p>
        <p>Account leverage 1:100</p>
        <p>Notional Value = Contract Size x Price</p>
        <p>1 x 26,000.00 = 26,000</p>
        <p>Margin Calculation = Notional Amount x Account Margin Requirement (1/100 = 0.01 or 1%)
</p>
<p>26,000.00 x 1% = $260.00 Margin Requirement for 1 lot of USA30

</p>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingsix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
      Single Stocks
      </button>
    </h2>
    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
      <div class="accordion-body">

      <table class="table">
  <thead>
    <tr>
      <th scope="col">Stock Exchange	</th>
      <th scope="col">Product Name	</th>
      <th scope="col">Contract Size	</th>
      <th scope="col">Minimum Trade Size	</th>
      <th scope="col">Maximum Trade Size	</th>
      <th scope="col">Commission Per Trade RT
</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">NYSE	</th>
      <td>3M Co (MMM)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq	</th>
      <td>Advanced Micro Devices Inc (AMD)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Alibaba (BABA)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq	</th>
      <td>Alphabet - A Share (GOOGL)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq</th>
      <td>Amazon (AMZN)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>American Express Co (AXP)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq</th>
      <td>Apple (AAPL)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq	</th>
      <td>Astrazeneca (AZN)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq</th>
      <td>Baidu (BIDU)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>

       <tr>
      <th scope="row">NYSE</th>
      <td>Bank of America (BAC)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Boeing Co. (BA)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Caterpillar Inc (CAT)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>The Coca-Cola Co (KO)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Corning Inc. (GLW)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Exxon Mobil Corp (XOM)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>

       <tr>
      <th scope="row">NYSE</th>
      <td>General Electric Co. (GE)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
       <tr>
      <th scope="row">NYSE</th>
      <td>Goldman Sachs Group Inc. (GS)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Home Depot Inc (HD)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
<tr>
      <th scope="row">NYSE</th>
      <td>International Business Machines Corp (IBM)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
<tr>
      <th scope="row">NYSE</th>
      <td>Johnson and Johnson (JNJ)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
<tr>
      <th scope="row">NYSE</th>
      <td>JP Morgan Chase & Co (JPM)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
<tr>
      <th scope="row">NYSE</th>
      <td>Lockheed Martin Corp. (LMT)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
<tr>
      <th scope="row">NYSE</th>
      <td>Mastercard Inc. (MA)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
<tr>
      <th scope="row">NYSE</th>
      <td>Merck (MRK)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
<tr>
      <th scope="row">Nasdaq	</th>
      <td>Meta (Meta)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq	</th>
      <td>Microsoft Corp (MSFT)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq</th>
      <td>Moderna Inc. (MRNA)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Morgan Stanley (MS)		</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq</th>
      <td>Netflix (NFLX)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>NYSE	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Pfizer (PFE)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Shopify Inc (SHOP)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq</th>
      <td>Tesla (TSLA)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Twitter (TWTR)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>United Health Group Inc (UNH)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Verizon Communications Inc (VZ)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Visa (V)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">Nasdaq</th>
      <td>Walgreens Boots Alliance Inc (WBA)		</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Walmart Inc (WMT)		</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Walt Disney Co (DIS)	</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
    <tr>
      <th scope="row">NYSE</th>
      <td>Zoom Video Communications Inc (ZM)</td>
      <td>100</td>
      <td>0.01</td>
      <td>1</td>
      <td>$16
</td>
    </tr>
  </tbody>
</table>
<p>Trading Hours: 9:30 AM - 4:00 PM EST</p>
<p>Margin Requirement: 5% of the account leverage</p>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingseven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
      Expiration Dates
      </button>
    </h2>
    <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">UK.OIL
Future Month</th>
      <th scope="col">Date of
Expiration</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Mar-22</th>
      <td>1/28/2022</td>
    
    </tr>
    <tr>
      <th scope="row">Apr-22</th>
      <td>2/25/2022
</td>
   
    </tr>
    <tr>
      <th scope="row">May-22	</th>
      <td >3/30/2022
</td>
    </tr>
    <tr>
      <th scope="row">Jun-22	</th>
      <td >4/28/2022

</td>
    </tr>
    <tr>
      <th scope="row">Jul-22	</th>
      <td >3/30/2022
</td>
    </tr>
    <tr>
      <th scope="row">Aug-22
	</th>
      <td >6/29/2022

</td>
    </tr>
    <tr>
      <th scope="row">Sep-22	</th>
      <td >7/28/2022

</td>
    </tr>
    <tr>
      <th scope="row">Oct-22		</th>
      <td >8/30/2022
</td>
    </tr>
  </tbody>
</table>

<!----------table 2--------->
<table class="table">
  <thead>
    <tr>
      <th scope="col">NATGAS
Future Month</th>
      <th scope="col">Date of
Expiration</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Feb-22</th>
      <td>1/25/2022
</td>
    
    </tr>
    <tr>
      <th scope="row">Mar-22	</th>
      <td>2/22/2022

</td>
   
    </tr>
    <tr>
      <th scope="row">Apr-22		</th>
      <td >3/25/2022

</td>
    </tr>
    <tr>
      <th scope="row">May-22	</th>
      <td >4/25/2022

</td>
    </tr>
    <tr>
      <th scope="row">Jun-22	</th>
      <td >5/24/2022

</td>
    </tr>
    <tr>
      <th scope="row">Jul-22	
	</th>
      <td >7/25/2022


</td>
    </tr>
    <tr>
      <th scope="row">Sep-22</th>
      <td >8/25/2022

</td>
    </tr>
    <tr>
      <th scope="row">Oct-22		</th>
      <td >8/30/2022
</td>
    </tr>
  </tbody>
</table>
<!-------end of table 2------>
<!----------table 3--------->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Copper
Future Month</th>
      <th scope="col">Date of
Expiration</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Mar-22	</th>
      <td>2/24/2022
</td>
    
    </tr>
    <tr>
      <th scope="row">May-22	</th>
      <td>4/27/2022

</td>
   
    </tr>
    <tr>
      <th scope="row">July-22	</th>
      <td >6/28/2022
</td>
    </tr>
    <tr>
      <th scope="row">Sep-22		</th>
      <td >8/29/2022


</td>
    </tr>
    <tr>
      <th scope="row">Dec-22</th>
      <td >11/28/2022


</td>
    </tr>
   
  </tbody>
</table>
<!-------end of table 3------>
<!----------table 4--------->
<table class="table">
  <thead>
    <tr>
      <th scope="col">USD.X
Future Month</th>
      <th scope="col">Date of
Expiration</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Mar-22	</th>
      <td>3/10/2022

</td>
    
    </tr>
    <tr>
      <th scope="row">Jun-22	</th>
      <td>6/09/2022


</td>
   
    </tr>
    <tr>
      <th scope="row">Sep-22	</th>
      <td >9/15/2022

</td>
    </tr>
    <tr>
      <th scope="row">Dec-22	</th>
      <td >12/12/2022

</td>
    </tr>
   
  </tbody>
</table>
<!-------end of table 4------>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingeight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
      Finance Charge
      </button>
    </h2>
    <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
      <div class="accordion-body">

      <h3>Holding a Long CFD Stock Index Tracker position after 17:00 EST (New York Time) involves a financing charge calculated as follows:
</h3>
<p>(P*Q*(Rf Offer+Finance spread))*(1/360)</p>
<p>Where:</p>

    <ul>
        <li>P = Price</li>
        <li>
Q = Number of contracts</li>
        <li>
Rf Offer = Interbank offer rate</li>
        <li>
Finance spread = 3%</li>
    </ul>
    <h3>Holding a Short CFD Stock Index Tracker position after 17:00 EST (New York Time) involves a financing charge calculated as follows:</h3>
    <p>(P*Q*(Rf Offer+Finance spread))*(1/360)</p>
<p>Where:</p>

    <ul>
        <li>P = Price</li>
        <li>
Q = Number of contracts</li>
        <li>
Rf Offer = Interbank offer rate</li>
        <li>
Finance spread = 3%</li>
    </ul>
    <p>Please consider additional items in your calculations mentioned below:</p>
    <ul>
        <li>A floor applies to the relevant Interbank Bid/Offer Rate, i.e. if the rate is negative it will be excluded from the financing calculation.
</li>
        <li>If the calculated financing rate on a short position (Interbank Bid Rate - Markdown) is negative, the financing credit will become a financing charge.
</li>
        <li>
        USD.X (US Dollar Index Futures) has a finance charge of LIBOR +3%
</li>
        
    </ul>

    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingnine">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
      Corporate Events/CFD Dividend adjustments
      </button>
    </h2>
    <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <p>
    Dividend payment may positively or negatively impact the overnight costs of your Index CFD and Stock CFD positions.
Dividend figures represent the expectations of our liquidity providers and are subject to change.
Index CFD’s are made up of a group of stocks that may be subject to dividends payouts throughout the year.
Our daily “Rollover” for Index CFDs and Stock CFDs is the sum of “Interest rate swap”, “Dividend adjustments”, and “Financial cost”.
Dividend adjustments take place when position passes ‘Ex-dividend date”.
When a dividend is paid on a stock, the value of the stock will drop and therefore so does the value of the index.
Short positions will be positively impacted by the drop in Index price, while long positions are negatively impacted and this may result in a financial loss.
    </p>
    <p>You can close your position before 5PM EST one day before “Ex-dividend date” to avoid dividend adjustments.
The values and dates shown on the dividend adjustment schedule are forecasts and may be subject to change.</p>
<h3>Dividend Adjustment Schedule</h3>
<p>(adjustment value are forecasts and actual numbers will fluctuate within shown range, and the range may be subject to change)
(all adjustments are in US$ per one MT4 lot)</p>
<p>(GER30 has no adjustment as it is a total return index so dividends are reinvested into the index )
(contract size per MT4 lot varies by products)</p>
    </div>
    </div>
  </div>
</div>
</div><!---end of--row-container----->
</div><!---end of--container fluid----->
<!---end of--accordion----->

@endsection

