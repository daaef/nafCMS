@extends('layouts.app');

@section('content')
<h1 class="text-center">All Sliders</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">slider Image</th>
      <th scope="col">slider title</th>
      <th scope="col">slider description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tr>
    @foreach($sliders as $slider)
      <tr>
        <td><img src="uploads/sliders/{{$slider->slider_image}}" width="100px" heigth="100x" alt="heloo"> </td>
        <td>{{ $slider->title }}</td>
        <td>{{ $slider->description }}</td>
        <td>
          <a href="{{ route('slider.edit', $slider->slug) }}"> Edit </a>
          <a href="{{ route('slider.delete', $slider->slug) }}"> Delete </a>
        </td>
      </tr>
    @endforeach
    </tr>
  </tbody>
</table>
@stop