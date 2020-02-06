<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\User;

use App\Community;

use App\Comment;

use App\Image;

class TopController extends Controller
{
    public function index() 
    {
        if (\Auth::check()){
            
            $communities = Community::orderBy('id', 'desc')->paginate(10);
            $comments = \Auth::user()->comments()->orderBy('id', 'desc')->paginate(10);
            $is_image = false;
            $register_communities = \Auth::user()->communities()->get();
            $post = Storage::disk('s3')->url('myprof/'.\Auth::id().'.jpg');
            
            
        
        
        if (Storage::disk('local')->exists('public/profile_images/'.\Auth::id().'.jpg')) {
            $is_image = true;
        }
            
            
            return view('welcome', ['communities' => $communities, 'comments' => $comments, 'is_image' => $is_image, 'register_communities' => $register_communities, 'post' => $post]);
        }
        
        else {
            return view('welcome');
        }
    }
}
