<div class="container">
    <div class="row">
        <div class="col-lg-10 entries">
            @if($webinars->count())    
                @foreach ($webinars as $webinar)    
                    <div class="mb-3 mt-1">
                        <h3>{{$webinar->title}}</h3>
                        <p class="mb-3">{{$webinar->date}}</p>
                        <div style="background-color: #f2f3f3" class="mb-1">
                            <p class="p-4 rounded">Guest Speakers: <a href="#"><span class="bg-light p-3 ml-2" style="background-color: #DAE0E4; color: black" >{{$webinar->guestSpeaker}}</span></a> </p>
                        </div> 
                        <div class="border p-3">
                            <div>
                                <p><strong>Time</strong> <span class="px-2">{{$webinar->startTime}}</span> - <span class="px-2"> {{$webinar->endTime}}   </span> <strong>Cost</strong> <span class="px-2">  {{$webinar->cost}}</span> <strong>Place</strong> <span class="px-2">{{$webinar->place}}</span></p>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="{{$webinar->img}}">
                                </div>
                                <div class="col-lg-9">
                                    <p>{{$webinar->description}}</p>
                                        <button class="btn rounded btn-primary">Register</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="col-lg-2">
            <div class="d-flex flex-column ">

                <button class="btn btn-success mt-2 mb-2">Open an account</button>
                <button class="btn btn-outline-success mt-2 mb-2">Try free demo </button>
                
                <p class="mt-3 mb-3">Related Topics</p>

                <div class="d-flex flex-column align-items-start">
                    <a href="#" style="color: #05396A"><p class="p-2" style="background-color: #DAE0E4">One To One</p></a>
                    <a href="#" style="color: #05396A"><p class="p-2" style="background-color: #DAE0E4">Seminars</p></a>
                    <a href="#" style="color: #05396A"><p class="p-2" style="background-color: #DAE0E4">Events</p></a>
                    <a href="#" style="color: #05396A"><p class="p-2" style="background-color: #DAE0E4">Glossary</p></a>
                    <a href="#" style="color: #05396A"><p class="p-2" style="background-color: #DAE0E4">Handbooks</p></a>
                    <a href="#" style="color: #05396A"><p class="p-2" style="background-color: #DAE0E4">Educational Videos</p></a>
                    <a href="#" style="color: #05396A"><p class="p-2" style="background-color: #DAE0E4">FAQ</p></a>
                    <a href="#" style="color: #05396A"><p class="p-2" style="background-color: #DAE0E4">Webinars Archive</p></a>



                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
