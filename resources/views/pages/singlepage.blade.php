@extends('layouts.page')

@section('content')	



<div class="container" align="center">
    
    <br>
    <hr>
    <br>

    <div class="container" width="100%">
	
	<img src="{{asset('/uploadimage/'.$posts->image)}}" width="500px" alt="product image">
	
    </div>
    <div align="center"> 
        <br>
        <h3> {{$posts->name}}</h3>
        <h4> Price : Rs {{$posts->price}} only.</h4>
    </div>

</div>
<br>
<hr>
<br>


    
   <div align="center">
   <table align="center">     
        
        <tr>
            <td>
                <h4> Product Detail: </h4>
            </td>
            <td>
                <h4> {{$posts->details}} </h4>
            </td>
            
        </tr>
    
    
        <tr>
            <td>
                <h4> Product Issues: </h4>
            </td>
            <td>
                <h4> {{$posts->description}} </h4>
            </td>
            
        </tr>
   
</table>
   {{-- <a href="">
            <button class="btn btn-success">Wishlist</button>
        </a> --}}
        <table>
            <form method="POST" action="{{ url('/likepage') }}" enctype="multipart/form-data">
            @csrf
        
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        
                <input id="name" type="hidden" class="form-control" name="post_id" value="{{$posts->id}}">
                <input id="name" type="hidden" class="form-control" name="user_id" value="{{Auth()->user()->id}}" >
        
                </div>
        
                <div class="container form-group">
                    
        
                    <div class="col">
                        
                    </div>
                    
                </div>
                
                <div class="" align="center">
                    <button  type="submit" class="btn btn-primary">
                        {{ __('like') }}
                    </button>
                </div>
               
            </form>
        </table>
   </div>

        
   
</div>

<br>
<hr>
<br>

<div class="container">
    <h1>Comments</h1>
    <br>
    
    <div class="bg">
    @foreach($comments as $c)
    <div class ="row bg-white">

        <div class = "col-2">
           <h5 class="font-weight-bold fontblack"> {{$c->user->name}} :-</h5>
        </div>

        <div class = "col-10">
            <h5 class="font-italic fontblack">
                <?php
                {{
                    $str=$c->comment;
                    echo wordwrap($str,70,"<br>\n",TRUE);
                
                }}
                ?>
            </h5>
        </div>
        
    </div>
    <br>
    @endforeach
    </div>

    <table>
    <form method="POST" action="{{ url('/commentpost') }}" enctype="multipart/form-data">
        @csrf

        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">

        <input id="name" type="hidden" class="form-control" name="post_id" value="{{$posts->id}}">
        <input id="name" type="hidden" class="form-control" name="user_id" value="{{Auth()->user()->id}}" >

        </div>

        <div class="container form-group row">
            <div  class="col-md-3 col-form-label text-md-right text-light ">
                <label for="name">
                    <h4>{{ __('Comment Here:-') }}</h4>
                </label>
            </div>

            <div class="col">
                <input id="name" type="text" class="form-control" name="comment" value="" required autocomplete="comment" autofocus placeholder="Comment here!">
            </div>
            
        </div>
        
        <div class="" align="center">
            <button  type="submit" class="btn btn-primary">
                {{ __('comment') }}
            </button>
        </div>
       
    </form>
    </table>

    <br>
    <br>
    
</div>


@endsection