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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('student_classes', 'StudentClassesController');
Route::get('student_classes/create/{teacher_id}','StudentClassesController@create');

Route::resource('students', 'StudentsController');

Route::resource('schools', 'SchoolsController');

Route::get('storage/{images}', function ($images)
{
    return Image::make(storage_path('app/public/images/' . $images))->response();
});

Route::resource('student_class_students', 'StudentClassStudentsController');

Route::resource('school_sessions', 'SchoolSessionsController');

Route::resource('guardians', 'GuardiansController');

Route::get('storage/{guardian}', function ($guardian)
{
    return Image::make(storage_path('app/public/guardian/' . $guardian))->response();
});

Route::resource('feedbacks', 'FeedbacksController');

// Route::resource('feed_backs', 'FeedBacksController');

Route::resource('works', 'WorksController')-> except(['create']);

Route::get('works/create/{student_class_id}','WorksController@create');

// Route::get('get-section-students/{id}', 'WorksController@getSectionStudents');


Route::get('/editworks/{id}', 'StudentClassesController@editWorks')->name('editworks.workEdit');


Route::get('/editworks/{id}', 'StudentClassesController@editWorks')
->name('editworks.workEdit');


Route::get('/deleteworks/{id}', 'StudentClassesController@destroyWorks');

// Route::get('hello/nk', function(){
//     echo 'hello tony';   
// });

// Route::get('/workedit/{id}','StudentClassesController@workEdit');

Route::resource('teachers', 'TeachersController');