@extends('_layouts.master')

@section('title', 'Blog')

@section('content')
    <h3>Blog page</h3>
    @foreach ($posts as $post)
        <a href="{{ $post->getPath() }}">
            <h4>{{ $post->title }}</h4>
            <p>{{ date('M j, Y', $post->date) }}</p>
        </a>
    @endforeach
@endsection
