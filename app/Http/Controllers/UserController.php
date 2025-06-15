<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public $users = [
        ['id' => 1, 'name' => 'John Doe','email' => 'john@gmail.com'],
        ['id' => 2, 'name' => 'Jane Smith','email' => 'jane@gmail.com'],
        ['id' => 3, 'name' => 'Alice Johnson','email' => 'Alice@gmail.com']
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            [
                'status' => 'success',
                'data' => [
                    'users' => $this->users
                ]
            ], 200);
    }

     public function show(Request $request, int $id)
    {
        return response()->json(
            [
                'status' => 'success',
                'data' => [
                    "id" => $request->id,
                    "name" => $request->name,
                    "email" => $request->email,
                    "users" => $this->users
                ]
            ], 200);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return response()->json(
            [
                'status' => 'success',
                'message' => 'User created successfully',
                "data" => [
                    "id" =>$request->id,
                    "name" => $request->name,
                    "email" => $request->email,
                    "membershipDate" => $request->membershipDate, 
                    "users" => $this->users
                ]      
            ], 201);
    }

   public function update(Request $request, int $id)
    {
        return response()->json(
            [
                'status' => 'success',
                'message' => 'User updated successfully',
                "data" => [
                    "id" => $request->id,
                    "name" => $request->name,
                    "email" => $request->email,
                    "membershipDate" => $request->membershipDate, 
                    "users" => $this->users
                ]      
            ], 200);
        
    }
     public function delete(int $id)
    {
        return response()->json(
            [
                'status' => 'success',
                'message' => 'User deleted successfully',
                "data" => [
                    "id" => $id,
                    "users" => $this->users
                ]      
            ], 200);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   

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
    
    /**
     * Remove the specified resource from storage.
     */
   
}
