<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{


    public $authors = [
        ['id' => 1, 'name' => 'Kanha Mao'],
        ['id' => 2, 'name' => 'Kosol Mao'],
        ['id' => 3, 'name' => 'Veasna Mao'],
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
                    
                    'authors' => $this->authors
                ]
            ],200);
    }


    public function show(Request $request,int $id)
    {
        return response()->json(
            [
                'status' => 'success',
                'data' => [
                        "id" =>$request->$id,
                        "name" => $request->name,
                        "bio"=>$request-> bio,
                        "nationality" => $request->nationality,
                        "authors" => $this->authors

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
                'message' => 'Show form for creating a new author',
                'data' =>[
                    "name" => $request->name,
                    "bio" => $request->bio,
                    "nationality" => $request->nationality,
                    "authors"=>$this->authors]
            ], 201);
    }

    public function update(Request $request, string $id)
    {
        return response()->json(
            [
                'status' => 'success',
                'message' => "Author with ID $id updated successfully",
                'data' => [
                    "id" => $id,
                    "name" => $request->name,
                    "bio" => $request->bio,
                    "authors" => $this->authors,
                ]
                ],200);       
    }

    public function delete(int $id)
    {
        return response()->json(
            [
                'status' => 'success',
                'message' => "Author with ID $id deleted successfully",
                'data' => [
                    "authors" => $this->authors
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
