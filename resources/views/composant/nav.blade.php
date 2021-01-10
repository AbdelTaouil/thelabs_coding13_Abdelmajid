
	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
		
			<img src="{{asset("img/logoPetit.jpg")}}" alt=""><!-- Logo -->
			
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
		<div>
			<ul class="menu-list">
				@foreach ($titres as $item)
				@if ($item->titre=="Home")

				<li class="active"><a href="/">{{$item->titre}}</a></li>
				
				@else
				
				<li><a href="/{{$item->titre}}">{{$item->titre}}</a></li>
			
				@endif

				@endforeach
			
				@if (Route::has('login'))
				@auth
				@if (Auth::user()->role_id == 1)

				<li>
					<a href="{{ url('/home') }}">Admin</a>
				</li>
				@endif
				@else
				<li>
					<a href="{{ route('login') }}">Login</a>
				</li>
				@if (Route::has('register'))
				<li>
					<a href="{{ route('register') }}">Register</a>
				</li>
				@endif
				@endauth
				@endif

				@auth
				<li>
					<form id="logout-form" action="{{ route('logout') }}" method="POST">
						@csrf
						<a href="{{ route('logout') }}"
							onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>
					</form>
				</li>
				@endauth
			
			</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->