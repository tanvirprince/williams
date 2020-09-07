@extends('backend.layouts.master')
@section('title')
    Create Service
@endsection


@section('content')
<div class="container col-md-8">
  <form action="{{ route('service.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Service Name">
      </div>
      <div class="form-group">
          <label for="exampleFormControlFile1">Add Service Image</label>
          <input type="file" name="image" class="form-control-file" id="image">
        </div>
      <button type="submit" class="btn btn-primary">Create Service Process</button>

      <a href="{{ route('service.index') }}" class="btn btn-info"> <i class="fas fa-flag"></i> Service List</a>
  </form>
</div>
@endsection
