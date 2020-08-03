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

use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/', 'homecontroller@index')->name('home');
Route::get('danhmuc/{slug}-{id}', 'Categorycolltroller@getlistproduct')->name('get.list.product');
Route::get('sanpham/{slug}-{id}', 'productsdetailcontroller@productdetail')->name('get.detail.product');
Route::get('sanpham', 'Categorycolltroller@getlistproduct')->name('get.list.search');
Route::group(['namespace' => 'Auth'], function () {
    Route::get('dang-ky', 'RegisterController@getRegister')->name('get.Register');
    Route::post('dang-ky', 'RegisterController@postRegister');
    Route::get('Xac-nhan-tai-khoan', 'RegisterController@verifyaccount')->name('user.verify.acccount');
    Route::get('dang-nhap', 'LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap', 'LoginController@postLogin');
    Route::get('dang-xuat', 'LoginController@Logout')
        ->name('signout');
    Route::get('/lay-lai-mat-khau', 'ForgotPasswordController@getformreset')->name('get.reset.password');
    Route::get('/reset-password', 'ForgotPasswordController@resetpassword')->name("reset-password");
    Route::post('/reset-password', 'ForgotPasswordController@saveresetpassword');
    Route::post('/lay-lai-mat-khau', 'ForgotPasswordController@sentcodereset')->name('get.link.reset.password');
});
Route::group(['prefix' => 'shopping'], function () {
    Route::get('/add/{id}', 'shoppingcartcontrooler@addproduct')->name('add.shopping.carts');
    Route::get('/danhsach', 'shoppingcartcontrooler@getlist')->name('get.list.shopping.cart');
    Route::get('/delete/{id}', 'shoppingcartcontrooler@deleteproduct')->name('delete.shopping.carts');
});
Route::get('xoagiohang', function () {
    Cart::destroy();
});
Route::get('lien-he', 'ContactController@getContact')->name('get.Contact');
Route::post('lien-he', 'ContactController@postContact');
//bai-viet
Route::get('bai-viet', 'Articlecontroller@getlistarticle')->name('get.list.article');
Route::get('bai-viet/{slug}-{id}', 'Articlecontroller@getdetailarticle')->name('get.detail.article');

Route::group(['prefix' => 'Gio-hang', 'middleware' => 'checkLoginuser'], function () {
    Route::get('/thanhtoan', 'shoppingcartcontrooler@getFormpay')->name('get.form.pay');
    Route::post('/thanhtoan', 'shoppingcartcontrooler@saveInfoshoppingcart');
});
Route::group(['prefix' => 'ajax', 'middleware' => 'checkLoginuser'], function () {
    Route::post('/Danh-gia/{id}', 'Ratingcontroller@saveRating')->name('post.rating.product');
});
Route::group(['prefix' => 'ajax'], function () {
    Route::post('/view-product', 'HomeController@renderproductview')->name('post.product.viewed');
});

Route::get('Ve-chung-toi', 'PageStaticcontroller@Aboutus')->name('get-about_us');
Route::group(['prefix' => 'Thong-tin-user', 'middleware' => 'checkLoginuser'], function () {
    Route::get('/', 'Usercontroller@index')->name('user.dashboard');
    Route::get('/infor', 'Usercontroller@updateInfor')->name('user.update.info');
    Route::post('/infor', 'Usercontroller@saveupload');
    Route::get('/password', 'Usercontroller@updatepassword')->name('user.update.password');
    Route::post('/password', 'Usercontroller@saveupdatepassword');
    Route::get('/San-pham-ban-chay', 'Usercontroller@getProductpay')->name('list.product.buy');
    Route::get('/San-pham-quan-tam', 'Usercontroller@getlistfocus')->name('list.product.focus');
});

Auth::routes();