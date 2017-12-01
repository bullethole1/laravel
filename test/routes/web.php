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

Route::get('/customers', 'CustomersController@showCustomers');

Route::get('/customers/by_company/{id}','CustomersController@showCustomerCompany');

Route::get('/customers/{id}', 'CustomersController@showSingleCustomer');

Route::get('/customers/{id}/address','CustomersController@showCustomerAddress');

Route::get('/fb-login','FacebookController@index');

Route::get('/login','FacebookController@loginForm');

Route::get('/facebook','FacebookController@facebook');

Route::resource('products', 'ProductController');

Route::resource('groups', 'GroupController');