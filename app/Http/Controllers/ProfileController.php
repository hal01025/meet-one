<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index() 
    {
        return view('profile.index');
    }
    
    public function store(Request $request) 
    {
        $this->validate($request, ['image' => 'required|file|image']);
        
        $request->file('image')->storeAs('public/profile_images', \Auth::id().'.jpg');
        
        return redirect('/');
    }
}
