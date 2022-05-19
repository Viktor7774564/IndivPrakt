@extends('layouts.app')

@section('content')

	<h1>Форма</h1>

	<!-- 
	подключаем форму, используем одну форму на обновление/добавление данных
	в форме в текстовые поля подставим данные обновляемой записи (если они существуют)
	-->
	<!--sobaka include('console.form') -->

	<!-- 
	используем одну форму и для добавления и для обновления записи
-->
<form class="console" action="/admin/sozdanie" method="post" enctype="multipart/form-data">
	
	<input type="text" placeholder="Название" name="header" value=""><p>	
	<textarea name="content"></textarea><p>
	<input type="text" placeholder="Имя" name="name" value="{{ isset($data->name)? $data->name : '' }}"><p>
	<input type="text" placeholder="Ссылка" name="links" value="" readonly><p>	
	<input type="text" placeholder="Изображение" name="path" value="" readonly><p>	
	<input type="file" name="image" /><p>
	<input type="text" placeholder="Изображение" name="path" value="" readonly><p>	
	<input type="file" name="image" /><p>
	<!-- 
	в скрытых полях храним некоторую служебную информацию, скрытую от глаз пользователя
		1) parent - если добавляем новую запись, нужен идентификатор родительской записи
		2) id - если обновляем запись, нужен первичный ключ обновляемой записи
	-->
	<!-- <input type="hidden" name="parent" value="{{ isset($parent)? $parent : '' }}"><p>
	<input type="hidden" name="id" value="{{ isset($data->id)? $data->id : '' }}"><p>	
	 --><!--...-->
    <input type="submit" value="Создать"><p>	
	@csrf
	
</form>

<!-- 	<form class="console" action="/admin/sozdanie" method="post">
		<input type="submit" value="Создать">
		@csrf
	</form> -->

	 <!--  
	если родительская запись разрешает прикреплять подчиненные (свойство allowed записи) 
	то выводим форму добавления новой записи, при этом
	не забыть передать идентификатор родительской записи (свойство parent)

	-->

@endsection