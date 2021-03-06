<?php

namespace App\Http\Controllers;

use App\HeroSlider;
use Illuminate\Http\Request;

class HeroSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('hero-slider.index');
    }

    public function create()
    {
        return view('hero-slider.create');
    }

    public function store( Request $request)
    {
        $validatedData = $request->validate([
            'image_path' => 'mimes:jpeg,jpg,png,gif|required|dimensions:min_height=780,min_width=1920',
            'image_text' => 'required|string'
        ]);

        $fileNameWithExt = $request->file('image_path')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
        $extension = $request->file('image_path')->getClientOriginalExtension();
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;

        $img_path = $request->file('image_path')->storeAs('public/heroSlider', $fileNameToStore);


        HeroSlider::create([
            'image_path' => '/storage/heroSlider/' . $fileNameToStore,
            'image_text' => $request->input('image_text'),
        ]);

        return redirect('admin')->with('message', 'Slider Created!');
    }


    public function edit($id)
    {
        $heroSlider = HeroSlider::find($id);
        return view('hero-slider.edit', compact('heroSlider'));
    }

    public function update( Request $request, $id)
    {
        $validatedData = $request->validate([
            'image_path' => 'nullable|mimes:jpeg,jpg,png,gif|dimensions:min_height=780,min_width=1920',
            'image_text' => 'nullable|string'
        ]);

        $heroSlider = HeroSlider::find($id);

        if($request->file('image_path'))
        {
            $fileNameWithExt = $request->file('image_path')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
            $extension = $request->file('image_path')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            $image_path = $request->file('image_path')->storeAs('public/heroSlider', $fileNameToStore);
            $image_path = '/storage/heroSlider/' . $fileNameToStore;
        }
        else
        {
            $image_path = $heroSlider->image_path;
        }


        HeroSlider::where('id', $id)->update([
            'image_path' => $image_path,
            'image_text' => $request->input('image_text') ? $request->input('image_text') : $heroSlider->image_text
        ]);

        return redirect('/admin')->with('message', 'Slider Updated!');
    }

    public function destroy($id)
    {
        HeroSlider::find($id)->delete();
        return redirect('/admin')->with('message', 'Slider Deleted');
    }

}
