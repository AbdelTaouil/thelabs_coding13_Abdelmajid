	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
				
					<form action="/send-email" method="post">
						<input type="text" placeholder="Your e-mail here" name="email">
						
							@foreach ($button as $item)
							@csrf
								@if ($item->section=="newsletter")
												
									<button class="site-btn btn-2">{{$item->button}}</button>
								@endif
							@endforeach
						</form>
								
					
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->