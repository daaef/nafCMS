@extends('layout.master')

@section('content')

<h1 class="text-center pt-5">Gallery</h1>

<form method="POST" action="{{ route('gallery.update', $gallery->slug)}}" enctype="multipart/form-data">
    {{ method_field('PUT') }}   
    {{ csrf_field() }}                   
  <div class="form-row">
    <div class="col">
      <input type="file"  placeholder="gallery Image" name="image">
      <p><img src="uploads/gallery/thumbs/{{$gallery->image}}" alt=""></p>
      <p>{{ $errors->first('image') }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder=" title" name="title" value="{{$gallery->title}}">
      <p>{{ $errors->first('title') }}</p>
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="slider description" name="description" value="{{$gallery->description}}">
      <p>{{ $errors->first('description') }}</p>
    </div>
  </div>
   <div class="form-row mt-3">
        <button type="submit" class="btn btn-success">update</button>
   </div>
</form>

@endsection