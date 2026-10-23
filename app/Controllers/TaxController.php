<?php

namespace App\Controllers;

use Sakuci\Controller;
use Sakuci\Http\Request;

class TaxController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }
}
