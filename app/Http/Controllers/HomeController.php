<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories=Service::distinct('category')->pluck('category');
        $percentage=Setting::where('key','percentage')->first()->value;
        return view('home',[
            'categories'=>$categories,
            'percentage'=>$percentage
        ]);

    }

    public function questions(){
        return view('questions');
    }
}
