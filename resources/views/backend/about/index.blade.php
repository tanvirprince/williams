@extends('backend.layouts.master')

@section('title')
    Brnad List
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
        <h6 class="m-0 font-weight-bold text-primary"><span>Brand List</span> <span style="float: right;"><a class="btn btn-success" href="{{ route('brand.create') }}">Create new Brand</a></span></h6>
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
            @foreach ($brands ?? '' as $brand)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $brand->name }}</td>
              <td><img src="{{ asset('/storage/'.$brand->image) }}" alt="" width="100px" height="100px"></td>
              <td>

                <a href="{{ route('brand.delete', $brand->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a>
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
