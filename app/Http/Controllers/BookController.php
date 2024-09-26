<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books/index', ['books' => $books]);
    }

    public function createBook()
    {
        return view('books/createbook');
    }

    public function editBook()
    {
        return view('books/editbook');
    }
}
