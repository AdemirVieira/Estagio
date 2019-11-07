<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\App;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()              //***************FAZER*****************
    {
        //$apps = app::all();
        //return view('users.create', compact(['apps']));
        // ou return redirect()->route('users.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)        //***************FAZER*****************
    {   
        //$user = user::find($technician->user_id);
        //return view('students.show', compact(['student','user']));
        //return view('teachers.show', compact(['teacher','user']));
        //return view('technicians.show', compact(['technician','user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)        //***************FAZER*****************
    {
        //if (isset($user)) {
            //return view('users.edit', compact(['user']));
        //}
       //return redirect()->route('users.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        if (isset ($user)) {
            $user->delete();
        }
        return redirect()->route('users.index');
        
    }
}
