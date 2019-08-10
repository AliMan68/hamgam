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

//Site

Route::get('/home',function (){
  return view('index');

});
Route::get('/academic-guidance',function (){
  return view('site.academic-guidance');

});

Route::get('/success',function (){
  return view('site.success');

});

//Auth

Route::get('/signup',function (){
  return view('auth.sign-up');
});
Route::get('/signin',function (){
  return view('auth.sign-in');
});
