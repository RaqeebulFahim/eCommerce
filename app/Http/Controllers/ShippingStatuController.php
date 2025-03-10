<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_ShippingStatuController.php" was generated by ProBot AI.
* Date: 25/02/2025 13:34:58
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\ShippingStatu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class ShippingStatuController extends Controller{
	public function index(){
		$shippingstatus = ShippingStatu::paginate(10);
		return view("pages.erp.shippingstatu.index",["shippingstatus"=>$shippingstatus]);
	}
	public function create(){
		return view("pages.erp.shippingstatu.create",[]);
	}
	public function store(Request $request){
		//ShippingStatu::create($request->all());
		$shippingstatu = new ShippingStatu;
		$shippingstatu->name=$request->name;
date_default_timezone_set("Asia/Dhaka");
		$shippingstatu->created_at=date('Y-m-d H:i:s');

		$shippingstatu->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$shippingstatu = ShippingStatu::find($id);
		return view("pages.erp.shippingstatu.show",["shippingstatu"=>$shippingstatu]);
	}
	public function edit(ShippingStatu $shippingstatu){
		return view("pages.erp.shippingstatu.edit",["shippingstatu"=>$shippingstatu,]);
	}
	public function update(Request $request,ShippingStatu $shippingstatu){
		//ShippingStatu::update($request->all());
		$shippingstatu = ShippingStatu::find($shippingstatu->id);
		$shippingstatu->name=$request->name;
date_default_timezone_set("Asia/Dhaka");
		$shippingstatu->created_at=date('Y-m-d H:i:s');

		$shippingstatu->save();

		return redirect()->route("shippingstatus.index")->with('success','Updated Successfully.');
	}
	public function destroy(ShippingStatu $shippingstatu){
		$shippingstatu->delete();
		return redirect()->route("shippingstatus.index")->with('success', 'Deleted Successfully.');
	}
}
?>
