<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\WebController;
Route::controller(WebController::class)->group(function(){
  Route::get('/', 'index')->name('home');
  Route::fallback('page_not_found');
});
