@extends('layouts.app')

@section('content')

<section class="posts endless-pagination" data-next-page="{{ $posts->nextPageUrl() }}">
    <div class="container">
        <div class="d-flex justify-content-end">
        <div class="col-md-2 ">
       
           <h2>new users</h2>
           @foreach ($peoples as $people)
       <h6> <a href="/profile/{{$people->id}}" style="font-weight-bolder">{{$people->username}}</a> |</h6>
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
            </div>--}}
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
@endsection