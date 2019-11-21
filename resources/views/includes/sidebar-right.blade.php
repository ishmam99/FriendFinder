<div class="col-md-2 static">
        <div class="suggestions" id="sticky-sidebar">
          <h4 class="grey">Who to Follow</h4>
          @foreach ($people as $p)
              
          
          <div class="follow-user">
            <img src="{{$p->user->profile->profileImage()}}" alt="" class="profile-photo-sm pull-left" />
            <div>
            <h5><a href="/profile/{{$p->user->id}}">{{$p->user->username}}</a></h5>
              <a href="/profile/{{$p->user->id}}" class="text-green">Follow</a>
            </div>
          </div>
        @endforeach
        </div>
      </div>