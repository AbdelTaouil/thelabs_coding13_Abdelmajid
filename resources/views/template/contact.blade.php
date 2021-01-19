<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <title>Contact</title>
</head>
<body>

	@include('composant.nav')

		<!-- Page banner -->
		<div class="page-top-section">
			<div class="overlay"></div>
			<div class="container text-right">
				<div class="page-info">
					@foreach ($titres as $item)
						@if ($item->section=="Contact")
						<h2>{{$item->titre}}</h2>
						<div class="page-links">
							<a href="#">Home</a>
							<span>{{$item->titre}}</span>
						</div>
							
						@endif
					@endforeach
				</div>
			</div>
		</div>
		<!-- Page banner end-->

		
	<!-- Google map -->
	@foreach ($footer as $item)
		
	<iframe width="100%" height="600vh" src="https://maps.google.com/maps?q={{$item->adresse}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"></iframe>
	@endforeach


    @include('frontend.contact.contact')
    @include('composant.footer')





    
   	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/circle-progress.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>