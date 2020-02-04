<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index() 
    {
        $image_existence = false;
        
        if (Storage::disk('local')->exists('public/profile_images/'.\Auth::id().'.jpg')) {
            $image_existence = true;
        }
        
        return view('profile.index', ['image_existence' => $image_existence]);
    }
    
    public function store(Request $request) 
    {
        $this->validate($request, ['image' => 'required|file|image']);
        
        $request->file('image')->storeAs('public/profile_images', \Auth::id().'.jpg');
        
        return redirect('/');
    }
}
