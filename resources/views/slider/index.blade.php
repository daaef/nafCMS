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
              <h4 class="card-title">List Sliders</h4>
            </div>

            <div class="col-md-4 ml-auto">
              <div class="form-group pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Create Slider</button>  
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
                <th>Image Title</th>
                <th>Image Description</th>
                <th>Image</th>
                <th>Image Slug</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @if(count($sliders) > 0)
              @foreach($sliders as $slider)
                  <tr>
                    <td>{{ $slider->title }}</td>  
                    <td><img src="../uploads/sliders/thumbnails/{{$slider->image}}" alt="slider" /></td>    
                    <td>{{ $slider->description }}</td>     
                    <td>{{ $slider->slug }}</td>                                       
                    <td>
                      <button class="btn btn-primary btn-circle waves-effect waves-light" data-toggle="modal" data-target="#exampleModal{{ $slider->id }}" data-whatever="@getbootstrap" data-toggle="tooltip" title="Edit Client" data-placement="top">
                        <span class="btn-label">
                          <i class="far fa-edit"></i>
                        </span>
                      </button>

                      <button class="btn btn-danger btn-circle waves-effect waves-light" data-toggle="modal" data-target="#deleteClientModal{{ $slider->id }}" data-toggle="tooltip" title="Delete Client" data-placement="top"><span class="btn-label"><i class="fa fa-trash"></i></span></button>
                    </td>
                  </tr>
                @endforeach

              @else
                <tr>
                  <td colspan="8" class="text-center">
                    <h4 class="card-title">No Slider Created yet.</h4>
                    <p>Please create</p>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Create Slider</button>
                  </td>
                </tr>
              @endif
            </tbody>
            <tfoot>
            <tr>
                <th>Image Title</th>
                <th>Image Description</th>
                <th>Image Slug</th>
                <th>Image</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
 </div>

 <!-- adding a slider -->


 <div class="modal fade bs-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Add Slider Image</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form p-t-20" method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data">
          <div class="modal-body">            
            {{ csrf_field() }}
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Image Title</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-text"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Image title" aria-label="Category Title" aria-describedby="basic-addon11" name="title">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-comment-alt"></i></span>
                    </div>
                    <textarea class="form-control" placeholder="Description" aria-label="Role Description" aria-describedby="basic-addon11" name="description"></textarea>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Image</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-file"></i></span>
                    </div>
                    <input type="file" class="form-control" placeholder="Image" aria-label="Gallery image" aria-describedby="basic-addon11" name="image">
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Create Slider</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- updating slider -->


  @foreach($sliders as $modal)
    <div class="modal fade bs-example-modal-lg" id="exampleModal{{ $modal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel1">Editing {{ $modal->title }} Image</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form p-t-20" method="post" action="{{ route('slider.update', $modal->slug) }}" enctype="multipart/form-data">
          <div class="modal-body">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
              
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Title</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-text"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="title" aria-label="title" aria-describedby="basic-addon11" name="title" value="{{ $modal->title}}">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-text"></i></span>
                    </div>
                    <textarea class="form-control" name="description" rows="5" aria-label="News Description" aria-describedby="basic-addon11">
                    {{ $modal->description }}
                    </textarea>
                    <!-- <input type="text" class="form-control" placeholder="News Description" aria-label="News Description" aria-describedby="basic-addon11" name="description"> -->
                  </div>
                </div>
              </div>
            </div>

            
             <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Feature Image</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-file"></i></span>
                    </div>
                    <input type="file" class="form-control" aria-label="title" aria-describedby="basic-addon11" name="image" value="{{ $modal->image}}">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Slider</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach

  <!-- deleting slider -->


  @foreach($sliders as $modal)
     
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
           <form class="form p-t-20" method="post" action="{{ route('slider.delete', $modal->slug)}}" >
             <div class="modal-body">
               {{ csrf_field() }}
               {{ method_field('GET') }}
               <input type="hidden" name="id" value="{{ $modal->slug }}">          
 
               <div class="row">
                 <div class="col-md-12">
                   <p>Are you sure you want to delete this image?</p>
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