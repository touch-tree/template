<?php

namespace App\Http\Controllers;

use App\Framework\Base\View;

class HomeController
{
    /**
     * Default view
     *
     * @return View
     */
    public function index(): View
    {
        return view('home');
    }
}