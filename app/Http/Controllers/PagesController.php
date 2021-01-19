<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Post;
use\App\Models\User;


class PagesController extends Controller
{
    
    public function home(){
        return view('home');

    }
    public function index(){
        $posts= Post::inRandomOrder()->take(3)->get();
        $tv= Post::orderby('name','asc')->take(3)->get();
        $computer= Post::orderby('details','asc')->take(3)->get();
        $mobile= Post::orderby('details','asc')->take(3)->get();
        // return view('pages/home',["post"=> $posts],["computer"=> $computer],["tv"=> $tv],["mobile"=> $mobile]);
        // return view('pages/home',["post"=> $posts],["tv"=> $tv]);
        return view('pages.home',compact(['posts','tv','computer','mobile']));
        // return view('pages/home')->with($posts)->with($tv);
    }

    
    
    public function users(){
        $users= User::all();
        return view('pages/users',["user"=>$users]);

    }
    public function singlepage(){
        return view('pages/singlepage');

    }
    public function categories() {
        $posts= Post::all();
        $tv= Post::where('categories','tv')->take(4)->get();  //data base ko category lai samatyooo
        $computer= Post::where('categories','computer')->take(3)->get();
        $mobile= Post::where('categories','mobile')->take(3)->get();
        $cycle= Post::where('categories','cycle')->take(3)->get();
        // return view('pages/home',["post"=> $posts],["computer"=> $computer],["tv"=> $tv],["mobile"=> $mobile]);
        // return view('pages/home',["post"=> $posts],["tv"=> $tv]);
        return view('pages/categories',compact(['posts','tv','computer','mobile','cycle']));
        //view ko  page ko category ma post tv computer mobile variable lai pathayo
        // return view('pages/home')->with($posts)->with($tv);
    }
    
    public function welcome(){
        return view('welcome');

    }

    public function about(){
        return view('pages/about');

    }

    
}
