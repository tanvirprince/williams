@extends('backend.layouts.master')

@section('title')
    Create a Gallery
@endsection

@section('content')
<div class="container col-md-8">
    <form action="{{ route('certificates.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
          <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
        </div>
        <div class="form-group">
          <label for="by">Certificate By</label>
          <input type="text" class="form-control" name="by" id="by" placeholder="Certificate By" value="{{ old('by') }}">
          <span class="text-danger">{{ $errors->has('by') ? $errors->first('by') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="image">Add Image</label>
            <input type="file" name="image" class="form-control-file" id="image">
            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="pdf">Add Certificate</label>
            <input type="file" name="pdf" class="form-control-file" id="pdf">
            <span class="text-danger">{{ $errors->has('pdf') ? $errors->first('pdf') : '' }}</span>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div> 
@endsection
