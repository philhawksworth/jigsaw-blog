@extends('_layouts.master')

@section('title', "Posts tagged '{$page->getFilename()}'")

@section('content')
    <section class="section">
        <div class="container">

            <h1 class="title has-text-centered">Posts tagged '{{ $page->getFilename() }}'</h1>

            <div class="columns is-centered">
                <div class="column is-8-tablet is-9-desktop">

                    @postlist(['posts' => $page->filterByTag($posts, $page->getFilename())])
                    @endpostlist

                </div>
            </div>

        </div>
    </section>
@endsection
