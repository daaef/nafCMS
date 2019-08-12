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
<<<<<<< HEAD
              <h4 class="card-title">List all News Category</h4>
=======
              <h4 class="card-title">List all News Categories</h4>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
            </div>

            <div class="col-md-4 ml-auto">
              <div class="form-group pull-right">
<<<<<<< HEAD
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Create News Category</button>  
=======
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Create New Category</button>  
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
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
<<<<<<< HEAD
                <th>News Category Name</th>
                <th>News Category Description</th>
                <th>News Category Slug</th>
=======
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Slug</th>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @if(count($news_categories) > 0)
<<<<<<< HEAD
              @foreach($news_categories as $news_category)
                  <tr>
                    <td>{{ $news_category->name }}</td>  
                    <td>{{ $news_category->description }}</td>              
                    <td>{{ $news_category->slug }}</td>                    
=======
                @foreach($news_categories as $news_category)
                  <tr>
                    <td>{{ $news_category->name }}</td>
                    <td>{{ $news_category->description }}</td>
                    <td>{{ $news_category->slug }}</td>                   
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
                    <td>
                      <button class="btn btn-primary btn-circle waves-effect waves-light" data-toggle="modal" data-target="#exampleModal{{ $news_category->id }}" data-whatever="@getbootstrap" data-toggle="tooltip" title="Edit Client" data-placement="top">
                        <span class="btn-label">
                          <i class="far fa-edit"></i>
                        </span>
                      </button>

                      <button class="btn btn-danger btn-circle waves-effect waves-light" data-toggle="modal" data-target="#deleteClientModal{{ $news_category->id }}" data-toggle="tooltip" title="Delete Client" data-placement="top"><span class="btn-label"><i class="fa fa-trash"></i></span></button>
                    </td>
                  </tr>
                @endforeach

              @else
                <tr>
                  <td colspan="8" class="text-center">
                    <h4 class="card-title">No News Category Created yet.</h4>
                    <p>Please create</p>
<<<<<<< HEAD
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Create News Category</button>
=======
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Create a Category</button>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
                  </td>
                </tr>
              @endif
            </tbody>
            <tfoot>
              <tr>
<<<<<<< HEAD
                <th>News Category Name</th>
                <th>News Category Description</th>
                <th>News Category Slug</th>
=======
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Slug</th>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- // Create Role Modal -->
  <div class="modal fade bs-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
<<<<<<< HEAD
          <h4 class="modal-title" id="exampleModalLabel1">Create News Category</h4>
=======
          <h4 class="modal-title" id="exampleModalLabel1">Create New Category</h4>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
<<<<<<< HEAD
        <form class="form p-t-20" method="post" action="{{ route('newsCategory.store')}}">
=======
        <form class="form p-t-20" method="post" action="{{ route('newsCategory.store') }}">
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
          <div class="modal-body">            
            {{ csrf_field() }}
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
<<<<<<< HEAD
                  <label>News Category Name</label>
=======
                  <label>Category Name</label>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                    </div>
<<<<<<< HEAD
                    <input type="text" class="form-control" placeholder="News Category Name" aria-label="News Category Name" aria-describedby="basic-addon11" name="name">
=======
                    <input type="text" class="form-control" placeholder="Category Title" aria-label="Category Title" aria-describedby="basic-addon11" name="name">
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
                  </div>
                </div>
              </div>
            </div>
<<<<<<< HEAD

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>News Category Description</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="News Category Description" aria-label="News Category Description" aria-describedby="basic-addon11" name="description">
=======
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-comment-alt"></i></span>
                    </div>
                    <textarea class="form-control" placeholder="Description" aria-label="Role Description" aria-describedby="basic-addon11" name="description"></textarea>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<<<<<<< HEAD
            <button type="submit" class="btn btn-success">Create Menu</button>
=======
            <button type="submit" class="btn btn-success">Create Category</button>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Update User Modal -->
  @foreach($news_categories as $modal)
    <div class="modal fade bs-example-modal-lg" id="exampleModal{{ $modal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
<<<<<<< HEAD
          <h4 class="modal-title" id="exampleModalLabel1">Editing {{ $modal->name }} Menu</h4>
=======
          <h4 class="modal-title" id="exampleModalLabel1">Editing {{ $modal->name }}</h4>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
<<<<<<< HEAD
        <form class="form p-t-20" method="post" action="{{ route('newsCategory.update', $modal->slug)}}">
=======
        <form class="form p-t-20" method="post" action="{{ route('newsCategory.update', $modal->slug) }}">
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
          <div class="modal-body">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
              
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
<<<<<<< HEAD
                  <label>Menu Name</label>
=======
                  <label>Category Name</label>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Menu Name" aria-label="Menu Name" aria-describedby="basic-addon11" name="name" value="{{ $modal->name }}">
                  </div>
                </div>
              </div>
            </div>

<<<<<<< HEAD
             <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Menu Description</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Menu Name" aria-label="Menu Name" aria-describedby="basic-addon11" name="description" value="{{ $modal->description }}">
=======
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-comment-alt"></i></span>
                    </div>
                    <textarea class="form-control" placeholder="Description" aria-label="Role Description" aria-describedby="basic-addon11" name="description">
                      {{ $modal->description }}
                    </textarea>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
                  </div>
                </div>
              </div>
            </div>
<<<<<<< HEAD
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Menu</button>
=======

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Category</button>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
          </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach

  @foreach($news_categories as $modal)
     
    <!-- ///////////////////////////////////////// -->

    <div class="modal fade bs-example-modal-lg" id="deleteClientModal{{ $modal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel1">Warning</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
<<<<<<< HEAD
          <form class="form p-t-20" method="post" action="{{ route('newsCategory.delete', $modal->slug) }}">
=======
          <form class="form p-t-20" method="post" action="">
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
            <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('GET') }}
              <input type="hidden" name="id" value="{{ $modal->slug }}">          

              <div class="row">
                <div class="col-md-12">
<<<<<<< HEAD
                  <p>Are you sure you want to delete this News Category?</p>
=======
                  <p>Are you sure you want to delete this Category?</p>
>>>>>>> f3c9028e3e3ee0295c69653b1e1581b61a714c63
                </div>
              </div>                                 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-warning">Confirm Delete</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  @endforeach
@endsection