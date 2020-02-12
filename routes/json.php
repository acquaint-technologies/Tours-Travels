<?php
/*
|--------------------------------------------------------------------------
| JSON Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
| Response should be JSON datatype
|
*/

Route::group(['prefix' => 'json', 'namespace' => 'JsonCon', 'middleware' => ['auth:admin']], function () {
    Route::get('get-upazilas/{district}', 'LocationController@getUpazilasFromDistrict');
    Route::get('get-customers-by-group-id/{group_id}', 'CustomerController@getCustomerByGroup');
});
