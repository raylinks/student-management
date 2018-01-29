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
Route::post('login', 'Auth\LoginController@login');
Route::get('/', 'UserController@ind');
Route::get('reg', 'SignupController@register')->name('account.reg');
Route::post('reg', 'SignupController@PostSignup');
Route::get('log',  'SigninController@getLog')->name('account.log');
Route::post('/post-log',  'SigninController@postSignin');
Route::get('/home', 'HomeController@dashboard');
Route::get('managecourse', 'HomeController@managecourse')->name('sch.managecourse');
Route::get('addstudent', 'HomeController@getStudent')->name('sch.addstudent');
Route::get('addteacher', 'HomeController@getTeacher')->name('sch.addteacher');
Route::get('classinfo', 'CourseController@getClassinfo')->name('sch.classinfo');
Route::get('picture',  'HomeController@Update_profile_picture')->name('sch.update_profile_picture');
Route::post('addclass', 'HomeController@postClass');
Route::post('addstudent', 'HomeController@postStudents');
Route::post('addclass/editClass',  'HomeController@postEdit');
Route::post('addteacher', 'HomeController@addTeacher');
Route::get('addsection','HomeController@addsection')->name('sch.addsection');
Route::post('addsection', 'HomeController@postSection');
Route::get('updateprofile', 'HomeController@getProfile')->name('sch.updateprofile');
Route::get('studentpayment', 'FeeController@getPayment')->name('Fees.Payment');



Route::get('register', function(){
		return redirect()->to(url('/'));

	});

Route::get('login', ['as' => 'login', 'uses' => function(){
		return redirect()->to(url('/log'))->with('danger', 'You have to login first');
	}]);