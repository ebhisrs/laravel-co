<div class="container">

    <div class="row gy-4 portfolio-container mb-5" data-aos="fade-up" data-aos-delay="200">
        @if($videos->count())
            @foreach ($videos as $video)    
                <div class="col-lg-4 col-md-6 portfolio-item filter-app text-dark" data-bs-toggle="modal" href="#exampleModalToggle{{$video->id}}">
                    
                        <div class="portfolio-wrap">
                            <h4 class="mt-4 mb-4">{{$video->title}}</h4>
                        <img src="{{$video->img}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            
                            <p class="mt-4 mb-4">{{$video->description}}</p>
                            
                        </div>
                        </div>
                    
                </div>
            @endforeach       
        @else
            <p class="mt-5">There is no tutorial video</p>
        @endif 

        <div class="col-12 border p-3">
            <h4 class="mt-3 mb-3">Video Disclaimer:</h4>
            <p>These videos are solely for informational purposes and should not be regarded as advice or an invitation to trade. Application of the techniques, ideas, and suggestions presented is done at the viewer’s sole discretion and risk. The thoughts and opinions expressed here are solely those of the writer and do not necessarily reflect the view of ActivTrades Plc.</p>
        </div>

    </div>
    @if($videos->count())
        @foreach ($videos as $video) 
            <div class="modal fade" id="exampleModalToggle{{$video->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel{{$video->id}}" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg" style="  width: 750px;
                margin: auto;">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="col-12">
                            <iframe id="pdf"  src="{{$video->url}}" width="640px" height="360px"></iframe>
                        </div>
                    </div>
                    
                </div>
                </div>
            </div>
        @endforeach
    @endif
      

</div>