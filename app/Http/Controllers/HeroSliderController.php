<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('hero-slider.create');
    }
    public function edit()
    {
        return view('hero-slider.edit');
    }
    public function update(){}
    public function store(){}
}
