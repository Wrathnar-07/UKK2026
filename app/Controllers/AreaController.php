<?php

namespace App\Controllers;

use Sakuci\Controller;
use Sakuci\Http\Request;

class AreaController extends Controller
{
    public function index(Request $request)
    {
        $spot = Spot::latest()->get();
        return view('spot.index', compact('spot'));
        return view('area');
    }
}
