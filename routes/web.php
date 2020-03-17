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

// ROTTA VERSO HOMEPAGE
Route::get('/', 'StaticPageController@homeView')->name('home');


//ROTTA VERSO PAGINA DEGLI STUDENTI
Route::get('/student', 'StudentListController@getStudentList')->name('students');
//ROTTA VERSO SHOW DEGLI STUDENTI
Route::get('/student/show', 'StudentListController@getStudent')->name('show');
