
	<!-- features section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				@foreach ($titre as $item)
					
				@if ($item->section=="servicevip")
				<h2>{{$item->titre}}</h2>
					
				@endif
			@endforeach			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($dataVIPD as $item)
						

						<div class="icon-box light left">
							<div class="service-text">
								<h2>{{$item->titre}}</h2>
								<p>{{$item->text}}</p>
							</div>
							<div class="icon">
								<i class="{{$item->logo}}"></i>
							</div>
						</div>
							
						
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

					 @foreach ($dataVIPR as $item)
						

						<div class="icon-box light">
							<div class="icon">
								<i class="{{$item->logo}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$item->titre}}</h2>
								<p>{{$item->text}}</p>
							</div>
						</div>
						
					@endforeach
			
					
				</div>
			</div>
			<div class="text-center mt100">
				@foreach ($button as $item)
					@if ($item->section=="browse")
						
					<a href="" class="site-btn">{{$item->text}}</a>
					@endif
					@endforeach
			</div>
		</div>
	</div>
	<!-- features section end-->
