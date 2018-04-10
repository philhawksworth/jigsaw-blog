@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    @if ($page->image)
        <section class="hero hero-image overlay-dark is-medium"
            style="background-image: url(https://raniesantos.github.io/assets/img/post-img/{{ $page->image }});"
        >
            <div class="hero-body has-text-centered">
                <div class="container">
                    <h1 class="title">{{ $page->title }}</h1>
                </div>
            </div>
        </section>
    @endif

    <section class="section">
        <div class="container">

            <div class="columns content" v-pre>
                <div class="column is-10 is-offset-1">
                    <header class="has-text-centered">
                        @if (!$page->image)
                            <h1>{{ $page->title }}</h1>
                        @endif
                        {{ date('F j, Y', $page->date) }}
                        <hr>
                    </header>

                    @yield('postContent')
                </div>
            </div>

        </div>
    </section>
@endsection
