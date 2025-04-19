<?php

namespace App\Http\Controllers\api\vuecrud;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product_Image;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Product::all();
            if (!$products) {
                $products="No data Found";
            }
            return response()->json(["products"=>$products]);
        } catch (\Throwable $th) {
            return response()->json(["error"=>$th->getMessage()]);
        }
    
      
    }
    public function create()
    {
        return view("pages.erp.product.create", ["categories" => Category::all(), "brands" => Brand::all(), "product_images" => ProductImage::all()]);
    }
    public function store(Request $request)
    {
        //Product::create($request->all());
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->color_id = $request->color_id;
        $product->size_id = $request->size_id;
        $product->product_image_id = $request->product_image_id;
        date_default_timezone_set("Asia/Dhaka");
        $product->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $product->updated_at = date('Y-m-d H:i:s');

        $product->save();

        return back()->with('success', 'Created Successfully.');
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view("pages.erp.product.show", ["product" => $product]);
    }
    public function edit(Product $product)
    {
        return view("pages.erp.product.edit", ["product" => $product, "categories" => Category::all(), "brands" => Brand::all(), "product_images" => ProductImage::all()]);
    }
    public function update(Request $request, Product $product)
    {
        //Product::update($request->all());
        $product = Product::find($product->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->color_id = $request->color_id;
        $product->size_id = $request->size_id;
        $product->product_image_id = $request->product_image_id;
        date_default_timezone_set("Asia/Dhaka");
        $product->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $product->updated_at = date('Y-m-d H:i:s');

        $product->save();

        return redirect()->route("products.index")->with('success', 'Updated Successfully.');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("products.index")->with('success', 'Deleted Successfully.');
    }

    public function ecomshop()
    {
        $products= Product::with('images')->get();
        $color= Color::orderBy("id","asc")->limit(3)->get();
        $size= Size::orderBy("id","asc")->limit(4)->get();
        // $products= Product::with('sizes')->get();

        //   echo json_encode($color);

         return view('pages.ecomfront.ecom-shop' , compact('products', 'color','size'));

    }
}
