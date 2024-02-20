<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here you can define all your application routes. The Router class
| provides a convenient way to register your routes and associate them
| with controller actions. Have fun.
|
|--------------------------------------------------------------------------
*/

use App\Framework\Routing\Router;
use App\Http\Controllers\HomeController;

Router::get('/', [HomeController::class, 'index'])->name('home');