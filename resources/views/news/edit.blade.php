@extends('layouts.app')

@section('content')
    <h1>This is news edit page</h1>
    <form action="{{ route('news.update', ['news' => $news]) }}" method="POST">
      @csrf
      {{ method_field('PUT') }}

      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $news->title }}">
      </div>
      <div class="form-group">
        <label for="content">Content:</label>
        <input type="text" class="form-control" id="content" placeholder="Enter content" name="content" value="{{ $news->content }}">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
