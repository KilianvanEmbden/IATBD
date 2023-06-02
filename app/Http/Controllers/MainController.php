<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
    public function index(){
        return view('home',[
            'user' => Auth::user(),
            'books' => \App\Models\Book::all(),
            'owners' => \App\Models\User::all(),
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
