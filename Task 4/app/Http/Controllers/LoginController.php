<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class LoginController extends Controller
{
    public function Login(){

        return view('pages.login');
    }
    public function loginSubmit(Request $request){
        $admin = Admin::where('phone',$request->phone)
                            ->where('password', $request->password)
                            ->first();
        if($admin){
            $request->session()->put('user',$admin->name);
            return redirect()->route('adminDash');
        }

        return back();

    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
