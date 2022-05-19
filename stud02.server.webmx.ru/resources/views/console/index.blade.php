@extends('layouts.app')

@section('content')
	
	<h1>Консоль управления</h1>

	<form action="/form" method="post">
		@csrf
		<input type="submit" value="Прикрепить новую страницу">	
	</form>
	<h2>Редактирование данных</h2>
	
	<!-- выводим записи верхнего уровня, добавляем ссылку на изменение -->
	@foreach ($data as $item)
		<h4>
			{{ $item->header }} (<a href="/Console/update/{{ $item->id }}">Изменить</a>) 
		</h4>
	@endforeach

@endsection