<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAppController; 
use App\Http\Controllers\MailController; 

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
    return view('layouts.app');
});

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/phone', function () {
    return view('phone');
});

Route::get('/phonedisplay', function () {
    
    $details = array(
        'type'=> 'iPhone',
        'color'=> 'Purple',
        'price'=> '5300'
    );
    return view('phonedetails',$details )->name('phonedisplay1');
});

Route::get('/oldphone', function () {
    return view('old.oldphone');
})->name('oldphone');;


Route::get('/phonedlist', function () {
    
    $list = [
        ['type'=> 'iPhone', 'color'=> 'Purple','price'=> '5300'],
        ['type'=> 'Huawei', 'color'=> 'Black','price'=> '2500'],
        ['type'=> 'Samsong', 'color'=> 'Silver','price'=> '2300']
        ]
    ;
    return view('phonelist', ['phonelist' =>$list] );
})->name('phonedlist');

Route::get('/getwelcome',[PhoneAppController::class,"getPhone"]);


Route::get('/checkout/{id}', [PhoneAppController::class, 'checkout'])->name('checkout');

Route::post('/getInvoice', [PhoneAppController::class, 'getInvoice'])->name('getInvoice');


Route::get('/getPhoneList', [PhoneAppController::class, 'getAllPhones'])->name('phonelist');

Route::get('/send-mail', [MailController::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
