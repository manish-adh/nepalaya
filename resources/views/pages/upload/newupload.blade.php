@extends('layouts.page')
@section('content')	

<div class="container">

        <a href="upload">
            <button align ="left" type="button" class="btn btn-warning">
                 Back

            </button>
        </a>

</div>
<div align="center"><h1>New upload</h1> </div>

<div class="container">


    <div class="row card " >
        <div class="col-md-8">
            <div class="">
                <div class=""></div>
                    <div class="container mt-5"> 
                    @if ($message=Session::get('success'))
                    <div class="alert alert-success alert-block">
                    <strong>{{$message}}</strong>

                    </div>
                    @endif
                        

                    </div>
                <div class="container" align="center">
                    <form method="POST" action="{{ url('uploadpost') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus placeholder="Product name">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="details" value="" required autocomplete="name" autofocus placeholder="Details of the product">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Issue') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="description" value="" required autocomplete="name" autofocus placeholder="Issues of product">

                                
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="price" value="" required autocomplete="name" autofocus placeholder="Selling price">

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('categories') }}</label>

                            <div class="col-md-1 fontblack" >
                                <select name="categories" id="categories" >
                                    <option >Other</option>
                                    <option >Computer</option>
                                    <option >Mobile</option>
                                    <option >Cycle</option>
                                    <option >TV</option>
                                   
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-1">
                               <input type="file" name="image"/>

                                
                            </div>
                        </div>

                        <div >
                            <div align="center">
                                <button   type="submit" class="btn btn-success">
                                    {{ __('Post') }}
                                </button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection