@extends('layouts.app')

@section('content')
<h1 class="text-center pt-5">Sliders</h1>

<form method="POST" action="{{ route('slider.update', $slider->slug)}}" enctype="multipart/form-data">
    {{ method_field('PUT') }}   
    {{ csrf_field() }}                   
    <div class="form-row">
    <div class="col">
      <input type="file"  placeholder="slider Image" name="slider_image" value="{{$slider->slider_image}}">
      <p>{{ $errors->first('slider_image') }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder=" title" name="title" value="{{$slider->title}}">
      <p>{{ $errors->first('title') }}</p>
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="slider description" name="description" value="{{$slider->slider_description}}">
      <p>{{ $errors->first('description') }}</p>
    </div>
  </div>
   <div class="form-row mt-3">
        <button type="submit" class="btn btn-success">Update</button>
   </div>
</form>
@stop