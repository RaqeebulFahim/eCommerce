<?php

namespace App\Http\Controllers\api\vuecrud;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $category = Category::all();
            if (!$category) {
                $category="No data Found";
            }
            return response()->json(["category"=>$category]);
        } catch (\Throwable $th) {
            return response()->json(["category"=>$th->getMessage()]);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try {
        $category = new Category();
        $category->name=$request->name;
        $category->parent_id=$request->parent_id;
         $category->save();
         return response()->json(["category"=>$category]);
        } catch (\Throwable $th) {
           return response()->json(["category"=>$th->getMessage()]);
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       try {
        $category= Category::find($id);
        if (!$category) {
          $category="No Data Found";
        }
        return response()->json(["category"=>$category]);
    } catch (\Throwable $th) {
           return response()->json(["category"=>$th->getMessage()]);
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $category = Category::find($id);
            $category->name=$request->name;
            $category->parent_id=$request->parent_id;
             $category->save();
             return response()->json("success");
            } catch (\Throwable $th) {
               return response()->json(["category"=>$th->getMessage()]);
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
           $category= Category::destroy($id);
            return response()->json(["category"=>$category]);
        } catch (\Throwable $th) {
            return response()->json(["category"=>$th->getMessage()]);
        }
    }
}
