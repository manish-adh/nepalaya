<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Post;


use Redirect, Response;

class UploadController extends Controller
{
    public function __constructor(){                //auth middleware for controller
        $this->middleware('auth')->except('shows');

    }
    public function upload(){
        return view('pages/upload');

    }
    public function myupload(){
        return view('pages/upload/myupload');

    }
    public function newupload(){
        return view('pages/upload/newupload');

    }


    public function uploadpost(Request $request){
        
        $post=new Post;
        $post->name=request('name');
        $post->description=request('description');
        $post->price=request('price');
        $post->details=request('details');
        $post->categories=request('categories');
        // for image uploads
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploadimage/',$filename);
            $post->image =$filename;
        }
        // for authentication as secondary key
          $post->user_id=auth()->id();
        // $deal->matches()->create(['user_id'=>$id]);
        // $post=auth()->id();
        // $request['user_id']=$post;
        // auth()->user()->posts()->create(['user_id'=>$id]);
        // auth()->user()->posts()->create($request->all());
            $post->save();
       return Redirect::to('newupload')->withSuccess('sucessfully posted ');
    }

    public function shows(){
        // $posts= post::where('name','MANISH')->get();
        // $posts= post::all();
        $post=new Post;
        $post->user_id=auth()->id();
        $posts= Post::where('user_id',auth()->id())->get();
        
        return view('pages/upload/myupload',["post"=> $posts]);
    }
   
    public function edit($id){
        $posts= Post::find($id);
        return view('pages/upload/editpost',["post"=> $posts]);
    }

    public function update(Request $request){
        $post=Post::find($request->id);
        $post->name=request('name');
        $post->description=request('description');
        $post->price=request('price');
        $post->details=request('details');
        $post->categories=request('categories');
        // for image uploads
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time().'.'.$extension;
            $file->move('uploadimage/',$filename);
            $post->image =$filename;
        }
        // for authentication as secondary key
        $post->user_id=auth()->id();
        $post->save();
       return Redirect::to('myupload')->withSuccess('sucessfully posted ');
        
   }

   public function delete($id){
    $posts= Post::find($id);
    $posts->delete();
    return Redirect::to('myupload')->withSuccess('sucessfully deleted ');
}

}
