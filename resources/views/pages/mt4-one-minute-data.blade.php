@extends('layouts.app')
@section('content')
<!--  Hero -->
<section id="heroabout85" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Metatrader 1-Minute Data
</h1>
      <h2>
</h2>
    
    </div>
  </section><!-- End Hero -->


    <div class="container-fluid">
        <div class="row py-5 d-flex justify-content-center">
        <div class="col-8">
            <p>To install History Data:</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Click on the currency pair of your choice and save it on your computer.</li>
                <li class="list-group-item">Once complete select close on the Download Complete window.</li>
                <li class="list-group-item">Open the MetaTrader platform.</li>
                <li class="list-group-item">Select Tools>History Center.</li>
                <li class="list-group-item">Double click on the currency pair which you downloaded the data for, Highlight 1 Minute (M1).</li>
                <li class="list-group-item">Select Import.</li>
                <li class="list-group-item">Browse to the file you previously downloaded to your computer (remember it has .hst extension) and select Ok. Now the file has been uploaded to the History Center./li>
                <li class="list-group-item">Select Add and enter the date of the chart you wish to start at and select Ok.</li>
                <li class="list-group-item">Next open the chart you have imported, refresh the chart and scroll back to see the updated chart.</li>
                
            </ul>

            <p class="pt-5"><a href="https://tools.fxdd.com/tools/M1Data/AUDCAD.zip">AUD/CAD</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/EURCAD.zip">EUR/CAD</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/GBPUSD.zip">GBP/USD</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/AUDJPY.zip">AUD/JPY</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/EURCHF.zip">EUR/CHF</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/NZDUSD.zip">NZD/USD</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/AUDNZD.zip">AUD/NZD</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/EURGBP.zip">EUR/GBP</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/USDCAD.zip">USD/CAD</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/AUDUSD.zip">AUD/USD</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/EURJPY.zip">EUR/JPY</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/USDCHF.zip">USD/CHF</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/CADJPY.zip">CAD/JPY</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/EURUSD.zip">EUR/USD</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/USDJPY.zip">USD/JPY</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/CHFJPY.zip">CHF/JPY</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/GBPCHF.zip">GBP/CHF</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/USDMXN.zip">USD/MXN</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/EURAUD.zip">EUR/AUD</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/GBPJPY.zip">GBP/JPY</a></p>
            <p><a href="https://tools.fxdd.com/tools/M1Data/USDTRY.zip">USD/TRY</a></p>

            <h5>History Center</h5>

            <p>Technical analysis is the market movements research made in order to forecast future price movements. the market is often analyzed using charts. So it is very important to have available historical data for all symbols and timeframes used. Historical data are constantly formed and stored on the server. Connecting to it, the client terminal downloads all necessary data. They will be then used for drawing of charts,testing and optimization of Expert Advisors. To control historical data, the terminal has a special window named "History Center". This window can be opened by executing the command "Tools — History Center" or by pressing F2.

</p>
            <p>After the terminal has been shut down, all accumulated historical data will be stored in the "History Center". Sizes of files containing historical quotes do not exceed values defined in settings. If the amount of historical data accumulated exceeds the value set in the field of " Max. bars in history:", the oldest bars will be deleted when storing. For each timeframe, a separate history file is formed named as SSSSSSPP.hst (where SSSSSS - symbol name, PP - timeframe in minutes) and saved in the /HISTORY. Later on, the saved data will be used to draw charts, as well as for testing of trading strategies.

</p>
            <p>In the "History Center" window, the available data can be changed. For this, it is necessary to select the desired symbol and timeframe in the left part of the window.The corresponding data will be loaded in form of a table. To add a record about a new bar, it is necessary to press the button of the same name, fill out all necessary fields in the new window and press "OK". After that, the new bar will appear in the history. One can modify the bar by selecting the corresponding record and pressing the "Modify" button. To delete a bar, it is necessary to select it and press the button of the same name.

</p>
<h5>Load Historical Data
</h5>
<p>It is possible to load quotes for basic currency pairs starting with year 1999 from the historical data server. To do it, it is necessary to select the desired symbol and press "Download".

</p>
<p>When downloading historical data, it is recommended to control the amount of bars in history and in charts.</p>

<h5>Exports and Imports of Historical Data

</h5>
<p>Historical data can be exported into files formatted as CSV, PRN and HTM. For this, it is necessary to select the desired symbol in the left part of the "History Center" window and press "Export". Then it is necessary to select one of three file formats and specify the path of location on the hard disk.

</p>
<p>Historical data as CSV, PRN, TXT, HTM and HST can also be imported into terminal.

</p>
<p>Historical data in the file can be represented as follows (any other separator can be used instead of space):

</p>

<ul class="list-group list-group-flush">
  <li class="list-group-item">YYYY.MM.DD HH:MM O H L C V</li>
  <li class="list-group-item">YYYY-MM-DD HH:MM O H L C V</li>
  <li class="list-group-item">
YYYY/MM/DD HH:MM O H L C V</li>
  <li class="list-group-item">
DD.MM.YYYY HH:MM O H L C V</li>
  <li class="list-group-item">DD-MM-YYYY HH:MM O H L C V</li>
  <li class="list-group-item">DD/MM/YYYY HH:MM O H L C V</li>
</ul>
<P class="py-5">First of all, it is necessary to select a symbol and a timeframe, for which the import will be performed, in the left part of the "History Center" window. Then it is necessary to set up import parameters by pressing "Import":

</p>
<ul class="list-group list-group-flush">
  <li class="list-group-item">Separator — data separator in the file to be imported. Comma, semicolon, space or tabulation character can be used as separators;
</li>
  <li class="list-group-item">Skip columns — skip columns when importing. This can be helpful when the imported file contains more data types than necessary;
</li>
  <li class="list-group-item">Skip lines — skip rows (lines) when importing;
</li>
  <li class="list-group-item">Time shift — shift data by several hours in time;
/li>
  <li class="list-group-item">Selected only — import only selected data. Data are selected by lines using "Ctrl" and "Shift";
</li>
<li class="list-group-item">Volumes — enable/disable importing of volumes.

</li>
</ul>
<p class="py-5">After historical data have been imported, they can be used to show charts and test Expert Advisors.

</p>
        </div>
        </div>

    </div>
@endsection

