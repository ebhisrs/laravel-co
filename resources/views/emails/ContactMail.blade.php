@extends('layouts.app')

@section('content')
    
<section id="heroabout4" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100"><div class="d-flex flex-row">
    <div class="p-2"> <h1>Latest News </h1></div>
    <div class="pt-3"><a href="https://www.youtube.com/" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i></a></div>
</div>
      
    </div>
  </section><!-- End Hero -->

   <!-- ======= latest news Section ======= -->
   <section id="latest" class="latest">
        <div class="container">
      <h1>contact message</h1>
      <p>name: {{$details['name']}}</p>
      <p>name: {{$details['email']}}</p>

        </div>
      </section>
      <!-- End latest Section -->

    
@endsection