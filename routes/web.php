<?php

Route::get('/', function () {
    $recentJobs = DB::table('jobs')->get();
        return view('master', compact('recentJobs'));
});
Route::get('/home', 'HomeController@index')->name('master');
Auth::routes();
Route::view('/register', 'auth.register')->name('register');
Route::view('/employer-register', 'auth.employer-register')->name('employer-register');
Route::get('/jobs', 'JobController@allJobs');

Route::group(['middleware' => 'AuthenticateMiddleware'], function() {

 Route::group(['middleware' => 'CompanyMiddleware'], function() {
    Route::get('/profile/{id}', 'SeekerController@profile');
    
    Route::get('/jobPost', 'CompanyController@createJob');
    Route::post('/saveJob', 'CompanyController@saveJob');
    Route::get('/editJob/{id}', 'CompanyController@editJob');
    Route::post('/updateJob', 'CompanyController@updateJob');
    Route::get('/deleteJob/{id}', 'CompanyController@deleteJob');
    Route::get('/applications/{id}', 'CompanyController@applications');
    
    Route::get('/dashboard', 'CompanyController@dashboard');
 });
 Route::group(['middleware' => 'SeekerMiddleware'], function() {
    
    Route::get('/profile', 'SeekerController@userProfile');
   
    Route::get('/editProfile', 'SeekerController@editProfile');
    Route::post('/saveProfile', 'SeekerController@saveProfile');

    Route::get('/jobApply/{id}', 'JobController@jobApply');
 });
    

 
    Route::get('/job/{id}', 'JobController@singleJob');
});