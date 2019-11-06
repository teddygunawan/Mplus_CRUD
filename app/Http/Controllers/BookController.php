<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books =  Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }
    public function store(Request $request)
    {
        #Request::flash();
        $validatedField = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'type' => 'required',
            "book_cover"=> 'required'
        ]);
        $image = $request->file('book_cover');
        $book = new Book;
        $book->fill($request->all());
        $book->image_format = $image->getClientOriginalExtension();
        if ($book->save()) {
            $name = strval($book->id) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            return collect(['status' => 'success', 'book_id' => $book->id]);
        } else {
            http_response_code(422);
            return;
        }
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function update(Book $book, Request $request)
    {
        $validatedField = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'type' => 'required',
            "book_cover"=> 'required'
        ]);
        $book->fill($request->all());
        if ($book->save()) {
            $image = $request->file('book_cover');
            $name = strval($book->id) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            return redirect()->action(
                'BookController@show', ['$book' => $book->id]
            );
        }
    }
    public function delete(Book $book)
    {

    }
}
