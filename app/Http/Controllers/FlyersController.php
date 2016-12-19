<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Utilities\Country;
use App\Http\Requests\FlyerRequest;
use App\Flyer;

class FlyersController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $countries = Country::all();
        return View('flyers.create', compact('countries'));
    }

    public function store(FlyerRequest $request)
    {
        Flyer::create($request->all());
        flash()->success('Success!','Your Flyer has been created');
        return redirect()->back();
    }
}
