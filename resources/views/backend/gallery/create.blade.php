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
    <form action="{{ route('galleries.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
          <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="image">Add Image</label>
            <input type="file" name="image" class="form-control-file" id="image">
            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="category">Add Service Image</label>
            <select name="category" id="category" class="form-control"  value="{{ old('category') }}">
                <option value="Mens">Mens</option>
                <option value="Ladies">Ladies</option>
                <option value="Boys">Boys</option>
                <option value="Girls">Girls</option>
                <option value="Kids">Kids</option>
            </select>
            <span class="text-danger">{{ $errors->has('category') ? $errors->first('category') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date"  class="form-control"  value="{{ old('date') }}">
            <span class="text-danger">{{ $errors->has('date') ? $errors->first('date') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="editor1">Description</label>
            <textarea name="editor1">{{ old('editor1') }}"</textarea>
            <span class="text-danger">{{ $errors->has('editor1') ? $errors->first('editor1') : '' }}</span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div> 
@endsection
