<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($id = null, $action = null) {

        if ($id)
        {
            $book = Book::find($id);

            if ($action == "edit")
            {
                return view('books/editbook', ['book' => $book]);
            }
            else
            {
                return view('books/showbook', ['book' => $book]);
            }

        }

        $books = Book::all();
        return view('books/index', ['books' => $books]);
    }

    public function createBook()
    {
        return view('books/createbook');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'pages' => 'required|integer|max:20000',
            'quantity' => 'required|integer|max:20000'
        ]);

        $book = new Book();
        $book->title = $validatedData['title'];
        $book->pages = $validatedData['pages'];
        $book->quantity = $validatedData['quantity'];
        $book->save();

        return redirect("books")->with('Success','Book created sucessfully');
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'pages' => 'required|integer|max:20000',
            'quantity' => 'required|integer|max:20000'
        ]);

        $book = Book::find($id);
        $book->title = $validatedData['title'];
        $book->pages = $validatedData['pages'];
        $book->quantity = $validatedData['quantity'];
        $book->save();

        return redirect("books")->with('Success','Book updated sucessfully');
    }

    public function destroy(Request $request, string $id)
    {
        Book::destroy($id);

        return redirect("books")->with('Success','Book deleted sucessfully');
    }
}
