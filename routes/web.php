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

Route::group(['namespace' => 'BackEndCon', 'middleware' => ['auth:admin']], function (){
    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard.index');
    Route::resource('groups', 'GroupController');
    Route::resource('customer', 'CustomerController');
    Route::get('customer/pdf/{customer}', 'CustomerController@customerInfoPDF')->name('customer.pdf');
    Route::resource('passport-info', 'PassportController');
    Route::resource('hajj-package', 'HajjPackageController');
    Route::resource('omra-hajj-package', 'OmraHajjPackageController');
    Route::resource('haji', 'HajjController');
    Route::resource('omra-haji', 'OmraHajjController');
});

// Turned off Register Routes
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
