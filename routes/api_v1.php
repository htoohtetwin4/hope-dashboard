<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('photo', PhotoController::class);
