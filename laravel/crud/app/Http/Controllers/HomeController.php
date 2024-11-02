<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('category.home'); // Make sure you have a view named home.blade.php
    }
}
