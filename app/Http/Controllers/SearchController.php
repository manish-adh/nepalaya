<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Post;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('search');
        $posts = Post::where('name','LIKE','%'.$search.'%')->get();
        return view('pages/search',["post"=> $posts]);
    }
}
