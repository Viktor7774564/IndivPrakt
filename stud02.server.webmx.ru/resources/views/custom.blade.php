@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->header }}</h1>
	@if($data->img1 !=null)
	<img src="images/{!!$data->img1!!}">
	@endif
	@if($data->img2 !=null)
	<img src="images/{!!$data->img2!!}">
	@endif
	{!! $data->content !!}

	@foreach ($attachdata as $item)
		<h2>{{ $item->header }} </h2>
	
	@if($item->img1 !=null)
		<img src="images/{{$item->img1}}">
	@endif
	@if($item->img2 !=null)
		<img src="images/{{$item->img2}}">
	@endif
		<p>
			{{ $item->content }}			
		</p>
	@endforeach

@endsection
