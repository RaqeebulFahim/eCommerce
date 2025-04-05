<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class ContactController extends Controller{
	public function index(){
		$contacts = Contact::paginate(10);
		return view("pages.erp.contact.index",["contacts"=>$contacts]);
	}
	public function create(){
		return view("pages.erp.contact.create",[]);
	}
	public function store(Request $request){
		//Contact::create($request->all());
		$contact = new Contact;
		$contact->name=$request->name;
		$contact->email=$request->email;
		$contact->message=$request->message;
date_default_timezone_set("Asia/Dhaka");
		$contact->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$contact->updated_at=date('Y-m-d H:i:s');

		$contact->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$contact = Contact::find($id);
		return view("pages.erp.contact.show",["contact"=>$contact]);
	}
	public function edit(Contact $contact){
		return view("pages.erp.contact.edit",["contact"=>$contact,]);
	}
	public function update(Request $request,Contact $contact){
		//Contact::update($request->all());
		$contact = Contact::find($contact->id);
		$contact->name=$request->name;
		$contact->email=$request->email;
		$contact->message=$request->message;
date_default_timezone_set("Asia/Dhaka");
		$contact->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$contact->updated_at=date('Y-m-d H:i:s');

		$contact->save();

		return redirect()->route("contacts.index")->with('success','Updated Successfully.');
	}
	public function destroy(Contact $contact){
		$contact->delete();
		return redirect()->route("contacts.index")->with('success', 'Deleted Successfully.');
	}
}
?>
