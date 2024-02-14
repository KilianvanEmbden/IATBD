<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UsersController extends Controller
{

    public function index(){

        return view('owner.index',[
            "users" => \App\Models\user::all()
        ]);
    }

    public function show(){
        return view('users.profile', [
            'user' => Auth::user(),
            'books' => \App\Models\Book::where('owner_id',  Auth::user()->id)->get(),
            'reviews' => \App\Models\Review::where('user_id', Auth::user()->id)->get(),
        ]);
    }

    public function edit(){
        return view('users.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request){
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required',
            'phone_number' => 'required|max:10|not_regex:/[a-z]/',
            'description' => 'required|max:500',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $user->name = $validated['name'];
        $user->phone_number = $validated['phone_number'];
        $user->description = $validated['description'];

        if($request->file('profile_picture')){

            $imagePath = $request->file('profile_picture')->store('users', 'public');
            
            $user->profile_picture = $imagePath;
        } else {
            $user->profile_picture = Auth::user()->profile_picture;
        }

        try{
            $user->save();
            return redirect('/profile');
        }
        catch(Exception $e){
            $message = "Something went wrong, try again.";
            return redirect('/profile/edit')->withErrors([$message]);
        }
    }
}
