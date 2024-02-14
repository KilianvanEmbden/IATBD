<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BooksController extends Controller
{
    public function index(){
        return view('books.index',[
            'user' => Auth::user(),
            'books' => \App\Models\Book::all(),
        ]);
    }

    public function show($id){
        return view('books.show',[
            'user' => Auth::user(),
            'book' => \App\Models\Book::find($id),
            'owner' => \App\Models\User::find(\App\Models\Book::find($id)->owner_id),
        ]);
    }

    public function create(){
        return view('books.create',[
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request, \App\Models\Book $book){
        $validated = $request->validate([
            'name' => 'required',
            'writer' => 'required',
            'genre' => 'required',
            'return_date' => 'required',
            'description' => 'required|max:500',
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('img')->store('books', 'public');

        $book->owner_id = Auth::user()->id;
        $book->name = $validated['name'];
        $book->writer = $validated['writer'];
        $book->genre = $validated['genre'];
        $book->return_date = $validated['return_date'];
        $book->description = $validated['description'];
        $book->img = $imagePath;

        try{
            $book->save();
            return redirect('/');
        }
        catch(Exception $e){
            $message = "Something's worng, try again.";
            return redirect('/books/create')->withErrors([$message]);
        }
    }

    public function update($id){
        $book = \App\Models\Book::find($id);
        $book->current_owner_id = Auth::user()->id;

        try{
            $book->save();

            $message = "Book returned.";
            return redirect('/requests');
        }
        catch(Exception $e){
            $message = "Something went wrong.";
            return redirect('/requests')->withErrors([$message]);
        }
    }
}
