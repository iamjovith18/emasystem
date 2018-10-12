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
    return view('auth.login');
});

Auth::routes();

//Route::get('home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route:: group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/home',[
        'uses'=> 'HomeController@index',
        'as'=> 'home'
    ]);

    // Route for employee

    Route::get('/usermanagement',[
        'uses'=>'UsercredController@index',
        'as'=>'usermanagement'
    ]);

    Route::get('/usermanagement/show/{id}',[
        'uses'=>'UsercredController@show',
        'as'=>'usermanagement.show'
    ]);

    Route::get('/usermanagement/create',[
        'uses'=> 'UsercredController@create',
        'as'=>'usermanagement.create'
    ]);

    Route::post('/usermanagement/store',[
        'uses'=>'UsercredController@store',
        'as'=>'usermanagement.store'
    ]);

    Route::get('/usermanagement/edit/{id}',[
        'uses'=>'UsercredController@edit',
        'as'=>'usermanagement.edit'
    ]);
    Route::post('/usermanagement/update/{id}',[
        'uses'=>'UsercredController@update',
        'as'=>'usermanagement.update'
    ]);
    Route::get('/usermanagement/delete/{id}',[
        'uses'=>'UsercredController@destroy',
        'as'=>'usermanagement.delete'
    ]);

    // Route for brands

    Route::get('/brand',[
        'uses'=>'BrandController@index',
        'as'=>'brand'
    ]);

    Route::get('brand/create',[
        'uses'=>'BrandController@create',
        'as'=>'brand.create'
    ]);
    Route::post('brand/store',[
        'uses'=>'BrandController@store',
        'as'=>'brand.store'
    ]);

    Route::get('/brand/edit/{id}',[
        'uses'=>'BrandController@edit',
        'as'=>'brand.edit'
    ]);
    Route::post('/brand/update/{id}',[
        'uses'=>'BrandController@update',
        'as'=>'brand.update'
    ]);
    Route::get('/brand/delete/{id}',[
        'uses'=>'BrandController@destroy',
        'as'=>'brand.delete'
    ]);

    //Route for categories

    Route::get('/category',[
        'uses'=>'CategoryController@index',
        'as'=>'category'
    ]);

    Route::get('/category/create',[
        'uses'=>'CategoryController@create',
        'as'=>'category.create'
    ]);
    Route::post('/category/store',[
        'uses'=>'CategoryController@store',
        'as'=>'category.store'
    ]);

    Route::get('/category/edit/{id}',[
        'uses'=>'CategoryController@edit',
        'as'=>'category.edit'
    ]);
    Route::post('/category/update/{id}',[
        'uses'=>'CategoryController@update',
        'as'=>'category.update'
    ]);
    Route::get('/category/delete/{id}',[
        'uses'=>'CategoryController@destroy',
        'as'=>'category.delete'
    ]);

    //Route for accessory

    Route::get('/accessory',[
        'uses'=>'AccessoryController@index',
        'as'=>'accessory'
    ]);

    Route::get('/accessory/create',[
        'uses'=>'AccessoryController@create',
        'as'=>'accessory.create'
    ]);
    Route::post('/accessory/store',[
        'uses'=>'AccessoryController@store',
        'as'=>'accessory.store'
    ]);

    Route::get('/accessory/edit/{id}',[
        'uses'=>'AccessoryController@edit',
        'as'=>'accessory.edit'
    ]);
    Route::post('/accessory/update/{id}',[
        'uses'=>'AccessoryController@update',
        'as'=>'accessory.update'
    ]);
    Route::get('/accessory/delete/{id}',[
        'uses'=>'AccessoryController@destroy',
        'as'=>'accessory.delete'
    ]);

    //Route for components

    Route::get('/component',[
        'uses'=>'ComponentController@index',
        'as'=>'component'
    ]);

    Route::get('/component/create',[
        'uses'=>'ComponentController@create',
        'as'=>'component.create'
    ]);
    Route::post('/component/store',[
        'uses'=>'ComponentController@store',
        'as'=>'component.store'
    ]);

    Route::get('/component/edit/{id}',[
        'uses'=>'ComponentController@edit',
        'as'=>'component.edit'
    ]);
    Route::post('/component/update/{id}',[
        'uses'=>'ComponentController@update',
        'as'=>'component.update'
    ]);
    Route::get('/component/delete/{id}',[
        'uses'=>'ComponentController@destroy',
        'as'=>'component.delete'
    ]);

    Route::get('/component/checkout/{id}',[
        'uses'=>'ComponentController@checkout',
        'as'=>'component.checkout'
    ]);

    Route::post('/component/order/{id}',[
        'uses'=>'ComponentController@order',
        'as'=>'component.order'
    ]);

    //Register admin

    Route::get('/administration/create',[
        'uses'=>'Auth\RegisterController@create',
        'as'=>'register.create'
    ]);
});