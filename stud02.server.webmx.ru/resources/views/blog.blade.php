@extends('layouts.app')

@section('content')
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">
            @foreach($data as $item)
            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    {{$item->header}}
                </h1>
                <div class="entry__thumb">
                    <a href="News" class="entry__thumb-link">
                        <img src="images/thumbs/masonry/{{$item->img1}}" 
                            srcset="images/thumbs/masonry/{{$item->img1}} 1x, images/thumbs/masonry/{{$item->img2}} 2x" alt="">
                    </a>
                </div>
                <ul class="s-content__header-meta">
                    <li class="cat">
                        {!! $item->content !!}
                    </li>
                </ul>
            </div>
            @endforeach

           

        </article>
    </section> <!-- s-content -->
@endsection