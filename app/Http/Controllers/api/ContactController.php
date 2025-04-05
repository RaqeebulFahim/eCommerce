<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $contacts= Contact::all();
       return response()->JSON( $contacts) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try {
        $contact= new Contact();
        $contact->name= $request->name;
        $contact->email= $request->email;
        $contact->message= $request->message;
        $contact->save();
        return response()->json(["success" =>"Data has been saved"]);
       } catch (\Throwable $th) {
           return response()->json(["error"=> $th->message()]);
       }


    //    try {
    //     $contacts = new Contact();
    //     $contacts->name = $request->name;
    //     $contacts->email = $request->email;
    //     $contacts->message = $request->message;
    //     $contacts->save();
    //     return response()->json(["success" =>"Data has been saved"]);
    //    } catch (\Throwable $th) {
    //     return response()->json(["error"=> $th->message()]);
    //    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
