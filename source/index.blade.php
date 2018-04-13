@extends('_layouts.master')

@section('content')
    @hero([
        'title' => 'Large Shovel',
        'size' => 'medium',
        'centered' => true,
        'image' => 'https://raniesantos.github.io/assets/img/code.jpg',
    ])
    @endhero

    <section class="section">
        <div class="container">

            <h2 class="subtitle has-text-centered">Blog entries</h2>

            <div class="columns is-multiline">
                @foreach ($posts->take(6) as $post)
                    <div class="column is-4-widescreen is-6-tablet">
                        @include('_partials.article_card')
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
