@extends('layout.master')

@section('content')
<h1 class="text-center">All Settings</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Site logo</th>
      <th scope="col">site title</th>
      <th scope="col">site description</th>
      <th scope="col">footer copywrite</th>
      <th scope="col">footer facebook</th>
      <th scope="col">footer twitter</th>
      <th scope="col">footer instagram</th>
    </tr>
  </thead>
    <tr>
    @foreach($settings as $setting)
      <tr>
        <td><img src="uploads/logos/{{$setting->site_logo}}" width="100px" heigth="100x" alt="heloo"> </td>
        <td>{{ $setting->site_title }}</td>
        <td>{{ $setting->site_description }}</td>
        <td>{{ $setting->footer_copywrite }}</td>
        <td>{{ $setting->footer_facebook }}</td>
        <td>{{ $setting->footer_twitter }}</td>
        <td>{{ $setting->footer_instagram }}</td>
        <td>
          <a href="{{ route('setting.edit', $setting->id) }}"> Edit </a>
          <a href="{{ route('setting.delete', $setting->id) }}"> Delete </a>
        </td>
      </tr>
    @endforeach
    </tr>
  </tbody>
</table>
@stop