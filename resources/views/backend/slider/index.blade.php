@extends('backend.layouts.master')

@section('title')
    Gallery List
@endsection

@section('extra-css')
  <!-- Custom styles for this page -->
  <link href="{{ asset('/') }}backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> 
@endsection

@section('extra-js')
    <!-- Page level plugins -->
    <script src="{{ asset('/') }}backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}backend/js/demo/datatables-demo.js"></script>
@endsection


@section('content')
<div class="container col-md-12">
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><span>Gallery List</span> <span style="float: right;"><a class="btn btn-success" href="{{ route('sliders.create') }}">Add new Slider</a></span></h6>
    </div>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>SL</th>
                <th>Slider</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($sliders as $slider)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><img src="{{ asset('/storage/'.$slider->image) }}" alt="" width="100px" height="50px"></td>
              <td>
                <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-sm btn-primary"> Edit </a>
                <a href="{{ route('sliders.delete', $slider->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div> 
@endsection
