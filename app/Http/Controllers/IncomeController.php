<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;



class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income= Income::all();
        return view('dashboard.incomes.index',['incomes'=>$income]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.incomes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
            $income = new Income;
            $income->Provider_id = $request->input('Provider_id');
            $income->User_id = $request->input('User_id');
            $income->receipt_type = $request->input('receipt_type');
            $income->receipt_series = $request->input('receipt_series');
            $income->receipt_number = $request->input('receipt_number');
            $income->date = $request->input('date');
            $income->tax = $request->input('tax');
            $income->total = $request->input('total');
            $income->status = $request->input('status');
            $income->save();
        
            return view("dashboard.incomes.message",['msg'=>"Registro agregado con exito"]);
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
        $income = Income::findOrFail($id);
            return view('dashboard.incomes.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
            $income = Income::findOrFail($id);

            $income->provider_id = $request->input('provider_id');
            $income->user_id = $request->input('user_id');
            $income->receipt_type = $request->input('receipt_type');
            $income->receipt_series = $request->input('receipt_series');
            $income->receipt_number = $request->input('receipt_number');
            $income->date = $request->input('date');
            $income->tax = $request->input('tax');
            $income->total = $request->input('total');
            $income->status = $request->input('status');
            $income->save();
        
            return view("dashboard.incomes.message",['msg'=>"Registro Actualizado con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    
    $income = Income::findOrFail($id);

    $income->delete();

    return redirect()->route('income.index')->with('success', 'Ingreso eliminado exitosamente');
    }
}
