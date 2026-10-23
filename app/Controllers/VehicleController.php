<?php

namespace App\Controllers;

use Sakuci\Controller;
use Sakuci\Http\Request;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }
}
