<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function adminDash(){
        return view('pages.admin.adminDash');

    }
    public function create(){
        return view('pages.admin.create');
    }
    public function createSubmit(Request $request){
        $var = new Admin();
        $var->name = $request->name;
        $var->password = $request->password;
        $var->phone = $request->phone;
        $var->save();
        return "Added";

    }
    public function list(){

        $admin = Admin::all();
        return view('pages.admin.list')->with('admin', $admin);
    }
}
