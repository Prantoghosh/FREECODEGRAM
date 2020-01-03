@extends('layouts.app')

@section('content')
<div class="container">

 <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <h1> Add New Post</h1>
            <div class="form-group row">
                 <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <input id="caption"
                           type="text"
                           class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                           name="caption"
                           value="{{ old('caption') }}"
                           autocomplete="caption" autofocus>

                    @error('caption')
                        
                            <strong>{{ $message }}</strong>
                        
                    @enderror
            
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label">Post image</label>
                <input type="file" class="form-control-file" name="image">

                 @error('image')
                          <strong>{{ $message }}</strong>
                 @enderror
            </div>

            <div class="row pt-4">
                <button class="btn btn-primary"> Add Post</button>

            </div>

        </div>
       
 

   </div>

 </form>
</div>
@endsection
