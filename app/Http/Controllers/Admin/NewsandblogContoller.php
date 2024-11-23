<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\File;

class NewsandblogContoller extends Controller
{
    public function index(){
       
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }


    public function create(){
        return view('admin.news.create');
    }


    public function store(Request $request)
    {
    $news = new News();

    $news->headline = $request->headline;
    $news->description = $request->description;
    $news->date = $request->date;

    if ($request->file('img')) {
        $image = $request->file('img');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $news->img = '/images/' . $imageName;
    } else {
        // Set a default value or handle the absence of an image
        $news->img = null; // or set a default image path
    }

    $news->save();
    return redirect(route('news'));
    }



    
    
    


    
    public function edit( string $id)
    {
        $news = News::find($id); 
        return view("admin.news.edit",compact('news'));

    }



    public function update(Request $request, string $id)
    {
        $news = News::find($id);
        $news->headline = $request->headline;
        $news->description = $request->description;
        $news->date = $request->date;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $news->img = '/images/' . $imageName;
        } else {
            // If no new image is uploaded, retain the existing image
            $news->img = $news->img; // Keep the existing image path
        }

        $news->save();
        return redirect(route('news'));
    }


    public function delete(string $id)
    {
        $news = News::find($id);    
        $imagePath = public_path($news->img);      
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }       
        $news->delete();
        return redirect()->back();
    }
    
    
}
