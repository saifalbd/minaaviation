<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



    public function landing(){
        $packages = Package::query()->get();
       
        return view('page.home',compact('packages'));
    }

    public function about(){
        $packages = Package::query()->get();
        return view('page.about',compact('packages'));
    }

    public function contact(){
        $packages = Package::query()->get();
        return view('page.contact',compact('packages'));
    }

    public function showPack(Package $package){
        $packages = Package::query()->get();
        return view('page.packageShow',compact('package','packages'));
    }
}
