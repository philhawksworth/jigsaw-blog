@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    @if ($page->image)
        @hero([
            'title' => $page->title,
            'size' => 'medium',
            'centered' => true,
            'image' => "https://raniesantos.github.io/assets/img/post-img/{$page->image}",
        ])
        @endhero
    @endif

    <section class="section">
        <div class="container">

            <div class="columns is-centered">
                <div class="column is-9-widescreen is-10-desktop is-11-tablet">

                    <div class="post content" v-pre>
                        <header class="has-text-centered">
                            @if (!$page->image)
                                <h1>{{ $page->title }}</h1>
                            @endif
                            {{ date('F j, Y', $page->date) }}
                            <hr>
                        </header>

                        <post-warning date="{{ $page->date }}"></post-warning>

                        @yield('postContent')
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
