{{-- @section('title',$brand->name) --}}
@section('head')
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    
    <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
  
    <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
    <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
@endsection
@section('script')
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
  </script>
   
    <script>
        $('.countrypicker').countrypicker();
      </script>
@endsection

<main class="page-content">
    <div class="container">
        <form class="col-lg-6 mt-5 mb-5" wire:submit.prevent="CreateComplaint" enctype="multipart/form-data" role="form">

            <h1 class="mb-4">Customer complaint form</h1>

            <div class="form-group mb-5 mt-3">
              <label for="exampleInputname1">Your name <span class="text-primary">*</span></label>
              <input wire:model.lazy="complaint.name" type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Full Name">
                @error('complaint.name')
                    <span class="mt-3 mb-3">
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5">
              <label for="exampleInputEmail1">Your email <span class="text-primary">*</span></label>
              <input wire:model.lazy="complaint.email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="FXDDMENA@gmail.com">
                @error('complaint.email')
                    <span>
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5 ">
              <label for="exampleInputTrading1">Trading account number <span class="text-primary">*</span></label>
              <input wire:model.lazy="complaint.tradingAccountNumber" type="number" class="form-control" id="exampleInputTrading1" aria-describedby="TradingHelp" placeholder="184630">
                @error('complaint.tradingAccountNumber')
                    <span>
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>

            

            <div class="form-group mb-5" wire:ignore>

              <label for="phone">Phone number <span class="text-primary">*</span></label>
              <input wire:model.lazy="complaint.tel" class="form-control" id="phone" type="tel" name="phone"  wire:ignore.self>
                @error('complaint.tel')
                    <span>
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5">
              <label for="exampleInputaddress1">Address <span class="text-primary">*</span></label>
              <input wire:model.lazy="complaint.address" type="text" class="form-control" id="exampleInputaddress1" aria-describedby="addressHelp" placeholder="Address">
                @error('complaint.address')
                    <span>
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5">
              <label for="exampleInputcity1">City <span class="text-primary">*</span></label>
              <input wire:model.lazy="complaint.city" type="text" class="form-control" id="exampleInputcity1" aria-describedby="cityHelp" placeholder="City">
                @error('complaint.city')
                    <span>
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5">
              <label for="exampleInputpostalCode1">Postal code <span class="text-primary">*</span></label>
              <input wire:model.lazy="complaint.postalCode" type="text" class="form-control" id="exampleInputpostalCode1" aria-describedby="postalCodeHelp" placeholder="Postal Code">
                @error('complaint.postalCode')
                    <span>
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5" wire:ignore>
              <label for="exampleInputcountry1">Country  <span class="text-primary">*</span></label>
              <select wire:model.lazy="complaint.country" class="selectpicker countrypicker " data-flag="true" wire:ignore.self></select>
                @error('complaint.country')
                    <span>
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5">
              <label for="exampleInputtype1">Type of complaint  <span class="text-primary">*</span></label>

              <select class="form-control" name="exampleInputtype1" id="exampleInputtype1" wire:model.lazy="complaint.type">
                <option value="trading">Trading</option>
                <option value="documentation">Documentation</option>
                <option value="general">General</option>
              </select>

              
                @error('complaint.type')
                    <span>
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5">
              <label for="exampleInputsubject1">Subject   <span class="text-primary">*</span></label>
              <input wire:model.lazy="complaint.subject" type="text" class="form-control" id="exampleInputsubject1" aria-describedby="subjectHelp" placeholder="Enter subject">
                @error('complaint.subject')
                    <span>
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5">
              <label for="exampleInputdisputedAmount1">Disputed amount </label>
              <input wire:model.lazy="complaint.disputedAmount" type="text" class="form-control" id="exampleInputdisputedAmount1" aria-describedby="disputedAmountHelp" placeholder="Postal Code">
                @error('complaint.disputedAmount')
                    <span>
                        <strong class="text-sm text-danger">{{$message}}</strong>
                    </span>
                @enderror
            </div>



            
            <div class="form-group mb-5">
                <label for="exampleInputDescription1">Description of complaint  <span class="text-primary">*</span></label>
                <textarea class="form-control" wire:model.lazy="complaint.Description" id="exampleInputDescription1" rows="4"></textarea>
                
                  @error('complaint.Description')
                      <span>
                          <strong class="text-sm text-danger">{{$message}}</strong>
                      </span>
                  @enderror
            </div>

            
            <div class="form-group mb-5">
                <label for="exampleInputFile">File:</label>
                <input type="file" class="form-control" id="exampleInputFile" wire:model="file">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            

            
            <button type="submit" class="btn btn-primary ">Submit <i class="bi bi-arrow-right"></i></button>
          </form>
    </div>
</main>


