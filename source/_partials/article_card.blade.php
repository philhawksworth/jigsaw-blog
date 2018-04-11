<div class="card is-fullheight">
    <header class="card-header">
        <p class="card-header-title">{{ $post->title }}</p>
    </header>
    <div class="card-content">
        <small>{{ $post->excerpt(200) }}</small>
    </div>
    <footer class="card-footer">
        <span class="card-footer-item">
            {{ date('M j, Y', $post->date) }}
        </span>
        <span class="card-footer-item">
            <a href="{{ $post->getPath() }}" class="button is-primary">
                <fa icon="angle-double-right"></fa>
                <span>Read more</span>
            </a>
        </span>
    </footer>
</div>
