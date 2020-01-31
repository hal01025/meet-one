<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Community;

class CommunityController extends Controller
{
    public function index() 
    {
        $communities = Community::orderBy('id', 'desc')->paginate(10);
        
        return view('communities.index', ['communities' => $communities,]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $community = new Community;
        
        return view('communities.create', ['community' => $community]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|max:191', 'description' => 'required|max:191']);
        
        $community = new Community;
        $community->name = $request->name;
        $community->description = $request->description;
        
        $community->save();
        
        \Auth::user()->join($community->id);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $community = Community::find($id);
        $users = $community->members()->get();
     
        return view('communities.show', ['community' => $community, 'users' => $users]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $community = Community::find($id);
        
        return view('communities.edit', ['community' => $community]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $community = Community::find($id);
        $community->name = $request->name;
        $community->description = $request->description;
        $community->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $community = Community::find($id)->delete();
    }
}
