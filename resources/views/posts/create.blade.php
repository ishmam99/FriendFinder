@extends('layouts.app')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap&subset=greek" rel="stylesheet"> 
<style>
.shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
}
.shadow-textarea textarea.form-control {
    padding-left: 0.8rem;
}
.file-field.big .file-path-wrapper {
height: 3.2rem; }
.file-field.big .file-path-wrapper .file-path {
height: 3rem; }
#img-upload{
    width: 100%;
}
</style>
@section('content')
<div class="container">
   <form action="/p" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="col-8 offset-2">
           <h1>Add New Post</h1>
        <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label text-md-left">Post Caption</label>
    
           
            
              
               <textarea id="caption" rows="3" placeholder="Write something here..." class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus></textarea>
    
               @error('caption')caption
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
           
       </div>


       <div class="container">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Upload Image</label>
                    <div class="input-group">
                            
                            <input type="file" class="form-control-file" id="image" name="image">
                            @error('image')image
                                   
                                        <strong>{{ $message }}</strong>
                               
                                @enderror
                        </div>
                        <img id='img-upload'/>
                    </div>
                    <img id='img-upload'/>
                </div>
            </div>
       <div class="row pt-4"><button class="btn btn-primary">Add New Post</button> </div>
       </div>
   </form>
    
</div>

<script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#image").change(function(){
		    readURL(this);
		}); 	
	});
    </script>
@endsection
