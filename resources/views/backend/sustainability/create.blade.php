@extends('backend.layouts.master')

@section('title')
    Create a Gallery
@endsection

@section('extra-js')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>   
@endsection


@section('content')
<div class="container col-md-8">
    <form action="{{ route('sustainabilities.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
          <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="editor1">Description</label>
            <textarea name="editor1">{{ old('editor1') }}</textarea>
            <span class="text-danger">{{ $errors->has('editor1') ? $errors->first('editor1') : '' }}</span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div> 
@endsection
