<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{

    public function setting(){
        $setting=Setting::where('key','percentage')->first();
        return view('settings',['setting'=>$setting]);
    }
    public function editPercentage(Request $request){
        $request->validate(['percentage'=>'required|numeric']);
        $percentage=Setting::where('key','percentage')->first();
         $percentage->value=$request->post('percentage');
         $percentage->save();
         return redirect()->back()->with(['success'=>'تم تغير نسبة الربح']);
    }
    public function changePassword(Request $request){
        $request->validate([
            'old_password'          => 'required',
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required_with:password'
        ]);
        $user=Auth::user();
        if (Hash::check($request->old_password, $user->password)) {
            $user->password=Hash::make($request->post('password'));
            $user->save();
            return redirect()->back()->with(['success'=>'تم تغير كلمة المرور']);
        }else{
            return redirect()->back()->with(['error'=>'كلمة المرور القديمة غير صحيحة']);
        }
    }
}
