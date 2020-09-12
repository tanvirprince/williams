@extends('backend.layouts.master')

@section('title')
    Certificate List
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
      <h6 class="m-0 font-weight-bold text-primary"><span>Certificate List</span> <span style="float: right;"><a class="btn btn-success" href="{{ route('certificates.create') }}">Create new certificate</a></span></h6>
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
                <th>Title</th>
                <th>By</th>
                <th>Image</th>
                <th>PDF</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($certificates as $certificate)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $certificate->title }}</td>
              <td>{{ $certificate->by }}</td>
              <td><img src="{{ asset('/storage/'.$certificate->image) }}" alt="" width="100px" height="50px"></td>
              <td><a target="__blank" href="{{ asset('/storage/'.$certificate->pdf) }}">Click Here</a></td>
              <td>
                {{-- <a href="{{ route('certificates.edit', $certificate->id) }}" class="btn btn-sm btn-primary"> Edit </a> --}}
                <a href="{{ route('certificates.delete', $certificate->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a>
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
