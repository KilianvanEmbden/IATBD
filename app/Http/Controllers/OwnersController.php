<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class OwnersController extends Controller
{
    public function index(){
        return view('owner.index',[
            'user' => Auth::user(),
            'owners' => \App\Models\User::where('role', 'Owner')->get(),
        ]);
    }

    public function show($id){
        return view('owner.show',[
            'user' => Auth::user(),
            'owner' => \App\Models\User::find($id),
            'books' => \App\Models\Book::where('owner_id', $id)->get(),
            'reviews' => \App\Models\Review::where('user_id', $id)->get(),
        ]);
    }}
