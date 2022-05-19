<!-- 
	используем одну форму и для добавления и для обновления записи
-->
<form class="console" action="/admin/modification" method="post" enctype="multipart/form-data">
	
	<input type="text" placeholder="Название" name="header" value="{{ isset($data->header)? $data->header : '' }}"><p>	
	<textarea name="content">{{ isset($data->content)? $data->content : '' }}</textarea><p>
	<input type="text" placeholder="Имя" name="name" value="{{ isset($data->name)? $data->name : '' }}"><p>
	<input type="text" placeholder="Ссылка" name="guid" value="{{ isset($data->links)? $data->links : '' }}" readonly><p>	
	<input type="text" placeholder="Изображение" name="path" value="{{ isset($data->img1)? $data->img1 : '' }}" readonly><p>
	<input type="file" name="image1" /><p>	
	<input type="text" placeholder="Изображение" name="path" value="{{ isset($data->img2)? $data->img2 : '' }}" readonly><p>	
	<input type="file" name="image2" /><p>

	<!-- 
	в скрытых полях храним некоторую служебную информацию, скрытую от глаз пользователя
		1) parent - если добавляем новую запись, нужен идентификатор родительской записи
		2) id - если обновляем запись, нужен первичный ключ обновляемой записи
	-->
	<input type="hidden" name="parent" value="{{ isset($parent)? $parent : '' }}"><p>
	<input type="hidden" name="id" value="{{ isset($data->id)? $data->id : '' }}"><p>	
	<!--...-->

	<input type="submit" value="{{ isset($data)? 'Изменить' : 'Добавить' }}"><p>	
	@csrf
	
</form>