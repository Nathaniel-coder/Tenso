<?php

use App\Http\Controllers\InvoiceController;
use Facade\FlareClient\View;
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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/terms', function(){
    return view('Terms&Condition');
});

Route::get('/receipt&Invoice', 'InvoiceController@index');
Route::get('/invoiceDropOff/{id}', 'InvoiceController@invoice');
Route::get('/invoicePickUP/{id}', 'InvoiceController@invoice');
Route::get('/emptyInvoice', function(){
    return View('EmptyInvoice');
});
// Route::get('/emptyInvoice', function(){
//     return View('emptyInvoice');
// });


//Refresh 404- counter
Route::get('{path}', 'HomeController@index')->where('path','([A-z\d\-\/_.]+)?');
