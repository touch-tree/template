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

use Framework\Support\Helpers\Router;

Router::get('/', ['App\Http\Controllers\DefaultController', 'default'])->name('default');