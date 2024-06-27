<?php

namespace App\Http\Controllers;

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
}