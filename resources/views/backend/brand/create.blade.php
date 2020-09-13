@extends('backend.layouts.master')
@section('title')
    Create Brtand
@endsection


@section('content')
<div class="container col-md-8">
  <form action="{{ route('brand.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Brand Name">
      </div>
      <div class="form-group">
          <label for="exampleFormControlFile1">Add Brand Image</label>
          <input type="file" name="image" class="form-control-file" id="image">
        </div>
      <button type="submit" class="btn btn-primary">Create Brand </button>

      <a href="{{ route('brand.index') }}" class="btn btn-info"> <i class="fas fa-flag"></i> Brand List</a>
  </form>
</div>
@endsection
