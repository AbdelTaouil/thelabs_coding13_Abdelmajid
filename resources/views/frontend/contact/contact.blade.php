
	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						@foreach ($titre as $item)
					
						@if ($item->section=="contact")
						<h2>{{$item->titre}}</h2>
							
					</div>
					<p>{{$item->soustitre}} </p>

					<h3 class="mt60">Main Office</h3>
					@foreach ($footer as $item)
						
					<p class="con-item">{{$item->adress}}<br> {{$item->codepostal}}</p>
					<p class="con-item">{{$item->numeros}}</p>
					<p class="con-item">{{$item->email}}</p>
					@endforeach
				</div>
				@endif
			@endforeach
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								@foreach ($button as $item)
									@if ($item->section=="contact")
										
										<button class="site-btn">{{$item->button}}</button>
									@endif
								@endforeach
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->
