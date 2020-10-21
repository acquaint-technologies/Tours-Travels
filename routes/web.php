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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Json Response with web middleware
 */
include 'json.php';

Route::group(['namespace' => 'BackEndCon', 'middleware' => ['auth:admin']], function () {
    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard.index');
    Route::resource('groups', 'GroupController');
    Route::resource('hajj-groups', 'HajjGroupController');
    Route::resource('omra-hajj-groups', 'OmraHajjGroupController');
    Route::resource('customer', 'CustomerController');
    Route::get('customer/pdf/{customer}', 'CustomerController@customerInfoPDF')->name('customer.pdf');
    Route::post('/passport-info/delete-document/{document_id}', 'PassportController@deleteDocument');
    Route::resource('passport-info', 'PassportController');
    Route::resource('passport-collection', 'PassportCollectionController');
    Route::get('passport-collection/pdf/{passport_collection}', 'PassportCollectionController@pdf')->name('passport-collection.pdf');
    Route::get('passport-history/receipt/print/{id}', 'PassportHistoryController@printReceipt')->name('passport-history.print-receipt');
    Route::resource('passport-history', 'PassportHistoryController');
    Route::post('passport-history/change-status', 'PassportHistoryController@changeStatus')->name('passport-history.change-status');
    Route::resource('hajj-package', 'HajjPackageController');
    Route::resource('omra-hajj-package', 'OmraHajjPackageController');
    Route::resource('haji', 'HajjController');
    Route::resource('omra-haji', 'OmraHajjController');
    Route::resource('sms-sending-system', 'SmsSenderController');

    Route::get('deposit-details/{hajj_id}', 'Accounts\DepositController@depositDetails')->name('deposit-details.view');

    Route::get('haji-payment-details', 'HajjPaymentController@index')->name('hajj-payment.index');
    Route::get('haji-payment-details/{payment_id}', 'HajjPaymentController@destroy')->name('hajj-payment.destroy');
    Route::get('hajj-payment/create/{hajj_id}', 'HajjPaymentController@create')->name('hajj-payment.create');
    Route::post('hajj-payment', 'HajjPaymentController@store')->name('hajj-payment.store');
    Route::get('hajj-payment/{payment_id}/edit', 'HajjPaymentController@edit')->name('hajj-payment.edit');
    Route::put('hajj-payment/{payment_id}', 'HajjPaymentController@update')->name('hajj-payment.update');

    Route::get('omra-haji-payment-details', 'OmraHajjPaymentController@index')->name('omra-hajj-payment.index');
    Route::get('omra-haji-payment-details/{payment_id}', 'OmraHajjPaymentController@destroy')->name('omra-hajj-payment.destroy');
    Route::get('omra-hajj-payment/create/{hajj_id}', 'OmraHajjPaymentController@create')->name('omra-hajj-payment.create');
    Route::post('omra-hajj-payment', 'OmraHajjPaymentController@store')->name('omra-hajj-payment.store');
    Route::get('omra-hajj-payment/{payment_id}/edit', 'OmraHajjPaymentController@edit')->name('omra-hajj-payment.edit');
    Route::put('omra-hajj-payment/{payment_id}', 'OmraHajjPaymentController@update')->name('omra-hajj-payment.update');

    // Makka-Madina Management Routes
    Route::resource('hotel-rate', 'HotelRateController');
    Route::resource('vehicle-rate', 'VehicleRateController');
    // END Makka-Madina Management Routes

    // Accounts Management Routes
    Route::group(['namespace' => 'Accounts'], function () {
        Route::get('deposit-list/receipt/print/{id}', 'DepositController@printReceipt')->name('deposit-list.print-receipt');
        Route::resource('deposit-list', 'DepositController');
        Route::get('deposit-list/add/{hajj_id}', 'DepositController@addPayment')->name('deposit-list.add-payment');
        Route::post('hajj-payment-status/change', 'DepositController@changePaymentStatus')->name('deposit-list.change-status');
        Route::resource('expense-list', 'ExpenseController');
        Route::resource('cash-in-hand', 'CashInHandController');
    });
    // END Accounts Management Routes

    Route::resource('customer-payment', 'CustomerPaymentController');

    Route::resource('visa-management', 'VisaManagementController');

    // Reports Routes
    Route::group(['namespace' => 'Reports'], function () {
        Route::resource('customer-report', 'CustomerReportController');
        Route::resource('haji-report', 'HajjReportController');
        Route::resource('omra-haji-report', 'OmraHajjReportController');
        Route::resource('passport-report', 'PassportReportController');
    });
    // END Reports Routes

    // Ticket Management Routes
    Route::group(['namespace' => 'TicketManagement'], function () {
        Route::resource('ticketing-airlines', 'TicketingAirlineController');
        Route::resource('ticket-sales', 'TicketSalesController');
        Route::resource('ticket-refund', 'TicketRefundController');
    });
    // END Ticket Management Routes

    Route::resource('passport-status', 'PassportStatusController');
});

// Turned off Register Routes
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
