
	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! $tab[1] !!}</h2>
		
		</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($servicepage as $item)
					@if ($limite <= 2 )
					<p class="d-none">{{$limite++}}</p>
						<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$item->titre}}</h2>
								<p>{{$item->text}}</p>
							</div>
							<div class="icon">
								<i class="flaticon-002-caliper"></i>
							</div>
						</div>
						@else

					@endif
				@endforeach
				
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">

					@foreach ($servicepage as $item)
					<p class="d-none">{{$limite++}}</p>
					@if ($limite >= 7 )
                            <div class="icon-box light left">
                                <div class="service-text">
                                    <h2>{{$item->titre}}</h2>
                                    <p>{{$item->text}}</p>
                                </div>
                                <div class="icon">
                                    <i class="flaticon-002-caliper"></i>
                                </div>
                            </div>

                     @else
                    
                        @endif
                    @endforeach
			
					
				</div>
			</div>
			<div class="text-center mt100">
				@foreach ($button as $item)
					@if ($item->section=="browse")
						
					<a href="" class="site-btn">{{$item->button}}</a>
					@endif
					@endforeach
			</div>
		</div>
	</div>
	<!-- features section end-->
