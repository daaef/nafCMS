@extends('layout.master')

@section('content')
  <h3>All News Categories</h3>
  <table>
    <tr>
      <th>News Category Name</th>
      <th>News Category Description</th>
      <th>News Category Slug</th>
      <th>Actions</th>
    </tr>

    @foreach($news_categories as $news_category)
      <tr>
        <td>{{ $news_category->name }}</td>
        <td>{{ $news_category->description }}</td>
        <td>{{ $news_category->slug }}</td>
        <td>
        <a href="{{ route('newsCategory.edit', $news_category->slug) }}"> Edit</a>
        <a href="{{ route('newsCategory.delete', $news_category->slug) }}"> Delete Menu</a>
        </td>
      </tr>
    @endforeach
   
  </table>
@endsection