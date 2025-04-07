<?php

namespace App\Http\Controllers\api\vuecrud;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
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
}


// php artisan make:controller api/vuecrud/ColorController --api
