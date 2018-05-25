@extends('_layouts.master')

@section('title', "Posts tagged '{$page->getFilename()}'")

@section('content')
    <h1 class="title has-text-centered">Posts tagged '{{ $page->getFilename() }}'</h1>

    <div class="columns is-centered">
        <div class="column is-8-tablet is-9-desktop">

            <div class="field">
                <a href="/blog" class="button">
                    <fa icon="angle-double-left"></fa>
                    <span>Blog index</span>
                </a>
            </div>

            @postlist(['posts' => $page->filterByTag($posts, $page->getFilename())])
            @endpostlist

        </div>
    </div>
@endsection
