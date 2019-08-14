@extends('layout.master')
@section('styles')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection

@section('scripts')
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#users').DataTable();
    });
  </script>
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-8">
              <h4 class="card-title">List all Pages</h4>
            </div>

            <div class="col-md-4 ml-auto">
              <div class="form-group pull-right">
                <a class="btn btn-success" href="{{ route('page.create') }}">
                  Create New Page
                </a>  
              </div>
            </div>
          </div>
          @if(session('error'))
            <div class="alert alert-danger alert-dismissable"> 
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ session('error') }}
            </div>
          @endif

          @if(session('success'))
            <div class="alert alert-success alert-dismissable"> 
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ session('success') }}
            </div>
          @endif        
        
        <div class="table-responsive">
          <table id="users" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Page Title</th>
                <!-- <th>Category Description</th> -->
                <th>Slug</th>
                <th>Published</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @if(count($pages) > 0)
                @foreach($pages as $page)
                  <tr>
                    <td>{{ $page->name }}</td>
                    <!-- <td>{{ $page->description }}</td> -->
                    
                    <td>{{ $page->slug }}</td>
                    <td>{{ $page->published }}</td>
                    <td>
                      <button class="btn btn-primary btn-circle waves-effect waves-light" data-toggle="modal" data-target="#exampleModal{{ $page->id }}" data-whatever="@getbootstrap" data-toggle="tooltip" title="Edit Client" data-placement="top">
                        <span class="btn-label">
                          <i class="far fa-edit"></i>
                        </span>
                      </button>

                      <button class="btn btn-danger btn-circle waves-effect waves-light" data-toggle="modal" data-target="#deleteClientModal{{ $page->id }}" data-toggle="tooltip" title="Delete Client" data-placement="top"><span class="btn-label"><i class="fa fa-trash"></i></span></button>
                    </td>
                  </tr>
                @endforeach
              @else
                <tr>
                  <td colspan="8" class="text-center">
                    <h4 class="card-title">No Page Created yet.</h4>
                    <p>Please create</p>
                    <a class="btn btn-success" href="{{ route('page.create') }}">
                      Create New Page
                    </a>
                  </td>
                </tr>
              @endif
            </tbody>
            <tfoot>
              <tr>
                <th>Page Title</th>
                <!-- <th>Category Description</th> -->
                <th>Slug</th>
                <th>Published</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection