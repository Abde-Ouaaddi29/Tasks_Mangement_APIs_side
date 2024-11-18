<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['hello laravel form web' => app()->version()];
});

require __DIR__.'/auth.php';
