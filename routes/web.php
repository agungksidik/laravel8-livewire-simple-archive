<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Permissions\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/home');
})->middleware('auth');

Route::middleware('has.role')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::group(['middleware' => ['role:super admin|admin']], function () {
    Route::prefix('role-and-permission')->namespace('Permissions')->group(function() {
        Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
        Route::post('store', [RoleController::class, 'store']);
    });
    Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    Route::get('document/add', [DocumentController::class, 'addDocument'])->name('document.add');
    Route::post('document/store', [DocumentController::class, 'store']);
    Route::get('/storage/{id}/{path}', [DocumentController::class, 'download'])->name('document.download');
});

