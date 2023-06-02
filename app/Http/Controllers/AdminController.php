<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index', [
            'user' => Auth::user(),
            'persons' => \App\Models\User::where('blocked', false)->get(),
            'blocked' => \App\Models\User::where('blocked', true)->get(),
            'books' => \App\Models\Book::all(),
        ]);
    }

    public function update(Request $request){
        $user = \App\Models\User::find($request->input('id'));
        if($user->blocked == false){
            $user->blocked = true;
        }else{
            $user->blocked = false;
        }

        try{
            $user->save();
            return redirect('/admin');
        }
        catch(Exception $e){
            $message = "Error.";
            return redirect('/admin')->withErrors([$message]);
        }
    }

    public function destroy(Request $request){
        $book = \App\Models\Book::find($request->input('id'));

        try{
            $book->delete();
            return redirect('/admin');
        }
        catch(Exception $e){
            $message = "Error.";
            return redirect('/admin')->withErrors([$message]);
        }
    }
}
