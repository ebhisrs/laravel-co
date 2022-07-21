@extends('layouts.app')
@section('content')

<!--  Hero -->
<section id="heroabout9" class="d-flex align-items-center">
<div class="container" data-aos="zoom-out" data-aos-delay="100">
<h1>Economic Calendar

<br><span>
 </span></h1>
      <h2>
      <h2>
</h2>
     
    </div>
 
  </section><!-- End Hero -->

  <style>
 #div-id{
    border : 2px solid black;
    width    : 100%;
    height   : 800px;
    position : relative;
    overflow : hidden;
}

 #iframe-id{
    position : absolute;
    top      : -600%;
    left     : 0;
    width    : 100%;
    height   : 200%;
}
@media (min-width:667px){
   #iframe-id{
    top      : -70%;
  }
</style>
<div id="div-id">
 <iframe src="https://www.fxddtrading.com/bm/en/resources/economic-calendar" id="iframe-id" scrolling="no"></iframe>
</div>
@endsection
