<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
// use App\Http\Controllers\AdminController;

class AdminController extends Controller
{
    public function view_lists(){
        return view('admin.lists');
    }

    public function view_listingtable(){
        return view('admin.listingtable');
    }

    public function approve_listing(Request $request){
        
        $post= new Listing;
        $post->title=$request->title;
        $post->description=$request->description;
        // $post->price=$request->price;
        // $post->location=$request->location;
        // $post->user_id=$request->user_id;
        // $post->image=$request->image;
        $post->save();
        return redirect()->back();
    }
    
}