<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            @foreach ($titre as $item)
					
						@if ($item->section=="service")
						<h2>{{$item->titre}}</h2>
							
						@endif
					@endforeach
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($service as $item)
                @if ($item->vip=="non")
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="{{$item->logo}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$item->titre}}</h2>
                            <p>{{$item->text}}</p>
                        </div>
                    </div>
                </div>
                    
                @endif
            @endforeach
           
        </div>
        <div class="text-center">
            @foreach ($button as $item)
					@if ($item->section=="browse")
						
					<a href="" class="site-btn">{{$item->text}}</a>
					@endif
					@endforeach
        </div>
    </div>
</div>
<!-- services section end -->