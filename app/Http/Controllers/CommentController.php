<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Post;
use\App\Models\Comment;
use\App\Models\User;
use Redirect, Response;

class CommentController extends Controller
{
    public function commentpost(Request $request){

        $this->validate($request,[
            'comment'=>'required',
            'user_id'=>'required',
            'post_id'=>'required',
        ]);

        Comment::create([
            'comment' => $request->comment,
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
        ]);
        return Redirect::route('single-product',['id'=>$request->post_id]);
    }
    //     $post=new Post;
    //     $post= Post::find($id);

    //     $p=request('postid');
    //     $co=new Comment;
        
    //     $co->name=$p->user_id->name;
    //     $co->comment=request('comment');
       
       
    //     // for authentication as secondary key
    //     $co->user_id=auth()->id();
    //     // $co->post_id=$p->id();

    //         $co->save();
       
    //     return $test;
    
}
