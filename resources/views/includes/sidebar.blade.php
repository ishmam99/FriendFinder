<div class="col-md-3 static">
        <div class="profile-card">
            <img src="{{Auth::user()->profile->profileImage()}}" alt="user" class="profile-photo" />
        <h5><a href="/profile/{{Auth::user()->profile->id}}" class="text-white">{{Auth::user()->username}}</a></h5>
            <a href="/follower" class="text-white"><i class="ion ion-android-person-add"></i> {{Auth::user()->profile->followers->count()}} followers</a>
        </div><!--profile card ends-->
        <ul class="nav-news-feed">
          <li><i class="icon ion-ios-paper"></i><div><a href="/test">My Newsfeed</a></div></li>
          
          <li><i class="icon ion-ios-people-outline"></i><div><a href="/friends">Friends</a></div></li>
          <li><i class="icon ion-chatboxes"></i><div><a href="newsfeed-messages.html">Messages</a></div></li>
          <li><i class="icon ion-images"></i><div><a href="newsfeed-images.html">Images</a></div></li>
          <li><i class="icon ion-ios-videocam"></i><div><a href="newsfeed-videos.html">Videos</a></div></li>
        </ul><!--news-feed links ends-->
        <div id="chat-block">
          <div class="title">Following</div>
          <ul class="online-users list-inline">
            @foreach ($friends as $friend)
                
           
          <li><a href="newsfeed-messages.html" title="{{$friend->user->title}}"><img src="{{$friend->user->profile->profileImage()}}" alt="user"
            class="img-responsive profile-photo"/><span class="online-dot"></span></a></li>
            @endforeach
            
          </ul>
        </div><!--chat block ends-->
      </div>