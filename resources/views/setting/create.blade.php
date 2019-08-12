@extends('layout.master')

@section('content')

<h1 class="text-center pt-5">Settings</h1>

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
    </div>
  </div>
   <div class="form-row mt-3">
        <button type="submit" class="btn btn-success">Create</button>
   </div>
</form>

@endsection