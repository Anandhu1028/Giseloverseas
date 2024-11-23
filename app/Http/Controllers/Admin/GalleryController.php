<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;


class GalleryController extends Controller
{
    public function index()
    { 
        $gallery = Gallery::all();
        return view('admin.gallery.index', compact('gallery'));
    }
    public function create(){
        return view('admin.gallery.create');
    }


    public function store(Request $request)
    {
    $gallery = new Gallery();

    $gallery->headline = $request->headline;
    $gallery->description = $request->description;

    if ($request->file('img')) {
        $image = $request->file('img');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $gallery->img = '/images/' . $imageName;
    } else {
        // Set a default value or handle the absence of an image
        $gallery->img = null; // or set a default image path
    }

    $gallery->save();
    return redirect(route('gallery'));
}

    public function edit( string $id)
    {
        $gallery = Gallery::find($id); 
        return view("admin.gallery.edit", ['gallery'=>$gallery]);

    }

    public function update(Request $request, string $id)
    {
        $gallery = Gallery::find($id);
        $gallery->headline = $request->headline;
        $gallery->description = $request->description;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $gallery->img = '/images/' . $imageName;
        } else {
            // If no new image is uploaded, retain the existing image
            $gallery->img = $gallery->img; // Keep the existing image path
        }

        $gallery->save();
        return redirect()->route('admin.gallery');

    }


    public function delete(string $id)
    {
        $gallery = Gallery::find($id);    
        $imagePath = public_path($gallery->img);      
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }       
        $gallery->delete();
        return redirect()->back();
    }
    


}

