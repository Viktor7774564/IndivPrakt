@extends('layouts.app')

@section('content')
    
    
    <h1>{{ $data->name }}</h1>
    
    
    

    @foreach ($attachdata as $item)
        @php
        $head = $item->header
        @endphp
        @if($head !== $item->header)
        <h2>{{ $item->name }}</h2>
        @endif
       
        <div class="entry__header">
          <h3>{{ $item->header }} </h3>
        </div>
       
        @if($item->content != null)
        <article class="row format-standard">
            <ul class="s-content__header-meta">
                <div class="s-content__header col-full">
                    <a href="/Seasons/{{$item->name}}" class="entry__thumb-link">
                            <img class="cityImg" src="/images/{{$item->name}}/{{ $item->img1 }}">
                    </a>
                </div>
                <li class="cat">
                    {!! $item->content !!}
                </li> 
            </ul>
        </article>
        @endif
    @endforeach
@endsection