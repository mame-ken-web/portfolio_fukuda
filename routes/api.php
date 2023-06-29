<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAnnouncementController;
use App\Http\Controllers\User\UserAnnouncementController;
use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// adminsかusersかテーブル名を取得(optional() ヘルパー関数は、null許容値を含む値をラップし、その値が null の場合にもメソッド呼び出しを許可。)
Route::middleware('auth:sanctum')->get('/user-type', function (Request $request) {
    return response()->json([
        'type' => optional($request->user())->getTable(),
    ]);
});

Route::middleware(['setGuard:users', 'auth:sanctum'])->group(function () {
    Route::get('user/announcements', [UserAnnouncementController::class, 'index']);
    Route::get('user/announcements/{announcement}', [UserAnnouncementController::class, 'show']);
});

Route::middleware(['setGuard:admin', 'auth:sanctum'])->group(function () {
    Route::get('/admin/announcements', [AdminAnnouncementController::class, 'index']);
    Route::get('/admin/announcements/{announcement}', [AdminAnnouncementController::class, 'show']);
    Route::post('/admin/announcements', [AdminAnnouncementController::class, 'store']);
    Route::put('/admin/announcements/{announcement}', [AdminAnnouncementController::class, 'update']);
    Route::delete('/admin/announcements/{announcement}', [AdminAnnouncementController::class, 'destroy']);
});

Route::get('/tags', [TagController::class, 'index']);
