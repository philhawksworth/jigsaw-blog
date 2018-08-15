<footer class="footer is-primary">
    <div class="container has-text-centered">
        <div class="columns">
            <div class="column is-9 has-text-left-tablet">
                <p>All content copyright {{ $page->owner->name }} &copy; <span v-text="currentYear"></span>. All rights reserved.</p>
                <p>Built with Jigsaw, hosted on Netlify.</p>
            </div>
            <div class="column is-3 has-text-right-tablet">
                <a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">
                    <icon stack="square" icon-class="has-text-primary" stack-class="has-text-white">twitter</icon>
                </a>
                <a href="https://github.com/{{ $page->owner->github }}" target="_blank">
                    <icon stack="square" icon-class="has-text-primary" stack-class="has-text-white">github</icon>
                </a>
                <a href="https://gitlab.com/{{ $page->owner->gitlab }}" target="_blank">
                    <icon stack="square" icon-class="has-text-primary" stack-class="has-text-white">gitlab</icon>
                </a>
            </div>
        </div>
    </div>
</footer>
