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
        @if(count($latest)>0)

@foreach($latest as $last)
          <div class="row">
            <div class="col-md-6">
              <div class="icon-box">
              <i class="bi bi-newspaper"></i>
                <h4><a href="#"><a href="/fxdd/public/latest/{{$last->id}}">{{$last->title}}</a></a></h4>
                <small>{{$last->created_at}}</small>
                <p>
                {{$last->body}}
                </p>
              </div>
            </div>
          
           
          </div>
          @endforeach

@else
    <p>no post found</p>
@endif
        </div>
      </section>
      <!-- End latest Section -->

    
@endsection