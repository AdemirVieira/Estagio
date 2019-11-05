<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = user::all();
        return view('students.create', compact(['users']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $m = new student();
        $m->sexo = $request->sexo;
        $m->data_nascimento = $request->data_nascimento;
        $m->cpf = $request->cpf;
        $m->telefone = $request->telefone;

        $u = new User();
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = Hash::make($m->cpf);
        $u->save();

        $m->user_id = $u->id;

        $m->save();

        return redirect()->route('students.index');
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
    public function edit(student $student)
    {
        if (isset($student)) {
            return view('students.edit', compact(['student']));
        }
        return redirect()->route('students.index');
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
        $student = student::find($id);
        if (isset ($student)) {
            $student->sexo = $request->sexo;
            $student->data_nascimento = $request->data_nascimento;
            $student->cpf = $request->cpf;
            $student->telefone = $request->telefone;
            $student->save();
        }
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        if (isset ($student)) {
            $student->delete();
        }
        return redirect()->route('students.index');
        
    }
}
