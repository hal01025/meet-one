<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Image;


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
        $post = new Image;
        
        $image = $request->file('image');
        
        $path = Storage::disk('s3')->putFileAs('myprof', $image, \Auth::id().'.jpg');
        
        Storage::disk('s3')->setVisibility('myprof/'.\Auth::id().'.jpg', 'public');
        
        $post->image_path = Storage::disk('s3')->url($path);
        
        $post->save();
        
        /*$this->validate($request, ['image' => 'required|file|image']);
        
        $request->file('image')->storeAs('public/profile_images', \Auth::id().'.jpg');
        
        */
        return redirect('/');
    }
}
