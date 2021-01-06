	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form">
						<input type="text" placeholder="Your e-mail here">
						@foreach ($button as $item)
									@if ($item->section=="newsletter")
										
									<button class="site-btn btn-2">{{$item->text}}</button>
									@endif
									@endforeach
								
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->