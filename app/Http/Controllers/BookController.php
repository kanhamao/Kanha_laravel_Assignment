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


     public function show(int $id)
    {
        // Find the book by ID
        $book = collect($this->books)->firstWhere('id', $id);

        if (!$book) {
            return response()->json([
                "message" => "Book not found",
            ], 404);
        }

        return response()->json([
            "message" => "Book fetched successfully",
            "data" => $book
        ], 200);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json([
            "message" => "Show form for creating a new book",
            "data" => $this->books
        ], 201);
    }

     public function update(Request $request, int $id)
    {
        return response()->json([
            "message" => "Book with ID $id updated successfully",
            "data" => [
                "id" => $id,
                "title" => $request->title,
                "authorId" => $request->authorId,
                "isbn" => $request->isbn,
                "publicationYear" => $request->publicationYear,
                "genre" => $request->genre,
                "availableCopies" => $request->availableCopies,
                "books"=> $this->books  
            ]
        ], 200);
        
        
    }


     public function delete(int $id)
    {
        return response()->json([
            "message" => "Book with ID $id deleted successfully",
            "data" => $this->books
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
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
   
}
