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
//登入
Route::get('/login','LoginController@login');
//home
Route::get('/home','HomeController@home');
//user_list
Route::get('/user_list','UserController@userlist');
Route::get('/user_add','UserController@userAdd');
Route::get('/user_edit','UserController@userEdit');
//角色管理
Route::get('/role_list','UserController@roleList');
Route::get('/role_add','UserController@roleAdd');
Route::get('/role_edit','UserController@roleEdit');

//order
Route::get('/order_list','OrderController@orderList');
Route::get('/order_add','OrderController@orderAdd');
Route::get('/order_edit','OrderController@orderEdit');
//oil
Route::get('/oil_add','OilController@oilAdd');
Route::get('/oil_list','OilController@oilList');
Route::get('/oil_edit','OilController@oilEdit');
Route::get('/oil_goods_list','OilController@oilGoodsList');
Route::get('/oil_goods_add','OilController@oilGoodsAdd');
Route::get('/oil_goods_edit','OilController@oilGoodsEdit');
//
Route::get('/company_list','CompanyController@companyList');
Route::get('/company_add','CompanyController@companyAdd');
Route::get('/company_edit','CompanyController@companyEdit');
//vehicle
Route::get('/vehicle_list','VehicleController@vehicleList');
Route::get('/vehicle_add','VehicleController@vehicleAdd');
Route::get('/vehicle_edit','VehicleController@vehicleEdit');
//customer
Route::get('/customer_list','CustomerController@customerList');
Route::get('/customer_add','CustomerController@customerAdd');
