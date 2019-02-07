@extends('layout.app')

@section('content')
    <h1>This is news create page</h1>
    <form action="{{ route('news.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
      </div>
      <div class="form-group">
        <label for="content">Password:</label>
        <input type="text" class="form-control" id="content" placeholder="Enter content" name="content">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
