<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sale_detail;
use App\Models\Sale;
use App\Models\Article;
use Illuminate\Http\Request;

class Sale_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $sales_details=Sale_detail::all();
      return view('dashboard.sales_details.index',['sales_details'=>$sales_details]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sales_details.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale_id = $request->input('sale_id', 1);  

    // Crear un nuevo detalle de venta
    $sales_details = new Sale_Detail();
    $sales_details->sale_id = $sale_id;
    $sales_details->article_id = $request->input('article_id');
    $sales_details->quantity = $request->input('quantity');
    $sales_details->price = $request->input('price');
    $sales_details->discount = $request->input('discount', 0); 

    
    $sales_details->save();

    
    return redirect()->route('sales_details.index')->with('success', 'Detalle de venta guardado correctamente.');
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
        $sales_details = Sale_detail::find($id); 
        $sales = Sale::all();
        $articles = Article::all();
        return view('dashboard.sales_details.edit', compact('sales_details', 'sales', 'articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sale = Sale::find($id);

        
        if ($sale) {
            
            return view('sales.edit', compact('sale'));
        } else {
           
            return redirect()->route('sales.index')->with('error', 'Venta no encontrada.');
        }
        
        $request->validate([ 'product_id' => 'required|exists:products,id', 'customer_id' => 'required|exists:customers,id', 'quantity' => 'required|integer|min:1', 'price' => 'required|numeric|min:0', 'sale_date' => 'required|date',]);
        $sales_details = Sale_detail::find($id); $sales_details->update([ 'product_id' => $request->product_id, 'customer_id' => $request->customer_id, 'quantity' => $request->quantity, 'price' => $request->price, 'sale_date' => $request->sale_date, ]);
        return redirect()->route('dashboard.sales_details.index')->with('success', 'Detalle de venta actualizado exitosamente.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sales_details = Sale_Detail::find($id);  

    if ($sales_details) {
        $sales_details->delete();  
        return redirect()->route('sales_details.index')->with('success', 'Detalle de venta eliminado correctamente.');
    } else {
        return redirect()->route('sales_details.index')->with('error', 'Detalle de venta no encontrado.');
    }
    }
}
