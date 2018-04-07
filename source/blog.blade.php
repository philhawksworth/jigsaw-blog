@extends('_layouts.master')

@section('title', 'Blog')

@section('content')
    <section class="section">
        <div class="container">

            <h1 class="title has-text-centered">Blog page</h1>
            @foreach ($posts as $post)
                <a href="{{ $post->getPath() }}">
                    <h4>{{ $post->title }}</h4>
                    <p>{{ date('M j, Y', $post->date) }}</p>
                </a>
            @endforeach

        </div>
    </section>
@endsection
