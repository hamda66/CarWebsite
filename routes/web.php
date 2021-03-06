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

Route::get('/', function () {
    return view('main');
});

use app\Http\Controllers\pagecontroller;
Route::get('brands', 'pagecontroller@brands');
Route::get('about', 'pagecontroller@about');
Route::get('contact', 'pagecontroller@contact');
Route::get('login', 'pagecontroller@login');
Route::get('register', 'pagecontroller@registerpage');
Route::get('Carstore', 'pagecontroller@store');

//use app\Http\Controllers\regController;[pagecontroller::class,'addData']
//Route::view('register','login');

Route::post('contact','pagecontroller@addComment');
Route::post('contact','CommentController@addComment');
Route::GET('login','pagecontroller@addlogin');
Route::post('register','pagecontroller@addData');


Route::group(['middleware'=>'customAuth'],function(){ 
   //
   Route::GET('login','pagecontroller@addlogin');
   Route::post('register','RegisterController@register');
    });

Auth::routes();

//Route::get('/main', [App\Http\Controllers\HomeController::class, 'index'])->name('main');
