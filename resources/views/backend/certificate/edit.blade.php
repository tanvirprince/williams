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
    <form action="{{ route('certificates.update', $certificate->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $certificate->title }}">
            <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="by">Certificate By</label>
            <input type="text" class="form-control" name="by" id="by" placeholder="Certificate By" value="{{ $certificate->by }}">
            <span class="text-danger">{{ $errors->has('by') ? $errors->first('by') : '' }}</span>
        </div>
        <div class="form-group">
            <img src="{{ env('MY_APP').'/storage/app/public/'.$certificate->image }}" alt="" width="100px" height="50px">
        </div>
        <div class="form-group">
            <label for="image">Update Image</label>
            <input type="file" name="image" class="form-control-file" id="image">
            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="pdf">Update Certificate</label>
            <input type="file" name="pdf" class="form-control-file" id="pdf">
            <span class="text-danger">{{ $errors->has('pdf') ? $errors->first('pdf') : '' }}</span>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div> 
@endsection
