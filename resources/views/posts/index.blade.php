{{-- @extends('layouts.app')

@section('content')

<section class="posts endless-pagination" data-next-page="{{ $posts->nextPageUrl() }}">
    <div class="container">
        <div class="d-flex justify-content-end">
        <div class="col-md-2 ">
       
           <h2>new users </h2>
          
           @foreach ($people as $ps)
        <h4>{{$ps->user->username}}</h4>
          
         
              @endforeach
     </div>
    </div>
        @foreach ($posts as $post)
       
     <div class="md-col-8">     
    <div class="article">
        
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
        </div>
     </div>
        @endforeach
      {{--  <div class="row">
             <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}
            </div> 
            </div>
        </div>
    















        <script>

            $(document).ready(function() {
            
            
            
            /*    $('body').on('click', '.pagination a', function(e){
            
                    e.preventDefault();
                    var url = $(this).attr('href');
            
                    $.get(url, function(data){
                        $('.posts').html(data);
                    });
            
                });*/
            
                $(window).scroll(fetchPosts);
            
                function fetchPosts() {
            
                    var page = $('.endless-pagination').data('next-page');
            
                    if(page !== null) {
            
                        clearTimeout( $.data( this, "scrollCheck" ) );
            
                        $.data( this, "scrollCheck", setTimeout(function() {
                            var scroll_position_for_posts_load = $(window).height() + $(window).scrollTop() + 100;
            
                            if(scroll_position_for_posts_load >= $(document).height()) {
                                $.get(page, function(data){
                                    $('.posts').append(data.posts);
                                    $('.endless-pagination').data('next-page', data.next_page);
                                });
                            }
                        }, 350))
            
                    }
                }
            
            
            })
            
            </script>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
	
	<title>News Feed | Check what your friends are doing</title>
  @include('includes.head')
  <body>

    <!-- Header
    ================================================= -->
    @include('includes.header')
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			@include('includes.sidebar')
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            @include('includes.create')
            <!-- Post Create Box End-->



            <!-- Post Content
            ================================================= -->
             <div class="post-content">
            <section class="posts endless-pagination" data-next-page="{{ $posts->nextPageUrl() }}">
            @foreach ($posts as $post)
           
              <img src="/storage/{{$post->image}}" alt="post-image" class="img-responsive post-image" />
              <div class="post-container">
                <img src="{{$post->user->profile->profileImage()}}" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="/profile/{{$post->user->id}}" class="profile-link">{{$post->user->username}}</a> <span class="following">following</span></h5>
                    <p class="text-muted">Published a photo about 3 mins ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>{{$post->caption}} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                  </div>
                  <div class="post-comment">
                    <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                  </div>
                  <div class="post-comment">
                    <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment">
                  </div>
                </div>
              </div>
               @endforeach
            </div>
    			</div>
           
           

           

           
          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			@include('includes.sidebar-right')
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
    <script>

        $(document).ready(function() {
        
        
        
        /*    $('body').on('click', '.pagination a', function(e){
        
                e.preventDefault();
                var url = $(this).attr('href');
        
                $.get(url, function(data){
                    $('.posts').html(data);
                });
        
            });*/
        
            $(window).scroll(fetchPosts);
        
            function fetchPosts() {
        
                var page = $('.endless-pagination').data('next-page');
        
                if(page !== null) {
        
                    clearTimeout( $.data( this, "scrollCheck" ) );
        
                    $.data( this, "scrollCheck", setTimeout(function() {
                        var scroll_position_for_posts_load = $(window).height() + $(window).scrollTop() + 100;
        
                        if(scroll_position_for_posts_load >= $(document).height()) {
                            $.get(page, function(data){
                                $('.posts').append(data.posts);
                                $('.endless-pagination').data('next-page', data.next_page);
                            });
                        }
                    }, 350))
        
                }
            }
        
        
        })
        
        </script>
  </body>

<!-- Mirrored from mythemestore.com/friend-finder/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2019 04:40:37 GMT -->
</html>
