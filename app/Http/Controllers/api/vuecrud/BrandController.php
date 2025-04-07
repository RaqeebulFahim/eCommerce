<?php

namespace App\Http\Controllers\Api\VueCrud;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        try {
           $brand = Brand::all();

           if (!$brand) {
            $brand = " No Data Found";
           }
           return response()->json(["brands"=>$brand]);
        } catch (\Throwable $th) {
            return response()->json(["brands"=>$th->getMessage()]); 
        }
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $brand = new Brand();
            $brand->name = $request->name;
            $brand->save();

            return response()->json(["res"=>$request]);
        } catch (\Throwable $th) {
            return response()->json(["err"=>$th]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      try {
        $brand = Brand::find($id);
        if (!$brand) {
            $brand="No Data Found!";
        }
        return response()->json(["brands"=>$brand]);
      } catch (\Throwable $th) {
       return response()->json(["brands"=>$th]);
      }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $brand = Brand::find($request->id);
            $brand->name=$request->name;
            $brand->save();
            return response()->json(["res"=>$brand]);
        } catch (\Throwable $th) {
            return response()->json(["err"=>$th->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       try {
        $brand = Brand::destroy($id);
        return response()->json(["brands"=>$brand]);
    } catch (\Throwable $th) {
           return response()->json(["brands"=>$th->getMessage()]);
       }
    }
}
