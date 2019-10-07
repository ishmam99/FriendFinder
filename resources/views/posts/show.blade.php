@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" class="w-100">
            </div>
            <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                         <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:35px">
               
                    </div>
                    <div>
                         <a href="/profile/{{$post->user->id}}" style="font-weight-bolder">{{$post->user->username}}</a> |
                        
                         <a href="#" class="pl-3">Follow</a>
                
                    </div>
               </div>
               <hr>
            </div>

            <p>{{$post->caption}}</p>
            <p>{{$post->created_at}}</p>
            
            </div>
        </div>
    
    </div>
@endsection