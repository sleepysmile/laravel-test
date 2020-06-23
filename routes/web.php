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

Route::get('/', 'SiteController');

Route::namespace('Backend')->group(function () {
    Route::resource('/backend/publications', 'PublicationController')->names('backend.publication');
});


Route::namespace('Frontend')->group(function () {
    Route::resource('/publications', 'PublicationController')->names('frontend.publication');
});
// Route::group(['namespase' => 'Backend', 'prefix' => 'backend'], function () {
//     Route::resource('publications', 'PublicationController')->names('backend.publication');
// });

// Route::group(['namespase' => 'Frontend', 'prefix' => '/'], function () {
    // Route::resource('publications', 'PublicationController')->names('frontend.publication');
// });


