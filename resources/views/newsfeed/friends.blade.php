<!DOCTYPE html>
<html lang="en">
	
@include('includes.head')
<title>Friends</title>


  <body>

    <!-- Header-->
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



           <!-- Friend List
            ================================================= -->

            <div class="friend-list">
                    <div class="row"> 
                        @foreach ($friends as $friend)
                        <div class="col-md-6 col-sm-6">
                           
                                
                           
                      <div class="friend-card">
                          <img src="{{$friend->user->profile->cover()}}" alt="profile-cover" class="img-responsive cover" />
                          <div class="card-info">
                          <img src="{{$friend->user->profile->profileImage()}}" alt="user" class="profile-photo-lg" />
                          <div class="friend-info">
                   
                          <h5><a href="/profile/{{$friend->user->id}}" class="profile-link">{{$friend->user->username}}</a></h5>
                          <p>{{$friend->user->title}}</p>
                          </div>
                        </div>
                      </div>
                      
                       
                        </div> @endforeach
                        </div>
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
    
  </body>


</html>
