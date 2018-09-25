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

Route::get('customers/register', 'CustomersController@create'); //register
Route::post('customers', 'CustomersController@store'); //save	
Route::get('customers', 'CustomersController@index'); //all	
Route::get('customers/{customer}', 'CustomersController@show');// find specific	
Route::get('customers/{id}/edit', 'Customers\CustomersController@edit');//edit	
Route::patch('customers/{id}/edit', 'Customers\CustomersController@update');//edit	
Route::delete('customers/{id}/delete', 'Customers\CustomersController@destroy');//delete	
//Route::get('customers/newpage', 'Customers\CustomersController@newlayout');	
 	 
 //loan product routes	 //loan product routes\

 Route::get('loan-products/register', 'LoanProductsController@create');
 Route::get('loan-products', 'LoanProductsController@index');
 //Loans
 Route::get('loan-applications', 'LoansApplicationController@index');
 //Route::get(loan-applications/{id}', 'LoansApplicationController@show');
 Route::get('loan-applications/{id}/approve', 'LoansApplicationController@loan_approval');
 Route::get('loan-applications/{id}/disburse', 'LoansApplicationController@loan_disbursement');
 Route::get('loan-applications/{id}/pay', 'LoansApplicationController@loan_payment');
 Route::get('loan-applications/{id}/reject', 'LoansApplicationController@reject_loan_application');
 Route::get('loan-applications/{id}/edit', 'LoansApplicationController@edit');

Route::get('guarantors/register', 'GuarantorsController@create'); //register
Route::post('guarantors', 'GuarantorsController@store'); //save	
Route::get('guarantors', 'GuarantorsController@index'); //all	
Route::get('guarantors/{id}', 'GuarantorsController@show');// find specific	
Route::get('guarantors/{id}/edit', 'GuarantorsController@edit');//edit	
Route::patch('guarantors/{id}/edit', 'GuarantorsController@update');//edit	
Route::delete('guarantors/{id}/delete', 'GuarantorsController@destroy');//delete

Route::resource('loan-products', 'LoanProductsController');
