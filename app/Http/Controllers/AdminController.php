<?php

namespace App\Http\Controllers;

use App\Car;
use App\HeroSlider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        $heroSlider = HeroSlider::all();
        $cars = Car::orderBy('order')->get();
        return view('admin.index', compact(['cars', 'heroSlider']));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'order' => 'required|numeric',
            'model' => 'required|string',
            'doors' => 'required|integer',
            'passengers' => 'required|integer',
            'transmission' => 'required',
            'air_conditioning' => 'required',
            'luggage' => 'required|string',
            'price_3' => 'required|integer',
            'price_6' => 'required|integer',
            'price_14' => 'required|integer',
            'img_path' => 'mimes:jpeg,jpg,png,gif|required|dimensions:height=333,width=897',
            'img_path_1' => 'mimes:jpeg,jpg,png,gif|required|dimensions:height=333,width=671',
            'img_path_2' => 'mimes:jpeg,jpg,png,gif|required|dimensions:height=333,width=671',
        ]);

        $fileNameWithExt = $request->file('img_path')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
        $extension = $request->file('img_path')->getClientOriginalExtension();
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;

        $img_path = $request->file('img_path')->storeAs('public/fleet', $fileNameToStore);

        $fileNameWithExt = $request->file('img_path_1')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
        $extension = $request->file('img_path_1')->getClientOriginalExtension();
        $fileNameToStore2 = $fileName.'_'.time().'.'.$extension;

        $img_path_1 = $request->file('img_path_1')->storeAs('public/gallery', $fileNameToStore2);

        $fileNameWithExt = $request->file('img_path_2')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
        $extension = $request->file('img_path_2')->getClientOriginalExtension();
        $fileNameToStore3 = $fileName.'_'.time().'.'.$extension;

        $img_path_2 = $request->file('img_path_2')->storeAs('public/gallery', $fileNameToStore3);

        Car::create([
            'name' => $request->input('name'),
            'order' => $request->input('order'),
            'model' => $request->input('model') ,
            'doors' => $request->input('doors'),
            'passengers' => $request->input('passengers'),
            'transmission' => $request->input('transmission'),
            'air_conditioning' => $request->input('air_conditioning') == "true" ? 1 : 0,
            'luggage' => $request->input('luggage'),
            'price_3' => $request->input('price_3'),
            'price_6' => $request->input('price_6'),
            'price_14' => $request->input('price_14'),
            'img_path' => '/storage/fleet/' . $fileNameToStore,
            'img_path_1' => '/storage/gallery/' . $fileNameToStore2,
            'img_path_2' => '/storage/gallery/' . $fileNameToStore3,
            'alt' => trim(' ', $request->input('name'))
        ]);

        return redirect('/admin')->with('message', 'Car Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('admin.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'order' => 'nullable|numeric',
            'model' => 'nullable|string' ,
            'doors' => 'nullable|integer',
            'passengers' => 'nullable|integer',
            'transmission' => 'nullable',
            'air_conditioning' => 'nullable',
            'luggage' => 'nullable|string',
            'price_3' => 'nullable|integer',
            'price_6' => 'nullable|integer',
            'price_14' => 'nullable|integer',
            'img_path' => 'nullable|mimes:jpeg,jpg,png,gif|dimensions:height=333,width=897',
            'img_path_1' => 'nullable|mimes:jpeg,jpg,png,gif|dimensions:height=333,width=671',
            'img_path_2' => 'nullable|mimes:jpeg,jpg,png,gif|dimensions:height=333,width=671',
        ]);

        $car = Car::find($id);

        if($request->file('img_path'))
        {
            $fileNameWithExt = $request->file('img_path')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
            $extension = $request->file('img_path')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            $img_path = $request->file('img_path')->storeAs('public/fleet', $fileNameToStore);
            $img_path = '/storage/fleet/' . $fileNameToStore;
        }
        else
        {
            $img_path = $car->img_path;
        }

        if($request->file('img_path_1'))
        {
            $fileNameWithExt = $request->file('img_path_1')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
            $extension = $request->file('img_path_1')->getClientOriginalExtension();
            $fileNameToStore2 = $fileName.'_'.time().'.'.$extension;

            $img_path_1 = $request->file('img_path_1')->storeAs('public/gallery', $fileNameToStore2);
            $img_path_1 = '/storage/gallery/' . $fileNameToStore2;
        }
        else
        {
            $img_path_1 = $car->img_path_1;
        }

        if($request->file('img_path_2'))
        {
            $fileNameWithExt = $request->file('img_path_2')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
            $extension = $request->file('img_path_2')->getClientOriginalExtension();
            $fileNameToStore3 = $fileName.'_'.time().'.'.$extension;

            $img_path_2 = $request->file('img_path_2')->storeAs('public/gallery', $fileNameToStore3);
            $img_path_2 = '/storage/gallery/' . $fileNameToStore3;
        }
        else
        {
            $img_path_2 = $car->img_path_2;
        }

        Car::where('id', $id)->update([
                'name' => $request->input('name') ? $request->input('name') : $car->name,
                'order' => $request->input('order') ? $request->input('order') : $car->order,
                'model' => $request->input('model') ? $request->input('model') : $car->model,
                'doors' => $request->input('doors') ? $request->input('doors') : $car->doors,
                'passengers' => $request->input('passengers') ? $request->input('passengers') : $car->passengers,
                'transmission' => $request->input('transmission') ? $request->input('transmission') : $car->transmission,
                'air_conditioning' => $request->input('air_conditioning') == "true" ? 1 : 0,
                'luggage' => $request->input('luggage') ? $request->input('luggage') : $car->luggage,
                'price_3' => $request->input('price_3') ? $request->input('price_3') : $car->price_3,
                'price_6' => $request->input('price_6') ? $request->input('price_6') : $car->price_6,
                'price_14' => $request->input('price_14') ? $request->input('price_14') : $car->price_14,
                'img_path' => $img_path,
                'img_path_1' => $img_path_1,
                'img_path_2' => $img_path_2,
            ]);

        return redirect('/admin')->with('message', 'Car Updated!');
    }

    public function destroy($id)
    {
        $car = Car::find($id)->delete();
        return redirect('/admin')->with('message', 'Car Deleted');
    }
}
