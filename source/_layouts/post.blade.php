@extends('_layouts.master')

@section('title', $page->title)

@section('hero')
    @if ($page->image)
        @hero([
            'title' => $page->title,
            'size' => 'medium',
            'centered' => true,
            'image' => $page->imageCdn("posts/{$page->image}"),
        ])
        @endhero
    @endif
@endsection

@section('content')
    <div class="columns is-centered">
        <div class="column is-9-widescreen is-10-desktop is-11-tablet">

            <div class="content" v-pre>
                <header class="post-header has-text-centered">
                    @if (!$page->image)
                        <h1>{{ $page->title }}</h1>
                    @endif
                    <span class="has-text-primary">
                        <icon>calendar-o</icon> {{ date('F j, Y', $page->date) }}
                        <icon>user-o</icon> {{ $page->owner->name }}
                    </span>
                </header>

                <post-warning date="{{ $page->date }}"></post-warning>

                <div class="post-body">
                    @yield('postContent')
                </div>
            </div>

            <div class="post-share">
                @include('_partials.share')
            </div>

            <div class="post-comments">
                @if ($page->comments)
                    <vue-disqus
                        shortname="{{ $page->site->disqusShortname }}"
                        url="{{ $page->getUrl() }}"
                        identifier="{{ $page->getFilename() }}"
                    ></vue-disqus>
                @else
                    <article class="message has-text-centered">
                        <div class="message-body">
                            <icon>ban</icon> Comments are not enabled for this post.
                        </div>
                    </article>
                @endif
            </div>

        </div>
    </div>
@endsection
