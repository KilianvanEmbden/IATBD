<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ReviewsController extends Controller
{
    public function create($id){
        return view('reviews.create', [
            'user' => Auth::user(),
            'reviewed' => \App\Models\User::where('id', $id)->first(),
        ]);
    }

    public function store(Request $request, \App\Models\Review $review){


        $validated = $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'comment' => 'required|max:500',
            'stars' => 'required',
        ]);

        $review->user_id = $validated['user_id'];
        $review->name = Auth::user()->name;
        $review->stars = $validated['stars'];
        $review->title = $validated['title'];
        $review->comment = $validated['comment'];



        try{
            $review->save();
            return redirect('/owners');
        }
        catch(Exception $e){
            $message = "Something went wrong.";
            return redirect('/')->withErrors([$message]);
        }
    }
}
