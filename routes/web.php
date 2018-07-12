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

/*Route::get('/home', 'HomeController@index')->name('home');
Route::resource('customers', 'Customers\CustomersController');
Route::resource('loan-products', 'Loans\LoanProductsController');
Route::resource('loan-applications', 'Loans\LoanApplicationsController');
Route::resource('guarantors', 'Customers\GuarantorsController');*/

Route::get('customers/register', 'Customers\CustomersController@create'); //register
Route::post('customers', 'Customers\CustomersController@store'); //save	
Route::get('customers', 'CustomersController@index'); //all	
Route::get('customers/{customer}', 'Customers\CustomersController@show');// find specific	
Route::get('customers/{id}/edit', 'Customers\CustomersController@edit');//edit	
Route::patch('customers/{id}/edit', 'Customers\CustomersController@update');//edit	
Route::delete('customers/{id}/delete', 'Customers\CustomersController@destroy');//delete	
//Route::get('customers/newpage', 'Customers\CustomersController@newlayout');	
 	 
 //loan product routes	 //loan product routes
 Route::get('loan-products/register', 'LoanProductsController@create');