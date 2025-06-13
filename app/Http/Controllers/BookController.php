<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public $books = [
        ['id' => 1, 'title' => 'First book', 'authorId' => '001'],
        ['id' => 2, 'title' => 'Second book', 'authorId' => '002'],
        ['id' => 3, 'title' => 'Third book', 'authorId' => '003'],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) 
    {
        // Return the books as a JSON response
        return response()->json([
            "message" => "Books fetched successfully",
            "data" => [
                "id" => $request->id,
                "title" => $request->title,
                "authorId" => $request->authorId,
                "isbn" => $request->isbn,
                "publicationYear" => $request->publicationYear,
                "genre" => $request->genre,
                "availableCopies" => $request->availableCopies,  
            ]
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
