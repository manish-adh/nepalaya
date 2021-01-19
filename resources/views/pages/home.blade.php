@extends('layouts.page')

@section('content')
	

<div class="row banner">
	<div class="col-md-6">
	   <h1>lets start our Journery</h1>
	   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br>
		  Provident aliquid aspernatur adipisci voluptates eius,
		   molestiae eveniet iusto blanditiis iste dicta.</p>
		  
   
   </div>
	<div class="col-md-6 text-center" > 
	  <img src="{{asset('css/images/1.png')}}"  class="img-fluid"></div>

 </div>

</div>

</section>
<!-- *************************** body  start **************************************** -->

<section class="service">
<div class="container">

{{-- box start --}}
<div class="container">
	<p> <h1>RECOMMENDED LIST </h1></p>
	<div class="row">
		<div class="col-10">
  <div class="row">
	  @foreach ($posts as $t)
	  <div class="col-sm-10 col-md-4 boxmarging"> 
		  <div class="image"><a href="/singlepage/{{$t->id}}"><img class="image_img" src="{{asset('/uploadimage/'. $t->image)}}" width="250px" alt="product"></a>
		  <div class="image_overlay" align="center"><h3>{{$t->name}}</h3>
		  
		  <div class="image_title" align="center"><p class="img_des">
			Rs:{{$t->price}}
		</p></div> 
		<div><a href="/singlepage/{{$t->id}}"><button class="btn btn-success" >view</button></a> </div>
	   </div>
	  </div>
	  </div>
	
	  @endforeach
	</div>

	</div>
		  
  <div class=" more_bb"> 
	<button class="more_btn" ><h4>more...</h4></button>
	</div>
</div>
</div>


{{-- box end --}}
<br><br><br>
{{-- box start --}}
<div class="container fontblack">
	<p> <h1>RECOMMENDED LIST </h1></p>
	<div class="row ">
		<div class="col-10">
  <div class="row">
	  @foreach ($posts as $t)
	  <div class="col-sm-10 col-md-4 boxmarging"> 
		  <div class="image"><a href="/singlepage/{{$t->id}}"><img class="image_img" src="{{asset('/uploadimage/'. $t->image)}}" width="250px" alt="product"></a>
		  <div class="image_overlay " align="center"><h3 class="fontblack">{{$t->name}}</h3>
		  
		  <div class="image_title fontblack" align="center"><p class="img_des fontblack">
			Rs:{{$t->price}}
		</p></div> 
		<div><a href="/singlepage/{{$t->id}}"><button class="btn btn-success fontblack" >view</button></a> </div>
	   </div>
	  </div>
	  </div>
	
	  @endforeach
	</div>

	</div>
		  
  <div class=" more_bb"> 
	<button class="more_btn"><h4>more...</h4></button>
	</div>
</div>
</div>


{{-- box end --}}



<br><br><br>
{{-- box start --}}
<div class="container">
	<p> <h1 >RECOMMENDED LIST </h1></p>
	<div class="row">
		<div class="col-10">
  <div class="row">
	  @foreach ($posts as $t)
	  <div class="col-sm-10 col-md-4 boxmarging"> 
		  <div class="image"><a href="/singlepage/{{$t->id}}"><img class="image_img" src="{{asset('/uploadimage/'. $t->image)}}" width="250px" alt="product"></a>
		  <div class="image_overlay" align="center"><h3>{{$t->name}}</h3>
		  
		  <div class="image_title" align="center"><p class="img_des">
			Rs:{{$t->price}}
		</p></div> 
		<div><a href="/singlepage/{{$t->id}}"><button class="btn btn-success" >view</button></a> </div>
	   </div>
	  </div>
	  </div>
	
	  @endforeach
	</div>

	</div>
		  
  <div class=" more_bb"> 
	<button class="more_btn"><h4>more...</h4></button>
	</div>
</div>
</div>


{{-- box end --}}
<br><br><br>
{{-- box start --}}
<div class="container">
	<p> <h1>RECOMMENDED LIST </h1></p>
	<div class="row">
		<div class="col-10">
  <div class="row">
	  @foreach ($posts as $t)
	  <div class="col-sm-10-center col-md-4 boxmarging"> 
		  <div class="image"><a href="/singlepage/{{$t->id}}"><img class="image_img" src="{{asset('/uploadimage/'. $t->image)}}" width="250px" alt="product"></a>
		  <div class="image_overlay" align="center"><h3>{{$t->name}}</h3>
		  
		  <div class="image_title" align="center"><p class="img_des">
			Rs:{{$t->price}}
		</p></div> 
		<div><a href="/singlepage/{{$t->id}}"><button class="btn btn-success" >view</button></a> </div>
	   </div>
	  </div>
	  </div>
	
	  @endforeach
	</div>

	</div>
		  
  <div class=" more_bb"> 
	<button class="more_btn"><h4>more...</h4></button>
	</div>
</div>
</div>


{{-- box end --}}

</div>
</div>



@endsection