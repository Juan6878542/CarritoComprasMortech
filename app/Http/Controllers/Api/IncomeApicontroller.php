<?php

namespace App\Http\Controllers\Api;

use App\Models\Income;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncomeApicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes=Income::all();
        return $incomes;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income = new Income();
        $income->user_id = $request->user_id;
        $income->client_id = $request->client_id;
        $income->income_type = $request->income_type;
        $income->income_date = $request->income_date;
        $income->amount = $request->amount;
        $income->description = $request->description;
        $income->save();
        return $income;
    }

    /**
     * Display the specified resource.
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $income = Income::find($id);
            if (!$income) {
                return response()->json(['error' => 'Ingreso no encontrado'], 404);
            }
            $income->update($request->all());
            return response()->json($income);
        } catch (Exception $e) {
            return response()->json(['error' => 'No se pudo actualizar', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
    {
        $income= Income::find($id);
        if (!$income) {
            return response()->json(['error' => 'Ingreso no encontrado'], 404);
        }
        $income->delete();
        return response()->json(['message' => 'Ingreso eliminado']);
    }
}
}