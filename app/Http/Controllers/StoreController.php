<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App;
use App\Category;

class StoreController extends Controller
{
    public function index()
    {
        $list = App::limit(100)->orderBy('installs')->with('genres')->with('category')->get();
                
        
        $list = $list->sortBy('title');
        
        return view('index')->with(compact('list'));
    }
}
