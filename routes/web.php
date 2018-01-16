<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('login/kids','LoginController@kidslogin');
Route::post('login/kids','LoginController@kidsloginPost');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');
Route::resource('admin/subjects','SubjectController');
Route::resource('admin/materials','MaterialController');
Route::resource('admin/news','NewsController');
Route::resource('admin/modules','ModuleController');
Route::post('admin/modules/add-questions/{id}','ModuleController@addQuestions');
Route::get('/dashboard','DashboardController@index');
Route::resource('/dashboard/materials','Parent\MaterialController');
Route::resource('/dashboard/questions','Kids\QuestionsController');
Route::get('dashboard/materials/{material}/{subject}','Parent\MaterialController@detail');
Route::get('dashboard/question/{material}/{subject}','Kids\QuestionsController@detail');
Route::resource('/dashboard/kids','Parent\KidsController');
Route::get('/dashboard/kids-activity','DashboardController@kidsActivity');
