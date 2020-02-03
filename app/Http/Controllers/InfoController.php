<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index() 
    {
        $user = \Auth::user();
        
        return view('info.index', ['user' => $user]);
    }
    
    public function update(Request $request) 
    {
        $user = \Auth::user();
        
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->hobby = $request->hobby;
        $user->intro = $request->intro;
        
        $user->save();
        
        return redirect('/');
    }
}
