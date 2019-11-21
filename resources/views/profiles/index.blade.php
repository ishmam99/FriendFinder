<style>
.cover{
  background-position: center;
    background-size: cover;
  background-repeat: no-repeat;
  padding: 5px;
  background-image:url({{$user->profile->cover()}});
  
  
  
}
</style>
@extends('layouts.app')

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap&subset=greek" rel="stylesheet"> 
@section('content')
<div class="container">
  <div class="cover">
<div class="row">
  
      
        <div class="col-3 p-5">
         
        <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100" >
         </div>
        
        <div class="row">
            <div class="col-0 pt-5">
                <div class="d-flex bd-highlight mb-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4" style="color:whitesmoke">{{$user->username}}</div>
                <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                
                </div>
            </div> 
           
                </div>
               
           
            @can('update', $user->profile)
                <button class="btn btn-success"> <a href="/profile/{{$user->id}}/edit" style="color:white">Edit profile</a></button>
            @endcan
       
                <div class="d-flex"  id="show">
                    
                    <div class="pr-5" style="color:whitesmoke"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pr-5" style="color:whitesmoke"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                    <div class="pr-5" style="color:whitesmoke"><strong>{{$user->following->count()}}</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold" style="color:whitesmoke">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="#">{{$user->profile->url ??'not available'}}</a></div>
            </div>
         </div>
        </div>
      </div>
       
      <div class="container">
          <div class="col-md-12">
            @can('update', $user->profile)
           {{-- <a href="/p/create" >Add new post</a> --}}
        
   @include('welcome')
          
      @endcan
       </div>
    </div>
         <div class="row pt-5">
             @foreach ($user->posts as $post)
                 <div class="col-4 pb-4"><a href="/p/{{$post->id}}"><img src="/storage/{{$post->image}}" class="w-100"></a></div>
                 
             @endforeach
             
             
         </div>
    
</div>
@endsection 








{{--
<!DOCTYPE html>
<html lang="en">
  

@include('includes.head')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <body>

    <!-- Header
    ================================================= -->
    <title>Timeline</title>
		
   @include('includes.header')
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                <img src="{{$user->profile->profileImage()}}" alt="" class="img-responsive profile-photo" />
                  <h3>{{$user->username}}</h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.html" class="active">Timeline</a></li>
                  <li><a href="timeline-about.html">About</a></li>
                  <li><a href="timeline-album.html">Album</a></li>
                  <li><a href="timeline-friends.html">Friends</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 people following her</li>
                  <li><div><follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button></div></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="{{$user->profile->profileImage()}}" alt="" class="img-responsive profile-photo" />
              <h4>{{$user->username}}</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html" class="active">Timeline</a></li>
                <li><a href="timeline-about.html">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
                <li><a href="timeline-friends.html">Friends</a></li>
              </ul><div>
              <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
              </div>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Post Create Box
              ================================================= -->
              @include('includes.create')
              <!-- Post Create Box End-->

              <!-- Post Content
              ================================================= -->
              @foreach ($user->posts as $post)
              <div class="post-content">

                <!--Post Date-->
                <div class="post-date hidden-xs hidden-sm">
                <h5>{{$user->username}}</h5>
                <p class="text-grey">{{$post->created_at}}</p>
                </div><!--Post Date End-->

                <img src="/storage/{{$post->image}}" alt="post-image" class="img-responsive post-image" />
                <div class="post-container">
                <img src="{{$user->profile->profileImage()}}" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                    <h5>{{$user->username}}</h5>
                      <p class="text-muted">Published a photo about 15 mins ago</p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>{{$post->caption}} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    
                  </div>
                </div>
              </div>
              @endforeach

              

            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
  
    <!-- Scripts
    ================================================= -->
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
    <script src="{{ asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.sticky-kit.min.js')}}"></script>
    <script src="{{ asset('js/jquery.scrollbar.min.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>





      
    
  </body>

</html>
--}}
