<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiresource('/products', 'App\Http\Controllers\ProductController');

Route::group(['prefix' => 'products'], function() {

    Route::apiresource('/{product}/reviews', 'App\Http\Controllers\ReviewController');

});

