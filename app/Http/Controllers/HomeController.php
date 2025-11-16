<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the landing page for the portfolio.
     */
    public function index(): View
    {
        return view('home');
    }
}
