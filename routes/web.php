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
//section1

Route::get('/admin/admin',function (){
  return view('admin.admin');
});
Route::get('/admin/about-hamgam',function (){
  return view('admin.about-hamgam');
});
Route::get('/admin/statistic',function (){
  return view('admin.statistic');
});
Route::get('/admin/question',function (){
  return view('admin.question');
});

Route::get('/admin/connection',function (){
  return view('admin.connection');
});

Route::get('/admin/inquery',function (){
  return view('admin.inquery');
});

Route::get('/admin/purpose',function (){
  return view('admin.purpose');
});

Route::get('/admin/jobs',function (){
  return view('admin.jobs');
});

Route::get('/admin/consult',function (){
  return view('admin.consult');
});

Route::get('/admin/change-field',function (){
  return view('admin.change-field');
});

Route::get('/admin/skill-courses',function (){
  return view('admin.skill-coures');
});

Route::get('/admin/explanation',function (){
  return view('admin.explanation');
});

Route::get('/admin/course-offer',function (){
  return view('admin.course-offer');
});

Route::get('/admin/schedule',function (){
  return view('admin.schedule');
});

Route::get('/admin/workshop',function (){
  return view('admin.workshop');
});

Route::get('/admin/workshop-detailes',function (){
  return view('admin.workshop-detailes');
});

Route::get('/admin/course-detailes',function (){
  return view('admin.course-detailes');
});

Route::get('/admin/visit-industries',function (){
  return view('admin.visit-industries');
});

Route::get('/admin/visit-details',function (){
  return view('admin.visit-details');
});

Route::get('/admin/idea-support',function (){
  return view('admin.idea-support');
});

Route::get('/admin/startup',function (){
  return view('admin.startup');
});

Route::get('/admin/users/student',function (){
  return view('admin.users.student');
});

Route::get('/admin/users/student-detailes',function (){
  return view('admin.users.student-detailes');
});

Route::get('/admin/users/forums',function (){
  return view('admin.users.forums');
});

Route::get('/admin/users/master',function (){
  return view('admin.users.master');
});

Route::get('/admin/users/master-detailes',function (){
  return view('admin.users.master-detailes');
});


//section 2

Route::get('/student/student',function (){
  return view('student.student');
});

Route::get('/student/workshop',function (){
  return view('student.workshop');
});
