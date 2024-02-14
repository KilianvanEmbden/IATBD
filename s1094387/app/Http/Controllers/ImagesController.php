<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ImagesController extends Controller
{
    public function store(Request $request, \App\Models\Image $image){
        $image->user_id = Auth::user()->id;
        $image->image = 'data:image/' . $request->file('image')->getClientOriginalExtension() . ';base64,' . base64_encode(file_get_contents($request->file('image')));
    
        try{
            $image->save();
            return redirect('/profile');
        }
        catch(Exception $e){
            $message = "Whoeps.";
            return redirect('/profile')->withErrors([$message]);
        }
    }

    public function destroy(Request $request){
        $image = \App\Models\Image::find($request->input('id'));

        try{
            $image->delete();
            return redirect('/profile');
        }
        catch(Exception $e){
            $message = "Something went wrong, please try again later.";
            return redirect('/profile')->withErrors([$message]);
        }
    }
}
