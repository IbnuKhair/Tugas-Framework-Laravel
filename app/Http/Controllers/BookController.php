<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Ambil semua buku sekaligus relasi author dan genre
        $books = Book::with(['author', 'genre'])->get();

        // Kembalikan response JSON
        return response()->json([
            'success' => true,
            'message' => 'Get all books',
            'data' => $books
        ], 200);
    }
}