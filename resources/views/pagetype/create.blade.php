@extends('layout.master')
@section('content')
<form method="post" action="{{ route('pageType.store') }}">
  {{ csrf_field() }}
  <label>Role name:</label> <br>
  <input type="text" name="title"> <br>
  <label>Description: </label> <br>
  <button>Submit</button>
</form>

@endsection