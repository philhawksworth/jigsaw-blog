@extends('_layouts.master')

@section('title', 'Blog')

@section('content')
    <section class="section">
        <div class="container">

            <h1 class="title has-text-centered">Blog</h1>

            <div class="columns">
                <div class="column is-4-tablet is-3-desktop">

                    <div class="box">
                        <h2 class="subtitle">Tags</h2>
                        <div class="tags">
                            @foreach ($page->allTags($posts) as $tag)
                                <a href="/blog/tags/{{ $tag }}" class="tag is-primary">
                                    {{ $tag }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="column">

                    <div class="columns is-multiline">
                        @foreach ($posts as $post)
                            <div class="column is-6">
                                @post(compact('post'))@endpost
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
