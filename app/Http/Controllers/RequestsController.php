<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RequestsController extends Controller
{
    public function index(){
        return view('requests.index',[
            'user' => Auth::user(),
            'requests' => \App\Models\Request::where('owner_id', Auth::user()->id)->get(),
        ]);
    }

    public function update(Request $request){
        $req = \App\Models\Request::find($request->input('id'));
        $book = \App\Models\Book::find($request->input('book_id'));

        $req->accepted = true;
        $book->current_owner_id = $request->input('id');

        try{
            $req->save();
            $book->save();

            $message = "You can send the book now.";
            return redirect('/requests');
        }
        catch(Exception $e){
            $message = "Something went wrong.";
            return redirect('/requests')->withErrors([$message]);
        }
    }

    public function destroy(Request $request){
        $req = \App\Models\Request::find($request->input('id'));

        try{
            $req->delete();
            return redirect('/requests');
        }
        catch(Exception $e){
            $message = "Something went wrong.";
            return redirect('/requests')->withErrors([$message]);
        }
    }
    
    public function create($id){
        return view('requests.create',[
            'user' => Auth::user(),
            'book' => \App\Models\Book::find($id),
            'receiver' => \App\Models\User::find(\App\Models\Book::find($id)->owner_id),
            'sender' => Auth::user(),
        ]);
    }

    public function store(Request $request, \App\Models\Request $req){

        $validated = $request->validate([
            'return_date' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'comment' => 'required',
        ]);

        $req->user_id = $request->input('user_id');
        $req->owner_id = $request->input('owner_id');
        $req->book_id = $request->input('book_id');
        $req->name = $request->input('name');
        $req->return_date = $validated['return_date'];
        $req->email = $validated['email'];
        $req->phone_number = $validated['phone_number'];
        $req->comment = $validated['comment'];

        try{
            $req->save();
            return redirect('/');
        }
        catch(Exception $e){
            $message = "Something went wrong.";
            return redirect('/books/create')->withErrors([$message]);
        }
    }
}