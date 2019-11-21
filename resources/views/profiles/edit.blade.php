@extends('layouts.app')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap&subset=greek" rel="stylesheet"> 
@section('content')
<div class="container">
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PATCH')
    <div class="col-8 offset-2">
           <h1>Edit Profile</h1>
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-left">Title</label>
    
           
               <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}"  autocomplete="title" autofocus>
    
               @error('title')title
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
           
       </div>

       <div class="row">
            <label for="image" class="col-md-4 col-form-label">Cover Photo</label>
            <input type="file" class="form-control-file" id="image" name="image_cover"  >
            @error('image_cover')image
                   
                        <strong>{{ $message }}</strong>
               
                @enderror
        </div>

       <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label text-md-left"> URL</label>
    
           
               <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url')??$user->profile->url }}"  autocomplete="url" autofocus>
    
               @error('url')url
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
           
       </div>

       <div class="row">
            <label for="image" class="col-md-4 col-form-label">Profile Image</label>
            <input type="file" class="form-control-file" id="image" name="image"  >
            @error('image')image
                   
                        <strong>{{ $message }}</strong>
               
                @enderror
        </div>
       
       <div class="row pt-4"><button class="btn btn-primary">Save Profile</button> </div>
       </div>
   </form>
    
</div>
@endsection
