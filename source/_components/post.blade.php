<div class="box is-fullheight">
    <a href="{{ $post->getPath() }}">
        {{ $post->title }}
    </a>
    <small class="has-text-primary">
        {{ date('M j, Y', $post->date) }}
    </small>
</div>
