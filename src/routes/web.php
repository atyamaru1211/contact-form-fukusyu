<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', [ContactController::class, 'index']);
//フォーム入力ページの送信ボタンが押されたときに、コントローラに書いてあるconfirmアクションが行われるよう設定
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
//入力内容確認ページの送信ボタンが押されたときに、storeアクションが行われるよう設定
Route::post('/contacts', [ContactController::class, 'store']);
