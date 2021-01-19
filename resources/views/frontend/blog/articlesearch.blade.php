<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                @foreach ($article as $item)
                    
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/{{$item->src}}" alt="">
                        <div class="post-date">
                            <h2>{{$item->created_at->format('d')}}</h2>
                            <h3>{{$item->created_at->format('M')}} {{$item->created_at->format('Y')}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title"></h2>
                        <div class="post-meta">
                            <a href="">
                                @foreach ($item->tags as $elem)
                                  {{$elem->tag}}
                                @endforeach
                            </a>
                            <a href="">
                                @foreach ($item->categories as $elem)
                                 {{$elem->categorie}}
                                @endforeach
                            </a>
                            <div class="d-none">{{$a=0}}</div>

                            @foreach ($commentaire as $elem)
                                @if ($elem->article_id == $item->id)
                                    <div class="d-none">{{$a++}}</div>
                                @else
                                @endif

                            @endforeach
                    
                            <a href="">Comment ({{$a}})</a>
                        </div>
                        <p>{{$item->description}}</p>

                        <a href="/commentaire/{{$item->id}}" class="read-more">Read More</a>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
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