<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Users = users::all();
        return response()->json(['message'=>'Succesfully fetched users', 'data'=> $Users],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = users::create($request->all());
        return response()->json(['message'=>'users sucessfully created','data'=> $user],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(users $user)
    {
        return response()->json(['message'=>'sucessfully fetched users', 'data'=> $user],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users $user)
    {
        //
        $user->update($request->all());
        return response()->json(['message'=>'Users sucessfully updated', 'data'=> $user],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $user)
    {
        $user->delete();
        return response()->json(['message'=>'users sucessfully deleted'],200);
}
}