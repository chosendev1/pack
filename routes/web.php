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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('customers.customer_form_new');
});

/*Route::get('/home', 'HomeController@index')->name('home');
Route::resource('customers', 'Customers\CustomersController');
Route::resource('loan-products', 'Loans\LoanProductsController');
Route::resource('loan-applications', 'Loans\LoanApplicationsController');
Route::resource('guarantors', 'Customers\GuarantorsController');*/

Route::get('dashboard', 'DashboardController@index');
//customers
Route::get('customers/register', 'CustomersController@create'); //register
Route::post('customers', 'CustomersController@store'); //save	
Route::get('customers', 'CustomersController@index'); //all	
Route::get('customers/importation', 'CustomersController@importCustomersForm'); //import	
Route::post('customers/importation', 'CustomersController@import'); //import	
Route::get('customers/{customer}', 'CustomersController@show');// find specific	
Route::get('customers/{id}/edit', 'CustomersController@edit');//edit	
Route::patch('customers/{id}/edit', 'CustomersController@update');//edit	
Route::delete('customers/{id}/delete', 'CustomersController@destroy');//delete	
//Route::get('customers/newpage', 'Customers\CustomersController@newlayout');	
 	 
 //loan product routes	 //loan product routes\

 Route::post('loan-products', 'LoanProductsController@store');
 Route::get('loan-products', 'LoanProductsController@index');

 //Loans
 //Route::get('loan-applications/register', 'LoansApplicationController@create');
Route::get('loan-applications/{customer_id}/apply',
	 'LoansApplicationController@create');
Route::get('loan-applications', 'LoansApplicationController@index');
Route::post('loan-applications/apply', 'LoansApplicationController@store');
//Route::get(loan-applications/{id}', 'LoansApplicationController@show');
Route::get('loan-applications/{id}/approve', 'LoansApplicationController@loan_approval');
Route::get('loan-applications/{id}/disburse', 'LoansApplicationController@loan_disbursement');
Route::get('loan-applications/{id}/pay', 'LoansApplicationController@loan_payment');
Route::get('loan-applications/{id}/reject', 'LoansApplicationController@reject_loan_application');
Route::get('loan-applications/{id}/edit', 'LoansApplicationController@edit');
Route::post('loan-actions/{id}/approve', 'LoanActionController@approval');
Route::get('loan-applications/{loan}/{product}/schedule', 'LoansApplicationController@schedule');

Route::get('guarantors/{loan}/register', 'GuarantorsController@create'); //register
Route::post('guarantors', 'GuarantorsController@store'); //save	
Route::get('guarantors', 'GuarantorsController@index'); //all	
Route::get('guarantors/{id}', 'GuarantorsController@show');// find specific	
Route::get('guarantors/{id}/edit', 'GuarantorsController@edit');//edit	
Route::patch('guarantors/{id}/edit', 'GuarantorsController@update');//edit	
Route::delete('guarantors/{id}/delete', 'GuarantorsController@destroy');//delete

//Collaterals
Route::get('collaterals/{loan}/register', 'CollateralsController@create'); //register
Route::post('collaterals', 'CollateralsController@store'); //save	
Route::get('collaterals', 'CollateralsController@index'); //all
//payments
Route::get('payments/{loan}/register', 'PaymentsController@create');
Route::get('payments', 'PaymentsController@index');
Route::post('payments/{loan}/manual', 'PaymentsController@manualPayments');
Route::post('payments/{loan}/automatic', 'PaymentsController@automaticPayments');
Route::get('payments/importation', 'PaymentsController@importPaymentsForm');
Route::post('payments/importation', 'PaymentsController@importPayments');
