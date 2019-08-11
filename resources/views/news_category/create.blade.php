@extends('layout.master')
@section('content')
<form method="post" action="">
  {{ csrf_field() }}

  <label>News Category name:</label> <br>
  <input type="text" name="name"> <br>
  <label>News Category name:</label> <br>
  <input type="text" name="description"> <br>
  <button>Submit</button>
</form>

@endsection