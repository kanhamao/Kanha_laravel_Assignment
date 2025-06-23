<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use Illuminate\Http\Request;


use App\Models\Book;

class BookController extends Controller
{
    // Get all books
    public function index()
    {
        $books = Book::all();
        return response()->json([
            'message' => 'Books fetched successfully',
            'data' => $books
        ], 200);
    }

    // Create a new book

    public function create(StoreBookRequest $request)
    {
        $books = Book::create($request->all());
        return response()->json([
            "message" => "Success",
            "data" => $books
        ]);
    }


    // Show a single book by ID
    public function show($id)
    {
        $book = Book::find($id);
        return response()->json([
            'success' => true,
            'message' => 'Book fetched successfully',
            'data' => $book
        ], 200);
    }


    // Update a book using StoreBookRequest
    public function update(StoreBookRequest $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Book updated successfully',
            'data' => $book
        ], 200);
    }

    // Delete a book
     public function delete(StoreBookRequest $request, $id)
    {
        $book = Book::find($id);
        $book->delete($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Book delete successfully',
            'data' => $book
        ], 200);
    }
}
