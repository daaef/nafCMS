@extends('layout.master')
@section('content')
<h1 class="text-center">Gallery</h1>
<table class="table table-striped">
<thead>
 <tr>
      <th>Image</th>
      <th>Title</th>
      <th>Description</th>
      <th>Actions</th>
</tr>
</thead>
<tr>
@foreach($galleries as $gallery)
<tbody>
    <tr>
        <td><img src="uploads/gallery/thumbs/{{$gallery->image}}"   alt="heloo"> </td>
        <td>{{ $gallery->title }}</td>
        <td>{{ $gallery->description }}</td>
        <td>
        <a href="{{ route('gallery.edit', $gallery->slug) }}">Edit</a>
        <a href="{{ route('gallery.delete', $gallery->slug) }}">delete</a>
        </td>
      </tr>
      @endforeach
      </tr>
      </tbody>
</table>
@endsection