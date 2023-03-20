<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SkillController;
use App\Http\Controllers\Api\V1\BarangController;
use App\Http\Controllers\Api\V1\PelangganController;
use App\Http\Controllers\Api\V1\OrderDetailController;

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('skills', SkillController::class);
});

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('pelanggans', PelangganController::class);
});

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('barangs', BarangController::class);
});

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('orderdetails', OrderDetailController::class);
});
