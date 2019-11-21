
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

<div class="container">
   <form action="/p" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="col-8 offset-2">
         
        <div class="form-group row">
        
           
            
              
               <textarea id="caption" rows="3" placeholder="Write something here..." class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus></textarea>
    
               @error('caption')caption
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
               <div class="input-group">
                            
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')image
                       
                            <strong>{{ $message }}</strong>
                   
                    @enderror
            </div>
              <button class="btn btn-primary">Add New Post</button> </div>
           
       </div>


       <div class="container">
            <div class="col-md-6">
                <div class="form-group">
                    
                    
                       
                    </div>
                   
                </div>
            </div>
       
       </div>
   </form>
    
</div>
