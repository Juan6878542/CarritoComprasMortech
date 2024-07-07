<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $person=person::all();
        return view('dashboard.person.index',['person'=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person=person::all();
        return view ('dashboard.person.create',['person'=>$person]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            
        ]);
      $person= new person();
      $person->Name=$request->input('Name');
      $person->Last_Name=$request->input('Last_Name');
      $person->type=$request->input('type');
      $person->Document_Number=$request->input('Document_Number');
      $person->Document_Type=$request->input('Document_Type');
      $person->Adress=$request->input('Adress');
      $person->Email=$request->input('Email');
      $person->Phone=$request->input('Phone');
      $person->save();
      return view("dashboard.person.message",['msg'=>"Persona creada con exito"]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
