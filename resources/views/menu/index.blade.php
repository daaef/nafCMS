@extends('layout.master')

@section('content')
  <h3>All Menus</h3>
  <table>
    <tr>
      <th>Menu Name</th>
      <th>Role Slug</th>
      <th>Actions</th>
    </tr>
    @foreach($menus as $menu)
      <tr>
        <td>{{ $menu->name }}</td>
        <td>{{ $menu->slug }}</td>
        <td>
          <a href="{{ route('menu.edit', $menu->slug) }}"> Edit Menu</a>
          <a href="{{ route('menu.delete', $menu->slug) }}"> Delete Menu</a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection