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

Route::get('/','\App\Http\Controllers\HomeController@index')->name('home.home');
Route::get('/dashboard','\App\Http\Controllers\HomeController@dashboard')->name('home.dashboard');
Route::get('/about','\App\Http\Controllers\HomeController@about')->name('home.about');
Route::get('/blog','\App\Http\Controllers\HomeController@blog')->name('home.blog');
Route::get('/contact','\App\Http\Controllers\HomeController@contact')->name('home.contact');
Route::get('/service','\App\Http\Controllers\HomeController@service')->name('home.service');


//blog
Route::get('/blog/create','\App\Http\Controllers\admin\BlogController@create');
Route::post('/blog/store','\App\Http\Controllers\admin\BlogController@store')->name('blog.store');
Route::get('/blog/delete/{id}','\App\Http\Controllers\admin\BlogController@destroy')->name('blog.destroy');
Route::get('/blog/edit/{id}','\App\Http\Controllers\admin\BlogController@edit')->name('blog.edit');;
Route::post('/blog/update/{id}','\App\Http\Controllers\admin\BlogController@update')->name('blog.update');
Route::get('/blog/index','\App\Http\Controllers\admin\BlogController@index');

//coupon
Route::get('/coupon/create','\App\Http\Controllers\admin\CouponController@create');
Route::post('/coupon/store','\App\Http\Controllers\admin\CouponController@store')->name('coupon.store');
Route::get('/coupon/delete/{id}','\App\Http\Controllers\admin\CouponController@destroy')->name('coupon.destroy');
Route::get('/coupon/edit/{id}','\App\Http\Controllers\admin\CouponController@edit')->name('coupon.edit');;
Route::post('/coupon/update/{id}','\App\Http\Controllers\admin\CouponController@update')->name('coupon.update');
Route::get('/coupon/index','\App\Http\Controllers\admin\CouponController@index');

//course
Route::get('/course/create','\App\Http\Controllers\admin\CourseController@create');
Route::post('/course/store','\App\Http\Controllers\admin\CourseController@store')->name('course.store');
Route::get('/course/delete/{id}','\App\Http\Controllers\admin\CourseController@destroy')->name('course.destroy');
Route::get('/course/edit/{id}','\App\Http\Controllers\admin\CourseController@edit')->name('course.edit');;
Route::post('/course/update/{id}','\App\Http\Controllers\admin\CourseController@update')->name('course.update');
Route::get('/course/index','\App\Http\Controllers\admin\CourseController@index');

//course category
Route::get('/coursecategory/create','\App\Http\Controllers\admin\CourseCategoryController@create');
Route::post('/coursecategory/store','\App\Http\Controllers\admin\CourseCategoryController@store')->name('coursecategory.store');
Route::get('/coursecategory/delete/{id}','\App\Http\Controllers\admin\CourseCategoryController@destroy')->name('coursecategory.destroy');
Route::get('/coursecategory/edit/{id}','\App\Http\Controllers\admin\CourseCategoryController@edit')->name('coursecategory.edit');;
Route::post('/coursecategory/update/{id}','\App\Http\Controllers\admin\CourseCategoryController@update')->name('coursecategory.update');
Route::get('/coursecategory/index','\App\Http\Controllers\admin\CourseCategoryController@index');

//course level
Route::get('/courselevel/create','\App\Http\Controllers\admin\CourseLevelController@create');
Route::post('/courselevel/store','\App\Http\Controllers\admin\CourseLevelController@store')->name('courselevel.store');
Route::get('/courselevel/delete/{id}','\App\Http\Controllers\admin\CourseLevelController@destroy')->name('courselevel.destroy');
Route::get('/courselevel/edit/{id}','\App\Http\Controllers\admin\CourseLevelController@edit')->name('courselevel.edit');;
Route::post('/courselevel/update/{id}','\App\Http\Controllers\admin\CourseLevelController@update')->name('courselevel.update');
Route::get('/courselevel/index','\App\Http\Controllers\admin\CourseLevelController@index');

