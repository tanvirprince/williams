@extends('backend.layouts.master')
@section('title')
    Create Service
@endsection


@section('content')
<div class="container col-md-8">
  <form action="{{ route('service.store')}}" method="POST">
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
    
      <button type="submit" class="btn btn-success"> <i class="fas fa-flag"></i> Service List</button>
  </form>
</div>   
@endsection
