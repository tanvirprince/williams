@extends('backend.layouts.master')
@section('title')
    About Company
@endsection
@section('extra-js')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection

@section('content')
<div class="container col-md-8">
  <form action="{{ route('about.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" value="{{ $about->title  }}" name="title" id="name" placeholder="Ttile">
      </div>
      <div class="form-group">
          <label for="editor1">Description</label>
          <textarea name="body">{{ $about->body }}</textarea>
          <span class="text-danger">{{ $errors->has('body') ? $errors->first('body') : '' }}</span>
      </div>
      <div class="form-group">
          <label for="exampleFormControlFile1">Add about Image</label>
          <input type="file" name="image" class="form-control-file" id="image">
          <img src="{{ asset('/storage/'.$about->image) }}" height="250px" width="250px">
        </div>

      <button type="submit" class="btn btn-primary">Update About Company </button>

  </form>
</div>
@endsection
