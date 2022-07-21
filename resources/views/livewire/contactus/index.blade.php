<div class="container mt-5">
  <form class="col-lg-6 mt-5 mb-5" wire:submit.prevent="CreateContactUs" enctype="multipart/form-data" role="form">

      <h1 class="mb-4">Contact Us</h1>

      <div class="form-group mb-5 mt-3">
        <label for="exampleInputfirstName1">First Name <span class="text-primary">*</span></label>
        <input wire:model.lazy="contactus.firstName" type="text" class="form-control" id="exampleInputfirstName1" aria-describedby="firstNameHelp" placeholder=" first name">
          @error('contactus.firstName')
              <span class="mt-3 mb-3">
                  <strong class="text-sm text-danger">{{$message}}</strong>
              </span>
          @enderror
      </div>

      <div class="form-group mb-5 mt-3">
        <label for="exampleInputlastName1"> Last Name <span class="text-primary">*</span></label>
        <input wire:model.lazy="contactus.lastName" type="text" class="form-control" id="exampleInputlastName1" aria-describedby="lastNameHelp" placeholder="Full lastName">
          @error('contactus.lastName')
              <span class="mt-3 mb-3">
                  <strong class="text-sm text-danger">{{$message}}</strong>
              </span>
          @enderror
      </div>

      <div class="form-group mb-5">
        <label for="exampleInputEmail1">Your email <span class="text-primary">*</span></label>
        <input wire:model.lazy="contactus.email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="FXDDMENA@gmail.com">
          @error('contactus.email')
              <span>
                  <strong class="text-sm text-danger">{{$message}}</strong>
              </span>
          @enderror
      </div>

      <div class="form-group mb-5">
          <label for="exampleInputinquiryDetails1">Inquiry Details <span class="text-primary">*</span></label>
          <textarea class="form-control" wire:model.lazy="contactus.inquiryDetails" id="exampleInputinquiryDetails1" rows="4"></textarea>
          
            @error('contactus.inquiryDetails')
                <span>
                    <strong class="text-sm text-danger">{{$message}}</strong>
                </span>
            @enderror
      </div>

      <button type="submit" class="btn btn-primary ">Submit <i class="bi bi-arrow-right"></i></button>
    </form>
</div>