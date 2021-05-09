<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolsController;

Route::get('/', [ToolsController::class, 'index']);
