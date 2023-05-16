<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptop = Laptop::all();

        //cara 1
        // return view('laptop.index', [
        //     'laptop' => $laptop
        // ]);

        //cara 2
        return view('laptop.index', compact('laptop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laptop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // single image

        // Laptop::create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'image' => $request->file('image')->store('laptop')
        // ]);
        // return redirect('/');

        // multiple image

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required',
            'images' => 'required|array'
        ]);

        $images = [];

        foreach ($data['images'] as $image) {
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image_path =  $image->storeAs('images', $fileName,'public');

            array_push($images, $image_path);
        }

        $data['images'] = $images;

        Laptop::create($data);
        return redirect('/');

        // dd($request->images);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laptop = Laptop::find($id);
        return view('laptop.edit', compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (empty($request->file('image'))) {
            $laptop = Laptop::find($id);

            $laptop->update([
                'name' => $request->name,
                'price' => $request->price,
            ]);

            return redirect('/');
        } else {
            $laptop = Laptop::find($id);

            $laptop->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $request->file('image')->store('laptop')
            ]);

            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $laptop, $id)
    {
        $laptop = Laptop::find($id);

        Storage::delete($laptop->image); //ngapus gambar
        $laptop->delete(); //ngapus data

        return redirect('/');
    }
}
