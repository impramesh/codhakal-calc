<?php

use Codhakal\Calc\Controllers\CalcController;
use Illuminate\Support\Facades\Route;

Route::get('calc/{num}', CalcController::class);
