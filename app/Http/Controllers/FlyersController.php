<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlyersController extends Controller
{
    public function create()
    {
        
       return View('flyers.create');
        
    }
}
