<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DahboardUserController extends Controller
{
    public function index()
    {
        return view('pages.dashboarduser');
    }
}
