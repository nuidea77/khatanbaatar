<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\MainController;
use App\Http\Controllers\WorkController;
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
Route::get('/', [MainController::class, 'index']);
Route::get('/work/{id}', [WorkController::class, 'view']);
Route::get('/works', [WorkController::class, 'index']);
// Route::get('/news/category/{id}', [NewsController::class, 'category']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/about', [PagesController::class, 'about']);
Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
});

