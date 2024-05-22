@extends('blog::layouts.master')

@section('content')
    <h1>Blog Posts</h1>
    <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Create New Post</a>
    @if($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <ul class="list-group">
            @foreach ($posts as $post)
                <li class="list-group-item">
                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                    <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-sm btn-secondary float-right">Edit</a>
                    <form action="{{ route('blog.destroy', $post->id) }}" method="POST" class="float-right mr-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
