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

// Route::get('/', function () {
//     return redirect('home');
// });

// Auth::routes();
// Route::get('login/kids','LoginController@kidslogin');
// Route::post('login/kids','LoginController@kidsloginPost');

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// // Route::get('/home', 'HomeController@index')->name('home');
// Route::post('dashboard/question/answer/insert','Kids\QuestionsController@insertAnswer');

// Route::get('/admin', 'AdminController@index');
// Route::resource('admin/subjects','SubjectController');
// Route::resource('admin/materials','MaterialController');
// Route::resource('admin/news','NewsController');
// Route::resource('admin/modules','ModuleController');

// Route::post('admin/modules/add-questions/{id}','ModuleController@addQuestions');
// Route::get('/dashboard','DashboardController@index');
// Route::resource('/dashboard/materials','Parent\MaterialController');
// Route::resource('/dashboard/questions','Kids\QuestionsController');
// Route::get('dashboard/materials/{material}/{subject}','Parent\MaterialController@detail');
// Route::get('dashboard/question/{material}/{subject}','Kids\QuestionsController@detail');
// Route::get('dashboard/question/{material}/{subject}/start','Kids\QuestionsController@start');
// Route::get('dashboard/question/{material}/{subject}/json','Kids\QuestionsController@listQuestions');
// Route::get('api/question/{id}','Kids\QuestionsController@getQuestionById');
// Route::resource('/dashboard/kids','Parent\KidsController');
// Route::get('/dashboard/kids-activity','DashboardController@kidsActivity');
// Route::get('/berita','BeritaController@index');
// Route::get('/berita/detail/{id}','BeritaController@store');
// Route::post('/api/questions/end','Kids\QuestionsController@end');


Route::get('/', function () {
    return redirect('home');
});

Auth::routes();
Route::get('login/kids','LoginController@kidslogin');
Route::post('login/kids','LoginController@kidsloginPost');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::post('dashboard/question/answer/insert','Kids\QuestionsController@insertAnswer');

Route::get('/admin', 'AdminController@index');
Route::resource('admin/subjects','SubjectController');
Route::resource('admin/materials','MaterialController');
Route::resource('admin/news','NewsController');
Route::resource('admin/modules','ModuleController');

Route::post('admin/modules/add-questions/{id}','ModuleController@addQuestions');
Route::get('/panel','DashboardController@index');
Route::resource('/panel/daftar-materi','Parent\MaterialController');
Route::resource('/panel/daftar-anak','Parent\KidsController');
Route::resource('/panel/daftar-soal','Kids\QuestionsController');
Route::get('panel/materi/{material}/{subject}','Parent\MaterialController@detail');
Route::get('panel/soal/{material}/{subject}','Kids\QuestionsController@detail');
Route::get('panel/soal/{material}/{subject}/mulai','Kids\QuestionsController@start');
Route::get('dashboard/question/{material}/{subject}/json','Kids\QuestionsController@listQuestions');
Route::get('api/question/{id}','Kids\QuestionsController@getQuestionById');
Route::get('/panel/aktivitas-anak','DashboardController@kidsActivity');
Route::get('/berita','BeritaController@index');
Route::get('/berita/detail/{id}','BeritaController@store');
Route::post('/api/questions/end','Kids\QuestionsController@end');
