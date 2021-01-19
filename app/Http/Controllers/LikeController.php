<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Models\Post;
use\App\Models\Comment;
use\App\Models\User;
use\App\Models\Like;
use Redirect, Response;

class LikeController extends Controller
{
    // public function likepost(Request $request){

       
    //     Like::create([
    //         'like' => $request->like,
    //         'user_id' => $request->user_id,
    //         'post_id' => $request->post_id,
    //     ]);
    //     return Redirect::route('single-product',['id'=>$request->post_id]);
    
    public function likeupdate(Request $request)
    {
    
    Post::find($request->post_id);
    $like = new like;
    $like->like = 1;
    $like->user_id = $request->user_id;
    $like->post_id = $request->post_id;
    $like->update();

    return redirect()->back()->with('message', 'Liked !! : Goto Like page ');
    }
    public function like(Request $request)
    {
        $posts=Like::where('like',1)->get();
        return view('pages/likepage',["post"=>$posts]);
    }
    }