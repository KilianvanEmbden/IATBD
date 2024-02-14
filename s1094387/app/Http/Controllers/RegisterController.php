<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Exception;

class RegisterController extends Controller
{
    public function edit(){
        return view('register', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request){
        $user = Auth::user();

        $validated = $request->validate([
            'phone_number' => 'required|max:10|not_regex:/[a-z]/',
            'role' => 'required',
            'description' => 'required|max:500',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('profile_picture')->store('users', 'public');
        
        $user->phone_number = $validated['phone_number'];
        $user->role = $validated['role'];
        $user->description = $validated['description'];
        $user->registered = true;

        if($request->file('profile_picture')){
            $user->profile_picture = $imagePath;
        } else {
            $user->profile_picture = 'img/user_default.png';
        }

        try{
            $user->save();
            return redirect('/');
        }
        catch(Exception $e){
            $message = "Something went wrong. Try again.";
            return redirect('/register/edit')->withErrors([$message]);
        }
    }
}
