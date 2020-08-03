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
// 

Route::prefix('admin')->middleware("checkadmin")->group(function () {
    Route::get('/', 'AdminController@index')->name('tc');
    Route::get('/contact', 'Admincontactcontroller@index')->name('list.contact');
    Route::group(['prefix' => 'category'], function () {
        Route::get('/',  'AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create', 'AdminCategoryController@create')->name('admin.create.list.category');
        Route::get('/update/{id}', 'AdminCategoryController@edit')->name('admin.edit.list.category');
        Route::post('/create', 'AdminCategoryController@store');
        Route::post('update/{id}', 'AdminCategoryController@update');
        Route::get('/{action}/{id}', 'AdminCategoryController@action')->name('admin.action.list.category');
    });
    Route::group(['prefix' => 'products'], function () {
        Route::get('/',  'AdminproductController@index')->name('admin.get.list.products');
        Route::get('/create', 'AdminproductController@create')->name('admin.create.list.products');
        Route::get('/update/{id}', 'AdminproductController@edit')->name('admin.edit.list.products');
        Route::post('/create', 'AdminproductController@store');
        Route::post('update/{id}', 'AdminproductController@update');
        Route::get('/{action}/{id}', 'AdminproductController@action')->name('admin.action.list.products');
    });
    Route::group(['prefix' => 'article'], function () {
        Route::get('/', 'AdminarticleController@index')->name('admin.get.list.article');
        Route::get('/create', 'AdminarticleController@create')->name('admin.create.list.article');
        Route::get('/update/{id}', 'AdminarticleController@edit')->name('admin.edit.list.article');
        Route::post('/create', 'AdminarticleController@store');
        Route::post('update/{id}', 'AdminarticleController@update');
        Route::get('/{action}/{id}', 'AdminarticleController@action')->name('admin.action.list.article');
    });
    //ql don hang
    Route::group(['prefix' => 'transaction'], function () {
        Route::get('/', 'AdminTransactioncontroller@index')->name('admin.get.list.transaction');
        Route::get('/view/{id}', 'AdminTransactioncontroller@viewOder')->name('admin.view.list.transaction');
        Route::get('/delete/{id}', 'AdminTransactioncontroller@deleteOder')->name('admin.delete.list.transaction');
        Route::get('/active/{id}', 'AdminTransactioncontroller@ActionTransaction')->name('admin.get.active.transaction');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', 'AdminUsercontroller@index')->name('admin.get.list.user');
    });
    Route::group(['prefix' => 'rating'], function () {
        Route::get('/', 'AdminRatingController@index')->name('admin.get.list.rating');
        Route::get('/delete/{id}', 'AdminRatingController@delete')->name('admin.delete.rating');
    });

    Route::group(['prefix' => 'page_static'], function () {
        Route::get('/', 'AdminpagestaticController@index')->name('get.list.page_static ');
        Route::get('/create', 'AdminpagestaticController@create')->name('admin.create.list.page_static');
        Route::get('/update/{id}', 'AdminpagestaticController@edit')->name('admin.edit.list.page_static');
        Route::post('/create', 'AdminpagestaticController@store');
        Route::post('update/{id}', 'AdminpagestaticController@update');
        Route::get('/{action}/{id}', 'AdminpagestaticController@action')->name('admin.action.list.page_static');
    });


    Route::group(['prefix' => 'warehouse'], function () {
        Route::get('/', 'AdminwarehouseController@getWarehouseProduct')->name('admin.get.warehouse.list');
    });
    Route::resource('productreful', 'adminrefullcontroller');
});
Route::group(['prefix' => 'authenticate'], function () {
    Route::get('/login', 'AdminAuController@getlogin')->name('admin_login');
    Route::post('/login', 'AdminAuController@postlogin');
    Route::get('/logout', 'AdminAuController@looutadmin')->name('admin_logout');
});