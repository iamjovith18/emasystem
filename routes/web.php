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

Route::match(['get', 'post'], 'register', function(){
    return redirect('/admin/home');
});

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

    Route::get('/usermanagement/employee_access',[
        'uses'=>'UsercredController@employee_access',
        'as'=>'usermanagement.employee-access'
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

    Route::get('/usermanagement/edit_employee_access/{id}',[
        'uses'=>'UsercredController@edit_employee_access',
        'as'=>'usermanagement.edit_employee_access'
    ]);

    Route::post('/usermanagement/update/{id}',[
        'uses'=>'UsercredController@update',
        'as'=>'usermanagement.update'
    ]);

    Route::post('/usermanagement/update_employee_access/{id}',[
        'uses'=>'UsercredController@update_employee_access',
        'as'=>'usermanagement.update_employee_access'
    ]);

    Route::post('/usernamegement/update_access',[
        'uses'=>'UsercredController@update_access',
        'as'=>'usermanagement.update_access'
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

    Route::get('/brand/create',[
        'uses'=>'BrandController@create',
        'as'=>'brand.create'
    ]);
    Route::post('/brand/store',[
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

    //Route for Status
    Route::get('/status',[
        'uses'=>'StatusController@index',
        'as'=>'status'
    ]);

    Route::get('/status/create',[
        'uses'=>'StatusController@create',
        'as'=>'status.create'
    ]);
    Route::post('/status/store',[
        'uses'=>'StatusController@store',
        'as'=>'status.store'
    ]);

    Route::get('/status/edit/{id}',[
        'uses'=>'StatusController@edit',
        'as'=>'status.edit'
    ]);
    Route::post('/status/update/{id}',[
        'uses'=>'StatusController@update',
        'as'=>'status.update'
    ]);
    Route::get('/status/delete/{id}',[
        'uses'=>'StatusController@destroy',
        'as'=>'status.delete'
    ]);

    //Route for Access
    Route::get('/access',[
        'uses'=>'AccessController@index',
        'as'=>'access'
    ]);

    Route::get('/access/create',[
        'uses'=>'AccessController@create',
        'as'=>'access.create'
    ]);
    Route::post('/access/store',[
        'uses'=>'AccessController@store',
        'as'=>'access.store'
    ]);

    Route::get('/access/edit/{id}',[
        'uses'=>'AccessController@edit',
        'as'=>'access.edit'
    ]);
    Route::post('/access/update/{id}',[
        'uses'=>'AccessController@update',
        'as'=>'access.update'
    ]);
    Route::get('/access/delete/{id}',[
        'uses'=>'AccessController@destroy',
        'as'=>'access.delete'
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

    // All deployed Assets

    Route::get('/all-deployed-assets',[
        'uses'=>'AllDeployedAssetsController@index',
        'as'=>'all-deployed-assets'
    ]);

    Route::get('/all-deployed-assets/edit/{id}',[
        'uses'=>'AllDeployedAssetsController@edit',
        'as'=>'all-deployed-assets.edit'
    ]);

    Route::get('/all-deployed-assets/edit-unit/{id}',[
        'uses'=>'AllDeployedAssetsController@edit_unit',
        'as'=>'all-deployed-assets.edit-unit'
    ]);

    Route::get('/all-deployed-assets/edit-component/{id}',[
        'uses'=>'AllDeployedAssetsController@edit_component',
        'as'=>'all-deployed-assets.edit-component'
    ]);

    Route::get('/all-deployed-assets/delete/{id}',[
        'uses'=>'AllDeployedAssetsController@destroy',
        'as'=>'all-deployed-assets.delete'
    ]);

    Route::get('/all-deployed-assets/delete-unit/{id}',[
        'uses'=>'AllDeployedAssetsController@destroy_unit',
        'as'=>'all-deployed-assets.delete-unit'
    ]);

    Route::get('/all-deployed-assets/delete-component/{id}',[
        'uses'=>'AllDeployedAssetsController@destroy_component',
        'as'=>'all-deployed-assets.delete-component'
    ]);

    Route::post('/all-deployed-assets/update/{id}',[
        'uses'=>'AllDeployedAssetsController@update',
        'as'=>'all-deployed-assets.update'
    ]);

    Route::post('/all-deployed-assets/update-unit/{id}',[
        'uses'=>'AllDeployedAssetsController@update_unit',
        'as'=>'all-deployed-assets.update-unit'
    ]);
    
    Route::post('/all-deployed-assets/update-component/{id}',[
        'uses'=>'AllDeployedAssetsController@update_component',
        'as'=>'all-deployed-assets.update-component'
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

    Route::get('/accessory/checkout/{id}',[
        'uses'=>'AccessoryController@checkout',
        'as'=>'accessory.checkout'
    ]);

    Route::post('/accessory/order/{id}',[
        'uses'=>'AccessoryController@order',
        'as'=>'accessory.order'
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

    //System Units

    Route::get('/system-units',[
        'uses'=>'SystemUnitController@index',
        'as'=>'system-unit'
    ]);

    Route::get('/system-units/create',[
        'uses'=>'SystemUnitController@create',
        'as'=>'system-unit.create'
    ]);
    Route::post('/system-units/store',[
        'uses'=>'SystemUnitController@store',
        'as'=>'system-unit.store'
    ]);

    Route::get('/system-units/edit/{id}',[
        'uses'=>'SystemUnitController@edit',
        'as'=>'system-unit.edit'
    ]);
    Route::post('/system-units/update/{id}',[
        'uses'=>'SystemUnitController@update',
        'as'=>'system-unit.update'
    ]);
    Route::get('/system-units/delete/{id}',[
        'uses'=>'SystemUnitController@destroy',
        'as'=>'system-unit.delete'
    ]);

    Route::get('/system-units/checkout/{id}',[
        'uses'=>'SystemUnitController@checkout',
        'as'=>'system-unit.checkout'
    ]);

    Route::post('/system-units/order/{id}',[
        'uses'=>'SystemUnitController@order',
        'as'=>'system-unit.order'
    ]);

    //ADMINISTRATOR/ USER

    Route::get('/administrator',[
        'uses'=>'AdministratorController@index',
        'as'=>'administrator'
    ]);

    Route::get('/administrator',[
        'uses'=>'AdministratorController@index',
        'as'=>'administrator'
    ]);

    Route::get('/administrator/create',[
        'uses'=>'AdministratorController@create',
        'as'=>'administrator.create'
    ]);
    Route::post('/administrator/store',[
        'uses'=>'AdministratorController@store',
        'as'=>'administrator.store'
    ]);

    Route::get('/administrator/edit/{id}',[
        'uses'=>'AdministratorController@edit',
        'as'=>'administrator.edit'
    ]);
    Route::post('/administrator/update/{id}',[
        'uses'=>'AdministratorController@update',
        'as'=>'administrator.update'
    ]);
    Route::get('/administrator/delete/{id}',[
        'uses'=>'AdministratorController@destroy',
        'as'=>'administrator.delete'
    ]);

    Route::get('/administrator/resetpassword',[
        'uses'=>'AdministratorController@resetpassword',
        'as'=>'administrator.resetpassword'
    ]);

    Route::post('/admiistrator/updatepassword',[
        'uses'=>'AdministratorController@updatePassword',
        'as'=>'administrator.updatepassword'
    ]);

  // Route computer Name Station  
    Route::get('/station',[
        'uses'=>'StationController@index',
        'as'=>'station'
    ]);

    Route::get('/station/create',[
        'uses'=>'StationController@create',
        'as'=>'station.create'
    ]);

    Route::post('/station/store',[
        'uses'=>'StationController@store',
        'as'=>'station.store'
    ]);

    Route::get('/station/edit/{id}',[
        'uses'=>'StationController@edit',
        'as'=>'station.edit'
    ]);

    Route::post('/station/update/{id}',[
        'uses'=>'StationController@update',
        'as'=>'station.update'
    ]);

    Route::get('/station/delete/{id}',[
        'uses'=>'StationController@destroy',
        'as'=>'station.delete'
    ]);

    
    // Route Floor

    Route::get('/floor',[
        'uses'=>'FloorController@index',
        'as'=>'floor'
    ]);

    Route::get('/floor/create',[
        'uses'=>'FloorController@create',
        'as'=>'floor.create'
    ]);

    Route::post('/floor/store',[
        'uses'=>'FloorController@store',
        'as'=>'floor.store'
    ]);

    Route::get('/floor/edit/{id}',[
        'uses'=>'FloorController@edit',
        'as'=>'floor.edit'
    ]);

    Route::post('/floor/update/{id}',[
        'uses'=>'FloorController@update',
        'as'=>'floor.update'
    ]);

    Route::get('/floor/delete/{id}',[
        'uses'=>'FloorController@destroy',
        'as'=>'floor.delete'
    ]);


});