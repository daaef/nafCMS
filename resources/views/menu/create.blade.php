@extends('layout.master')
@section('content')
<form method="post" action="{{ route('menu.store') }}">
  {{ csrf_field() }}

  <label>Menu name:</label> <br>
  <input type="text" name="name"> <br>
  <button>Submit</button>
</form>

@endsection