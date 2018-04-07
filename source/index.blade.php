@extends('_layouts.master')

@section('content')
    <section class="hero hero-image overlay-dark is-medium"
        style="background-image: url(https://raniesantos.github.io/assets/img/code.jpg);"
    >
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title">Title</h1>
                <h2 class="subtitle">Subtitle</h2>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">

            <h2 class="subtitle has-text-centered">Heading</h2>
            @foreach ($posts->take(4) as $post)
                <a href="{{ $post->getPath() }}">
                    <h4>{{ $post->title }}</h4>
                    <p>{{ date('M j, Y', $post->date) }}</p>
                </a>
            @endforeach

        </div>
    </section>
@endsection
