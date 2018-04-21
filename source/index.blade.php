@extends('_layouts.master')

@section('content')
    @hero([
        'title' => 'Anecdotes of an Artisan',
        'size' => 'medium',
        'centered' => true,
        'image' => $page->cdnPath('code.jpg'),
    ])
    @endhero

    <section class="section">
        <div class="container">

            <h2 class="subtitle has-text-centered">Blog entries</h2>

            <div class="columns is-multiline">
                @foreach ($posts->take(6) as $post)
                    <div class="column is-4-widescreen is-6-tablet">

                        @card(['title' => $post->title])
                            <small>{!! $post->excerpt(200) !!}</small>

                            @slot('footer')
                                <span class="card-footer-item">
                                    {{ date('M j, Y', $post->date) }}
                                </span>
                                <span class="card-footer-item">
                                    <a href="{{ $post->getPath() }}" class="button is-primary">
                                        <fa icon="angle-double-right"></fa>
                                        <span>Read more</span>
                                    </a>
                                </span>
                            @endslot
                        @endcard

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
