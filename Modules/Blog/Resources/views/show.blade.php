@extends('blog::layouts.master')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('blog.index') }}" class="btn btn-secondary">Back to Blog</a>
@endsection
