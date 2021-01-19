<?php

namespace App\Http\Controllers;
use\App\Models\Post;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $posts= Post::all();
        $tv= Post::where('category','tv')->get();
        $computer= Post::orderby('details','asc')->get();
        $mobile= Post::orderby('details','asc')->get();
        // return view('pages/home',["post"=> $posts],["computer"=> $computer],["tv"=> $tv],["mobile"=> $mobile]);
        // return view('pages/home',["post"=> $posts],["tv"=> $tv]);
        return view('pages/categories',compact(['posts','tv','computer','mobile']));
        // return view('pages/home')->with($posts)->with($tv);
    }

    public function category_page()
    {
        $computer= Post::where('categories','computer')->get();
        return view('pages/category/category_page',compact('computer'));
    }

}
