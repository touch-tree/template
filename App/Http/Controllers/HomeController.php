<?php

namespace App\Http\Controllers;

use Framework\Foundation\View;
use Framework\Http\Request;

class HomeController
{
    /**
     * @param Request $request
     * @return View
     */
    public function home(Request $request): View
    {
        return view('home');
    }
}
