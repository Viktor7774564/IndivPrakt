@extends('layouts.app')

@section('content')
    <h1 class="entry__title">Last News</h1>
    <div class="row masonry-wrap">
        <div class="masonry">
            <div class="grid-sizer"></div>
                    @foreach ($data1 as $item)
                       
                                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                                            
                                        <div class="entry__thumb">
                                            <a href="News" class="entry__thumb-link">
                                                <img src="images/thumbs/masonry/{{$item->img1}}" 
                                                        srcset="images/thumbs/masonry/{{$item->img1}} 1x, images/thumbs/masonry/{{$item->img2}} 2x" alt="">
                                            </a>
                                        </div>
                        
                                        <div class="entry__text">
                                            <div class="entry__header">
                                                <h1 class="entry__title"><a href="single-standard.html">{{$item->header}}</a></h1>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                    {!! strip_tags(mb_substr($item->content, 0 , 200)) . "..." !!}
                                                </p>
                                            </div>
                                            <div class="entry__meta">
                                                <span class="entry__meta-links">
                                                   {!! $item->links !!} 
                                                </span>
                                            </div>
                                        </div>

                        
                                </article> <!-- end article -->
                    @endforeach
            </div>
        </div>
    </div>
    <h1 class="entry__title">Blog</h1>
    <div class="row masonry-wrap">
        <div class="masonry">
            <div class="grid-sizer"></div>
                    @foreach ($data2 as $item)
                       
                                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                                            
                                        <div class="entry__thumb">
                                            <a href="/Blog" class="entry__thumb-link">
                                                <img src="images/thumbs/masonry/{{$item->img1}}" 
                                                        srcset="images/thumbs/masonry/{{$item->img1}} 1x, images/thumbs/masonry/{{$item->img2}} 2x" alt="">
                                            </a>
                                        </div>
                        
                                        <div class="entry__text">
                                            <div class="entry__header">
                                                <h1 class="entry__title"><a href="single-standard.html">{{$item->header}}</a></h1>
                                            </div>
                                            <div class="entry__excerpt">
                                                <p>
                                                    {!! strip_tags(mb_substr($item->content, 0 , 200)) . "..." !!}
                                                </p>
                                            </div>
                                            <div class="entry__meta">
                                                <span class="entry__meta-links">
                                                    {!! $item->links !!}
                                                </span>
                                            </div>
                                        </div>
                        
                                </article> <!-- end article -->
                    @endforeach
            </div>
        </div>
    </div>
@endsection