<?php

namespace App\Http\Controllers;

use App\Test;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userCheck = User::find(Auth::user()->id);

        $check = User::count();

        if($check == 0){
            $usa = ['Empty User', 'Empty User', 'Empty User'];
        }else{
            $usa = User::find(Auth::user());
        }

        return view('prof.index', compact('usa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //Overrides if the id on User $user cannot be found
        $user = User::find(Auth::user()->id);

        $request->validate([
            'name' => 'required',
            'role',
            'nickname',
            'phone' => 'required',
            'telephone',
            'about',
            'email' => 'required',
            'password',
            ]);

        $user->update($request->all());
        
        //ddd( $user->update($request->all()) );

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
