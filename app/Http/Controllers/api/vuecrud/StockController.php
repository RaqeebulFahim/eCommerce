<?php

namespace App\Http\Controllers\api\vuecrud;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return response()->json(Stock::all());

        try {
            $stock = Stock::all();
 
            if (!$stock) {
             $stock = " No Data Found";
            }
            return response()->json(["stocks"=>$stock]);
         } catch (\Throwable $th) {
             return response()->json(["stocks"=>$th->getMessage()]); 
         }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $stock = new Stock();
            $stock->product_id=$request->product_id;
            $stock->transaction_type=$request->transaction_type;
            $stock->quantity=$request->quantity;
            $stock->save();
            return response()->json(["stocks"=>$stock]);
         } catch (\Throwable $th) {
             return response()->json(["stocks"=>$th->getMessage()]); 
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $stock = Stock::find($id);
 
            if (!$stock) {
             $stock = " No Data Found";
            }
            return response()->json(["stocks"=>$stock]);
         } catch (\Throwable $th) {
             return response()->json(["stocks"=>$th->getMessage()]); 
         }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $stock = Stock::find($request->id);
            $stock->product_id=$request->product_id;
            $stock->transaction_type=$request->transaction_type;
            $stock->quantity=$request->quantity;
            $stock->save();
            return response()->json(["stocks"=>$stock]);
         } catch (\Throwable $th) {
             return response()->json(["stocks"=>$th->getMessage()]); 
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {try {
        $stock = Stock::destroy($id);
        return response()->json(["stocks"=>$stock]);
     } catch (\Throwable $th) {
         return response()->json(["stocks"=>$th->getMessage()]); 
     }
    }
}
