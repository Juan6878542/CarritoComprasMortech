<?php

namespace App\Http\Controllers\Api;

use App\Models\Sale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleApicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::all();
        return $sales;
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
        return $sale;
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $sale = Sale::find($id);
            if (!$sale) {
                return response()->json(['error' => 'Venta no encontrada'], 404);
            }
            $sale->update($request->all());
            return response()->json($sale);
        } catch (Exception $e) {
            return response()->json(['error' => 'No se pudo actualizar', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
    {
        $sale= Sale::find($id);
        if (!$sale) {
            return response()->json(['error' => 'Venta no encontrada'], 404);
        }
        $sale->delete();
        return response()->json(['message' => 'Venta eliminada']);
    }
}
}