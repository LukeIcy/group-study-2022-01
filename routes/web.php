<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplyController;

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

// user系統加入的
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// 預設 先放著
Route::get('/', function () {
    return view('welcome');
});



// 首頁
Route::get('/index', function () {
    return view('frontpage.index');
});
// 寵物照片
Route::get('/adoption', function () {
    return view('frontpage.center.adoption');
});
// 前台動物資訊&申請表
Route::get('apply', function (){
    return view('frontpage.center.animal_information');
});


// 前台頁面
// 最新消息
Route::get('/news',[PostController::class,'index'])->name('news.index');
// 動物保姆 還未串接
Route::get('/babysitter',[PostController::class,'sitter'])->name('news.sitter');
// 動保法律 還未串接
Route::get('/law',[PostController::class,'law'])->name('news.law');
// 一起回家故事 還未串接
Route::get('/mach',[PostController::class,'mach'])->name('news.mach');

// 最新消息單頁 還沒有頁面!!
Route::get('/article',[PostController::class,'article'])->name('news.article');
// 動保法律單頁 還沒有頁面!!
Route::get('/lawarticle',[PostController::class,'lawarticle'])->name('news.lawarticle');
// 一起回家故事單頁 還沒有頁面!!
Route::get('/story',[PostController::class,'story'])->name('news.story');


// 文章列表 - 後台
// 列表頁
Route::get('/news/list',[PostController::class,'list'])->name('news.list');
// 新增頁
Route::get('/news/create',[PostController::class,'create'])->name('news.create');
// 儲存新增
Route::post('/news/store',[PostController::class,'store'])->name('news.store');
// 編輯頁
Route::get('/news/{id}/edit',[PostController::class,'edit'])->name('news.edit');
// 儲存編輯
Route::patch('/news/{id}/update',[PostController::class,'update'])->name('news.update');
// 刪除
Route::delete('/news/{id}',[PostController::class,'destroy'])->name('news.destroy');

// 使用者 - 後台
// 列表頁
Route::get('/user/list',[UserController::class,'list'])->name('user.list');
// 新增頁 目前沒做
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
// 儲存新增 目前沒做
Route::post('/user/store',[UserController::class,'store'])->name('user.store');
// 編輯頁 目前沒做
Route::get('/user/{id}/edit',[UserController::class,'edit'])->name('user.edit');
// 儲存編輯
Route::patch('/user/{id}/update',[UserController::class,'update'])->name('user.update');
// 刪除
Route::delete('/user/{id}',[UserController::class,'destroy'])->name('user.destroy');





// 後台頁面-申請表列表
Route::prefix('admin')->group(function ()
{
    Route::get('/', [ApplyController::class, 'index']);
    Route::post('store', [ApplyController::class, 'store']);
});



