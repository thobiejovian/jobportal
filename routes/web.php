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
// Jobs Route
Route::get('/', 'JobController@index');
Route::get('/jobs/create', 'JobController@create')->name('job.create');
Route::post('/jobs/create', 'JobController@store')->name('job.store');
Route::get('/jobs/my-job',  'JobController@myjob')->name('my.job');

Route::get('/jobs/{id}/edit', 'JobController@edit')->name('job.edit');

Route::post('/jobs/{id}/edit', 'JobController@update')->name('job.update');

Route::post('/applications/{id}', 'JobController@apply')->name('apply');

Route::get('/jobs/applications', 'JobController@applicant')->name('applicant');
Route::get('/jobs/alljobs', 'JobController@allJobs')->name('alljobs');

Auth::routes(['verify' => true]);

// Save and Unsave jobs

Route::post('/save/{id}','FavouriteController@saveJob');
Route::post('/unsave/{id}','FavouriteController@unsaveJob');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/jobs/{id}/{job}', 'JobController@show')->name('jobs.show');

// Company Route
Route::get('/company/{id}/{company}', 'CompanyController@index')->name('company.index');

Route::get('company/create', 'CompanyController@create')->name('company.create');

Route::post('company/create', 'CompanyController@store')->name('company.store');


// Company Photo Route

Route::post('company/logo', 'CompanyController@logo')->name('employer.logo');

Route::post('company/coverphoto', 'CompanyController@coverPhoto')->name('cover.photo');


// User Profile
Route::get('/user/profile', 'UserController@index')->name('user.profile');

Route::post('/user/profile/create', 'UserController@store')->name('profile.create');

Route::post('/user/coverletter', 'UserController@coverletter')->name('cover.letter');

Route::post('/user/resume', 'UserController@resume')->name('resume');

Route::post('/user/avatar', 'UserController@avatar')->name('avatar');

// Route Employer

Route::view('employer/register', 'auth.employer-register')->name('employer.register');

Route::post('employer/register', 'EmployerRegisterController@register')->name('emp.register');
