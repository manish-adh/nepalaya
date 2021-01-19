<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Post;
use\App\Models\Comment;
class SingleController extends Controller
{
    // public function index(){

    //     $posts=Post::all();
    //     return view('pages/single')->with('posts',$posts);
    // }
    public function show($id){
         $posts= Post::findOrFail($id);
         $comments = Comment::orderBy('created_at','asc')->with('user')->where('post_id',$id)->get();
        return view('pages/singlepage',compact('posts','comments'));
    }

    

    // public function shows(){
    //     // $posts= post::where('name','MANISH')->get();
    //     // $posts= post::all();
    //     $posts= post::orderby('name','asc')->get();
    //     return view('pages/upload/myupload',["post"=> $posts]);
    // }


}
