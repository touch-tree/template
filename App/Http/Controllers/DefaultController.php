<?php

namespace App\Http\Controllers;

use Framework\Component\View;
use Framework\Http\Request;

class DefaultController
{
    /**
     * Default view.
     *
     * @param Request $request
     * @return View
     */
    public function default(Request $request): View
    {
        return view('home');
    }
}
