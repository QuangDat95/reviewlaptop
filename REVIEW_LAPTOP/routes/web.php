<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TheloaiController;
use App\Http\Controllers\Admin\TenmayController;
use App\Http\Controllers\Admin\NoidungController;
use App\Http\Controllers\Admin\TintucController;
use App\Http\Controllers\Website\BaivietController;
use App\Http\Controllers\Website\TrangchuController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
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
Route::group(['prefix' => 'admin'], function(){
    Route::resource('theloai',TheloaiController::class)->middleware('auth');
    Route::resource('tenmay',TenmayController::class)->middleware('auth');
    Route::resource('noidung',NoidungController::class)->middleware('auth');
    Route::resource('tintuc',TintucController::class)->middleware('auth');
    Route::get('login', [LoginController::class,'getLogin'])->name('getLogin');
    Route::post('login', [LoginController::class,'postLogin'])->name('postLogin');
    Route::get('logout', [LogoutController::class,'getLogout'])->name('getLogout');
});
    //review máy tính
    //trang home (gồm các nội dung tin tức hiển thị ở ngoài, phía )
    Route::get('/',[TrangchuController::class,'home'])->name('home');
    Route::get('/{id}/readnew',[BaivietController::class,'readnew'])->name('readnews');
    Route::get('/{id}/readreview',[BaivietController::class,'readreview'])->name('readreview');
    Route::get('/homereview',[TrangchuController::class,'allreview'])->name('homereview');
    Route::get('/homenew',[TrangchuController::class,'allnew'])->name('homenew');
    
    Route::get('/dell',[TrangchuController::class,'dell'])->name('dell');
    Route::get('/hp',[TrangchuController::class,'hp'])->name('hp');
    Route::get('/asus',[TrangchuController::class,'asus'])->name('asus');
    Route::get('/lenovo',[TrangchuController::class,'lenovo'])->name('lenovo');
    Route::get('/acer',[TrangchuController::class,'acer'])->name('acer');
    
    Route::get('searchhome',[TrangchuController::class,'searchhome'])->name('searchhome');
    Route::get('searchreview',[TrangchuController::class,'searchreview'])->name('searchreview');
    Route::get('searchnew',[TrangchuController::class,'searchnew'])->name('searchnew');
    
    Route::post('/{id}/commentreview',[BaivietController::class,'CommentReview'])->name('commentreview');
    Route::post('/{id}/commentnew',[BaivietController::class,'CommentNew'])->name('commentnew');
    
    Route::get('noidungsearch',[NoidungController::class,'search'])->name('noidungsearch');
    Route::get('tenmaysearch',[TenmayController::class,'search'])->name('tenmaysearch');
    Route::get('theloaisearch',[TheloaiController::class,'search'])->name('theloaisearch');
    Route::get('tintucsearch',[TintucController::class,'search'])->name('tintucsearch');