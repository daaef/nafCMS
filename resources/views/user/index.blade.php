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
              <h4 class="card-title">List all Users</h4>
            </div>

            <div class="col-md-4 ml-auto">
              <div class="form-group pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Create New User</button>  
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
                <th>Name</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Email</th>                
                <th>Role</th>                
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @if(count($users) > 0)
                @foreach($users as $user)
                  <tr>
                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td><span class="label label-success label-rounded">{{ $user->user_role }}</span></td>
                    <td>
                      @if(($user->id) == Sentinel::getUser()->id)
                      <span class="label label-success label-rounded">You</span>
                      @else
                        <button class="btn btn-primary btn-circle waves-effect waves-light" data-toggle="modal" data-target="#exampleModal{{ $user->id }}" data-whatever="@getbootstrap" data-toggle="tooltip" title="Edit Client" data-placement="top">
                          <span class="btn-label">
                            <i class="far fa-edit"></i>
                          </span>
                        </button>

                        <button class="btn btn-danger btn-circle waves-effect waves-light" data-toggle="modal" data-target="#deleteClientModal{{ $user->id }}" data-toggle="tooltip" title="Delete Client" data-placement="top"><span class="btn-label"><i class="fa fa-trash"></i></span></button>
                        @endif
                    </td>
                  </tr>
                @endforeach

              @else
                <tr>
                  <td colspan="8" class="text-center">
                    <h4 class="card-title">No Users Created yet.</h4>
                    <p>Please create</p>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Create New User</button>
                  </td>
                </tr>
              @endif
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Email</th>                
                <th>Role</th>                
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
          <h4 class="modal-title" id="exampleModalLabel1">Create New User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form p-t-20" method="post" action="{{ route('user.store') }}">
          <div class="modal-body">            
            {{ csrf_field() }}
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>First Name</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon11" name="first_name">
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon11" name="last_name">
                  </div>
                </div>
              </div>              
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Phone Number (optional)</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-mobile"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon11" name="phone" >
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email address</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-email"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon11" name="email">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Username (optional)</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="e.g. nanichang" aria-label="Username" aria-describedby="basic-addon11" name="username">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group m-b-30">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Select User Role</label>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="user_role">
                    <option>Choose...</option>
                    @foreach($roles as $role)
                      <option value="{{ $role->slug }}" >{{ $role->name }}</option>
                    @endforeach 
                  </select>
                </div>                  
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Create User</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Update User Modal -->
  @foreach($users as $modal)
    <div class="modal fade bs-example-modal-lg" id="exampleModal{{ $modal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Editing {{ $modal->first_name }} {{ $modal->last_name }}'s Record</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form p-t-20" method="post" action="{{ route('user.update', $modal->slug) }}">
          <div class="modal-body">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
              
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>First Name</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon11" name="first_name" value="{{ $modal->first_name }}">
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon11" name="last_name" value="{{ $modal->last_name }}">
                  </div>
                </div>
              </div>              
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Phone Number (optional)</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-mobile"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon11" name="phone" value="{{ $modal->phone }}">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email address</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-email"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon11" name="email" value="{{ $modal->email }}">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Username (optional)</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="e.g. nanichang" aria-label="Username" aria-describedby="basic-addon11" name="username" value="{{ $modal->username }}">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group m-b-30">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Select User Role</label>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="user_role">
                    <option selected="">Choose...</option>
                    @foreach($roles as $role)
                      <option value="{{ $role->slug }}" >{{ $role->name }}</option>
                    @endforeach 
                  </select>
                </div>                  
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update User</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach

  @foreach($users as $modal)
     
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
          <form class="form p-t-20" method="post" action="">
            <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('GET') }}
              <input type="hidden" name="id" value="{{ $modal->slug }}">          

              <div class="row">
                <div class="col-md-12">
                  <p>Are you sure you want to delete <strong>{{ $modal->first_name }} {{ $modal->last_name }}</strong>'s Record?</p>
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