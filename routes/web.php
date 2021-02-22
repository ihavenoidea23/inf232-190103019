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
    return "Enter /user for getting name <br>  enter /newView for getting new view <br>enter /newView2 for getting second view";
    
});
Route::get('user/{age?}', function () {//enter /user for getting name
    return "Dilnaz Baibeisenova <br> enter /newView for getting new view <br>enter /newView2 for getting second view";
});
Route::get('/newView', function () {//enter /newView for getting new view which called "personal_info" 
    return view('personal_info');
});
Route::get('/newView2', function () {//enter /newView2 for getting new view which called "personal_info2" 
    return view('personal_info2');
});
Route::get('/home',function(){
    return "home";
});
