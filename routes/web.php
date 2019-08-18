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
  return view('index');
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
Route::get('/skill-learning',function (){
  return view('site.skill-learning');

});
Route::get('/skill-learning/courses',function (){
  return view('site.skill-courses');

});
Route::get('/gathering',function (){
  return view('site.gathering');

});
Route::get('/idea',function (){
  return view('site.idea');

});
Route::get('/content',function (){
  return view('site.content');

});
Route::get('/relative-jobs',function (){
  return view('site.relative-jobs');

});
Route::get('/academic-guidance/consult',function (){
  return view('site.consult');

});
Route::get('/skill-learning/offer',function (){
  return view('site.offer');

});
Route::get('/sent-successfully',function (){
  return view('site.sent-successfully');
});
Route::get('/gathering/workshop',function (){
  return view('site.workshop');
});
Route::get('/gathering/visit-industries',function (){
  return view('site.industry-visit');
});
//Auth

Route::get('/signup',function (){
  return view('auth.sign-up');
});
Route::get('/signin',function (){
  return view('auth.sign-in');
});



//Admins
Route::get('/admin/admin',function (){
  return view('admin.admin');
});
