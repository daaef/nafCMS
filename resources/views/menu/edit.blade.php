@extends('layout.master')

@section('content')
  <h4>Editing {{ $menu->name }}</h4>
  <form method="post" action="{{ route('menu.update', $menu->slug) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <label>Menu name:</label> <br>
    <input type="text" name="name" value="{{ $menu->name }}"> <br>
    <button>Submit</button>
  </form>
@endsection