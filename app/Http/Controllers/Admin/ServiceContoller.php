<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\File;

class ServiceContoller extends Controller
{
    public function index(){
       
        $service = Service::all();
        return view('admin.service.index', compact('service'));
    }
    public function create(){
        return view('admin.service.create');
    }


    public function store(Request $request)
    {
    $service = new Service();

    $service->headline = $request->headline;
    $service->description = $request->description;

    if ($request->file('img')) {
        $image = $request->file('img');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $service->img = '/images/' . $imageName;
    } else {
        // Set a default value or handle the absence of an image
        $service->img = null; // or set a default image path
    }

    $service->save();
    return redirect(route('admin.service'));
}

    public function edit( string $id)
    {
        $service = Service::find($id); 
        return view("admin.service.edit", ['service'=>$service]);

    }

    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $service->headline = $request->headline;
        $service->description = $request->description;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $service->img = '/images/' . $imageName;
        } else {
            // If no new image is uploaded, retain the existing image
            $service->img = $service->img; // Keep the existing image path
        }

        $service->save();
        return redirect(route('admin.service'));
    }


    public function delete(string $id)
    {
        $service = Service::find($id);    
        $imagePath = public_path($service->img);      
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }       
        $service->delete();
        return redirect()->back();
    }

}
