@extends('layout.master')

@section('content')
  <h3>All Page Types</h3>
  <table>
    <tr>
      <th>Type Name</th>
      <th>Slug</th>
      <th>Actions</th>
    </tr>
    @foreach($pageTypes as $pageType)
      <tr>
        <td>{{ $pageType->title }}</td>
        <td>{{ $pageType->slug }}</td>
        <td>
          <a href="{{ route('pageType.edit', $pageType->slug) }}"> Edit Role</a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection