@extends('layout.master')

@section('content')
  <h1>Welcome {{ Sentinel::getUser()->first_name }}</h1>
@endsection
