<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Community;

class RegisterCommunityController extends Controller
{
    public function index($id)
    {
        $register_communities = User::find($id)->communities()->get();
        
        return view('register_community.index', ['register_communities' => $register_communities,]);
    }
}
