@extends('layout.master')
@section('styles')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection

@section('scripts')
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#roles').DataTable();
    });
  </script>
@endsection

@section('content')
  <div class="row">
    <div class="col-12">        
      <div class="row" style="margin-bottom: 20px;">
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

        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">                
              <h3 class="font-normal">Mission</h3>
              <p class="m-b-0 m-t-10">{!! $mission->mission !!}</p>
              <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20" data-toggle="modal" data-target="#exampleModal">Edit Mission</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">                
              <h3 class="font-normal">Vision</h3>
              <p class="m-b-0 m-t-10">{!! $vision->vision !!}</p>
              <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20" data-toggle="modal" data-target="#visionModal">Edit Vision</button>
            </div>
          </div>
        </div>
      </div>
      
    </div>    
  </div>

  <!-- // Create Role Modal -->
  <div class="modal fade bs-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Editing Mission</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form p-t-20" method="post" action="{{ route('mission.update', $mission->id) }}">
          <div class="modal-body">  
            {{ method_field('PUT') }}          
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Mission</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-comment-alt"></i></span>
                    </div>
                    <textarea class="form-control" rows="8" placeholder="Mission" aria-label="Role Description" aria-describedby="basic-addon11" name="mission">{!! $mission->mission !!}</textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Update Mission</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade bs-example-modal-lg" id="visionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Editing Vision</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form p-t-20" method="post" action="{{ route('vision.update', $vision->id) }}">
          <div class="modal-body">  
            {{ method_field('PUT') }}          
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Vision</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-comment-alt"></i></span>
                    </div>
                    <textarea class="form-control" rows="8" placeholder="Description" aria-label="Vision" aria-describedby="basic-addon11" name="vision">{!! $vision->vision !!}</textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Update Vision</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection