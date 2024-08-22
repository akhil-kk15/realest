<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illiminate\Support\Facades\auth;
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
        
        $user=Auth()->user();
        $user_id=$user->id;
        $user_type=$user->usertype;
        


        $post= new Listing;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->price=$request->price;
        $post->location=$request->location;
        $post->user_id=$request->user_id;


        $post->image=$request->image;

        $image=$request->image;

        if ($image){
        $imagename=time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $post->image=$imagename;
    }
        

        $post->save();
        return redirect()->back();
    }
    
}