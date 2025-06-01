<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }

    public function gettingStarted()
    {
        return view('pages.getting-started');
    }

    public function about()
    {
        return view('pages.about');
    }
}
