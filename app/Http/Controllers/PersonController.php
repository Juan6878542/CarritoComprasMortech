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
    {
        $person = Person::all();
        return view('dashboard.person.index',['person'=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $providers= person::where('type','Proveedor');
        return view('dashboard.person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{

    $person = new Person();
    $person->Name=$request->input('Name');
    $person->Last_Name=$request->input('Last_Name');
    $person->Document_Type=$request->input('Document_Type');
    $person->Document_Number=$request->input('Document_Number');
    $person->Adress = $request->input('Adress', '');
    $person->Phone=$request->input('Phone');
    $person->Email=$request->input('Email');
    $person->save();

    return view("dashboard.person.message",['msg'=>"Registro agregado con exito"]);
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
        {
            $person = Person::findOrFail($id);
            return view('dashboard.person.edit', compact('person'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    
    $person = Person::findOrFail($id);

    
    $person->Name = $request->input('Name');
    $person->Last_Name = $request->input('Last_Name');
    $person->Document_Type = $request->input('Document_Type');
    $person->Document_Number = $request->input('Document_Number');
    $person->Adress = $request->input('Adress');
    $person->Phone = $request->input('Phone');
    $person->Email = $request->input('Email');
    $person->save();
    return view("dashboard.person.message",['msg'=>"Registro Actualizado con exito"]);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person = Person::findOrFail($id);
    $person->delete();

    return redirect()->route('person.index')->with('success', 'Persona eliminada correctamente.');

    }
}
