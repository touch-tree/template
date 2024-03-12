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

use App\Http\Controllers\HomeController;
use Framework\Routing\Router;

Router::get('/', [HomeController::class, 'home'])->name('home');