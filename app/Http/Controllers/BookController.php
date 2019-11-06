<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
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
        error_log("updating stuff");
        $validatedField = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'type' => 'required'
        ]);
        $book->fill($request->all());
        if($request->hasFile('book_cover')){
            $image = $request->file('book_cover');
            $book->image_format = $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            error_log($destinationPath . strval($book->id) . '.' . $image->getClientOriginalExtension());
            Storage::delete($destinationPath . strval($book->id) . '.' . $book->image_format);
            $name = strval($book->id) . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
        }
        if ($book->save()) {
            return redirect()->action(
                'BookController@show', ['book' => $book->id]
            );
        } else {
            http_response_code(500);
            return;
        }
    }
    public function delete(Book $book)
    {
        $book->delete();
    }
}
