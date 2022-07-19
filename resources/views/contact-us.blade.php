@extends('layouts.app')
@section('content')

<!--  Hero -->
<section id="heroabout5" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Contact us</h1>
      <h2>
</h2>
     
    </div>
  </section><!-- End Hero -->

  <main class="form-signin w-100 m-auto">

  @if(Session::has('message_sent'))

    <div class="alert alert-sucess" role="alert">
      {{Session::get('message_sent')}}
    </div>

  @endif

  <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
  @csrf  
  @method('PUT')
  <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name.." class="form-control">
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>

@endsection