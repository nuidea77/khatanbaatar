<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
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

Route::get('setlocale/{locale}',function($lang){
    Session::put('locale',$lang);
    return redirect()->back();
});

Route::group(['middleware'=>'language'],function ()
{
    Route::get('/', function () {
        return view('welcome');
    });


    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
});

