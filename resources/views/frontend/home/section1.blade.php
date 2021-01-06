	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				@foreach ($logo as $item)
				@if ($item->section=="biglogo")
					
				<img src="img/{{$item->logo}}" alt=""><!-- Logo -->
				@endif
			@endforeach
				<p>Get your freebie template now!</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			<div class="item  hero-item" data-bg="img/01.jpg"></div>
			<div class="item  hero-item" data-bg="img/02.jpg"></div>
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
						@if ($item->vip=="non")
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
						@endif
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					@foreach ($titre as $item)
					
						@if ($item->section=="section1")
						<h2>{{$item->titre}}</h2>
							
						
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
						
					<a href="" class="site-btn">{{$item->text}}</a>
					@endif
					@endforeach
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
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
						@foreach ($titre as $item)
					
						@if ($item->section=="avis")
						<h2>{{$item->titre}}</h2>
							
						@endif
					@endforeach
				
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach ($avis as $item)
							
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>{{$item->text}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/{{$item->src}}" alt="">
								</div>
								<div class="client-name">
									<h2>{{$item->nom}}</h2>
									<p>{{$item->emploie->function}}</p>
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
