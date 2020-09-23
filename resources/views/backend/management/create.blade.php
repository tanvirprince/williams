@extends('backend.layouts.master')
@section('title')
    About Company
@endsection
@section('extra-css')
    
@endsection

@section('extra-js')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>   
@endsection

@section('content')
<div class="container col-md-8">
    @if (!$management)
    <form action="{{ route('managements.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="Name">
          <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
        </div>
        <div class="form-group">
          <label for="designation">Designation</label>
          <input type="text" class="form-control" value="{{ old('designation') }}" name="designation" id="designation" placeholder="Designation">
          <span class="text-danger">{{ $errors->has('designation') ? $errors->first('designation') : '' }}</span>
        </div>
        <div class="form-group">
          <label for="file">Add about Image</label>
          <input type="file" name="image" class="form-control-file" id="image">
          {{-- <img src="{{ asset('/storage/'.$about->image) }}" height="250px" width="250px"> --}}
          <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
       </div>
        <div class="form-group">
          <label for="editor1">Description</label>
          <textarea name="editor1">{{ old('editor1') }}</textarea>
          <span class="text-danger">{{ $errors->has('editor1') ? $errors->first('editor1') : '' }}</span>
         </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    @else
    <form action="{{ route('managements.update', $management->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" value="{{ $management->name }}" name="name" id="name" placeholder="Name">
          <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
        </div>
        <div class="form-group">
          <label for="designation">Designation</label>
          <input type="text" class="form-control" value="{{ $management->designation }}" name="designation" id="designation" placeholder="Designation">
          <span class="text-danger">{{ $errors->has('designation') ? $errors->first('designation') : '' }}</span>
        </div>
        <img src="{{ env('MY_APP').'/storage/app/public/'.$management->image }}" height="250px" width="250px">
        <div class="form-group">
          <label for="file">Add about Image</label>
          <input type="file" name="image" class="form-control-file" id="image">
       </div>
        <div class="form-group">
          <label for="editor1">Description</label>
          <textarea name="editor1">{{ $management->editor1 }}</textarea>
          <span class="text-danger">{{ $errors->has('editor1') ? $errors->first('editor1') : '' }}</span>
         </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @endif
</div>
@endsection