<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',array('uses' => 'HomeController@index'));
Route::get('/udyam-registration',array('uses' => 'HomeController@index'));
Route::get('/msme-to-udyam-registration',array('uses' => 'HomeController@msmeToUdyamRegistration'));
Route::get('/payment/{id}',array('uses' => 'HomeController@payment'))->name('payment');
Route::post('/payment-success',array('uses' => 'HomeController@paymentSucess'));
Route::post('/udyam-form-submit',array('uses' => 'HomeController@udyamRegistrationSubmit'));
Route::post('/msme-udyam-form-submit',array('uses' => 'HomeController@msmeRegistrationSubmit'));
Route::get('/track-application',array('uses' => 'HomeController@trackApplication'));
Route::get('/udyam-registration-faqs',array('uses' => 'HomeController@faqs'));
Route::get('/udyam-registration-procedure',array('uses' => 'HomeController@procedure'));
Route::get('/udyam-registration-sample-certificate',array('uses' => 'HomeController@certificate'));
Route::get('/contact-us',array('uses' => 'HomeController@contactUs'));
Route::get('/about-us',array('uses' => 'HomeController@aboutUs'));
