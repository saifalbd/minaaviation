<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::query()->get();

        return view('package.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       
        $request->validate([
            'name'=>['required','string'],
            'price'=>['required','numeric'],
            'image'=>['required','image'],
            'detail'=>['required']
        ]);

 
        $body = $request->detail;
        $name = $request->name;
        $price = $request->price;
        

        $file = $request->file('image');
        $ex = $file->getClientOriginalExtension();
        $filename = now()->timestamp;

        $image = 'assets/img/';

        $image = Storage::disk('public')->put($image,$file);

        $model = Package::create(compact('name','body','price','image'));

        return redirect()->route('admin.package.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
    
        return view('package.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name'=>['required','string'],
            'price'=>['required','numeric'],
         
            'detail'=>['required']
        ]);

 
        $body = $request->detail;
        $name = $request->name;
        $price = $request->price;
        
        $image = $package->image;

        if($request->hasFile('image')){

            Storage::disk('public')->delete($image);
            $file = $request->file('image');
            $ex = $file->getClientOriginalExtension();
            $filename = now()->timestamp;
            $image = 'assets/img/';
            $image = Storage::disk('public')->put($image,$file);
        }
      

         $package->update(compact('name','body','price','image'));

        return redirect()->route('admin.package.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        
        return redirect()->route('admin.package.index');
    }
}
