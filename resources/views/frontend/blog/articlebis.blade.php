
	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{asset('img/'. $article->src)}}" alt="">
							<div class="post-date">
								<h2>{{$article->created_at->format('d')}}</h2>
								<h3>{{$article->created_at->format('M')}} {{$article->created_at->format('Y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">Just a simple blog post</h2>
							<div class="post-meta">
								<a href="">
                                    @foreach ($article->tags as $elem)
                                      {{$elem->tag}}
                                    @endforeach
                                </a>
								<a href="">
                                    @foreach ($article->categories as $elem)
                                      {{$elem->categorie}}
                                    @endforeach
                                </a>
								<div class="d-none">{{$a=0}}</div>

								@foreach ($commentaire as $elem)
									@if ($elem->article_id == $article->id)
										<div class="d-none">{{$a++}}</div>
									@else
									@endif
	
								@endforeach
						
								<a href="">Comment ({{$a}})</a>
							</div>
							<p>{{$article->description}}</p>
					
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{asset('img/'. $article->users->image)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$article->users->name}} <span>Author</span></h2>
								<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<div class="d-none">{{$a=0}}</div>

                                        @foreach ($commentaire as $elem)
                                            @if ($elem->article_id == $article->id)
                                                <div class="d-none">{{$a++}}</div>
                                            @else
                                            @endif

                                        @endforeach	
						
							<h2>Comment ({{$a}})</h2>
							<ul class="comment-list">
								@foreach ($commentaire as $item)
								@if ($item->article_id==$article->id)
									<li>
										<div class="avatar">
											<img src="{{asset('img/'. $item->users->image)}}" alt="">
										</div>
										<div class="commetn-text">
											<h3>{{$item->users->name}} | {{$item->created_at->format('d')}} {{$item->created_at->format('M')}}, {{$item->created_at->format('Y')}} | Reply</h3>
											<p>{{$item->message}} </p>
										</div>
									</li>
								@endif
									
								@endforeach
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
                                <h2>Leave a comment</h2>
                                <form class="form-class" form action="/store-commentaire"  enctype="multipart/form-data" method="post">
                                    @csrf
                                    
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="article_id" placeholder="Your name" class="d-none" value="{{$article->id}}">
										</div>
									
										<div class="col-sm-12">
											<input type="text" name="sujet" placeholder="Subject">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            
											<button class="site-btn" type="submit">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
            <!-- Sidebar area -->
			<div class="col-md-4 col-sm-5 sidebar">
				<!-- Single widget -->
				<div class="widget-item">
				<form action="/search" method="get" class="search-form">

					<input type="text" name="query" placeholder="Search">
					<button type="submit" class="search-btn"><i class="flaticon-026-search"></i></button>
				</form>
			</div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>

                    <ul>
                        @foreach ($categorie as $item)
                        <li><a href="#">{{$item->categorie}}</a></li>
                        @endforeach
                    </ul>
                </div>
        
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tag as $item)
                            
                        <li><a href="">{{$item->tag}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->