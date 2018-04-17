<div class="box is-fullheight">
    <a href="{{ $post->getPath() }}">
        <h6>{{ $post->title }}</h6>
    </a>
    <small class="has-text-primary">
        <fa icon="calendar-o"></fa>
        {{ date('M j, Y', $post->date) }}
    </small>
</div>
