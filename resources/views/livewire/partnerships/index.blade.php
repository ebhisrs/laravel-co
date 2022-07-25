<div>
  
  <section id="about" class="about" wire:ignore>
  
      <div class="container" data-aos="fade-up">
      <div class="row gx-0">
  
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
              <h3>Money Manager Solutions</h3>
              
              <p>
                  Everything we mentioned above for our Introducing Brokers also applies for our Money Manager partners. Your clients will have a great home with our unrivaled support infrastructure.
              </p>
              <p>
                  Over the years we have found that managed trading clients have a differing set of needs, and our customer service team is well versed in taking care of these needs in a professional and expedient manner.
              </p>
              <div class="text-center text-lg-start">
              {{-- <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
              </a> --}}
              <button class="btn btn-outline-primary mt-3 pt-3 pb-3 pr-5 pl-5">
                  Learn More
              </button>
              </div>
          </div>
          </div>
  
          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
  
      </div>
      </div>
  
  </section>
  
  <section id="about" class="about" wire:ignore>
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
  
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
  
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Money Manager Solutions</h3>
            
            <p>
                Everything we mentioned above for our Introducing Brokers also applies for our Money Manager partners. Your clients will have a great home with our unrivaled support infrastructure.
            </p>
            <p>
                Over the years we have found that managed trading clients have a differing set of needs, and our customer service team is well versed in taking care of these needs in a professional and expedient manner.
            </p>
            <div class="text-center text-lg-start">
              {{-- <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
              </a> --}}
              <button class="btn btn-outline-primary mt-3 pt-3 pb-3 pr-5 pl-5">
                Learn More
              </button>
            </div>
          </div>
        </div>
  
        
  
      </div>
    </div>
  </section>
  
  <section id="about" class="about" wire:ignore.self>
    <div class="container" >
      
      <div class="row gx-0">
  
        
        <section id="contact" class="contact">
  
            <div class="container" >
      
              <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
              </header>
      
              <div class="row gy-4" wire:ignore.self>
                  <form wire:submit.prevent="CreatePartnership" enctype="multipart/form-data" role="form" class="php-email-form">
                    <div class="row gy-4">
      
                      <div class="col-md-6">
                        <input wire:model.lazy="partnerships.firstName" type="text" name="firstName" class="form-control" placeholder="First Name" >
                        @error('partnerships.firstName')
                            <span class="mt-3 mb-3">
                                <strong class="text-sm text-danger">{{$message}}</strong>
                            </span>
                        @enderror
                      </div>
  
                      <div class="col-md-6">
                        <input wire:model.lazy="partnerships.lastName" type="text" name="lastName" class="form-control" placeholder="Last Name" >
                        @error('partnerships.lastName')
                            <span class="mt-3 mb-3">
                                <strong class="text-sm text-danger">{{$message}}</strong>
                            </span>
                        @enderror
                      </div>
      
                      <div class="col-md-12">
                        <input wire:model.lazy="partnerships.email" type="email" class="form-control" name="email" placeholder="Email" >
                        @error('partnerships.email')
                            <span class="mt-3 mb-3">
                                <strong class="text-sm text-danger">{{$message}}</strong>
                            </span>
                        @enderror
                      </div>
      
                      <div class="col-md-12">
                        <input wire:model.lazy="partnerships.phoneNumber" type="number" class="form-control" name="phoneNumber" placeholder="Phone Number" >
                        @error('partnerships.phoneNumber')
                            <span class="mt-3 mb-3">
                                <strong class="text-sm text-danger">{{$message}}</strong>
                            </span>
                        @enderror
                      </div>
      
                      <div class="col-md-12">
                        <label for="preferredContactMethod">Preferred Contact Method </label>
  
                        <select class="form-control" name="preferredContactMethod" id="preferredContactMethod" wire:model.lazy="partnerships.preferredContactMethod">
                            <option value="phone">Phone</option>
                            <option value="email">Email</option>
                        </select>
                      </div>
  
                      <div class="col-md-12">
                        <textarea  wire:model.lazy="partnerships.description" class="form-control" name="description" rows="6" placeholder="Inquiry Details" ></textarea>
                      </div>
      
                      <div class="col-md-12 text-center">
                        <button type="submit">Submit</button>
                      </div>
      
                    </div>
                  </form>
              </div>
      
            </div>
      
          </section><!-- End Contact Section -->  
      </div>
    </div>
  </section>
</div>




