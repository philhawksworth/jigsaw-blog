<div class="card">
    <header class="card-header">
        <p class="card-header-title">{{ $post->title }}</p>
    </header>
    <div class="card-content">{{ $post->excerpt(150) }}</div>
    <footer class="card-footer">
        <span class="card-footer-item">{{ date('M j, Y', $post->date) }}</span>
        <a href="{{ $post->getPath() }}" class="card-footer-item">
            <strong>Read more</strong>
        </a>
    </footer>
</div>
