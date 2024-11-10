<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::all();
        return view('dashboard.Sale.index', ['sales' => $sales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Sale.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $sale = new Sale();
        $sale->client_id = $request->Client_id;
        $sale->user_id = $request->User_id;
        $sale->receipt_type = $request->receipt_type;
        $sale->receipt_series = $request->receipt_series;
        $sale->receipt_number = $request->receipt_number;
        $sale->tax = $request->tax;
        $sale->total = $request->total;
        $sale->status = $request->status;

        $sale->save();
        return redirect()->route('Sale.index')->with('success', 'Venta creada con éxito');
    

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
        $sale = Sale::find($id);
        return view('dashboard.Sale.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sale = Sale::findOrFail($id);

    
        $sale->client_id = $request->Client_id;
        $sale->user_id = $request->User_id;
        $sale->receipt_type = $request->receipt_type;
        $sale->receipt_series = $request->receipt_series;
        $sale->receipt_number = $request->receipt_number;
        $sale->tax = $request->tax;
        $sale->total = $request->total;
        $sale->status = $request->status;

       
        $sale->save();
        return redirect()->route('Sale.index')->with('success', 'Venta actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sale = Sale::find($id); $sale->delete();
        return redirect()->route('Sale.index')->with('success', 'Venta borrada con éxito');
    }
}
