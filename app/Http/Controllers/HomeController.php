<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories=Service::distinct('category')->pluck('category');
        return view('home',[
            'categories'=>$categories,
        ]);

    }

    public function questions(){
        return view('questions');
    }
}
