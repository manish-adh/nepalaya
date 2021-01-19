@extends('layouts.page')
@section('content')	

<div class ="container">
	<button align ="left" type="button" class="btn btn-warning">
		<a href="#"> Back</a>
	</button>

	
   <h1 align ="center">My Likes List </h1> 
</div>


  <div class="container" width="100%">
     <table border= '1' class ="table" align ="center">
        <thead>
           <tr align="center">
               <td>SN</td>
               <td>Name</td>
               <td>Details</td>
               <td>Description</td>
               <td>Image</td>
               <td>Upload Date</td>
               <td>Update</td>
           </tr>
        </thead>
        <tbody>
       @foreach($post as $t)
            <tr align="center">
               
                  <td>{{$t->id}}</td>
                  <td>{{$t->name}}</td>
                  <td>{{$t->details}}</td>
                  <td>{{$t->description}}</td>
                  <td><img src="{{asset('/uploadimage/'. $t->image)}}" width="100px" alt="product"></td>
                  <td>{{$t->updated_at}}</td>
                  <td> 
                     <button class="btn-btn-success"><a href="/singlepage/{{$t->id}}">DETAILS</a></button>
                     <button class="btn-btn-success"><a href="{{"editpost/".$t['id']}}">EDIT</a></button>
                     <button class="btn-btn-success"><a href="{{"deletepost/".$t['id']}}">DELETE</a></button>
                  </td>
            </tr>
            @endforeach
        </tbody>
     </table>
{{--    
<ul>@foreach($post as $t)
   <li>{{$t->name}}</li>
   @endforeach</ul>
    --}}
  </div>

@endsection