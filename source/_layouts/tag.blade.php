@extends('_layouts.master')

@section('title', "Posts tagged '{$page->getFilename()}'")

@section('content')
    <section class="section">
        <div class="container">

            <h1 class="title has-text-centered">Posts tagged '{{ $page->getFilename() }}'</h1>

            @foreach ($page->filterByTag($posts, $page->getFilename()) as $post)
                @post(compact('post'))@endpost
            @endforeach

        </div>
    </section>
@endsection
