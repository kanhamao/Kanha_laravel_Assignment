<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreauthorRequest;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{

    public function index()
    {
        $authors = Author::with('books')->get();

        return response()->json([
            'message' => 'Authors retrieved successfully',
            'data' => $authors,
        ], 200);
    }


    public function show($id)
    {
        $author = Author::with('books')->find($id);

        return response()->json([
            'message' => 'Author retrieved successfully',
            'data' => $author,
        ], 200);
    }
    // Create a new author

    public function create(StoreauthorRequest $request)
    {
        $author = Author::create($request->all());
        return response()->json([
            "message" => "Success",
            "data" => $author
        ]);
    }
    // Update a author using StoreauthorRequest
    public function update(StoreauthorRequest $request, $id)
    {
        $author = Author::find($id);
        $author->update($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'author updated successfully',
            'data' => $author
        ], 200);
    }

    // Delete a author
    public function delete(StoreauthorRequest $request, $id)
    {
        $author = Author::find($id);
        $author->delete($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'author delete successfully',
            'data' => $author
        ], 200);
    }
}
