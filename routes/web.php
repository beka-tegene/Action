<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
})->name('welcome');

Auth::routes();

Route::group(['middleware' => ['auth' , 'isuser']] , function(){
    Route::get('/Home','homecontroller@redirect')->name('home.show');
});

Route::get('/index-account','admincontroller@index')->name('admin.index');
Route::get('/create-account','admincontroller@create')->name('admin.create');
Route::post('/upload-account','admincontroller@upload')->name('admin.upload');
Route::get('/account/{user}/edit','admincontroller@edit')->name('admin.edit');
Route::get('/account/{user}/block-or-unblock','admincontroller@ban')->name('admin.ban');
Route::put('/block-or-unblock-account/{user}','admincontroller@editban')->name('admin.editban');
Route::get('/block-account','admincontroller@block')->name('admin.block');
Route::delete('/destroy-account/{user}','admincontroller@destroy')->name('admin.destroy');
Route::put('/admin-dashboard','admincontroller@show')->name('admin.show');
Route::get('/admin/profile','admincontroller@display')->name('admin.display');
Route::get('/update','admincontroller@updateprofile')->name('admin.updateprofile');
Route::put('/update-admin-account/{user}','admincontroller@update')->name('admin.update');
Route::get('/admin/change-password','admincontroller@password')->name('admin.password');
Route::post('/update-password','admincontroller@postpassword')->name('admin.postpassword');


Route::get('/finance-update-profile','financecontroller@updatepf')->name('finance.updatepf');
Route::put('/update-finance-account/{user}','financecontroller@updateprofile')->name('finance.updateprofile');
Route::get('/finance-profile','financecontroller@display')->name('finance.display');
Route::get('/finance/change-password','financecontroller@password')->name('finance.password');


Route::get('/last-tender-news','suppliercontroller@show')->name('supplier.show');
Route::get('/view-detail/{postNews:slug}','suppliercontroller@index')->name('supplier.index');
Route::get('/register-tender-news/{postNews}','suppliercontroller@create')->name('supplier.create');
Route::get('/upload-receipt','suppliercontroller@receipt')->name('supplier.receipt');
Route::get('/buy-bid','suppliercontroller@buybid')->name('supplier.buybid');
Route::get('/supplier-update-profile','suppliercontroller@updatepf')->name('supplier.updatepf');
Route::put('/update-supplier-account/{user}','suppliercontroller@updateprofile')->name('supplier.updateprofile');
Route::get('/supplier-profile','suppliercontroller@display')->name('supplier.display');
Route::get('/checkout','suppliercontroller@checkout')->name('supplier.checkout');
Route::get('/supplier/change-password','suppliercontroller@password')->name('supplier.password');


Route::get('/procurment-team-create','procurmentteamcontroller@create')->name('procurmentteam.create');
Route::get('/request-view','procurmentteamcontroller@index')->name('procurmentteam.index');
Route::get('/pt-update-profile','procurmentteamcontroller@updatepf')->name('procurmentteam.updatepf');
Route::put('/update-pt-account/{user}','procurmentteamcontroller@updateprofile')->name('procurmentteam.updateprofile');
Route::get('/pt-profile','procurmentteamcontroller@display')->name('procurmentteam.display');
Route::get('/view-tender','procurmentteamcontroller@show')->name('procurmentteam.show');
Route::get('/view-tender/{postNews}/edit','procurmentteamcontroller@edit')->name('procurmentteam.edit');
Route::delete('/delete-tender/{user}','procurmentteamcontroller@destroy')->name('procurmentteam.destroy');
Route::get('/procurmentteam/change-password','procurmentteamcontroller@password')->name('procurmentteam.password');


Route::get('/pac-update-profile','procurmentapprovingcontroller@updatepf')->name('procurmentapproving.updatepf');
Route::put('/update-pac-account/{user}','procurmentapprovingcontroller@updateprofile')->name('procurmentapproving.updateprofile');
Route::get('/pac-profile','procurmentapprovingcontroller@display')->name('procurmentapproving.display');
Route::get('/procurmentapproving/change-password','procurmentapprovingcontroller@password')->name('procurmentapproving.password');


Route::get('/postnews','PostNewsController@index')->name('postnews.index');
Route::get('/postnews-show','PostNewsController@show')->name('postnews.show');
Route::get('/postnews/{postNews}/edit','PostNewsController@edit')->name('postnews.edit');
Route::put('/postnews/{postNews}/update','PostNewsController@update')->name('postnews.update');
Route::delete('/postnews/{postNews}','PostNewsController@destroy')->name('postnews.destroy');
Route::post('/postnews-store','PostNewsController@store')->name('postnews.store');
Route::get('/postnews-create','PostNewsController@create')->name('postnews.create');
Route::get('/download/{biddocument}','PostNewsController@download')->name('document');


Route::get('/requests','requestsController@index')->name('requests.index');
Route::get('/requests-show','requestsController@show')->name('requests.show');
Route::get('/requests/{requests}/edit','requestsController@edit')->name('requests.edit');
Route::put('/requests/{requests}/update','requestsController@update')->name('requests.update');
Route::delete('/requests/{requests}','requestsController@destroy')->name('requests.destroy');
Route::put('/requests-store','requestsController@store')->name('requests.store');
Route::get('/requests-create','requestsController@create')->name('requests.create');
Route::get('/update-profile','requestsController@updatepf')->name('requests.updatepf');
Route::put('/update-account/{user}','requestsController@updateprofile')->name('requests.updateprofile');
Route::get('/profile','requestsController@display')->name('requests.display');
Route::get('/requests/change-password','requestscontroller@password')->name('requests.password');


Route::get('/User-payment','UserpaymentinfoController@index')->name('Userpayment.index');
Route::get('/requests-show','UserpaymentinfoController@show')->name('requests.show');
Route::get('/requests/{requests}/edit','UserpaymentinfoController@edit')->name('requests.edit');
Route::put('/requests/{requests}/update','UserpaymentinfoController@update')->name('requests.update');
Route::delete('/requests/{requests}','UserpaymentinfoController@destroy')->name('requests.destroy');
Route::post('/User-payment-store','UserpaymentinfoController@store')->name('Userpayment.store');
Route::get('/requests-create','UserpaymentinfoController@create')->name('requests.create');
Route::get('/User-payment/{userpaymentinfo}/approval','UserpaymentinfoController@approval')->name('approval');
Route::get('/User-payment/{userpaymentinfo}/pending','UserpaymentinfoController@pending')->name('pending');


Route::get('/requests','SupplierdataController@index')->name('requests.index');
Route::get('/requests-show','SupplierdataController@show')->name('requests.show');
Route::get('/requests/{requests}/edit','SupplierdataController@edit')->name('requests.edit');
Route::put('/requests/{requests}/update','SupplierdataController@update')->name('requests.update');
Route::delete('/requests/{requests}','SupplierdataController@destroy')->name('requests.destroy');
Route::post('/Supplier-data-store','SupplierdataController@store')->name('Supplierdata.store');
Route::get('/requests-create','SupplierdataController@create')->name('requests.create');


Route::post('/stripe','stripeController@stripePyament')->name('stripe.post');


Route::resource('/categories', CategoryController::class);
