@extends('layout.master')
@section('content')
<form method="post" action="{{ route('role.store') }}">
  {{ csrf_field() }}
  <label>Role name:</label> <br>
  <input type="text" name="name"> <br>
  <label>Description: </label> <br>
  <textarea name="description"></textarea> <br>
  <button>Submit</button>
</form>

@endsection