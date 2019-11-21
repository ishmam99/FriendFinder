<div class="create-post">
        <div class="row">
            <div class="col-md-7 col-sm-7">
            <form action="/p" enctype="multipart/form-data" method="POST">
              @csrf
          <div class="form-group">
            <img src="{{Auth::user()->profile->profileImage()}}" alt="" class="profile-photo-md" />
            <textarea name="caption" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
          </div>
        </div>
            <div class="col-md-5 col-sm-5">
          <div class="tools">
            <ul class="publishing-tools list-inline">
              <li> <label for="exampleTextarea"><i class="ion-compose" style="font-size:22px"></i> </label></li>
              <li>
                    <div class="image-upload">
                        <label for="file-input">
                            <i class="ion-images" style="font-size:22px"></i>
                        </label>
                        <input id="file-input" type="file" name="image" id="image"/>
                        @error('image')image
                       
                        <strong>{{ $message }}</strong>
               
                @enderror
                    </div></li>
              </ul>
            <button class="btn btn-primary pull-right">Publish</button>
          </div>
        </div>
      </form>
        </div>
    </div>