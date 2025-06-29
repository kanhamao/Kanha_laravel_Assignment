<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use Illuminate\Http\Request;


use App\Models\Book;

class BookController extends Controller
{
    // Get all books
    // public function index()
    // {
    //     $books = Book::all();
    //     return response()->json([
    //         'message' => 'Books fetched successfully',
    //         'data' => $books
    //     ], 200);
    // }


    public function index()
    {
        $books = Book::with('author')->get();

        return response()->json([
            'message' => 'Books retrieved successfully',
            'data' => $books,
        ], 200);
    }

    public function show($id)
    {

        $book = Book::with('author')->find($id);
        return response()->json([
            'message' => 'books retrieved successfully',
            'data' => $book,
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
    // public function show($id)
    // {
    //     $book = Book::find($id);
    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Book fetched successfully',
    //         'data' => $book
    //     ], 200);
    // }


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

//     // Search books by title
//     public function search(Request $request)
//     {
//         $query = $request->input('query');
//         $books = Book::where('title', 'LIKE', "%{$query}%")->get();
//         return response()->json([
//             'success' => true,
//             'message' => 'Books fetched successfully',
//             'data' => $books
//         ], 200);
//     }
//     // Filter books by author
//     public function filterByAuthor(Request $request)
//     {
//         $author = $request->input('author');
//         $books = Book::where('author', $author)->get();
//         return response()->json([
//             'success' => true,
//             'message' => 'Books fetched successfully',
//             'data' => $books
//         ], 200);
//     }
//     // Sort books by title
//     public function sort(Request $request)
//     {
//         $sortBy = $request->input('sort_by', 'title');
//         $books = Book::orderBy($sortBy)->get();
//         return response()->json([
//             'success' => true,
//             'message' => 'Books sorted successfully',
//             'data' => $books
//         ], 200);
//     }
//     // Paginate books
//     public function paginate(Request $request)
//     {
//         $perPage = $request->input('per_page', 10);
//         $books = Book::paginate($perPage);
//         return response()->json([
//             'success' => true,
//             'message' => 'Books paginated successfully',
//             'data' => $books
//         ], 200);
//     }
//     // Count total books
//     public function count()
//     {
//         $count = Book::count();
//         return response()->json([
//             'success' => true,
//             'message' => 'Total books count fetched successfully',
//             'data' => $count
//         ], 200);
//     }
//     // Get latest books
//     public function latest()
//     {
//         $books = Book::latest()->take(5)->get();
//         return response()->json([
//             'success' => true,
//             'message' => 'Latest books fetched successfully',
//             'data' => $books
//         ], 200);
//     }
//     // Get popular books
//     public function popular()
//     {
//         $books = Book::orderBy('views', 'desc')->take(5)->get();
//         return response()->json([
//             'success' => true,
//             'message' => 'Popular books fetched successfully',
//             'data' => $books
//         ], 200);
//     }
//     // Get related books by genre
//     public function related($id)
//     {
//         $book = Book::find($id);
//         if (!$book) {
//             return response()->json([
//                 'success' => false,
//                 'message' => 'Book not found',
//             ], 404);
//         }
//         $relatedBooks = Book::where('genre', $book->genre)
//             ->where('id', '!=', $id)
//             ->take(5)
//             ->get();
//         return response()->json([
//             'success' => true,
//             'message' => 'Related books fetched successfully',
//             'data' => $relatedBooks
//         ], 200);
//     }
//     // Get book recommendations based on user preferences
//     public function recommendations(Request $request)
//     {
//         $userPreferences = $request->input('preferences', []);
//         $books = Book::whereIn('genre', $userPreferences)->take(5)->get();
//         return response()->json([
//             'success' => true,
//             'message' => 'Book recommendations fetched successfully',
//             'data' => $books
//         ], 200);
//     }
// }
