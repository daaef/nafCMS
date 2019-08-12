@extends('layout.master')

@section('content')
<h1 class="text-center pt-5">Settings</h1>

<form method="POST" action="{{ route('setting.update', $setting->id)}}" enctype="multipart/form-data">
    {{ method_field('PUT') }}   
    {{ csrf_field() }}                   
  <div class="form-row">
    <div class="col">
      <input type="file"  placeholder="site logo" name="site_logo">
      <p>{{ $errors->first('site_logo') }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" value="{{$setting->site_title }}" name="site_title">
      <p>{{ $errors->first('site_title') }}</p>
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="col">
      <input type="text" class="form-control" value="{{$setting->site_description}}" name="site_description">
      <p>{{ $errors->first('site_description') }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" value="{{$setting->footer_copywrite }}" name="footer_copywrite">
      <p>{{ $errors->first('footer_copywrite') }}</p>
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="col">
      <input type="text" class="form-control" value="{{$setting->footer_facebook }}" name="footer_facebook">
      <p>{{ $errors->first('footer_facebook') }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" value="{{$setting->footer_twitter }}" name="footer_twitter">
      <p>{{ $errors->first('footer_twitter') }}</p>
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="col">
      <input type="text" class="form-control"value="{{$setting->footer_instagram }}" name="footer_instagram">
      <p>{{ $errors->first('footer_instagram') }}</p>
    </div>
  </div>
   <div class="form-row mt-3">
        <button type="submit" class="btn btn-success">Update</button>
   </div>
</form>
@stop