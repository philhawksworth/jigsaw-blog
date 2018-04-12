<section
    class="hero
        {{ isset($size) ? " is-{$size}" : '' }}
        {{ isset($type) ? " is-{$type}" : '' }}
        {{ isset($image) ? ' hero-image' : '' }}
        {{ isset($image) && $title ? ' overlay-dark' : '' }}
    "
    {!! isset($image) ? ' style="background-image: url(' . $image . ');"' : '' !!}
>
    <div class="hero-body{{ isset($centered) ? ' has-text-centered' : '' }}">
        <div class="container">
            <h1 class="title">{{ $title }}</h1>
            @if (isset($subtitle))
                <h2 class="subtitle">{{ $subtitle }}</h2>
            @endif
        </div>
    </div>
</section>
