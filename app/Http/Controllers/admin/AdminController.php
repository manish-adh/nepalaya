<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\Models\User;
use\App\Models\Post;
use Redirect, Response;


class AdminController extends Controller
{
    public function admin(){
        $posts= Post::all();
        return view('/admin/dashboard',["post"=> $posts]);


    }
    public function users(){
        $users= User::all();
        return view('/admin/users',["post"=> $users]);
        

    }
    public function post_admin(){
        $posts= Post::all();
        return view('/admin/post_admin',["post"=> $posts]);
        

    }
    public function delete($id){
        $user= User::whereId($id)->delete();
        return Redirect::to('/adminpost')->withSuccess('sucessfully deleted ');
    }
    
    

}
