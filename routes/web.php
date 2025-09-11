<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\WebController;
use App\Http\Controllers\Server\ApiController;
use App\Http\Controllers\Server\BlogsController;
//Web pages
Route::controller(WebController::class)->group(function(){
  Route::get('/', 'index')->name('home');
  Route::fallback('page_not_found');
});
//Api routes
Route::controller(ApiController::class)->prefix('api')->group(function(){
  Route::get('categories/list', 'get_categories')->name('api.categories.list');
  Route::get('blogs/list', 'get_blogs')->name('api.blogs.list');
});
