@extends('layout.master')

@section('content')
  <h3>All Roles</h3>
  <table>
    <tr>
      <th>Role Name</th>
      <th>Role Slug</th>
      <th>Role Description</th>
      <th>Actions</th>
    </tr>
    @foreach($roles as $role)
      <tr>
        <td>{{ $role->name }}</td>
        <td>{{ $role->slug }}</td>
        <td>{{ $role->description }}</td>
        <td>
          <a href="{{ route('role.edit', $role->slug) }}"> Edit Role</a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection