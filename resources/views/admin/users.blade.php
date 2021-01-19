@extends('layouts.adminlayout')
@section('admincontent')

    <div class="quote">
            <h1>
                <center>User Lists</center>
            </h1>
            <hr>
    </div>
    <div class="container" width="100%">
        <table border= '1' class ="table text-white" align ="center">
           <thead>
              <tr align="center">
                  <td>SN</td>
                  <td>User Name</td>
                  <td>E-mail</td>
                 
                  <td>Upload Date</td>
                  <td>Update</td>
              </tr>
           </thead>
           <tbody>
            @foreach($post as $t)
               <tr align="center">
                  
                     <td>{{$t->id}}</td>
                     <td>{{$t->name}}</td>
                     <td>{{$t->email}}</td>
                     <td>{{$t->updated_at}}</td>
                     <td> 
                        
                        <button class="btn-btn-success"><a href="{{"deletepostadmin/".$t['id']}}">delete</a></button>
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