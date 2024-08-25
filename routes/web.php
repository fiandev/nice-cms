<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::prefix("/")->group(function () {
    Route::get("/{pathname}", [PageController::class, "index"]);
});