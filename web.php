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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/morehello', function () {

    return 'Hello World';
});*/

/*Route::get('/', function () {

    return view('about.hello');
});*/

/*Route::get('/{name}/{id}', function ($name, $id) {

    return 'This is ' . $name . ' and my id is ' .$id;
});*/

/*Route::get('/', function () {

    return 'This is a cat';
});*/

/*Route::get('/cat', function () {

    return 'This is a cat';
});*/

/*Route::get('/cat/morecats', function () {

    return 'This is a cat';
});*/

/*Route::get('/{catname}/{id}', function ($catname, $id) {

    return 'This is ' .$catname. ' and the ID is ' .$id;
});*/

/*Route::get('/cat', function () {
    return view('about.cat');
});*/

/*Route::get('/cat', function () {
    return view('about.layout.newcat');
});*/

/*Route::get('/', function() {
    return view('welcome');
});

Route::get('/hello', function() {
    return view('hello');
});*/

//Route::get('/', [PageController::class,'home']);

/*Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contacts', [PageController::class, 'contacts']);*/

/*Route::get('/{catName}', function ($catName) {
    return view('about.index');
});*/

use app\Http\Controllers\catController;

//Route::get('/', 'app\Http\Controllers\catController@about.index');

/*Route::get('/about', 'app\Http\Controllers\catController@about');
Route::get('/team', 'app\Http\Controllers\catController@team');
Route::get('/services', 'app\Http\Controllers\catController@services');*/

Route::get('/', function(){
    return view('welcome');
});


Route::get('/about', 'app\Http\Controllers\catController@about');
Route::get('/nav', 'app\Http\Controllers\catController@nav');
Route::get('/master', 'app\Http\Controllers\catController@master');
Route::get('/list', 'app\Http\Controllers\catController@list');