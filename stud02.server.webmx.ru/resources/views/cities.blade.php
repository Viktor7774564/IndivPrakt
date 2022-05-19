@extends('layouts.app')

@section('content')
	
	
	<h1>{{ $data->name }}</h1>
	
	
    
	@foreach ($attachdata as $item)
	    @if(strpos($data->name, 'Cities') !== false)
	    <h2>{{ $item->name }}</h2>
	    @endif

	    <div class="entry__header">
		  <h3>{{ $item->header }} </h3>
	    </div>
            <article class="row format-standard">
		<ul class="s-content__header-meta">
	            <li class="cat">
	                {!! $item->content !!}
                    </li> 
	        </ul>
	        <div class="s-content__header col-full">
	                <a href="/Cities/{{$item->name}}" class="entry__thumb-link">
	                     <img class="cityImg" src="/images/CityPlaces/{{$item->img1}}">
                        </a>
                </div>
	    </article>
	@endforeach
@endsection