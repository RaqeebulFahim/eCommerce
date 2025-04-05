<?php

namespace App\Http\Controllers\Api\VueCrud;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        try {
           $role = Role::all();

           if (!$role) {
            $role = " No Data Found";
           }
           return response()->json(["roles"=>$role]);
        } catch (\Throwable $th) {
            return response()->json(["roles"=>$th->getMessage()]); 
        }
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $role = new Role();
            $role->name = $request->name;
            $role->save();

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
        $role = Role::find($id);
        if (!$role) {
            $role="No Data Found!";
        }
        return response()->json(["roles"=>$role]);
      } catch (\Throwable $th) {
       return response()->json(["roles"=>$th]);
      }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $role = Role::find($request->id);
            $role->name=$request->name;
            $role->save();
            return response()->json(["res"=>$role]);
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
        $role = Role::destroy($id);
        return response()->json(["roles"=>$role]);
    } catch (\Throwable $th) {
           return response()->json(["roles"=>$th->getMessage()]);
       }
    }
}
