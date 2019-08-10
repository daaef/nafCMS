@extends('layout.master')

@section('content')
  <h4>Editing {{ $role->name }}</h4>
  <form method="post" action="{{ route('role.update', $role->slug) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <label>Role name:</label> <br>
    <input type="text" name="name" value="{{ $role->name }}"> <br>
    <label>Description: </label> <br>
    <textarea name="description">{{ $role->description }}</textarea> <br>
    <button>Submit</button>
  </form>
@endsection