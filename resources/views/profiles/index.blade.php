@extends('layouts.app')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap&subset=greek" rel="stylesheet"> 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100" >
   
        </div>
        <div class="row">
            <div class="col-0 pt-5">
                <div class="d-flex bd-highlight mb-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{$user->username}}</div>
                <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                
                </div>
            </div> 
            <div class="ml-auto p-2 bd-highlight">
                 @can('update', $user->profile)
                <a href="/p/create" >Add new post</a>
           @endcan
            </div>
                </div>
               
           
            @can('update', $user->profile)
                 <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan
       
                <div class="d-flex"  id="show">
                    
                    <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                    <div class="pr-5"><strong>{{$user->following->count()}}</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="#">{{$user->profile->url ??'not available'}}</a></div>
            </div>
         </div>
        </div>
         <div class="row pt-5">
             @foreach ($user->posts as $post)
                 <div class="col-4 pb-4"><a href="/p/{{$post->id}}"><img src="/storage/{{$post->image}}" class="w-100"></a></div>
                 
             @endforeach
         </div>
    
</div>
@endsection
