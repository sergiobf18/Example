<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\example;

class ExampleapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $examples = example::all();
        return($examples);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $example = new Example();
        $example->First_Name = $request->input('First_Name');
        $example->Last_Name = $request->input('Last_Name');
        $example->Document_Type = $request ->input('Document_Type');
        $example->Document_Number = $request ->input('Document_Number');
        $example->Phone = $request ->input('Phone');
        $example->Email = $request ->input('Email');
        $example->save();
       
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        $example = Example::find($id);
        $example->First_Name = $request->input('First_Name');
        $example->Last_Name = $request->input('Last_Name');
        $example->Document_Type = $request ->input('Document_Type');
        $example->Document_Number = $request ->input('Document_Number');
        $example->Phone = $request ->input('Phone');
        $example->Email = $request ->input('Email');
        $example->save();
        return $example;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $example=Example::find($id);
        
    }
}
