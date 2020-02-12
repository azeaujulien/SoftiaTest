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

Route::get('/', 'CertificatePageController@OpenPage')->name('openPage');
Route::get('/certificate', 'CertificatePageController@OpenPage')->name('openPage');
Route::get('/createCertificate', 'CertificatePageController@OpenPage')->name('openPage');
Route::post('/createCertificate', 'CertificatePageController@add')->name('addCertificate');

Route::get('/student', 'StudentPageController@OpenPage')->name('openStudentPage');
//Route::get('/createStudent', 'StudentPageController@OpenPage')->name('openStudentPage');
Route::post('/createStudent', 'StudentPageController@add')->name('addStudent');

Route::get('/convention', 'ConventionPageController@OpenPage')->name('openConventionPage');
Route::get('/createConvention', 'ConventionPageController@OpenPage')->name('openConventionPage');
Route::post('/createConvention', 'ConventionPageController@add')->name('addConvention');