//enroll
Route::get('/enroll/create','\App\Http\Controllers\admin\EnrollController@create');
Route::post('/enroll/store','\App\Http\Controllers\admin\EnrollController@store')->name('enroll.store');
Route::get('/enroll/delete/{id}','\App\Http\Controllers\admin\EnrollController@destroy')->name('enroll.destroy');
Route::get('/enroll/edit/{id}','\App\Http\Controllers\admin\EnrollController@edit')->name('enroll.edit');;
Route::post('/enroll/update/{id}','\App\Http\Controllers\admin\EnrollController@update')->name('enroll.update');
Route::get('/enroll/index','\App\Http\Controllers\admin\EnrollController@index');

//instructor
Route::get('/instructor/create','\App\Http\Controllers\admin\InstructorController@create');
Route::post('/instructor/store','\App\Http\Controllers\admin\InstructorController@store')->name('instructor.store');
Route::get('/instructor/delete/{id}','\App\Http\Controllers\admin\InstructorController@destroy')->name('instructor.destroy');
Route::get('/instructor/edit/{id}','\App\Http\Controllers\admin\InstructorController@edit')->name('instructor.edit');;
Route::post('/instructor/update/{id}','\App\Http\Controllers\admin\InstructorController@update')->name('instructor.update');
Route::get('/instructor/index','\App\Http\Controllers\admin\InstructorController@index');

//lesson
Route::get('/lesson/create','\App\Http\Controllers\admin\LessonController@create');
Route::post('/lesson/store','\App\Http\Controllers\admin\LessonController@store')->name('lesson.store');
Route::get('/lesson/delete/{id}','\App\Http\Controllers\admin\LessonController@destroy')->name('lesson.destroy');
Route::get('/lesson/edit/{id}','\App\Http\Controllers\admin\LessonController@edit')->name('lesson.edit');;
Route::post('/lesson/update/{id}','\App\Http\Controllers\admin\LessonController@update')->name('lesson.update');
Route::get('/lesson/index','\App\Http\Controllers\admin\LessonController@index');

//payment
Route::get('/payment/create','\App\Http\Controllers\admin\PaymentController@create');
Route::post('/payment/store','\App\Http\Controllers\admin\PaymentController@store')->name('payment.store');
Route::get('/payment/delete/{id}','\App\Http\Controllers\admin\PaymentController@destroy')->name('payment.destroy');
Route::get('/payment/edit/{id}','\App\Http\Controllers\admin\PaymentController@edit')->name('payment.edit');;
Route::post('/payment/update/{id}','\App\Http\Controllers\admin\PaymentController@update')->name('payment.update');
Route::get('/payment/index','\App\Http\Controllers\admin\PaymentController@index');

//section
Route::get('/section/create','\App\Http\Controllers\admin\SectionController@create');
Route::post('/section/store','\App\Http\Controllers\admin\SectionController@store')->name('section.store');
Route::get('/section/delete/{id}','\App\Http\Controllers\admin\SectionController@destroy')->name('section.destroy');
Route::get('/section/edit/{id}','\App\Http\Controllers\admin\SectionController@edit')->name('section.edit');;
Route::post('/section/update/{id}','\App\Http\Controllers\admin\SectionController@update')->name('section.update');
Route::get('/section/index','\App\Http\Controllers\admin\SectionController@index');

//student
Route::get('/student/create','\App\Http\Controllers\admin\StudentController@create');
Route::post('/student/store','\App\Http\Controllers\admin\StudentController@store')->name('student.store');
Route::get('/student/delete/{id}','\App\Http\Controllers\admin\StudentController@destroy')->name('student.destroy');
Route::get('/student/edit/{id}','\App\Http\Controllers\admin\StudentController@edit')->name('student.edit');;
Route::post('/student/update/{id}','\App\Http\Controllers\admin\StudentController@update')->name('student.update');
Route::get('/student/index','\App\Http\Controllers\admin\StudentController@index');
