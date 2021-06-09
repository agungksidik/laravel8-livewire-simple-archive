<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HistoryDocumentController;
use App\Http\Controllers\Permissions\RoleController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('/')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboard');   
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');   
    });
});
Route::group(['middleware' => ['role:super admin|admin|pimpinan']], function () {
    Route::prefix('role-and-permission')->namespace('Permissions')->group(function() {
        Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
        Route::post('store', [RoleController::class, 'store']);
    });
    Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    Route::get('document/add', [DocumentController::class, 'addDocument'])->name('document.add');
    Route::post('document/store', [DocumentController::class, 'store']);
    Route::get('get/download/{document:id}', [DocumentController::class, 'download'])->name('document.download');
    
    Route::prefix('history-document')->group(function() {
        Route::get('{document:slug}', [HistoryDocumentController::class, 'index'])->name('history.index');
        Route::post('store/{document:id}', [HistoryDocumentController::class, 'store'])->name('history.store');
        Route::delete('{id}/delete', [HistoryDocumentController::class, 'destroy'])->name('history.delete');
    });
});

