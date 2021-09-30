<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Chat;
use App\Events\ChatEvent;
use Illuminate\Support\Facades\Validator;
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

    // Yaseen.
    public function sendMessage(Request $request){
        $rules=[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ];

        $messages = ['required' => 'يُرجى تعبئة الحقل.'];

        $validator=Validator::make($request->all(),$rules, $messages);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $chat =  Chat::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'message'=>$request->message
            ]);
            $chat->save();
        broadcast(new ChatEvent($chat));
        return 'success';
        }
       
        
    }

    public function message(){
        $messages = Chat::all();
        return view('messages')->with([
            'messages' => $messages
        ]);
    }

}
