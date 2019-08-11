@extends('layout.master')

@section('content')
  <h4>Editing {{ $news_category->name }}</h4>
  <form method="post" action="{{ route('newsCategory.update', $news_category->slug)}}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <label>News Category name:</label> <br>
    <input type="text" name="name" value="{{ $news_category->name }}"> <br>
    <input type="text" name="description" value="{{ $news_category->description }}"> <br>
    <button>Submit</button>
  </form>
@endsection