@extends('layouts.app')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap&subset=greek" rel="stylesheet"> 
@section('content')
<div class="container">
   <form action="/p" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="col-8 offset-2">
           <h1>Add New Post</h1>
        <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label text-md-left">Post Caption</label>
    
           
               <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
    
               @error('caption')caption
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
           
       </div>
       <div class="row">
           <label for="image" class="col-md-4 col-form-label">Post Image</label>
           <input type="file" class="form-control-file" id="image" name="image">
           @error('image')image
                  
                       <strong>{{ $message }}</strong>
              
               @enderror
       </div>
       <div class="row pt-4"><button class="btn btn-primary">Add New Post</button> </div>
       </div>
   </form>
    
</div>
@endsection
