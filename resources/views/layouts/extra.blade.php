@extends('layouts.page')
@section('content')

        {{-- top list                      --}}
      	<div class="container">
			  <p> <h1>TV </h1></p>
			<div class="row">
				<!-- data lai view ma tanyo -->
				
					@foreach ($tv as $t) 
					<div class="col-md-3"> 
						<div>
							<div><a href="/singlepage/{{$t->id}}"><img src="{{asset('/uploadimage/'. $t->image)}}" width="250px" alt="product"></a></div>
							<div align="center"><a href="">{{$t->name}}</a></div> 
							<div align="center"><a href="">{{$t->details}}</a></div> 
							<div align="center"><a href="">{{$t->price}}</a></div> 	
						</div>
					</div>
					@endforeach
				</div>
					    <div align="right"> 
						<button class="btn btn-success">more</button>
					    </div>	
	
				
				
				
			
		  </div>
{{-- top list                      --}}
		  <div class="container">
			<p> <h1>MOBILE </h1></p>
		  <div class="row">
		@foreach ($mobile as $t)
				<div class="col-sm-3"> 
					<div><a href="/singlepage/{{$t->id}}"><img src="{{asset('/uploadimage/'. $t->image)}}" width="250px" alt="product"></a></div>
					<div align="center"><a href="">{{$t->name}}</a></div> 
					<div align="center"><a href="">{{$t->details}}</a></div> 
					<div align="center"><a href="">{{$t->price}}</a></div> 	
				</div>
				@endforeach
				
			  
		  </div>
		  <div align="right"> 
			<button class="btn btn-success">more</button>
			</div>	


		</div>
{{-- top list                      --}}
		<div class="container">
			<p> <h1>COMPUTER </h1></p>
		  <div class="row">
		  @foreach ($computer as $t)
				<div class="col-sm-3"> 
					<div><a href="/singlepage/{{$t->id}}"><img src="{{asset('/uploadimage/'. $t->image)}}" width="250px" alt="product"></a></div>
					<div align="center"><a href="">{{$t->name}}</a></div> 
					<div align="center"><a href="">{{$t->details}}</a></div> 
					<div align="center"><a href="">{{$t->price}}</a></div> 	
				</div>
				@endforeach
				
			  
		  </div>	
		  <div align="right"> 
			<button class="btn btn-success">more</button>
			</div>	

		</div>

        {{-- top list                      --}}
      	<div class="container">
			  <p> <h1>BIKE </h1></p>
			<div class="row">
				<!-- data lai view ma tanyo -->
			@foreach ($cycle as $t) 
				<div class="col-sm-3"> 
					<div><a href="/singlepage/{{$t->id}}"><img src="{{asset('/uploadimage/'. $t->image)}}" width="250px" alt="product"></a></div>
					<div align="center"> <h6>product name:</h6><a href="">{{$t->name}}</a></div> 
					<div align="center"><a href="">{{$t->details}}</a></div> 
					<div align="center"><a href="">{{$t->price}}</a></div> 	
				</div>
				@endforeach
				

				
				
			</div>	
			<div align="right"> 
				<button class="btn btn-success">more</button>
				</div>	

		  </div>

{{-- endddddddddddddd of list                  --}}


	</div>


@endsection