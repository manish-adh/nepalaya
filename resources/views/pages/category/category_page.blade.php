@extends('layouts.page')
@section('content')	
	
<h1 align="center">Categories list here!!! <br>  {{ Auth::user()->name }}  </h1>
<hr>

{{-- top list                      --}}
<div class="container">
    <p> <h1>COMPUTER LIST </h1></p>
    <div class="row">
        @foreach ($computer as $t)
        <div class="col-sm-3"> 
            <div><a href="/singlepage/{{$t->id}}"><img src="{{asset('/uploadimage/'. $t->image)}}" width="250px" alt="product"></a></div>
            <div align="center"><a href="">{{$t->name}}</a></div> 
            <div align="center"><a href="">{{$t->detail}}</a></div> 
            <div align="center"><a href="">{{$t->price}}</a></div> 
        </div>
        @endforeach
    </div>		
    <div align="center"> 
        <button class="btn btn-success">more</button>
    </div>
</div>
 

{{-- endddddddddddddd of list                  --}}







@endsection