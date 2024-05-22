@extends('blog::layouts.master')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('blog.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" id="body" class="form-control" required>{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
