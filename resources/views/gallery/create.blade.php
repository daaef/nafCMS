@extends('layout.master')

@section('content')

<h1 class="text-center pt-5">Gallery</h1>

<form method="POST" action="{{ route('gallery.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}                   
  <div class="form-row">
    <div class="col">
      <input type="file"  placeholder="gallery Image" name="image">
      <p>{{ $errors->first('image') }}</p>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder=" title" name="title">
      <p>{{ $errors->first('title') }}</p>
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="col">
      <textarea type="text" class="form-control" placeholder="slider description" name="description"></textarea>
      <p>{{ $errors->first('description') }}</p>
    </div>
  </div>
   <div class="form-row mt-3">
        <button type="submit" class="btn btn-success">Create</button>
   </div>
</form>

@endsection