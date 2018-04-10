@extends('_layouts.master')

@section('content')
    <section class="hero hero-image overlay-dark is-medium"
        style="background-image: url(https://raniesantos.github.io/assets/img/code.jpg);"
    >
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title">Large Shovel</h1>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <h2 class="subtitle has-text-centered">Blog entries</h2>

            <div class="columns is-multiline">
                @foreach ($posts->take(6) as $post)
                    <div class="column is-4-widescreen is-6-desktop is-6-tablet">
                        @articleCard(compact('post'))@endarticleCard
                    </div>
                @endforeach
            </div>

            <div class="has-text-centered">
                <a href="/blog" class="button is-text">
                    View more posts
                </a>
            </div>

        </div>
    </section>
@endsection
