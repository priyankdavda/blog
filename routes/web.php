<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\UserController;
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

// Route::get('/{name}', function ($name) {
//     echo $name;
//     return view('welcome2');
// });
// Route::get('/{name}', function ($name) {
//     return view('welcome2',['name'=>$name]);
// });
Route::get('/', function () {
    //return view('welcome2');
    return redirect("about");
});
Route::get('/about', function () {
    return view('about');
});
Route::view("contact", '/contact');
//Route::get("user/{id}",[UserController::class,"show"]);// call contoller
//Route::get("users",'UserController@show');//for laravel 7 or above
//Route::view("user","/user");
// Route::get("/user/{name}",function($name){
//     return view("user",['name'=>$name]);
// });
//Route::get("user",[UserController::class,"loadView"]);
Route::get("/user/{name}",[UserController::class,"loadView"]);
