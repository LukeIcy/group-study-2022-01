<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\FrontController;

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
Route::get('template', function () {
    return view('layouts.layout');
});

// user系統加入的
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
// 預設 先放著
Route::get('/', function () {
    return view('welcome');
});


// 前台頁面
// 首頁
Route::get('/index',[FrontController::class,'index'])->name('front.index');
// 關於我們
Route::get('/aboutus',[FrontController::class,'aboutus'])->name('front.aboutus');
// 支持我們
Route::get('/supportus',[FrontController::class,'supportus'])->name('front.supportus');
// 最新消息
Route::get('/news',[PostController::class,'index'])->name('news.index');
// 寵物保姆
Route::get('/babysitter',[PostController::class,'sitter'])->name('news.sitter');
// 動保法律&動物救援
Route::get('/lawrescue',[PostController::class,'lawrescue'])->name('news.lawrescue');
// 動保法律 這一頁沒人做!!
Route::get('/law',[PostController::class,'law'])->name('news.law');
// 媒合故事 一起回家故事
Route::get('/match',[PostController::class,'match'])->name('news.match');

// 我要領養列表(全部動物)
Route::get('/adoption',[AdopController::class,'index'])->name('center.index');
// 動物資訊&申請表 為了看頁面先去掉路徑裡的{id}
Route::get('/adoption/{id}/animal',[AdopController::class,'animal'])->name('center.animal');

// 最新消息單頁 還沒有頁面!!
Route::get('/{id}/article',[PostController::class,'article'])->name('news.article');
// 動保法律單頁 還沒有頁面!!
Route::get('/{id}/lawarticle',[PostController::class,'lawarticle'])->name('news.lawarticle');
// 一起回家故事單頁 還沒有頁面!
Route::get('/{id}/story',[PostController::class,'story'])->name('news.story');

// 這個先套一下auth好了 不然沒登入會報錯
Route::middleware('auth')->group(function(){
// 會員中心 送養人個人資料
// Route::get('/member/{id}',[AdopController::class,'member'])->name('center.member');
Route::get('/member',[AdopController::class,'member'])->name('center.member');
// 會員中心 編輯送養人個人資料
Route::get('/member/edit',[AdopController::class,'memberedit'])->name('center.memberedit');
// 會員中心 我的送養紀錄列表
Route::get('/member/record',[AdopController::class,'record'])->name('center.record');
// 會員中心 我要送養
Route::get('/member/putadop',[AdopController::class,'putadop'])->name('center.putadop');

// 會員中心 我要送養(資料儲存)
Route::post('/member/putadop/store',[AdopController::class,'store'])->name('center.store');
// 會員中心 我要送養 多圖片上傳
Route::post('/member/putadop/imgUpload',[AdopController::class,'imgUpload'])->name('center.imgUpload');
// 會員中心 刪除所選擇的"我要送養"的預備上傳圖片
Route::post('/member/putadop/imgDelete',[AdopController::class,'imgDelete'])->name('center.imgDelete');


});

// 這邊也先套一下auth 都還沒設權限分級
Route::middleware('auth')->group(function(){
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
// 儲存編輯 針對修改密碼(後台管理專用)
Route::patch('/user/{id}/updatepassword',[UserController::class,'updatepassword'])->name('user.updatepassword');
// 刪除
Route::delete('/user/{id}',[UserController::class,'destroy'])->name('user.destroy');

// 儲存編輯 這一頁專門給會員中心編輯個人資料用
Route::patch('/user/{id}/update',[UserController::class,'update'])->name('user.update');
});

// 後台頁面-申請表列表
Route::prefix('admin')->group(function ()
{
    Route::get('/', [ApplyController::class, 'index']);
    Route::post('store', [ApplyController::class, 'store']);
});
