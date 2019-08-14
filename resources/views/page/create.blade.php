@extends('layout.master')

@section('styles')
  <link href="{{ URL::asset('/assets/libs/summernote/dist/summernote-bs4.css') }}" rel="stylesheet">
@endsection

@section('content')
  <form class="form" method="POST" action="{{ route('page.store')}}" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-body">            
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">                      
                    {{ csrf_field() }}                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Page Title</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon22"><i class="ti-email"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter Page Title" name="name">
                      </div>
                    </div>
                    <textarea class="summernote" name="page_content"></textarea>                      
                  </div>
                </div>
              </div>
            </div>          
          </div>
        </div>
      </div>
      <div class="col-md-3">

        <div class="card">
          <div class="card-body">          
            <h4 class="card-title">Publish</h4>
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
            

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Status</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01" name="published">
                <option value="No">No</option>
                <option value="Yes">Yes</option>
                <option value="Draft">Draft</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Parent Menu</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01" name="parent_menu">
                @foreach($menus as $menu)
                  <option value="{{ $menu->slug }}">{{ $menu->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Before</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01" name="before">
                @foreach($menus as $menu)
                  <option value="{{ $menu->slug }}">{{ $menu->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="custom-control custom-checkbox" style="margin-bottom: 20px;">
              <input type="checkbox" name="child_menu" class="custom-control-input" id="customCheck2" checked="">
              <label class="custom-control-label" for="customCheck2">Child Menu</label>
            </div>
            
            <button type="submit" class="btn btn-success m-r-10"><i class="fa fa-check"></i> Publish Page</button>
          </div>
        </div> 

        <div class="card">
          <div class="card-body">          
            <h4 class="card-title">Feature Image</h4>
            <div class="form-group">
              <label>Select an Image</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                </div>
                <input type="file" class="form-control" placeholder="Feature Image" name="feature_image" aria-label="Feature Image" aria-describedby="basic-addon11">
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </form>
@endsection

@section('scripts')
  <script src="{{ URL::asset('/assets/libs/summernote/dist/summernote-bs4.min.js') }}"></script>
  <script>
    /************************************/
    //default editor
    /************************************/
    $('.summernote').summernote({
      height: 350, // set editor height
      minHeight: null, // set minimum height of editor
      maxHeight: null, // set maximum height of editor
      focus: false // set focus to editable area after initializing summernote
    });

    /************************************/
    //inline-editor
    /************************************/
    $('.inline-editor').summernote({
      airMode: true
    });

    /************************************/
    //edit and save mode
    /************************************/
    window.edit = function() {
      $(".click2edit").summernote()
    },
    window.save = function() {
      $(".click2edit").summernote('destroy');
    }

    var edit = function() {
      $('.click2edit').summernote({ focus: true });
    };

    var save = function() {
      var markup = $('.click2edit').summernote('code');
      $('.click2edit').summernote('destroy');
    };

    /************************************/
    //airmode editor
    /************************************/
    $('.airmode-summer').summernote({
      airMode: true
    });
  </script>
@endsection

