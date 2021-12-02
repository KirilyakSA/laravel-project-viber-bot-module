<?php

use App\ViberUserBot;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'viber-bot'], function () {
    Route::get('/', function () {
     dd(ViberUserBot::find(rand(1,60))->messages);
    });
});
