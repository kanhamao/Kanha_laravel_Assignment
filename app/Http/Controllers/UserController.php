<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;


use App\Models\User;

class UserController extends Controller
{
    // Get all Users
    public function index()
    {
        $users = User::all();
        return response()->json([
            'message' => 'Users fetched successfully',
            'data' => $users
        ], 200);
    }

    // Create a new User

  // Store a new User
public function create(StoreUserRequest $request)
{
    $user = User::create($request->all());

    return response()->json([
        "message" => "User created successfully",
        "data" => $user
    ]);
}


    // Show a single User by ID
    public function show($id)
    {
        $user = User::find($id);
        return response()->json([
            'success' => true,
            'message' => 'User fetched successfully',
            'data' => $user
        ], 200);
    }


    // Update a User using StoreUserRequest
    public function update(StoreUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'User updated successfully',
            'data' => $user
        ], 200);
    }

    // Delete a User
     public function delete(StoreUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->delete($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'User delete successfully',
            'data' => $user
        ], 200);
    }
}
