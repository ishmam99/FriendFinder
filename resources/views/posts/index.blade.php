@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            
   
       
        <div class="row pt-2">    
            <div class="col-6 offset-3">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-4">
                         <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:35px">
               
                    </div>
                    <div>
                         <a href="/profile/{{$post->user->id}}" style="font-weight-bolder">{{$post->user->username}}</a> |
                        
                         
                    </div>
               </div>
               <hr>
               <p>{{$post->caption}}</p>
                
            </div>

           
           
            
            </div>
        </div>
        <div class="row pb-4">
                <div class="col-6 offset-3">
                        <a href="/p/{{$post->id}}">  <img src="/storage/{{$post->image}}" class="w-100"></a>
                   
                </div>
                
            </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
            </div>
        </div>
    
@endsection