<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps = app::all();
        return view('apps.index',compact('apps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $m = new app();
        $m->name = $request->name;
        $m->description = $request->description;
        $m->save();

        return redirect()->route('apps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(app $app)
    {
        if (isset($app)) {
            return view('apps.edit', compact(['app']));
        }
        return redirect()->route('apps.index');
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
        $app = app::find($id);
        if (isset ($app)) {
            $app->name = $request->name;
            $app->save();
        }
        return redirect()->route('apps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(app $app)
    {
        if (isset ($app)) {
            $app->delete();
        }
        return redirect()->route('apps.index');
        
    }
}
