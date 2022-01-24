<?php

namespace App\Http\Controllers;

use App\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $profiles = Profile::all();

        return view('profiles.profile', compact('profiles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $request->validate([
            "name" => 'required',
            "age" => 'required',
            "gender" => 'required',
            "height" => 'required',
            "weight" => 'required',
            "exercise" => 'required'
        ]);

        $profile = Profile::create([
            'name' => $request['name'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'height' => $request['height'],
            'weight' => $request['weight'],
            'exercise' => $request['exercise'],
            'user_id' => Auth::id()
        ]);

        return redirect('/profile')->with('success', 'New profile has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $profiles = Profile::All();
        $profile = Profile::find($id);
        //dd($profile);

        return view('profiles.edit', compact('profiles', 'profile', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            "name" => 'required',
            "age" => 'required',
            "gender" => 'required',
            "height" => 'required',
            "weight" => 'required',
            "exercise" => 'required'
        ]);
        $update = Profile::where('id', $id)->update([
            'name' => $request['name'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'height' => $request['height'],
            'weight' => $request['weight'],
            'exercise' => $request['exercise'],
            'user_id' => Auth::id()
        ]);

        return redirect('/profile')->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

}
