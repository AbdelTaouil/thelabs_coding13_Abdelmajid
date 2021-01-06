
	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				@foreach ($titre as $item)
					
						@if ($item->section=="team")
						<h2>{{$item->titre}}</h2>
							
						@endif
					@endforeach
				
			</div>
			<div class="row">
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/1.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Project Manager</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/2.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Junior developer</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/3.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Digital designer</h3>
					</div>
				</div>
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
						
					<a href="" class="site-btn btn-2">{{$item->text}}</a>
					@endif
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->
