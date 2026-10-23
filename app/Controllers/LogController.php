<?php

namespace App\Controllers;

use Sakuci\Controller;
use Sakuci\Http\Request;

class LogController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }
}
