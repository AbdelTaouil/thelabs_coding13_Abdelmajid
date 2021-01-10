
	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! $tab[4] !!}</h2>

				
			</div>
			<div class="row">

				@foreach ($teams as $item)
	
					@if ($item->emploie->function != 'CEO Company' && $ok != 2)
	
						<!-- single member -->
						<div class="col-sm-4">
							<div class="member">
								<img src="{{asset('img/'.$item->src)}}" alt="">
								<h2>{{$item->nom}}</h2>
								<h3>{{$item->emploie->function}}</h3>
							</div>
						</div>
						<div class="d-none">{{$ok++}}</div>
						<div class="d-none">{{$counter = $item->id}}</div>
	
					@endif
				@endforeach
	
				@foreach ($teams  as $item)
	
					@if ($item->emploie->function == 'CEO Company')
	
						<div class="col-sm-4">
							<div class="member">
								<img src="{{asset('img/'.$item->src)}}" alt="">
								<h2>{{$item->nom}}</h2>
								<h3>{{$item->emploie->function}}</h3>
							</div>
						</div>
	
	
						@endif
	
						@endforeach
	
						<div class="d-none">{{$ok=1}}</div>
						@foreach ($teams as $item)
	
						@if ($item->emploie->function != 'CEO Company' && $item->id != $counter && $ok != 2)
	
						<div class="col-sm-4">
							<div class="member">
								<img src="{{asset('img/'.$item->src)}}" alt="">
								<h2>{{$item->nom}}</h2>
								<h3>{{$item->emploie->function}}</h3>
							</div>
						</div>
	
						<div class="d-none">{{$ok++}}</div>
					@endif
	
	
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					@foreach ($titre as $item)
					@if ($item->section=="section2")
						
					<h2>{{$item->titre}}</h2>
					<p>{{$item->soustitre}}</p>
						
					@endif
					@endforeach
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						@foreach ($button as $item)
					@if ($item->section=="browse")
						
					<a href="" class="site-btn btn-2">{{$item->button}}</a>
					@endif
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->
