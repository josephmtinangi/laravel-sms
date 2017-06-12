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

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sms/send/{to}', function (\Nexmo\Client $nexmo, $to) {

    $nexmo->message()->send([
        'to' => $to,
        'from' => '@leggetter',
        'text' => 'Welcome to the Best System Developers in Tanzania. Tembelea https://wedevelop.co.tz!'
    ]);
    dd('Done!');
});
