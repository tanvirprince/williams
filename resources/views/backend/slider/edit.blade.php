@extends('backend.layouts.master')

@section('title')
    Edit Gallery
@endsection

@section('extra-js')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>   
@endsection


@section('content')
<div class="container col-md-8">
    <form action="{{ route('sliders.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <img src="{{ asset('/storage/'.$slider->image) }}" alt="" width="100px" height="50px">
        </div>
        <div class="form-group">
            <label for="image">Add Image</label>
            <input type="file" name="image" class="form-control-file" id="image">
            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div> 
@endsection
