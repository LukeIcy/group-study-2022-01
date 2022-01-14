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

// 預設 先方著
Route::get('/', function () {
    return view('welcome');
});


// 首頁
Route::get('/index', function () {
    return view('index');
});
// 寵物照片
Route::get('/adoption_pic', function () {
    return view('adoption_pic');
});
// 最新消息
Route::get('/news', function () {
    return view('news');
});
// 前台動物資訊&申請表
Route::get('apply', function ()
{
    return view('frontpage.animal_information');
});

// 後台頁面-申請表列表
Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::get('/', [\App\Http\Controllers\ApplyController::class, 'index']);
    Route::post('store', [\App\Http\Controllers\ApplyController::class, 'store']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
