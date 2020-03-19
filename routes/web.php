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

Route::get('/', 'HomeController@index')->name('home');

Route::get('projects','ProjectController@index')->name('projects');
Route::get('agents','AgentController@index')->name('agents');
Route::get('project/{slug}', 'ProjectController@details')->name('project.details');
Route::get('agent/{slug}', 'AgentController@details')->name('agent.details');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('contact', 'ContactController@index')->name('contact');


Auth::routes();

Route::get('/{username}','RegisterController@profile')->name('dashboard');

Route::group(['as'=>'superadmin.','prefix'=>'superadmin','namespace'=>'SuperAdmin','middleware'=>['auth','superadmin']], function 
(){


    Route::get('settings','SettingsController@index')->name('settings');
    Route::put('profile-update','SettingsController@updateProfile')->name('profile.update');
    Route::put('password-update','SettingsController@updatePassword')->name('password.update');

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('school', 'SchoolController');
    Route::resource('user', 'UserController');
    Route::resource('project', 'ProjectController');
    Route::resource('reading', 'ReadingController');
    Route::resource('member', 'MemberController');
    Route::resource('agent', 'AgentController');

    Route::get('/pending/project','ProjectController@pending')->name('project.pending');
    Route::put('/project/{id}/approve','ProjectController@approval')->name('project.approve');
});

Route::group(['as'=>'schooladmin.','prefix'=>'schooladmin','namespace'=>'SchoolAdmin','middleware'=>['auth','schooladmin']], function 
(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('project', 'ProjectController');
    Route::resource('reading', 'ReadingController');
    Route::resource('member', 'MemberController');
});

Route::group(['as'=>'student.','prefix'=>'student','namespace'=>'Student','middleware'=>['auth','student']], function 
(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('reading', 'ReadingController');
    Route::resource('project', 'ProjectController');
});