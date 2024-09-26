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
        $books = Book::paginate(5);
        return view('books/index', ['books' => $books]);
    }

    public function createBook()
    {
        return view('books/createbook');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:255',
            'pages' => 'required|integer|min:0|max:1000',
            'quantity' => 'required|integer|min:0|max:100'
        ]);

        $book = new Book();
        $book->title = $validatedData['title'];
        $book->pages = $validatedData['pages'];
        $book->quantity = $validatedData['quantity'];
        $book->save();

        $message = "Book " . $book->title . " created succesfully";

        return redirect("books")->with('success',$message);
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:255',
            'pages' => 'required|integer|min:0|max:1000',
            'quantity' => 'required|integer|min:0|max:100'
        ]);

        $book = Book::find($id);
        $book->title = $validatedData['title'];
        $book->pages = $validatedData['pages'];
        $book->quantity = $validatedData['quantity'];
        $book->save();

        $message = "Book " . $book->title . " updated succesfully";

        return redirect("books/$id/edit")->with('success',$message);
    }

    public function destroy(Request $request, string $id)
    {
        $message = "Book " . Book::find($id)->title . " deleted succesfully";

        Book::destroy($id);

        return redirect("books")->with('success', $message);
    }
}
