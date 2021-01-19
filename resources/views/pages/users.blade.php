@extends('layouts.page')
@section('content')	
	
<h1 align="center">Hello <br>  {{ Auth::user()->name }}  </h1>
<h1> 
    {{-- <ul>
    @foreach($user as $u)
        <li>{{$u->comment}}
            {{-- @php
            echo '<pre>';
            print_r($c->user);
            echo '</pre>';
            @endphp 
            <p>{{$c->user->name}}</p>
        </li>
    @endforeach
</ul> --}}
</h1>
<hr>


    <div align="center" width="500px"><a href="categories.html"><img src="css/images/deadpool.jpg" width="100%"></a></div> 

    <div align="center"><a href="#">USER_NAME</a></div>





@endsection