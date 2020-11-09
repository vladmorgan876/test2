<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//--------------------------------------------------------------------------
//на страницу контроля данных
Route::get('/FormControlData',function (){
    return view('FormControlData');
})->name('FormControlData');
//----------------------------------------------------------------------------
Route::post('/controldata','App\Http\Controllers\ControlDataController@control')->name('controldata');

//------------------------------------------------------------------------------------------------------
//при вызове индекса улетаем в контроллер он берет базу и сливает на wellcom
Route::get('/','App\Http\Controllers\BookController@showbook')->name('BookController');
//------------------------------------------------------------
//роут на контроллер фильтра книг
Route::post('/filterbooks','App\Http\Controllers\FilterBooksController@filterbooks')->name('filterbooks');
//------------------------------------------------------------
//роут на контроллер для получения всех книг из БД с дальнейшим редактированием и удалением
Route::get('/EditDeleteData','App\Http\Controllers\EditDeleteDataController@showdata')->name('EditDeleteData');
//------------------------------------------------------------
//ссылкой отправляю id книги которую надо удалить
Route::get('/DeleteData/{id}','App\Http\Controllers\EditDeleteDataController@deletedata')->name('DeleteData');
//------------------------------------------------------------
//ссылкой отправляю id книги которую надо отредактировать
Route::get('/EditData/{id}','App\Http\Controllers\EditDeleteDataController@editdata')->name('EditData');
//-----------------------------------------------------------------
//роут на контроллер сохранения новой редакции книги
Route::post('/NewEditionBook/{id}','App\Http\Controllers\NewEditionBookController@NewEdition')->name('NewEditionBook');
//------------------------------------------------------------

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//----------------------------------------------------------------------------------------
//реализация страницы "каталог" на VUE
Route::get('/catalog','App\Http\Controllers\CatalogController@showcatalog')->name('showcatalog');
Route::get('/listbooks','App\Http\Controllers\CatalogController@listbooks')->name('listbooks');
//--------------------------------------------------------------------------------------------
// выборка категорий жанров
//Route::get('/layouts/app','App\Http\Controllers\FilterBooksController@categoryes')->name('categoryes');
//Route::get('/getcategoryes','App\Http\Controllers\FilterBooksController@getcategoryes')->name('getcategoryes');

//------------------------------------------------------------
//добавление и редактирование пользователей
Route::get('/AddEditUsers','App\Http\Controllers\AddEditUsersController@showusers')->name('AddEditUsers');
//----------------------------------------------------------------------------------------------------
//удаление пользователя
Route::get('/DeleteUser/{id}','App\Http\Controllers\AddEditUsersController@deleteuser')->name('DeleteUser');
Route::get('/EditUser/{id}','App\Http\Controllers\AddEditUsersController@edituser')->name('EditUser');
Route::post('/NewEditionUser/{id}','App\Http\Controllers\AddEditUsersController@neweditionuser')->name('NewEditionUser');
Route::get('/AddUser','App\Http\Controllers\AddEditUsersController@showformadduser')->name('AddUser');
Route::post('/NewUser','App\Http\Controllers\AddEditUsersController@addnewuser')->name('NewUser');
