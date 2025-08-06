<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return 'Laravel funciona';
});

Route::get('/posts', [PostController::class, 'index']);

