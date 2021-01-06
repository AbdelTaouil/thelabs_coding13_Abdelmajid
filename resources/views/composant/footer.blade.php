	<!-- Footer section -->
	@foreach ($footer as $item)
		
	<footer class="footer-section">
		<h2>{{$item->text}} <a href="https://colorlib.com" target="_blank">{{$item->motcouleur}}</a></h2>
	</footer>
	@endforeach
	<!-- Footer section end -->
