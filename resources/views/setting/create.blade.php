@extends('layout.master')

@section('content')

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-8">
              <h4 class="card-title">Settings</h4>
            </div>
          </div>
          @if(session('error'))
            <div class="alert alert-danger alert-dismissable"> 
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ session('error') }}
            </div>
          @endif

<<<<<<< HEAD
<form method="POST" action="{{ route('setting.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}                   
  <div class="form-row">
    <div class="col">
      <input type="file"  placeholder="site logo" name="site_logo">
      <p>{{ $errors->first('site_logo') }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="site title" name="site_title">
      <p>{{ $errors->first('site_title') }}</p>
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="col">
      <textarea type="text" class="form-control" placeholder="site description" name="site_description"></textarea>
      <p>{{ $errors->first('site_description') }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="footer copywrite" name="footer_copywrite">
      <p>{{ $errors->first('footer_copywrite') }}</p>
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="footer facebook" name="footer_facebook">
      <p>{{ $errors->first('footer_facebook') }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="footer twitter" name="footer_twitter">
      <p>{{ $errors->first('footer_twitter') }}</p>
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="footer instagram" name="footer_instagram">
      <p>{{ $errors->first('footer_instagram') }}</p>
=======
          @if(session('success'))
            <div class="alert alert-success alert-dismissable"> 
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ session('success') }}
            </div>
          @endif        
          
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-subtitle">Site wide settings</h5>
                    <form class="form p-t-20" method="POST" action="{{ route('store.settings')}}" enctype="multipart/form-data">
                      {{ csrf_field() }}    
                      <div class="form-group">
                        <label>Site Logo</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                          </div>
                          <input type="file" class="form-control" placeholder="site logo" name="site_logo" aria-label="Username" aria-describedby="basic-addon11">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Site Title</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon22"><i class="ti-email"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Site title" name="site_title" value="{{ $settings->site_title }}" aria-label="Site Title" aria-describedby="basic-addon22">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Site Description</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon33"><i class="ti-lock"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Site description" name="site_description" value="{{ $settings->site_description }}" aria-label="Site description" aria-describedby="basic-addon33">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Footer Copyright</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Footer Copyright" name="footer_copywrite" value="{{ $settings->footer_copywrite }}" aria-label="Footer Copyright" aria-describedby="basic-addon4">
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Footer Facebook</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon4"><i class="ti-facebook"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Footer Copyright" name="footer_facebook" value="{{ $settings->footer_facebook }}" aria-label="Footer Copyright" aria-describedby="basic-addon4">
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Footer Twitter</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon4"><i class="ti-twitter"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Footer Copyright" name="footer_twitter" value="{{ $settings->footer_twitter }}" aria-label="Footer Copyright" aria-describedby="basic-addon4">
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Footer Instagram</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Footer Copyright" name="footer_instagram" value="{{ $settings->footer_instagram }}" aria-label="Footer Copyright" aria-describedby="basic-addon4">
                        </div>
                      </div>
                        
                      <button type="submit" class="btn btn-success m-r-10">Update Settings</button>
                      <button type="submit" class="btn btn-dark">Cancel</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        
      </div>
>>>>>>> 995025017288a320d6e267ff3f5e6a6123b3c416
    </div>
  </div>

@endsection