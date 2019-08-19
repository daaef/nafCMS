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
              <h4 class="card-title">Settings</h4>
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

        @foreach($settings as $setting)
        <form class="form col-md-7"  method="post" action="{{ route('setting.update', $setting->id)}}" enctype="multipart/form-data">   
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
                    <input type="text" class="form-control" placeholder="title" aria-label="title" aria-describedby="basic-addon11" name="site_title" value="{{$setting->site_title}}">
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
                    <textarea class="form-control" name="site_description" rows="5" aria-label="site Description" aria-describedby="basic-addon11">
                      {{$setting->site_description}}
                    </textarea>
                    <!-- <input type="text" class="form-control" placeholder="News Description" aria-label="News Description" aria-describedby="basic-addon11" name="description"> -->
                  </div>
                </div>
              </div>
            </div>

             <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Site Logo</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-file"></i></span>
                    </div>
                        <img src="../uploads/logos/thumbnails/{{$setting->site_logo}}" alt="site logo" >
                        <input type="file" class="form-control" placeholder="site logo" name="site_logo" aria-label="Username" aria-describedby="basic-addon11">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Footer copywrite</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-text"></i></span>
                    </div>
                    <input type="text" class="form-control" value="{{$setting->footer_copywrite}}" placeholder="footer copywrite" aria-label="tags" aria-describedby="basic-addon11" name="footer_copywrite">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <label>Facebook link</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-text"></i></span>
                    </div>
                    <input type="text" class="form-control" value="{{$setting->footer_facebook}}" placeholder="facebook link" aria-label="tags" aria-describedby="basic-addon11" name="footer_facebook">
                  </div>
                </div>
              </div>



              <div class="col-md-4">
                <div class="form-group">
                  <label>Twitter link</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-text"></i></span>
                    </div>
                    <input type="text" class="form-control" value="{{$setting->footer_twitter}}" placeholder="twitter link" aria-label="tags" aria-describedby="basic-addon11" name="footer_twitter">
                  </div>
                </div>
              </div>



              <div class="col-md-4">
                <div class="form-group">
                  <label>Instagram link</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon11"><i class="ti-text"></i></span>
                    </div>
                    <input type="text" class="form-control" value="{{$setting->footer_instagram}}" placeholder="instagram link" aria-label="tags" aria-describedby="basic-addon11" name="footer_instagram">
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success">Update Menu</button>
            </div>


          </div>
        </form>
        @endforeach
      </div>
    </div>
    </div>
</div>
@endsection