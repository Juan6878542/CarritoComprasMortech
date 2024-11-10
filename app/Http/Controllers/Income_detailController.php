<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Income_detail;
use Illuminate\Http\Request;



class Income_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income_details= Income_detail::all();
        return view('dashboard.income_details.index', ['income_details' => $income_details]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.income_details.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income_details = new Income_detail(); $income_details->income_id = $request->income_id; $income_details->article_id = $request->article_id; $income_details->quantity = $request->quantity; $income_details->price = $request->price; $income_details->save();
        return view("dashboard.income_details.message",['msg'=>"ingreso detalle creado con exito"]);
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
        $income_details = Income_detail::find($id); 
        return view('dashboard.income_details.edit', compact('income_details'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $incomeDetail = Income_Detail::find($id); $incomeDetail->update($request->all()); 
        return redirect()->route('income_detail.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $incomeDetail = Income_Detail::find($id); $incomeDetail->delete(); 
        return redirect()->route('income_detail.index');
    }
}
