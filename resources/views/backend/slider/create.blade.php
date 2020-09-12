@extends('backend.layouts.master')

@section('title')
    Create a Slider
@endsection



@section('content')
<div class="container col-md-8">
    <form action="{{ route('sliders.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Add Image</label>
            <input type="file" name="image" class="form-control-file" id="image">
            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div> 
@endsection
