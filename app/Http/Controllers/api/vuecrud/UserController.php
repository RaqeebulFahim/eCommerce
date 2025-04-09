<?php

namespace App\Http\Controllers\Api\VueCrud;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query();
        if ($request->search) {
           $query->where('name', 'like',"%{$request->search}%");
        }
        return response()->json($query->paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $user=new User;
            $user->name=$request->name;
            $user->role_id=$request->role_id;
            $user->email=$request->email;
           
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
            
            date_default_timezone_set("Asia/Dhaka");
            $user->created_at=date('Y-m-d H:i:s');
            $user->updated_at=date('Y-m-d H:i:s');

            if (isset($request->photo)) {
                $user->photo=$request->photo;
            }
            $user->mobile=$request->mobile;
            $user->save();

            if (isset($request->photo)) {
               $imageName=$user->name.'.'.$request->photo->extension();
               $user->photo=$imageName;
               $user->update();
               $request->photo->move(public_path('img'),$imageName);
            }
            return response()->json(["roles"=>$user]);
            
        } catch (\Throwable $th) {
            return response()->json(["error"=>$th->getMessage()]);
            
        }
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


// php artisan make:controller Api/VueCrud/UserController --api