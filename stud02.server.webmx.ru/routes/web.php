<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, "acMain"]);
Route::get('/Home', [MainController::class, "acMain"]);

Route::get ('/News', [MainController::class, "acNews"]);

Route::get ('/Blog', [MainController::class, "acBlog"]);

Route::get ('/Cities', [MainController::class, "acCities"]);

Route::get ('/Cities/{subcity}', [MainController::class, "acSubCities"]);

Route::get ('/Categories', [MainController::class, "acCategories"]);

Route::get ('/Categories/{subcategory}', [MainController::class, "acSubCategories"]);

Route::get ('/Seasons', [MainController::class, "acSeasons"]);

Route::get ('/Seasons/{subseason}', [MainController::class, "acSubSeasons"]);

Route::get ('/Console', [AdminController::class, "acConsole"]);

// сработает на http://muzei-mira/console/update/{параметр}
// запрос на вывод страницы обновления записи
Route::get ('/Console/update/{id}', [AdminController::class, "acConsoleFormUpdate"]);

// сработает на http://muzei-mira/console/add
// запрос на вывод страницы добавления записи
// обратите внимание - исползуется POST-запрос
Route::post ('/Console/add', [AdminController::class, "acConsoleFormAdd"]);

// сработает на http://muzei-mira/admin/modification
// обратите внимание - исползуется POST-запрос
// передаем данные формы на обновление / добавление данных
Route::post ('/admin/modification',  [AdminController::class, "acDataModification"]);

// сработает на http://muzei-mira/admin/delete/{параметр}
// выполняем запрос на удаление данных
Route::get ('/admin/delete/{id}',  [AdminController::class, "acDataDelete"]);

/////////////////////////////
//открываем форму создания страницы
Route::post ('/form',  [AdminController::class, "acConsoleAdd"]);

 //создаем страницу
Route::post ('/admin/sozdanie',  [AdminController::class, "acDataCreate"]);

 //переход на новую страницу
Route::get ('/{pages}',  [MainController::class, "acCustom"]);