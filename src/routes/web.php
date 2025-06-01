<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\AuthController;


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

// ログアウト（任意でPOSTでも可）
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 商品一覧・詳細（誰でも見られる）
Route::get('/', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');


Route::middleware('auth')->group(function () {

    // 出品
    Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
    Route::post('/items', [ItemController::class, 'store'])->name('items.store');

    // 商品購入
    Route::get('/items/{item}/purchase', [ItemController::class, 'purchase'])->name('items.purchase');
    Route::post('/items/{item}/purchase', [ItemController::class, 'purchase_process'])->name('items.purchase_process');

    // マイページ関連
    Route::get('/mypage', [MypageController::class, 'mypage'])->name('user.mypage');
    Route::get('/mypage/profile', [MypageController::class, 'profile'])->name('user.profile');
    Route::post('/mypage/profile', [MypageController::class, 'profile_update'])->name('user.profile.update');

    // マイリスト
    Route::get('/mypage/mylist', [MypageController::class, 'mylist'])->name('user.mylist');

    // 購入履歴
    Route::get('/mypage/purchases', [MypageController::class, 'purchases'])->name('user.purchases');
});
