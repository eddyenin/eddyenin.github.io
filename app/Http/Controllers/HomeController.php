<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

    public function about()
    {
        return view('portfolio.about');
    }

    public function project()
    {
        return view('portfolio.project');
    }

    public function contact()
    {
        return view('portfolio.contact');
    }
}
