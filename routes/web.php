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

Route::get('/', [
    'uses' => 'CarsController@index',
    'as' => 'index'
]);
Route::get('/add', [
    'uses' => 'CarsController@add',
    'as' => 'cars.add'
]);

Route::post('/save', [
    'uses' => 'CarsController@save',
    'as' => 'cars.save'
]);
Route::get('/car/{car}', [
    'uses' => 'CarsController@show',
    'as' => 'cars.show'
]); 

Route::get('/car/edit/{car}', [
    'uses' => 'CarsController@edit',
    'as' => 'cars.edit'
]);

Route::put('cars/{car}', [
    'uses' => 'CarsController@update',
    'as' => 'cars.update'
    ]);

Route::get('/shopping/add/', [
    'uses' => 'ShoppingController@create',
    'as' => 'shopping.create'
]);
Route::post('/shopping/store', [
    'uses' => 'ShoppingController@store',
    'as' => 'shopping.store'
]);

Route::get('/shopping/', [
    'uses' => 'ShoppingController@showList',
    'as' => 'shopping.list'
]);

Route::get('/shopping/{shopping}', [
    'uses' => 'ShoppingController@show',
    'as' => 'shopping.show'
]);

Route::get('/shopping/edit/{shopping}', [
    'uses' => 'ShoppingController@edit',
    'as' => 'shopping.edit'
]);
Route::get('/shopping/delete/{shopping}', [
    'uses' => 'ShoppingController@destroy',
    'as' => 'shopping.delete'
]);

Route::put('shopping/{shopping}', [
    'uses' => 'ShoppingController@update',
    'as' => 'shopping.update'
    ]);

Route::get('/search/', [
    'uses' => 'ShoppingController@search',
    'as' => 'shopping.search'
    ]);

Route::get('/repair/add/', [
    'uses' => 'RepairsController@create',
    'as' => 'repair.create'
]);

Route::post('/repair/store', [
    'uses' => 'RepairsController@store',
    'as' => 'repair.store'
]);

Route::get('/repair/{repair}', [
    'uses' => 'RepairsController@show',
    'as' => 'repair.show'
]);

Route::get('/repair/edit/{repair}', [
    'uses' => 'RepairsController@edit',
    'as' => 'repair.edit'
]);

Route::put('repair/{repair}', [
    'uses' => 'RepairsController@update',
    'as' => 'repair.update'
    ]);
Route::get('/repair_search/', [
    'uses' => 'RepairsController@search',
    'as' => 'repair.search'
    ]);

Route::get('/repair/', [
    'uses' => 'RepairsController@showList',
    'as' => 'repairs.list'
]);
Route::get('/repair/delete/{repair}', [
    'uses' => 'RepairsController@destroy',
    'as' => 'repair.delete'
]);

Route::get('/insurance/', [
    'uses' => 'InsuranceController@showList',
    'as' => 'insurance.list'
]);

Route::get('/insurance/add/', [
    'uses' => 'InsuranceController@create',
    'as' => 'insurance.create'
]);

Route::post('/insurance/store', [
    'uses' => 'InsuranceController@store',
    'as' => 'insurance.store'
]);

Route::get('/insurance/edit/{insurance}', [
    'uses' => 'InsuranceController@edit',
    'as' => 'insurance.edit'
]);

Route::put('/insurance/update/{insurance}', [
    'uses' => 'InsuranceController@update',
    'as' => 'insurance.update'
]);


Route::get('/insurance/search', [
    'uses' => 'InsuranceController@search',
    'as' => 'insurance.search'
    ]);

Route::get('/detriment/', [
    'uses' => 'DetrimentController@index',
    'as' => 'detriment.list'
]);

Route::get('/detriment/add/', [
    'uses' => 'DetrimentController@create',
    'as' => 'detriment.create'
]);

Route::post('/detriment/store', [
    'uses' => 'DetrimentController@store',
    'as' => 'detriment.store'
]);

Route::get('/detriment/edit/{detriment}', [
    'uses' => 'DetrimentController@edit',
    'as' => 'detriment.edit'
]);

Route::put('/detriment/update/{detriment}', [
    'uses' => 'DetrimentController@update',
    'as' => 'detriment.update'
]);

Route::get('/detriment/search', [
    'uses' => 'DetrimentController@search',
    'as' => 'detriment.search'
    ]);

Route::get('/detriment/delete/{detriment}', [
    'uses' => 'DetrimentController@destroy',
    'as' => 'deriment.delete'
]);

Route::get('/driver/', [
    'uses' => 'DriverController@index',
    'as' => 'driver.list'
]);

Route::get('/driver/add/', [
    'uses' => 'DriverController@create',
    'as' => 'driver.create'
]);


Route::get('/driver/edit/{driver}', [
    'uses' => 'DriverController@edit',
    'as' => 'driver.edit'
]);

Route::put('/driver/update/{driver}', [
    'uses' => 'DriverController@update',
    'as' => 'driver.update'
]);

Route::post('/driver/store', [
    'uses' => 'DriverController@store',
    'as' => 'driver.store'
]);

Route::get('/driver/delete/{driver}', [
    'uses' => 'DriverController@destroy',
    'as' => 'driver.delete'
]);


Route::get('/place/', [
    'uses' => 'PlaceController@index',
    'as' => 'place.list'
]);

Route::get('/place/add/', [
    'uses' => 'PlaceController@create',
    'as' => 'place.create'
]);


Route::get('/place/edit/{place}', [
    'uses' => 'PlaceController@edit',
    'as' => 'place.edit'
]);

Route::put('/place/update/{place}', [
    'uses' => 'PlaceController@update',
    'as' => 'place.update'
]);

Route::post('/place/store', [
    'uses' => 'PlaceController@store',
    'as' => 'place.store'
]);

Route::get('/place/delete/{place}', [
    'uses' => 'PlaceController@destroy',
    'as' => 'place.delete'
]);

    
Route::get('/car/{car}/shoppings', 'ShoppingCarController@index'); 