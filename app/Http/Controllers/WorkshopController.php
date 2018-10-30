<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function show()
    {
        return view('pages.workshop');
    }
}
