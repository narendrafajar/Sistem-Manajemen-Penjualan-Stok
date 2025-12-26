<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\{
    ProductController,
    SupplierController,
    CustomerController,
    SaleController
};

Route::prefix('api')->group(function () {

    Route::apiResource('products', ProductController::class);
    Route::apiResource('suppliers', SupplierController::class);
    Route::apiResource('customers', CustomerController::class);

    Route::get('/sales', [SaleController::class, 'index']);
    Route::post('/sales', [SaleController::class, 'store']);

});
