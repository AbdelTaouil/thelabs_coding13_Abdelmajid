	<!-- services card section-->
	<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				@foreach ($articlerapide as $item)
					
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/{{$item->src}}" alt="">
						</div>
						<div class="card-text">
							<h2>{{$item->titre}}</h2>
							<p>{{Str::limit($item->description, 190, ' ...') }}</p>
						</div>
					</div>
				</div>
				@endforeach
				<!-- Single Card -->
			</div>
		</div>
	</div>
	<!-- services card section end-->
