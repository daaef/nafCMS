@extends('layout.master')

@section('content')
  <h4>Editing {{ $pageType->title }}</h4>
  <form method="post" action="{{ route('pageType.update', $pageType->slug) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <label>Title:</label> <br>
    <input type="text" name="title" value="{{ $pageType->title }}"> <br>
    <button>Submit</button>
  </form>
@endsection