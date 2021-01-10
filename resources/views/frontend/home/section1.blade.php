	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
					
				<img src="{{asset("img/logoGrand.jpg")}}" alt=""><!-- Logo -->
				@foreach ($titre as $item)
					
				@if ($item->section=="carousel")
				<p>{{$item->titre}}</p>	
				@endif
				@endforeach
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($image as $item)

			<div class="item  hero-item" data-bg="img/{{$item->image}}"></div>
				
			@endforeach
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					@foreach ($dataSR as $item)
					
							<div class="col-md-4 col-sm-6">
								<div class="lab-card">
									<div class="icon">
										<i class="{{$item->logo}}"></i>
									</div>
									<div class="service-text">
										<h2>{{$item->titre}}</h2>
										<p>{{$item->text}}</p>
									</div>
								</div>
							</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">

					<h2>{!! $tab[1] !!}</h2>

					@foreach ($titre as $item)
					
						@if ($item->section=="section1")
							
					</div>
					<div class="row">
						<div class="col-md-6">
							<p>{{$item->soustitre}}</p>
						</div>
						<div class="col-md-6">
							<p>{{$item->soustitres}}</p>
						</div>
					</div>
					@endif
				@endforeach
				<div class="text-center mt60">
					@foreach ($button as $item)
					@if ($item->section=="browse")
						
					<a href="" class="site-btn">{{$item->button}}</a>
					@endif
					@endforeach
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							@foreach ($video as $item)
							
							<img src="img/{{$item->image}}" alt="">
							<a href="{{$item->lien}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>{!! $tab[2] !!}</h2>
				
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach ($avis as $item)
							
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>{{$item->text}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/{{$item->team->src}}" alt="">
								</div>
								<div class="client-name">
									<h2>{{$item->team->nom}}</h2>
									<p>{{$item->team->emploie->function}}</p>
								</div>
							</div>
						</div>
						@endforeach
				
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->
