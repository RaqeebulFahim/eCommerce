<?php

namespace App\Http\Controllers\api\vuecrud;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $color = Color::all();
            if (!$color) {
             $color= "No Data Found";
            }
            return response()->json(["colors"=>$color]);
            
         } catch (\Throwable $th) {
             return response()->json(["colors"=>$th->getMessage()]);
             
         }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
