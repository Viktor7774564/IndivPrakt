<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // обработчик http://muzei-mira/
	public function acMain () {

		$data1 = DB::table("posts")->where(["name" => "News"])->orderBy("id","desc")->limit(3)->get()->reverse();
        $data2 = DB::table("posts")->where(["name" => "Blog"])->orderBy("id","desc")->limit(3)->get()->reverse();
		 $menu_data = DB::table("posts")->get();
		return view("main", ["menu_data" => $menu_data, "data1" => $data1, "data2" => $data2]);
	}
	
	
	public function acNews () {

		$data = DB::table("posts")->where("name", "=", "News")->get();
        $menu_data = DB::table("posts")->get();
		
		return view("news", ["menu_data" => $menu_data, "data" => $data]);
	}

	public function acBlog () {
		$data = DB::table("posts")->where("name", "=", "Blog")->get();
        $menu_data = DB::table("posts")->get();
		return view("blog", ["menu_data" => $menu_data, "data" => $data]);
	}

	public function acCities() {
		$data = DB::table("posts")->where("name", "Cities")->first();

		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		 $menu_data = DB::table("posts")->get();
		return view("cities")->with(["menu_data" => $menu_data, "data" => $data, "attachdata" => $attachdata]);
	}

	public function acSubCities ($subcity) {
		// формируем данные для представления по переданному параметру
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", $subcity)->first();
		// по идентификатору главной получим прикрепленные записи 
		 $menu_data = DB::table("posts")->get();
		$attachdata = DB::table("posts")->where("name", "=", $subcity)->get();
		// отдадим полученные данные в представление
		return view ("cities")->with(["menu_data" => $menu_data, "data" => $data,  "attachdata" => $attachdata]);
	}

	public function acCategories() {
		$data = DB::table("posts")->where("name", "Categories")->first();
 $menu_data = DB::table("posts")->get();
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		return view("categories")->with(["menu_data" => $menu_data, "data" => $data, "attachdata" => $attachdata]);
	}

	public function acSubCategories ($subcategory) {
		// формируем данные для представления по переданному параметру
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", $subcategory)->first();
		// по идентификатору главной получим прикрепленные записи 
		
		$attachdata = DB::table("posts")->where("name", "=", $subcategory)->get();
		// отдадим полученные данные в представление
		$menu_data = DB::table("posts")->get();
		return view ("categories")->with(["menu_data" => $menu_data, "data" => $data,  "attachdata" => $attachdata]);
	}		

	public function acSeasons() {
		$data = DB::table("posts")->where("name", "Seasons")->first();
		$menu_data = DB::table("posts")->get();
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get();
		// отдадим полученные данные в представление $menu_data = DB::table("posts")->get();
		return view("seasons")->with(["menu_data" => $menu_data, "data" => $data, "attachdata" => $attachdata]);
	}

	public function acSubSeasons($subseason) {
		// формируем данные для представления по переданному параметру
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", $subseason)->first();
		// по идентификатору главной получим прикрепленные записи
		  $menu_data = DB::table("posts")->get();
		$attachdata = DB::table("posts")->where("name", "=", $subseason)->get();
		// отдадим полученные данные в представление
		return view ("seasons")->with(["menu_data" => $menu_data, "data" => $data,  "attachdata" => $attachdata]);
	}	

	public function acCustom ($pages) {
		// формируем данные для представления custom.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", $pages)->first();
        $menu_data = DB::table("posts")->get();
		
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		
		return view("custom")->with(["menu_data" => $menu_data, "data" => $data, "attachdata" => $attachdata]);
	}	
}