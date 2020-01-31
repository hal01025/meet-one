<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityFollowController extends Controller
{
    public function store($id) 
    {
        \Auth::user()->join($id);
        return back();
    }
    
    public function destroy($id) 
    {
        \Auth::user()->unjoin($id);
        return back();
    }
}
