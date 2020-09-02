@extends('backend.layouts.master')

@section('title')
    Service List
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
      <h6 class="m-0 font-weight-bold text-primary">Gallery List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
          </thead>
          {{-- <tfoot>
            <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Date</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
          </tfoot> --}}
          <tbody>
            @foreach ($services as $service)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $service->name }}</td>
              <td><img src="{{ asset('/storage/'.$service->image) }}" alt="" width="100px" height="100px"></td>
              <td>
                <a href="{{ route('service.edit', $service->id) }}" class="btn btn-sm btn-primary"> Edit </a>
                <a href="{{ route('service.delete', $service->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a>
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
