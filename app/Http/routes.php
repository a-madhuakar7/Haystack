<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('testing','TestingController@test'); 

Route::auth();

Route::get('/home', 'HomeController@index');


//routes for user roles 
Route::resource('user/roles','RolesController'); 

//routes for the user profile 
//Route::resource('profile/user','UserProfileController');

//routes for HR Profile 
Route::resource('profile/hr','HrProfileController');

//routes for claims 
Route::resource('claims','ClaimsController');   

//routes for benefits
Route::resource('benefits','BenefitsController');

//routes for leaves
Route::resource('leaves','LeavesController');  

//routes for users claims
Route::resource('user/claims','UserClaimsController'); 